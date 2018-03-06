<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pro_cate')->nullable()->index();
            $table->integer('pro_type')->nullable()->index();
            $table->string('pro_code')->index()->nullable();
            $table->string('title')->index()->nullable();
            $table->text('image')->nullable();
            $table->double('qty')->nullable()->default(0);
            $table->double('price')->nullable()->default(0);
            $table->float('kalory')->nullable()->default(0);
            $table->string('description')->nullable();
            $table->enum('pro_promotion', ['INACTIVE', 'ACTIVE'])->default('INACTIVE');
            $table->string('in_putter')->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_products');
    }
}
