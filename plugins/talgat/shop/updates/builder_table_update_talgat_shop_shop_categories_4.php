<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShopShopCategories4 extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_shop_categories', function($table)
        {
            $table->dropPrimary(['shops_id','category_id']);
            $table->renameColumn('category_id', 'categories_id');
            $table->primary(['shops_id','categories_id']);
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_shop_categories', function($table)
        {
            $table->dropPrimary(['shops_id','categories_id']);
            $table->renameColumn('categories_id', 'category_id');
            $table->primary(['shops_id','category_id']);
        });
    }
}
