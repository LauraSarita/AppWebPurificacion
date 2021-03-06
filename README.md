# AppWebPurificacion

_El proyecto va dirigido a los usuarios de hospitales para pedir una cita medica de una forma rapida y confiable._



## Para implementar la aplicacion en el hospital es necesario:


```
 1. Instalar Vagrant 
 2. Instalar VirtualBox
 3. Instalar GIT
```

## Pasos

* El primer paso es abrir el **Bash** del computador, ubicarse en la carpeta donde se encuente el archivo **VagrantFile** , utiliza el comando: 

```
 Vagrant Up
```

_La aplicacion se instalara en el computador._

* La aplicacion de citas medicas modo **Vista usuario** es necesario ingresar la direccion IP: `"http://192.168.33.10/EA/"` en el navegador.


![opera instantanea_2018-10-05_082706_appcitasmedicas herokuapp com](https://user-images.githubusercontent.com/18336182/46538163-d467c000-c878-11e8-98e7-eac42dc7fbc3.png)



* Para ingresar al portal como  **Administrador** se debe ingresar por la direccion: `"http://192.168.33.10/EA/index.php/user/login"`   la cual le pedira un usuario y contraseña. 

> Usuario: admin 

> Contraseña: hospital2018


![admin](https://user-images.githubusercontent.com/18336182/46538573-f9106780-c879-11e8-8c1b-7a5b2e563217.png)



* Finalmente para ingresar a **PhpMyAdmin** es con la direccion IP : `"http://192.168.33.10:80/phpmyadmin/"` es necesario , agregar la base de datos de la aplicacion web. 

> La configuracion del usuario y la contrasena de PhpMyAdmin. Por defecto es *root/root.*


* Apagar la maquina virtual utiliza el comando:

```
 Vagrant Halt
```


## Construido con


* [EasyAppoiment](http://easyappointments.org) - El framework web usado
* [Apache](http://httpd.apache.org) - Servidor web HTTP.



## Archivos que se recomiendan


```
 1. Leer el Manual de Uso
 2. Ver el video AplicacionCitas
```


## Autores


* **Laura Sarita Gallego Martinez** - *Trabajo Inicial* - [GitHub](https://github.com/LauraSarita)









