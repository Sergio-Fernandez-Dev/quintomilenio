# Consultorio Quinto Milenio

El Consultorio Quinto Milenio es un proyecto diseñado por el equipo The Crazy House Team durante el bootcamp Factoria F5

## Descripción

La aplicación es una app interna para un consultorio paranormal. Esta app solamente será utilizada por el personal interno del consultorio y por lo tanto carece de sistema de login y/o autenticación.

## Instalación

1º Desde MySQL debemos ejecutar o importar el archivo "database.sql".

2º Dentro del servidor Apache, clonaremos el repositorio mediante el comando:
```
git clone https://github.com/Sergio-Fernandez-Dev/quintomilenio/
```

3º Instalamos las dependencias:
```
composer install
```
```
npm install
```
## Ejecución

Iniciamos el servidor apache y escribimos el siguiente comandoÑ

```
npm run dev
```

## Funcionamiento

Al cargar por primera vez la app, no tendremos ninguna cosulta creada y por lo tando debemos pulsar el botón de "CREAR CITA"

![cita](/src/assets/img/crearCita.png)

A continuación rellenamos los campos del siguiente formulario:

![formulario](/src/assets/img/formulario.png)

Cada tarjeta que nos aparece, dispone de dos botones. Uno para editar y otro para eliminar.

![tarjeta](/src/assets/img/tarjeta.png)

Cuando disponemos de varias consultas, la app en formato desktop se vería así:

![desktop](/src/assets/img/desktop.png)

Y en formato movil así:

![movil](/src/assets/img/movil.png)

## Stack

- **Frontend:**
  - HTML 
  - CSS 
  - Bootstrap 
  - Javascript

- **Backend:**
  - PHP

- **Base de datos:**
  - Mysql


## Metodología de trabajo

-   Agile
-   Scrum
-   Pair programming

# Equipo de Desarrollo

- Mario Jifer
- Mario Rubio
- Taoufik Mensi
- Beatriz Trabanco (Product Owner)
- Silvia Sánchez (Scrum Master)
- Sergio Fernández



