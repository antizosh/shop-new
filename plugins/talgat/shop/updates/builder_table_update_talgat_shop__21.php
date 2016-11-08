<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShop21 extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->dropColumn('category');
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->text('category')->nullable();
        });
    }
}
