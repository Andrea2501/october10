<?php namespace Ndrbrn\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNdrbrnOrderRow extends Migration
{
    public function up()
    {
        Schema::table('ndrbrn_order_row', function($table)
        {
            $table->integer('product_id')->nullable();
            $table->decimal('partail_row', 7, 2)->nullable();
            $table->decimal('unit_price', 7, 2)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ndrbrn_order_row', function($table)
        {
            $table->dropColumn('product_id');
            $table->dropColumn('partail_row');
            $table->dropColumn('unit_price');
        });
    }
}
