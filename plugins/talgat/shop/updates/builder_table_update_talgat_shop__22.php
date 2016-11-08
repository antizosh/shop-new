<?php namespace Talgat\Shop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTalgatShop22 extends Migration
{
    public function up()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->string('presentation')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('talgat_shop_', function($table)
        {
            $table->dropColumn('presentation');
        });
    }
}
