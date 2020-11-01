<?php namespace Ndrbrn\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNdrbrnOrderRow2 extends Migration
{
    public function up()
    {
        Schema::table('ndrbrn_order_row', function($table)
        {
            $table->decimal('subtotal_row', 8, 2)->nullable();
            $table->decimal('row_vat', 8, 2)->nullable();
            $table->decimal('row_total', 8, 2)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ndrbrn_order_row', function($table)
        {
            $table->dropColumn('subtotal_row');
            $table->dropColumn('row_vat');
            $table->dropColumn('row_total');
        });
    }
}
