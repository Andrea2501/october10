<?php namespace Ndrbrn\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNdrbrnProductProduct3 extends Migration
{
    public function up()
    {
        Schema::table('ndrbrn_product_product', function($table)
        {
            $table->integer('user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ndrbrn_product_product', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
