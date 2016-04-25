<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDominicmercierNikeidViewsLayers extends Migration
{
    public function up()
    {
        Schema::dropIfExists('dominicmercier_nikeid_views_layers');
    }
    
    public function down()
    {
        Schema::create('dominicmercier_nikeid_views_layers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('view_id');
            $table->integer('layer_id');
        });
    }
}
