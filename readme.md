This project is client list, lookup, membership and 30 days expire notice 

## Admin login

- __Email__: admin@admin.com
- __Pass__: password

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run 
     __mysql -u homestead -psecret ClientLookup < dumpClientLookup.sql__ 

this command will create table with dummy data; change database name and mysql credential   according to your mysql setup

- That's it: launch the main URL or go to __/login__ and login with default credentials __admin@admin.com__ - __password__



NB: All frontend, functional, functionality, controller, model and database structure completely new design and all code written by me and this readme :) as well. I just download the framework and inspire by GitHub SportsLeague-QuickAdminPanel project.

---

