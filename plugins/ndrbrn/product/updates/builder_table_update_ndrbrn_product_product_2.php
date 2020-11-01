<?php namespace Ndrbrn\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNdrbrnProductProduct2 extends Migration
{
    public function up()
    {
        Schema::table('ndrbrn_product_product', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('product_name', 255)->default('null')->change();
            $table->string('product_type', 191)->default('null')->change();
            $table->text('product_description')->default('null')->change();
            $table->dropColumn('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('ndrbrn_product_product', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('product_name', 255)->default('\'null\'')->change();
            $table->string('product_type', 191)->default('\'null\'')->change();
            $table->text('product_description')->default('NULL')->change();
            $table->integer('user_id')->nullable()->default(NULL);
        });
    }
}
