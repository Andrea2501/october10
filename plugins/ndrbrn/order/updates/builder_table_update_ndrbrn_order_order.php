<?php namespace Ndrbrn\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNdrbrnOrderOrder extends Migration
{
    public function up()
    {
        Schema::table('ndrbrn_order_order', function($table)
        {
            $table->dateTime('order_date')->nullable();
            $table->decimal('subtotal', 8, 2)->nullable();
            $table->decimal('order_vat', 8, 2)->nullable();
            $table->decimal('order_total', 8, 2)->nullable();
            $table->string('order_status')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ndrbrn_order_order', function($table)
        {
            $table->dropColumn('order_date');
            $table->dropColumn('subtotal');
            $table->dropColumn('order_vat');
            $table->dropColumn('order_total');
            $table->dropColumn('order_status');
        });
    }
}
