# Laravuetonic

Laravuetonic is a starter kits build of Laravel with user authentication packed with responsive admin template from [Metronic Themes](http://www.keenthemes.com/) built on Bootstrap 4 and integrated with Vue.js

##### Features

  - Metronic Login and Dashboard
  - Email Registration
  - Email Verification
  - Password Recovery
  - Password Confirmation

Note:
> Currently using blade templating for login and dashboard layout, but you can use vue component into the dashboard content

##### Selected Theme
  - Metronic Dashboard Demo-1 [(preview)](https://preview.keenthemes.com/metronic/demo1/index.html)
  - Metronic Classic Login-3 [(preview)](https://preview.keenthemes.com/metronic/demo1/custom/pages/login/classic/login-3.html)

##### Package
  - Laravel 8.x
  - Laravel Breeze
  - Vue 2.x
  - Metronic 7.x
  - Bootstrap 4
  - Tailwind (ready to use or just remove if you don't need)

##### Requirement

* PHP 7.3.x +
* MySQL Database (can be changed)
* Composer 2.0.x +
* Node.js 12.16.x +

##### Installation

1. Clone this repo with following command 
    ```sh
    git clone https://github.com/rayasabari/laravuetonic.git laravuetonic
    ```

2. Create database (you can create via phpmyadmin if you use MySQL)
2. Move to root project directory
    ```sh
    cd laravuetonic
    ```

3. Copy .env file
    ```sh
    cp .env.example .env
    ```

4. Configure your .env file. Make sure your database name and smtp mailer set up correctly
    I recommend you to use mailtrap.io to safe email testing for development

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
### User Login

| User | Password |
| ------ | ------ |
| admin@admin.com | password |



### Todos
Next features
 - User Roles
 - User Profiles

License
----
You must have a valid license purchased only from Themeforest in order to legally use the theme for your project.
Purchase:  http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes



**Happy coding with Metronic! :)**
