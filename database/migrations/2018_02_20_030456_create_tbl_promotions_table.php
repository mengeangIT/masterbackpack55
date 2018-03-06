<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('last_date')->nullable();
            $table->text('image')->nullable();
            $table->text('content')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('tbl_promotions');
    }
}
