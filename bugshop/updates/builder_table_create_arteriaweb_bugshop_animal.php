<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebBugshopAnimal extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_bugshop_animal', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('slug');
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_bugshop_animal');
    }
}
