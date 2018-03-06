<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblApplyjobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_applyjobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position_id')->nullable()->index();
            $table->string('name')->index()->nullable();
            $table->double('salary')->nullable()->default(0);
            $table->dateTime('start_work')->nullable();
            $table->string('email')->unique();
            $table->string('phone',10)->index()->nullable();
            $table->string('resume')->index()->nullable();
            $table->string('national_id',10)->index()->nullable();
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
        Schema::dropIfExists('tbl_applyjobs');
    }
}
