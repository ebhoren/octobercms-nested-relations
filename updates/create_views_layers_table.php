<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateViewsLayersTable extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_views_layers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('view_id')->unsigned();
            $table->integer('layer_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->string('image')->nullable();
            $table->decimal('price', 15)->default(0);
            $table->primary(['view_id', 'layer_id', 'color_id'], 'views_layers');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_views_layers');
    }
}
