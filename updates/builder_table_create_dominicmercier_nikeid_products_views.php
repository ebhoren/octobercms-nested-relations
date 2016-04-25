<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominicmercierNikeidProductsViews extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_products_views', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_products_views');
    }
}
