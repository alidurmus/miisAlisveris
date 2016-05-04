<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('categories')->insert([
            'name' => 'Bilgisayar',
            'content' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',
            'image' => 'http://lorempixel.com/400/200/technics/',
            'slug' => 'bilgisayar',
        ]);
     DB::table('categories')->insert([
            'name' => 'Tablet',
            'content' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',
            'image' => 'http://lorempixel.com/400/200/technics/',
            'slug' => 'tablet',
        ]);
     DB::table('categories')->insert([
            'name' => 'Elektronik Kart',
            'content' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',
            'image' => 'http://lorempixel.com/400/200/technics/',
            'slug' => 'elektronik-kart',
        ]);
    }
}
