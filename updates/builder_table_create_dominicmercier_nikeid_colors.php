<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominicmercierNikeidColors extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_colors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('color');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_colors');
    }
}
