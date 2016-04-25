<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominicmercierNikeidProductsLayers extends Migration
{
    public function up()
    {
        Schema::table('dominicmercier_nikeid_products_layers', function($table)
        {
            $table->boolean('editable');
        });
    }
    
    public function down()
    {
        Schema::table('dominicmercier_nikeid_products_layers', function($table)
        {
            $table->dropColumn('editable');
        });
    }
}
