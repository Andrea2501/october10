<?php namespace Ndrbrn\Order\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNdrbrnOrderOrder extends Migration
{
    public function up()
    {
        Schema::create('ndrbrn_order_order', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('order_ref')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ndrbrn_order_order');
    }
}
