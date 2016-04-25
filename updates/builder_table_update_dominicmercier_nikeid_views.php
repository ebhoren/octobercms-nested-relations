<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominicmercierNikeidViews extends Migration
{
    public function up()
    {
        Schema::rename('dominicmercier_nikeid_products_views', 'dominicmercier_nikeid_views');
    }
    
    public function down()
    {
        Schema::rename('dominicmercier_nikeid_views', 'dominicmercier_nikeid_products_views');
    }
}
