<?php namespace Ndrbrn\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNdrbrnProductProduct extends Migration
{
    public function up()
    {
        Schema::table('ndrbrn_product_product', function($table)
        {
            $table->integer('user_id')->nullable();
            $table->string('product_name', 255)->default('null')->change();
            $table->string('product_type', 191)->default('null')->change();
            $table->text('product_description')->default('null')->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('ndrbrn_product_product', function($table)
        {
            $table->dropColumn('user_id');
            $table->string('product_name', 255)->default('NULL')->change();
            $table->string('product_type', 191)->default('NULL')->change();
            $table->text('product_description')->default('NULL')->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
