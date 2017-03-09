<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebBugshopData extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_bugshop_data', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('datatype');
            $table->string('dataname');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_bugshop_data');
    }
}
