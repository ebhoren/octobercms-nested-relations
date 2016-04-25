<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominicmercierNikeidLayers2 extends Migration
{
    public function up()
    {
        Schema::table('dominicmercier_nikeid_layers', function($table)
        {
            $table->integer('product_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominicmercier_nikeid_layers', function($table)
        {
            $table->dropColumn('product_id');
        });
    }
}
