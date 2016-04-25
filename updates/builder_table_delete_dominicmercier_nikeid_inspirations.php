<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDominicmercierNikeidInspirations extends Migration
{
    public function up()
    {
        Schema::dropIfExists('dominicmercier_nikeid_inspirations');
    }
    
    public function down()
    {
        Schema::create('dominicmercier_nikeid_inspirations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('product_id');
        });
    }
}
