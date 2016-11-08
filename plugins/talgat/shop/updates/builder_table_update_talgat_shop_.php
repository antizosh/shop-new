<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShop extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->boolean('instock')->nullable();
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->dropColumn('instock');
            $table->integer('id')->change();
        });
    }
}
