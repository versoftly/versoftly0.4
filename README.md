# versoftly0.4


<a href="https://www.versoftly.com">versoftly - 0.4</a>
<br><br><br>
<a href="http://versoftlyfpf.lcl">versoftly - 0.4 - localhost - url</a>

<h2>Crear el VirtualHost Para trabajar con La version en local versoftly 0.4</h2>

<p>
    Una vez que ya tengamos el servidor local jalando
    entonces procedemos a crear la carpeta para 
    el proyecto versoftlyfpf
</p>

<h2>Ingresa los siguientes comando para crear el virtual host</h2>

<p>
    Creamos la carpeta :\$ sudo mkdir -p /var/www/versoftlyfpf<br>
    Le damos permisos :\$ sudo chown -R $USER:$USER /var/www/versoftlyfpf<br>
    Le damos permisos a la carpeta www :\$ sudo chmod -R 755 /var/www<br>
    Nos dirigimos a la carpeta versoftlyfpf y clonamos el repositorio ah&iacute;<br>
    Creamos el archivo de configuracion :\$
    sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/versoftlyfpf.conf<br>
    Abrimos el editor de codigo :\$
    sudo nano /etc/apache2/sites-available/versoftlyfpf.conf<br><br>
    Escribimos en el interior del archivo lo sigiente :<br><br>
    <pre>
        &lt;VirtualHost *:80&gt;
            ServerName  versoftlyfpf.lcl
            ServerAlias www.versoftlyfpf.lcl
            DocumentRoot /var/www/versoftlyfpf
        <&lt;/VirtualHost&gt;
    </pre><br><br>
    Activamos el virtualhosts :\$ sudo a2ensite versoftlyfpf.conf<br>
    Desactivamos la configuracion por default :\$ sudo a2dissite 000-default.conf<br>
    Recargamos el servidor web :\$ systemctl reload apache2<br>
    Checamos que todo este bien :\$ sudo apache2ctl configtest<br>
    Reiniciamos el servidor web :\sudo systemctl restart apache2<br>
    Checamos el status :\$ sudo systemctl status apache2<br>
    Y finalmente abrimos el archivo hosts :\$ sudo nano /etc/hosts<br>
    Y escribimos en su interior lo siguiente al final de la lista de ips :<br>
    127.0.1.1 versoftlyfpf.lcl
</p>

