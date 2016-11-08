<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShopShopCategories3 extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_shop_categories', function($table)
        {
            $table->dropPrimary(['item_id','category_id']);
            $table->renameColumn('item_id', 'shops_id');
            $table->primary(['shops_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_shop_categories', function($table)
        {
            $table->dropPrimary(['shops_id','category_id']);
            $table->renameColumn('shops_id', 'item_id');
            $table->primary(['item_id','category_id']);
        });
    }
}
