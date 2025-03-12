@echo off
if "%1"=="-f" (

    echo Levantando la base de datos por primera vez...

    docker build -t mysql-prueba .

    echo Creada la imagen, ahora el contenedor...

    docker run -d --name prueba -p 3306:3306 mysql-prueba

    echo Creado el contenedor, listo para usar :D

) else if "%1"=="-d" (

    echo Borrando el contenedor y la imagen...

    docker stop prueba

    docker rm prueba

    docker rmi mysql-prueba

    echo Se ha borrado el contenedor y la imagen :D

) else (
    echo Levantando el contenedor...

    docker start prueba

    echo Listo para usar :D
)

