<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShop5 extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->increments('id')->change();
            $table->text('description')->nullable()->change();
            $table->text('price')->nullable()->change();
            $table->string('image')->nullable()->change();
            $table->boolean('instock')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->integer('id')->change();
            $table->text('description')->nullable(false)->change();
            $table->text('price')->nullable(false)->change();
            $table->string('image', 255)->nullable(false)->change();
            $table->boolean('instock')->nullable(false)->change();
        });
    }
}
