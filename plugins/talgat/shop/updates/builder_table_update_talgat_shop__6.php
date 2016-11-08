<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShop6 extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
