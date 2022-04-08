# Prérequis
1. PHP 7.4
2. Composer
3. node (npm ou yarn)
4. Mysql
# installation
1. clone la projet  taper la commande suivants :
    ```bash
    $ git clone https://github.com/faby-dev/fe-commerce.git
    ```

2. Avoire tout le bundle :
    ```bash
    $ composer install
    ```

3. Avoire touts les package js :
    ```bash
    $ npm install ou yarn install
    ```
4. Configure la base de donnée modifier la ligne suivante:
    ```bash
    .env DB_CONNECTION
    ```
5. Créez la base de donnée tape cette ligne de commande:
    ```bash
    $ php artisan db:create
    ```
6.  Recevoire un faux donner dans la base de donnée: 
    ```bash
    $ php artisan db:seed
    ```

7. Avoire tout les tables tape cetteligne de commande:
    ```bash
    $ php artisan migrate
    ```

8. Compiler la Tout le fiche js et css : 
    ```bash
    $ npm run dev
    ```

9. Lanche la Server php : 
    ```bash
    $ php artisan serve
    ```
10. Accédez a la back office Administrateur:
    ```bash
    email: admin@admin.net
    password: admin
    ```
    
