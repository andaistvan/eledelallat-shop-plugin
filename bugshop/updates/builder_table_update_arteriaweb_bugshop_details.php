<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebBugshopDetails extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->string('details_packaging');
            $table->string('details_size');
            $table->string('details_unit');
            $table->boolean('instore');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->dropColumn('details_packaging');
            $table->dropColumn('details_size');
            $table->dropColumn('details_unit');
            $table->dropColumn('instore');
            $table->increments('id')->unsigned()->change();
        });
    }
}
