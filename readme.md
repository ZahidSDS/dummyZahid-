# This project is client list, lookup, membership and 30 days expire notice, project orginally modified from github SportsLeague-QuickAdminPanel project
# Laravel 5.4 based system 

## Admin login

- __Email__: admin@admin.com
- __Pass__: password

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run following command to upload database from your terminal inside ClientLookup folder
    # mysql -u homestead -psecret ClientLookup < dumpClientLookup.sql (please change the username and password according to your mysql login)
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL or go to __/login__ and login with default credentials __admin@admin.com__ - __password__

## License

Basically, feel free to use.

---

