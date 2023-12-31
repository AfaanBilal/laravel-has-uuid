Laravel HasUUID
===============

Author: **[Afaan Bilal](https://afaan.dev)**

## Introduction
**Laravel HasUUID** is a package for Laravel to autogenerate UUIDs for your Models on insert and set the route-model-binding key to `uuid`.
Also adds a `fromUUID` method to your Model which accepts a `uuid` and returns a model instance if found, or null otherwise.

Please make sure that you have column in your table called `uuid` which is a unique index.

Example (in migration):
````php
$table->string('uuid')->unique();
````

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
