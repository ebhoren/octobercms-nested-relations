<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDominicmercierNikeidLayersColors extends Migration
{
    public function up()
    {
        Schema::dropIfExists('dominicmercier_nikeid_layers_colors');
    }
    
    public function down()
    {
        Schema::create('dominicmercier_nikeid_layers_colors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('layer_id');
            $table->integer('color_id');
        });
    }
}
