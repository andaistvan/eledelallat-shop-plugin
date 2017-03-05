<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebBugshopDetails extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
