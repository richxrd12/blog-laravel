import http from 'k6/http';
import { check, group, sleep } from 'k6';

function encodeForm(data) {
  return Object.keys(data)
    .map(key => encodeURIComponent(key) + '=' + encodeURIComponent(data[key]))
    .join('&');
}

export let options = {
  vus: 10,           
  duration: '12s',  
};

export default function () {
  let jar = http.cookieJar();
  let headers = { 'Content-Type': 'application/x-www-form-urlencoded' };

  let randomSuffix = Math.floor(Math.random() * 100000);
  let email = `user${randomSuffix}@example.com`;
  let postId = null;

  group('User Registration and Login', () => {
    let csrfRes = http.get('http://127.0.0.1:8000/register');
    let csrfToken = csrfRes.html().find('input[name="_token"]').attr('value');

    if (!csrfToken) {
      console.error('No se encontró el token CSRF');
      return;
    }

    let payloadReg = encodeForm({
      _token: csrfToken,
      name: `Test User ${randomSuffix}`,
      email: email,
      password: 'Contraseña1',
      password_confirmation: 'Contraseña1'
    });

    let resReg = http.post('http://127.0.0.1:8000/register', payloadReg, { headers, jar });
    check(resReg, { 'Registration successful': (r) => r.status === 200 || r.status === 302 });
    sleep(1);

    let csrfLoginRes = http.get('http://127.0.0.1:8000/login');
    let csrfLoginToken = csrfLoginRes.html().find('input[name="_token"]').attr('value');

    if (!csrfLoginToken) {
      console.error('No se encontró el token CSRF para login');
      return;
    }

    let payloadLogin = encodeForm({
      _token: csrfLoginToken,
      email: email,
      password: 'Contraseña1'
    });

    let resLogin = http.post('http://127.0.0.1:8000/login', payloadLogin, { headers, jar });
    check(resLogin, { 'Login successful': (r) => r.status === 200 || r.status === 302 });
    sleep(1);
  });

  group('Create Post and Get ID', () => {
    let csrfPostRes = http.get('http://127.0.0.1:8000/add', { jar });
    let csrfPostToken = csrfPostRes.html().find('input[name="_token"]').attr('value');

    if (!csrfPostToken) {
      console.error('No se encontró el token CSRF para la creación del blog');
      return;
    }

    let postPayload = encodeForm({
      _token: csrfPostToken,
      title: `Test Blog ${Date.now()}`,
      text: 'Contenido de prueba'
    });

    let resCreate = http.post('http://127.0.0.1:8000/blog/add', postPayload, { headers, jar });
    check(resCreate, { 'Blog created successfully': (r) => r.status === 200 || r.status === 302 });

    sleep(1);
  });

  group('Get Last Blog Post', () => {
    let resPosts = http.get('http://127.0.0.1:8000/blogs', { jar });

    let posts = resPosts.json();
    let userBlogs = posts.filter(post => post.title.includes(`Test Blog`)); // Solo blogs de la prueba actual

    if (userBlogs.length > 0) {
        postId = userBlogs[0].id; // Último blog del usuario actual
    }

    if (!postId) {
        console.error('No se pudo obtener un blog válido para eliminar');
        return;
    }

    console.log(`Último blog del usuario, ID: ${postId}`);
    sleep(1);
});


  group('Delete Last Blog Post', () => {
    if (!postId) {
        console.error('No hay un ID de blog válido para eliminar');
        return;
    }

    let resCheck = http.get(`http://127.0.0.1:8000/blogs`, { jar });
    let existingPosts = resCheck.json();
    let exists = existingPosts.some(post => post.id === postId);

    if (!exists) {
        console.warn(`El blog con ID ${postId} ya no existe, saltando eliminación.`);
        return;
    }

    let csrfDeleteRes = http.get(`http://127.0.0.1:8000/blog/${postId}`, { jar });
    let csrfDeleteToken = csrfDeleteRes.html().find('input[name="_token"]').attr('value');

    if (!csrfDeleteToken) {
      console.error('No se encontró el token CSRF para eliminar el blog');
      return;
    }

    let deletePayload = encodeForm({
      _token: csrfDeleteToken,
      _method: 'DELETE'
    });

    let resDelete = http.post(`http://127.0.0.1:8000/blog/${postId}`, deletePayload, { headers, jar });
    check(resDelete, { 'Blog deleted successfully': (r) => r.status === 200 || r.status === 302 });

    console.log(`Blog con ID ${postId} eliminado`);
    sleep(1);
  });

}