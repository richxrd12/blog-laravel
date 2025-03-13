FROM --platform=linux/amd64 dunglas/frankenphp:static-builder

# Install dependencies
RUN apk add --no-cache icu-dev libxml2-dev

# Set working directory
WORKDIR /go/src/app/dist/app

# Copy project files
COPY . .

# Remove unneeded files (optional)
RUN rm -Rf tests/

# Copy and update environment file
RUN cp .env.example .env && \
    sed -i'' -e 's/^APP_ENV=.*/APP_ENV=production/' -e 's/^APP_DEBUG=.*/APP_DEBUG=false/' .env

# Install Laravel dependencies
RUN composer install --ignore-platform-reqs --no-dev --optimize-autoloader

# Set up LDFLAGS and CFLAGS to ensure ICU and libxml2 linking
ENV LDFLAGS="-L/usr/lib -licuuc -licui18n -licudata -lxml2"
ENV CFLAGS="-fPIC"

# Build the static binary
WORKDIR /go/src/app/
RUN EMBED=dist/app PHP_VERSION=8.3.15 PHP_EXTENSIONS=apcu,bcmath,calendar,ctype,curl,dom,exif,fileinfo,filter,gd,iconv,intl,mbregex,mbstring,mysqlnd,opcache,openssl,pcntl,pdo,pdo_mysql,phar,posix,readline,redis,session,sockets,sodium,sqlite3,ssh2,tokenizer,uuid,xml,xsl,yaml,zip,zlib,zstd PHP_EXTENSION_LIBS=bzip2,freetype,libavif,libjpeg,liblz4,libwebp,libzip,curl,icu,libiconv,libpng,libsodium,libxml2,openssl,postgresql,readline,zlib,zstd,onig,libxslt,libssh2,nghttp2 ./build-static.sh