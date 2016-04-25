<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominicmercierNikeidColors2 extends Migration
{
    public function up()
    {
        Schema::table('dominicmercier_nikeid_colors', function($table)
        {
            $table->dropColumn('slug');
        });
    }
    
    public function down()
    {
        Schema::table('dominicmercier_nikeid_colors', function($table)
        {
            $table->string('slug', 255);
        });
    }
}
