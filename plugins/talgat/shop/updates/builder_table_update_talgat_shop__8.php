<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShop8 extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->increments('id')->change();
            $table->string('name', 255)->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->text('price')->nullable(false)->change();
            $table->string('image', 255)->nullable(false)->change();
            $table->boolean('instock')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->integer('id')->change();
            $table->string('name', 255)->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->text('price')->nullable()->change();
            $table->string('image', 255)->nullable()->change();
            $table->boolean('instock')->nullable()->change();
        });
    }
}
