<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLayersTable extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_layers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->boolean('editable')->default(false);
            $table->integer('product_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_layers');
    }
}
