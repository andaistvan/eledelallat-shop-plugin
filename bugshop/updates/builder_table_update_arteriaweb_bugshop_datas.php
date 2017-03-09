<?php namespace Arteriaweb\Bugshop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebBugshopDatas extends Migration
{
    public function up()
    {
        Schema::rename('arteriaweb_bugshop_data', 'arteriaweb_bugshop_datas');
    }
    
    public function down()
    {
        Schema::rename('arteriaweb_bugshop_datas', 'arteriaweb_bugshop_data');
    }
}
