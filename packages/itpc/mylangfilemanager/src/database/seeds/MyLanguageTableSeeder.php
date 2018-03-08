<?php

namespace ITPC\MyLangFileManager\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyLanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_languages')->insert([
            'name'        => 'English',
            'flag'        => '',
            'abbr'        => 'en',
            'script'    => 'Latn',
            'native'    => 'English',
            'active'    => '1',
            'default'    => '1',
        ]);

        DB::table('my_languages')->insert([
            'name'        => 'Romanian',
            'flag'        => '',
            'abbr'        => 'ro',
            'script'    => 'Latn',
            'native'    => 'română',
            'active'    => '1',
            'default'    => '0',
        ]);

        DB::table('my_languages')->insert([
            'name'        => 'French',
            'flag'        => '',
            'abbr'        => 'fr',
            'script'    => 'Latn',
            'native'    => 'français',
            'active'    => '0',
            'default'    => '0',
        ]);

        DB::table('my_languages')->insert([
            'name'        => 'Italian',
            'flag'        => '',
            'abbr'        => 'it',
            'script'    => 'Latn',
            'native'    => 'italiano',
            'active'    => '0',
            'default'    => '0',
        ]);

        DB::table('my_languages')->insert([
            'name'        => 'Spanish',
            'flag'        => '',
            'abbr'        => 'es',
            'script'    => 'Latn',
            'native'    => 'español',
            'active'    => '0',
            'default'    => '0',
        ]);

        DB::table('my_languages')->insert([
            'name'        => 'German',
            'flag'        => '',
            'abbr'        => 'de',
            'script'    => 'Latn',
            'native'    => 'Deutsch',
            'active'    => '0',
            'default'    => '0',
        ]);

        $this->command->info('Fucking Language seeding successful.');
    }
}
