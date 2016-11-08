<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTalgatShopCategories extends Migration
{
    public function up()
    {
        Schema::create('talgat_shop_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('categories');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('talgat_shop_categories');
    }
}
