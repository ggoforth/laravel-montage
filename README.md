## Laravel 5.1 Montage API Package

A Laravel 5.1 service provider and facade for working with [Edit LLC](https://github.com/EditLLC)'s Montage API. 

### Usage

```
$ composer require ggoforth/laravel-montage:0.*
```

Once you have the package installed, update your `app.php` to include the relevant service provider.

```
Editllc\LaravelMontage\LaravelMontageServiceProvider::class,
```

and update your aliases array in `app.php` to include one for `Montage` and point it at the proper facade.

```
'Montage'   => Editllc\LaravelMontage\LaravelMontageFacade::class,
```

Now you can publish the montage config file so you can enter your pertinent details.

```
$ php artisan vendor:pubish
```

Open the newly created config `montage.php` config file located in the `/config` directory of your project repo.  Add your username / password or a token if you already have one.  Finally fill out your Montage subdomain in the config array and you'll be all set to begin using Montage in your own application.
