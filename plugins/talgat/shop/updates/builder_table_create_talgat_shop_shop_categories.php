<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTalgatShopShopCategories extends Migration
{
    public function up()
    {
        Schema::create('talgat_shop_shop_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('shop_id');
            $table->integer('category_id');
            $table->primary(['shop_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('talgat_shop_shop_categories');
    }
}
