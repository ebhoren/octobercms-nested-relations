<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominicmercierNikeidLayersColors2 extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_layers_colors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('layer_id')->nullable()->unsigned();
            $table->integer('color_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_layers_colors');
    }
}
