<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominicmercierNikeidColors extends Migration
{
    public function up()
    {
        Schema::table('dominicmercier_nikeid_colors', function($table)
        {
            $table->string('slug');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dominicmercier_nikeid_colors', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->unsigned()->change();
        });
    }
}
