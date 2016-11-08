<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTalgatShopShopCategories extends Migration
{
    public function up()
    {
        Schema::dropIfExists('talgat_shop_shop_categories');
    }
    
    public function down()
    {
        Schema::create('talgat_shop_shop_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('shops_id');
            $table->integer('categories_id');
            $table->primary(['shops_id','categories_id']);
        });
    }
}
