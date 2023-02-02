## Instalación

Sigue los siguientes pasos para correr el proyecto en tu máquina local.

**Paso 1.** Descargar y clonar el repositorio en la rama _develop_.

```bash
git clone git@github.com:soyFelixBarros/challenge
```

**Paso 2.** Copiar archivo de configuración: _cp .env.example .env_.

**Paso 3.** Crear y correr los contenedores: _docker-compose up -d_.

**Paso 4.** Editar el archivo hosts (/etc/hosts) de tu sistema operativo y agregar el siguiente hostname:

```
127.0.0.1	challenge.vm
```

**Paso 5.** Entrar al contenedor, instalar las dependencias, generar la key y limpiar el cache:

```bash
docker exec -it challenge /bin/bash
composer install
php artisan migrate:fresh --seed
./clear-cache.sh
```

**Paso 6.** Ejecutamos los tests dentro del contenedor:

```bash
./test.sh SimulateTest
```

**Listo.** Ahora puedes ingresar desde tu navegador [http://challenge.vm](http://challenge.vm).
