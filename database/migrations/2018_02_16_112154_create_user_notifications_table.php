<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->index()->nullable();
            $table->enum('notification_type',[
                'PURCHASE REQUEST',
                'PURCHASE ORDER',
                'PURCHASE',

                'CUSTOMER REQUEST NEW',
                'CUSTOMER REQUEST NEW Census',

                'CUSTOMER REQUEST CHANGE POWER',
                'CUSTOMER REQUEST CHANGE POWER Census',

                'CUSTOMER REQUEST CHANGE NAME',
                'CUSTOMER REQUEST CHANGE NAME Census',

                'CUSTOMER REQUEST REPAIRING',
                'CUSTOMER REQUEST REPAIRING Census'

            ])->index()->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_notifications');
    }
}
