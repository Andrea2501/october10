<?php namespace Ndrbrn\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNdrbrnProductProduct extends Migration
{
    public function up()
    {
        Schema::create('ndrbrn_product_product', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('product_name', 255)->nullable();
            $table->string('product_type')->nullable();
            $table->text('product_description')->nullable();
            $table->text('product_excerpt');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ndrbrn_product_product');
    }
}
