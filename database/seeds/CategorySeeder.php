<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Category::class, 10)->create()->each(function (\App\Model\Category $category) {
            $category->save();
        });
    }
}
