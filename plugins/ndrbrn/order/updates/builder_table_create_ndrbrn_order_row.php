<?php namespace Ndrbrn\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNdrbrnOrderRow extends Migration
{
    public function up()
    {
        Schema::create('ndrbrn_order_row', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order_id')->nullable();
            $table->integer('variation_id')->nullable();
            $table->integer('qty')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ndrbrn_order_row');
    }
}
