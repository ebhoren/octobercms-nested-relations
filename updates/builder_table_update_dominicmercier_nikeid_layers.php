<?php namespace DominicMercier\Nikeid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominicmercierNikeidLayers extends Migration
{
    public function up()
    {
        Schema::rename('dominicmercier_nikeid_products_layers', 'dominicmercier_nikeid_layers');
    }
    
    public function down()
    {
        Schema::rename('dominicmercier_nikeid_layers', 'dominicmercier_nikeid_products_layers');
    }
}
