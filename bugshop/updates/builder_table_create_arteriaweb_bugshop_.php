<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebBugshop extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_bugshop_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('slug')->nullable();
            $table->string('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_bugshop_');
    }
}
