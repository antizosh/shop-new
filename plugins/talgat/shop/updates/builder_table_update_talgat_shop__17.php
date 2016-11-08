<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShop17 extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
