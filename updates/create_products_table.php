<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->decimal('price', 10, 0)->default(0.00);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_products');
    }
}
