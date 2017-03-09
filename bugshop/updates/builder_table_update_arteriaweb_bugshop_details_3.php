<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebBugshopDetails3 extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->string('unit')->nullable();
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_bugshop_details', function($table)
        {
            $table->dropColumn('unit');
            $table->dropColumn('slug');
        });
    }
}
