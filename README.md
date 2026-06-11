![alt text](https://marshmallow.dev/cdn/media/logo-red-237x46.png "marshmallow.")

# Google Product Categories Dataset

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marshmallow/dataset-google-product-categories.svg?style=flat-square)](https://packagist.org/packages/marshmallow/dataset-google-product-categories)
[![Total Downloads](https://img.shields.io/packagist/dt/marshmallow/dataset-google-product-categories.svg?style=flat-square)](https://packagist.org/packages/marshmallow/dataset-google-product-categories)

This dataset contains all the categories available for Google Product Feeds in Dutch.

The package ships a `google_product_categories` table (auto-discovered migration) and a seeder that imports the full Dutch Google product taxonomy from a bundled taxonomy file.

## Installation

Install the package via Composer:

```bash
composer require marshmallow/dataset-google-product-categories
```

The migration is registered automatically by the package service provider, so you only need to run your migrations:

```bash
php artisan migrate
```

## Seeding the table

Run the seeder to populate the `google_product_categories` table from the bundled Dutch taxonomy file:

```bash
php artisan db:seed --class="Marshmallow\Datasets\GoogleProductCategories\Seeds\GoogleProductCategorySeeder"
```

## Usage

Query the categories through the bundled Eloquent model:

```php
use Marshmallow\Datasets\GoogleProductCategories\Models\GoogleProductCategory;

// All categories
$categories = GoogleProductCategory::all();

// Look up a category by its Google category id
$category = GoogleProductCategory::find(1);
$category->name;
```

Each row has the official Google category `id` and its Dutch `name`. The table also uses timestamps and soft deletes.

## Nova

Are you using Nova? We have a command for you to generate the Nova Resource. Run:

```bash
php artisan marshmallow:resource GoogleProductCategory Datasets\\GoogleProductCategories
```

The categories will then be available to you in Nova. We hide this resource by default in the Nova navigation. If you wish to have it available in the navigation, add `public static $displayInNavigation = true;` to `app/Nova/GoogleProductCategory.php`.

## Security Vulnerabilities

Please report security vulnerabilities by email to [stef@marshmallow.dev](mailto:stef@marshmallow.dev) rather than via the public issue tracker.

## Credits

- [Stef](https://marshmallow.dev)
- [All Contributors](https://github.com/marshmallow-packages/dataset-google-product-categories/contributors)

## License

The MIT License. Please see the [License File](LICENSE) for more information.
