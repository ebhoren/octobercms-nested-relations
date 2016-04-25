<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominicmercierNikeidViews2 extends Migration
{
    public function up()
    {
        Schema::table('dominicmercier_nikeid_views', function($table)
        {
            $table->integer('product_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominicmercier_nikeid_views', function($table)
        {
            $table->dropColumn('product_id');
        });
    }
}
