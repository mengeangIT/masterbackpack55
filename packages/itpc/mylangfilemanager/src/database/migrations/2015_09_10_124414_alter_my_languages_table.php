<?php

use Illuminate\Database\Migrations\Migration;

class AlterMyLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('my_languages', function ($table) {
            $table->string('script', 20)->nullable()->after('abbr');
            $table->string('native', 20)->nullable()->after('script');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('my_languages', function ($table) {
            $table->dropColumn('script');
            $table->dropColumn('native');
        });
    }
}
