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
    Creamos la carpeta :
    <pre>\$ sudo mkdir -p /var/www/versoftlyfpf</pre><br>
    Le damos permisos :
    <pre>\$ sudo chown -R $USER:$USER /var/www/versoftlyfpf</pre><br>
    Le damos permisos a la carpeta www :
    <pre>\$ sudo chmod -R 755 /var/www</pre><br>
    Nos dirigimos a la carpeta versoftlyfpf y clonamos el repositorio ah&iacute;<br>
    Creamos el archivo de configuracion :\$
    <pre>
    sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/versoftlyfpf.conf
    </pre><br>
    Abrimos el editor de codigo :\$
    <pre>sudo nano /etc/apache2/sites-available/versoftlyfpf.conf</pre><br><br>
    Escribimos en el interior del archivo lo siguiente :<br><br>
    <pre>
        &lt;VirtualHost *:80&gt;
            ServerName  versoftlyfpf.lcl
            ServerAlias www.versoftlyfpf.lcl
            DocumentRoot /var/www/versoftlyfpf
        <&lt;/VirtualHost&gt;
    </pre><br><br>
    Activamos el virtualhost :<pre>\$ sudo a2ensite versoftlyfpf.conf</pre><br>
    Desactivamos la configuracion por default :<pre>\$ sudo a2dissite 000-default.conf</pre><br>
    Recargamos el servidor web :<pre>\$ systemctl reload apache2</pre><br>
    Checamos que todo este bien :<pre>\$ sudo apache2ctl configtest</pre><br>
    Reiniciamos el servidor web :<pre>\$ sudo systemctl restart apache2</pre><br>
    Checamos el status :<pre>\$ sudo systemctl status apache2</pre><br>
    Y finalmente abrimos el archivo hosts :<pre>\$ sudo nano /etc/hosts</pre><br>
    Y escribimos en su interior lo siguiente al final de la lista de ips :<br>
    <pre>127.0.1.1 versoftlyfpf.lcl</pre>
</p>

