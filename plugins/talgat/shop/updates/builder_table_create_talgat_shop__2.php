<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTalgatShop2 extends Migration
{
    public function up()
    {
        Schema::create('talgat_shop_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('description');
            $table->text('price');
            $table->boolean('instock');
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('talgat_shop_');
    }
}
