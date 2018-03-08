# My LangFileManager



## How to Use

### Step 1. Generating optimized autoload files

``` bash
$ composer dump-autoload
```

### Step 2. migrate database

``` bash
$ php artisan migrate
```

### Step 3. seeds database


``` bash
php artisan db:seed --class="ITPC\MyLangFileManager\database\seeds\MyLanguageTableSeeder"
```

### Step 4. file publishing

``` bash
$ php artisan vendor:publish --provider="ITPC\MyLangFileManager\database\seeds\MyLanguageTableSeeder" --tag="config" #publish the config file
$ php artisan vendor:publish --provider="ITPC\MyLangFileManager\database\seeds\MyLanguageTableSeeder" --tag="lang" #publish the lang files
```


## Usage

// TODO: change variable to "protected_lang_files" or smth like that

Tell LangFileManager what langfiles NOT to show, in config/itpc/mylangfilemanager.php:

``` php
// Language files to NOT show in the LangFileManager
//
'language_ignore' => ['admin', 'pagination', 'reminders', 'validation', 'log', 'crud'],
```

Add a menu item for it in packages\itpc\mylangfilemanager\src\resources\views\my_langfile.blade.php:

```html
<li class="treeview">
  <a href="#"><i class="fa fa-globe"></i> <span>Translations</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/my-language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/my-language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
  </ul>
</li>
```

or in menu.blade.php:
```html
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
    <i class="fa fa-globe"></i> Translations<span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu">
    <li class=""><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/my-language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
    <li class=""><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/my-language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
  </ul>
</li>
```


