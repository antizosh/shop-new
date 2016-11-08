<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShopCategories extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_categories', function($table)
        {
            $table->renameColumn('categories', 'category_title');
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_categories', function($table)
        {
            $table->renameColumn('category_title', 'categories');
        });
    }
}
