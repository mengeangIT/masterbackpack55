<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cust_id')->nullable()->index();
            $table->double('total_qty')->nullable()->default(0);
            $table->double('total_amt')->nullable()->default(0);
            $table->double('total_tax')->nullable()->default(0);
            $table->double('total_dis')->nullable()->default(0);
            $table->double('total_payable')->nullable()->default(0);
            $table->date('date')->nullable();
            $table->time('time')->nullable();

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
        Schema::dropIfExists('tbl_orders');
    }
}
