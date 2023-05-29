
# Hi, I'm Farirai! 👋 

Please star the repo if you like it
# Auth.Test Package

A brief description of what this project does and who it's for




## Installation

To run this project run

```bash
  git clone https://github.com/fariraimasocha/auth.test
```

```bash
  cd auth.test
```


```bash
  composer install

```
to Install the dependencies using Composer:


```bash
  composer update
```
to update the dependencies using Composer:



```bash
  php artisan key:generate
```

Generate the application key:


```bash
  php artisan migrate

```

To migrate the database


```bash
  npm run dev

```
Start the server





## Usage

After completing the installation steps, you can start utilizing the Laravel Auth Package in your Laravel application. Here are a few important points to consider:

User Registration: The package provides a user registration feature out of the box. Simply direct users to the registration page to create new accounts.


```
// RegistrationController.php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Additional logic or redirects

    return redirect('/dashboard');
}

```

## Customization

The Laravel Auth Package offers a high level of customization. You can modify views, routes, and controllers to match the branding and specifications of your application. For example, you can customize the login and registration views in the resources/views/auth directory and update the
## Running Tests

To run tests, run the following command

```bash
  npm run test
```


## Authors

- [@fariraimasocha](https://www.github.com/fariraimasocha)


## FAQ

#### Php artisan serve not working

run 
```
php artisan key:generate
```

#### How to customize

You can build on top of the package


## github repository

https://github.com/fariraimasocha/auth.test

```bash
  git clone https://github.com/fariraimasocha/auth.test
```

## Features

- user login and registration
- social login
- spa 
- password reset


## 🚀 About Me
I'm a full stack developer...


## Acknowledgements

 - [Laravel](https://laravel.com/s)
 - [Laravel Splade](https://splade.dev/)
 - [Laravel Fortify](https://laravel.com/docs/10.x/fortify#:~:text=Laravel%20Fortify%20is%20a%20frontend,%2C%20email%20verification%2C%20and%20more.)

