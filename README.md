# Laravuetonic

**Laravuetonic** is a starter kits build of **Laravel** with user authentication packed with responsive admin template from [**Metronic Themes**](http://www.keenthemes.com/) built on **Bootstrap 4** and integrated with **Vue.js**

### Features
  - Metronic Login and Dashboard
  - Easy to Customize the Layout, Aside, and Header menu item
  - Email Registration
  - Email Verification
  - Password Recovery
  - Password Confirmation

Note:
> Currently using blade templating for login and dashboard layout, but you can use vue component into the dashboard content

### Selected Theme
  - Metronic Dashboard: [Demo-1](https://preview.keenthemes.com/metronic/demo1/index.html)
  - Metronic Login: [Classic Login-3](https://preview.keenthemes.com/metronic/demo1/custom/pages/login/classic/login-3.html)

### Package
  - Laravel 8.x
  - Laravel Breeze
  - Vue 2.x
  - Metronic 7.x
  - Bootstrap 4
  - Tailwind (ready to use or just remove if you don't need)

### Requirement

* PHP 7.3.x +
* MySQL Database (can be changed)
* Composer 2.0.x +
* Node.js 12.16.x +

### Installation

1. Clone this repo with following command 
    ```sh
    git clone https://github.com/rayasabari/laravuetonic.git laravuetonic
    ```

2. Create database (you can create via phpmyadmin if you're using MySQL)
2. Move to root project directory
    ```sh
    cd laravuetonic
    ```

3. Copy ```.env``` file
    ```sh
    cp .env.example .env
    ```

4. Configure your ```.env``` file. Make sure your database name and smtp mailer set up correctly
    ```sh
    ...
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=databasename
    DB_USERNAME=root
    DB_PASSWORD=
    ....
    ```
    I recommend you to use mailtrap.io to safe email testing for development
     ```sh
    ...
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=yourusername
    MAIL_PASSWORD=yourpassword
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=noreply@example.com
    MAIL_FROM_NAME="${APP_NAME}"
    ....
    ```

5. From root project directory, run the following commands
     ```sh
    composer update
    ```
     ```sh
    php artisan key:generate
    ```
     ```sh
    php artisan artisan migrate
    ```
    ```sh
    npm install
    ```
    ```sh
    npm run dev
    ```
    ```sh
    php artisan serve
    ```
    
6. Run in your browser
    ```sh
    htttp://127.0.0.1:8000
    ```
8. Register account and enjoy!

### Customize
- You can easily cofigure the layout, aside and head menu in the following file:
    | File Location | Description |
    | ------ | ------ |
    | ```config/layout.php``` | choose content width, enable or disable element, customize color pallete, and etc|
    | ```config/menu_aside.php``` | organize side menu item and link |
    | ```config/menu_header.php``` | organize head menu item and link |

    In case it doesn't affect the view, just run ```php artisan config:cache```
- To assign the pages for verified user only, just add ```'verified'``` in middleware on route in ```routes/web.php```
    Example:
    ```sh
    Route::group(['middleware' => ['auth','verified']], function () {
        Route::get('/dashboard', 'PagesController@index')->name('dashboard');
    });
    ```

### Todos
 - User Roles
 - User Profiles

License
----
You must have a valid license purchased only from **Themeforest** in order to legally use the theme for your project.
Purchase:  http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes



Happy coding with **Metronic!** :)

