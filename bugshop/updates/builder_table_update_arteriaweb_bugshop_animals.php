<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebBugshopAnimals extends Migration
{
    public function up()
    {
        Schema::rename('arteriaweb_bugshop_animal', 'arteriaweb_bugshop_animals');
    }
    
    public function down()
    {
        Schema::rename('arteriaweb_bugshop_animals', 'arteriaweb_bugshop_animal');
    }
}
