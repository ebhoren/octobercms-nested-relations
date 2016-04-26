<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateColorsTable extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_colors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_colors');
    }
}
