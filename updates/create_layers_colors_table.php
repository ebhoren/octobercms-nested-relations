<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLayersColorsTable extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_layers_colors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('layer_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->primary(['layer_id', 'color_id'], 'layer_color');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_layers_colors');
    }
}
