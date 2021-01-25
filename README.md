# fei2020

Bienvenidos al Gestor de Personajes y Campaña de Dungeon and Dragons realizado por Martinez Andrés y Fidel Entraigas

En este sistema el usuario podra armar una cuenta, adonde podra crear y gestionar, los personajes con sus distintas caracteristicas, asi tambien como su equipamiento y su diario. Del mismo modo podran crear sus propias campañas, vincular personajes y mantener un diario de campaña.

Instalación:

1- Clonar el proyecto desde el repositorio con el comando.
git clone https://github.com/andres085/fei2020.git

2- Ir a la carpeta del proyecto con el comando.
cd fei2020

3- En la carpeta del proyecto ejecutar el siguiente comando.
docker-compose up -d

4- En la carpeta del proyecto ejecutar el comando. sh bin/first-start.sh


Para migrar los datos base de la pagina

1- Acceder al contenedor con el comando. docker-compose exec app bash

2- Una vez dentro ejecutar. mysql -u root -p${DB_PASSWORD} ${DB_DATABASE} -h${DB_HOST} < fei2020.sql


Para acceder a la web

Ingresar en el navegador. http://localhost:8000/

Para acceder a phpmyadmin. http://localhost:8001/
