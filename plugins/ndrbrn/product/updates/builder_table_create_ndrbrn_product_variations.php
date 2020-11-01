<?php namespace Ndrbrn\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNdrbrnProductVariations extends Migration
{
    public function up()
    {
        Schema::create('ndrbrn_product_variations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('variation_name')->nullable();
            $table->string('variation_type')->nullable();
            $table->decimal('variation_price', 10, 2)->nullable();
            $table->string('variation_code')->nullable();
            $table->integer('product_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ndrbrn_product_variations');
    }
}
