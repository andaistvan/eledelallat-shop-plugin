<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebBugshopDetails4 extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->boolean('store');
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->dropColumn('store');
        });
    }
}
