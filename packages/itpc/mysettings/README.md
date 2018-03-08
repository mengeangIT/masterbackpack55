# My Settings



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
$ php artisan db:seed --class="ITPC\MySettings\database\seeds\MySettingsTableSeeder"
```

### Step 4. file publishing

``` bash
$ php artisan vendor:publish --provider="ITPC\MySettings\database\seeds\MySettingsTableSeeder"
```


## Usage

// TODO: change variable to "protected_lang_files" or smth like that

Tell LangFileManager what langfiles NOT to show, in config/itpc/mylangfilemanager.php:

``` php
// Language files to NOT show in the LangFileManager
//
'language_ignore' => ['admin', 'pagination', 'reminders', 'validation', 'log', 'crud'],
```

Add a menu item for it in packages\itpc\mysettings\src\resources\views\my_serting.blade.php:

```html
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
```
