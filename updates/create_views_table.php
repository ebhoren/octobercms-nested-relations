<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateViewsTable extends Migration
{
    public function up()
    {
        Schema::create('dominicmercier_nikeid_views', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('product_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominicmercier_nikeid_views');
    }
}
