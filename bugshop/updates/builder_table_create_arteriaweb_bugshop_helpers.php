<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebBugshopHelpers extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_bugshop_helpers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type');
            $table->text('type_name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_bugshop_helpers');
    }
}
