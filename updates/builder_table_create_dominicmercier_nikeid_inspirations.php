<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominicmercierNikeidInspirations extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_inspirations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('product_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_inspirations');
    }
}
