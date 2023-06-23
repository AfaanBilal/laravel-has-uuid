Laravel HasUUID
===============

Author: **[Afaan Bilal](https://afaan.dev)**

## Introduction
**Laravel HasUUID** is a composer package for Laravel to autogenerate UUIDs for your Models on create and set the route model binding key to `uuid`. Also adds a `fromUUID` method to your Model.

# Installation
````
composer require afaanbilal/laravel-has-uuid
````

# Usage
````php
// In any model:

use AfaanBilal\LaravelHasUUID\HasUUID;
// ...

class Post extends Model
{
    use HasUUID;
    // ...
}
````

## Contributing
All contributions are welcome. Please create an issue first for any feature request
or bug. Then fork the repository, create a branch and make any changes to fix the bug
or add the feature and create a pull request. That's it!
Thanks!

## License
**Laravel HasUUID** is released under the MIT License.
Check out the full license [here](LICENSE).
