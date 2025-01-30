1. intalar git
2. instalar composer en modo administrador
3. instalar node js
4. levantar el xamp - apache mysql
5. habilitar la extension zip en el php .ini
6. ejectuamos este comando en modo administrador # Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
7. composer global require laravel/installer
8. copiar nuestro proyecto a la carpeta c.\xamp\htdos\blog
9. abrir el proyecto con el phpstorm 

<if se copio el proyecto desde el USB>
    10. composer run dev 

<if se clono desde el githu>
10 . git clone <<<<<-------->>>>>
11. composer install
12. npm install 
13 npm run build
13 copiar el .env.example a un nuevo archivo .env
14. configurar la conexion a BBDD
15. php artisan key:generate
16. composer run dev
    
11. crear la base de datos proyecto en phpmyAdmin
12. php artisan migrate:fresh --seed
13. localhost/blog/public