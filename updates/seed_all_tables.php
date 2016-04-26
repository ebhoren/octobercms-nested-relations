<?php namespace DominicMercier\Nikeid\Updates;

use DominicMercier\Nikeid\Models\Color;
use DominicMercier\Nikeid\Models\Layer;
use DominicMercier\Nikeid\Models\Product;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        Color::create(['name' => 'Black', 'color' => '#000000']);
        Color::create(['name' => 'White', 'color' => '#ffffff']);
        Color::create(['name' => 'Gray', 'color' => '#959595']);
        Color::create(['name' => 'Yellow', 'color' => '#f8f400']);
        Color::create(['name' => 'Gold', 'color' => '#f2b213']);
        Color::create(['name' => 'Vegas', 'color' => '#b69e56']);

        Product::create(['title' => 'Hockey Glove', 'name' => 'Regulator Lite', 'price' => 100]);

        Layer::create(['name' => 'Finger', 'editable' => 1, 'product_id' => 1]);
        Layer::create(['name' => 'Logo', 'editable' => 1, 'product_id' => 1]);
        Layer::create(['name' => 'Inserts', 'editable' => 1, 'product_id' => 1]);
        Layer::create(['name' => 'Shadows', 'editable' => 0, 'product_id' => 1]);
    }
}
