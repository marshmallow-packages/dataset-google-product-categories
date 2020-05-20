<?php

namespace Marshmallow\Datasets\GoogleProductCategories\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Marshmallow\Datasets\GoogleProductCategories\Models\GoogleProductCategory;

/**
 * php artisan db:seed --class="Marshmallow\Datasets\GoogleProductCategories\Seeds\GoogleProductCategorySeeder"
 */

class GoogleProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = file_get_contents(__dir__ . '/../../resources/producttype_taxonomy-with-ids.nl-NL.txt');
    	$categories = explode("\n", $categories);

    	$this->command->getOutput()->progressStart(count($categories));

    	foreach ($categories as $loop_count => $category) {
    		$this->command->getOutput()->progressAdvance();

    		if ($loop_count == 0) {
    			continue;
    		}

    		// $category = explode('-', $category, 2);
    		list($category_id, $category_name) = explode('-', $category, 2);
    		$category_id = intval($category_id);
    		$category_name = trim($category_name);

    		GoogleProductCategory::updateOrCreate([
    			'id' => $category_id,
    			'name' => $category_name,
    		],[
    			'name' => $category_name
    		]);
    	}

    	$this->command->getOutput()->progressFinish();
    }
}
