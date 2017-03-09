<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebBugshopCategories extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_bugshop_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('cat_title');
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_bugshop_categories');
    }
}
