# Prérequis
1. PHP 7.4
2. Composer
3. node (npm ou yarn)
4. Mysql
# Installation:
1. clone la projet  taper la commande suivants :
    ```bash
    git clone https://github.com/faby-dev/fe-commerce.git
    ```
2. Avoire tout le bundle :
    ```bash
    cd fe-commerce
    ```
2. Avoire tout le bundle :
    ```bash
    php artisan key:generate --ansi
    ```

3. Avoire tout le bundle :
    ```bash
    composer install
    ```

4. Avoire touts les package js :
    ```bash
    npm install ou yarn install
    ```
    
5. Configure la base de donnée  copiez la fiche env.exemple et renome en .env la copie modifier cette:
    ```bash
      .env DB_CONNECTION
    ```
6. Créez la base de donnée tape cette ligne de commande:
    ```bash
    php artisan db:create
    ```
7. Avoire tout les tables tape cette ligne de commande:
    ```bash
    php artisan migrate
    ```

8.  Recevoire un faux donner dans la base de donnée: 
    ```bash
    php artisan db:seed
    ```

9. Compiler la Tout le fiche js et css : 
    ```bash
    npm run dev
    ```

10. Lanche la Server php : 
    ```bash
    $ php artisan serve
    ```
11. Accédez a la back office Administrateur:
    ```bash
    email: admin@admin.net
    password: admin
    ```
    
