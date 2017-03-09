<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebBugshopDetails extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_bugshop_details', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('price')->nullable();
            $table->integer('quantity')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_bugshop_details');
    }
}
