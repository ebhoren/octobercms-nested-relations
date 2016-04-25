<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominicmercierNikeidViewsLayers2 extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_views_layers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('view_id');
            $table->integer('layer_id');
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_views_layers');
    }
}