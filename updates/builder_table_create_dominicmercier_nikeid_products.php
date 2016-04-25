<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominicmercierNikeidProducts extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('name');
            $table->decimal('price', 10, 0)->default(0.00);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_products');
    }
}
