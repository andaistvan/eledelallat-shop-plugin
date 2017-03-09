<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebBugshopDetails2 extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->string('packaging')->nullable();
            $table->string('size')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->dropColumn('packaging');
            $table->dropColumn('size');
        });
    }
}
