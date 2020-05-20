![alt text](https://cdn.marshmallow-office.com/media/images/logo/marshmallow.transparent.red.png "marshmallow.")

# Marshmallow Dataset Country
This dataset contains all the categories available for Google Feeds.

### Installatie
```
composer require marshmallow/dataset-google-product-categories
```
# Seed the table
Run `php artisan db:seed --class="Marshmallow\Datasets\GoogleProductCategories\Seeds\GoogleProductCategorySeeder"` to seed the google category table.

# Nova
Are you using Nova? We have a command for you to generate the Nova Resource. Run `php artisan marshmallow:resource GoogleProductCategory Datasets\\GoogleProductCategories` and categories will be available to you in Nova. We hide this resource by default in the Nova navigation. If you wish to have it available in the navigation, add `public static $displayInNavigation = true;` to `app/Nova/GoogleProductCategory.php`.


- - -

Copyright (c) 2020 marshmallow