<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
Versions: 6.5.2
</p>

## About Application

This is Simple Blog application with Administrator and Subscriber role users and dashboard, Developed using Laravel v6.5.2.

- Admin Login/Registration/Forgetpassword Module
- News Management Module
- Page Management Module
- Menu Manamgement Module
- Log Mangement Module
- Backup Management Module
- Setting Management Module
- User Management Module
- Media Management Module

## Installation Procedure

Pull Latest code: 

`https://github.com/lpkapil/laraveladministrator.git`

- Create Virtual Host & Host Entry in apache configuration and host file and restart apache server

```
<VirtualHost *:80>
        ServerAdmin webmaster@example.com
        ServerName laravellocal.com
        ServerAlias laravellocal.com
        DocumentRoot /var/www/html/laraveladministrator/public/
        <Directory /var/www/html/laraveladministrator>
                AllowOverride all
                Require all granted
        </Directory>
</VirtualHost>
```

`127.0.0.1 laravellocal.com`

`service apache2 restart`

- Run below command after navigating to application root for refreshing application key & installing database

`php artisan key:generate`

`php artisan migrate:refresh --seed`

- Open application using URL

`http://laravellocal.com`

#### Administrator Login/Registration #### 

On localhost only admin can register.

Register: http://laravellocal.com/admin/register
Login: http://laravellocal.com/admin/login


## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.
