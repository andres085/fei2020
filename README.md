
<h1 id="pagina-para-gestión-de-recursos-de-d--d">Pagina para gestión de recursos de D &amp; D</h1>
<p>Bienvenidos al Gestor de Personajes y Campaña de Dungeon and Dragons realizado por Martinez Andrés y Fidel Entraigas</p>
<p>En este sistema el usuario podrá armar una cuenta, para así poder crear y gestionar sus personajes con sus distintas características, así también como su equipamiento y su diario. Del mismo modo se podrán crear sus propias campañas, vincular personajes y mantener un diario de campaña.</p>
<h2 id="instalación"><strong>Instalación:</strong></h2>
<p>1- Clonar el proyecto desde el repositorio con el comando.</p>
<pre><code>git clone https://github.com/andres085/fei2020.git
</code></pre>
<p>2- Ir a la carpeta del proyecto con el comando.</p>
<pre><code>cd fei2020
</code></pre>
<p>3- En la carpeta del proyecto ejecutar el siguiente comando.</p>
<pre><code>docker-compose up -d
</code></pre>
<p>4- En la carpeta del proyecto ejecutar el comando.</p>
<pre><code>sh bin/first-start.sh
</code></pre>
<p><strong>Para migrar los datos base de la pagina</strong></p>
<p>1- Acceder al contenedor con el comando.</p>
<pre><code>docker-compose exec app bash
</code></pre>
<p>2- Una vez dentro ejecutar.</p>
<pre><code>mysql -u root -p${DB_PASSWORD} ${DB_DATABASE} -h${DB_HOST} &lt; fei2020.sql
</code></pre>
<p><strong>Para acceder a la web</strong></p>
<p>Ingresar en el navegador. <a href="http://localhost:8000/">http://localhost:8000/</a></p>
<p>Para acceder a phpmyadmin. <a href="http://localhost:8001/">http://localhost:8001/</a></p>

