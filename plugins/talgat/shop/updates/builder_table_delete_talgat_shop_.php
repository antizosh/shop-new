<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTalgatShop extends Migration
{
    public function up()
    {
        Schema::dropIfExists('talgat_shop_');
    }
    
    public function down()
    {
        Schema::create('talgat_shop_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name', 255);
            $table->text('description');
            $table->text('price');
            $table->string('image', 255);
            $table->boolean('instock');
        });
    }
}
