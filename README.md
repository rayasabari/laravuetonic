# Laravuetonic

**Laravuetonic** is a starter kits build of **Laravel** with user authentication and packed with responsive premium template from [**Metronic Themes**](https://keenthemes.com/metronic/) by [**Keenthemes**](https://keenthemes.com/) built on **Bootstrap 4** and integrated with **Vue.js**

### Features
  - Metronic Login and Dashboard
  - Layout Configuration
  - Menu Generator
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

### Requirement

* PHP 7.3.x +
* MySQL Database (can be changed)
* Composer 2.0.x +
* Node.js 12.16.x +

### Installation

1. Run the following command 
    ```sh
    git clone https://github.com/rayasabari/laravuetonic.git laravuetonic
    ```

2. Create a MySQL database project 
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
    DB_DATABASE=yourdatabasename
    DB_USERNAME=root
    DB_PASSWORD=
    
    ...
    ```
    Use [mailtrap.io](https://mailtrap.io/) to safe email testing in development
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

    ...
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
    http://127.0.0.1:8000
    ```
8. Register account and enjoy!

### Layout Configuration
Metronic theme has a large variety of layout styles and settings. You can visually test them all in [**layout builder**](https://preview.keenthemes.com/metronic/demo1/builder.html) section. It also implemented this comprehensive layout configuration.

Configuration file ```config/layout.php``` has all the respective sections and their styling and positioning values.

By editing config values in file you will be able to set the theme layout to your needs by given possibility.

> In case it doesn't affect the view, just run ```php artisan config:cache```

### Menu Generator

Theme menu elements are rich of features including link styling, icons, href properties and so on. Writing menu nodes by hand might get a little too overwhelming and messy. Hence, we have implemented an automatic menu generator which is configured from the menu config files and rendered in the menu section for you.

Menu config files file ```config/menu_aside.php``` and ```config/menu_header.php``` by default hold dummy data.

Conifg values and descriptions

| Key | Description	| Available values |
| ------ |	------	| ------ |
| ```title``` |	link title	| string |
| ```page``` | link url | slug type i.e ```/my-blog``` |
| ```new-tab```	| defines if link opens in new tab	| true, false |
| ```root``` | defines if link is at root level | true, false |
| ```section```	| section heading	| string |
| ```icon``` |	menu icon | Icon file link or class. I.e. SVG Icons or Flaticon |
| ```bullet``` | defines menu/submenu bullet style | line, dot |
| ```submenu```	| submenu node	| array |

### Additional Info
To assign the pages for verified user only, just add ```'verified'```  middleware on route in ```routes/web.php```
Example:
```sh
Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/dashboard', 'PagesController@index')->name('dashboard');
});
```

License
----
You must have a valid license purchased only from **Themeforest** in order to legally use the theme for your project.
Purchase:  http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes



Happy coding with **Metronic!** :)

