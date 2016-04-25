<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDominicmercierNikeidProductViews extends Migration
{
    public function up()
    {
        Schema::dropIfExists('dominicmercier_nikeid_product_views');
    }
    
    public function down()
    {
        Schema::create('dominicmercier_nikeid_product_views', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('product_id');
            $table->integer('view_id');
        });
    }
}
