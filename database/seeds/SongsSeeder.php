<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title'      => "Still Don't Know",
            'artist'     => 'Icon Pop',
            'cover'      => 'images/covers/still-dont-know.jpg',
            'length'     => '3:16',
            'created_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title'      => 'I love it',
            'artist'     => 'Icon Pop',
            'cover'      => 'images/covers/i-love-it.jpg',
            'length'     => '2:35',
            'created_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title'      => 'Girlfriend',
            'artist'     => 'Icon Pop',
            'cover'      => 'images/covers/girlfriend.jpg',
            'length'     => '2:50',
            'created_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title'      => 'We Got the World',
            'artist'     => 'Icon Pop',
            'cover'      => 'images/covers/we-got-the-world.jpg',
            'length'     => '3:07',
            'created_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title'      => 'Nights Like This',
            'artist'     => 'Icon Pop',
            'cover'      => 'images/covers/nights-like-this.jpg',
            'length'     => '3:24',
            'created_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title'      => 'Duis Aute Irure',
            'artist'     => 'Icon Pop',
            'cover'      => 'images/covers/duis-aute-irure.jpg',
            'length'     => '3:42',
            'created_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title'      => 'Excepteur Sint',
            'artist'     => 'Icon Pop',
            'cover'      => 'images/covers/excepteur-sint.jpg',
            'length'     => '3:42',
            'created_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title'      => 'Occaecat Cupidatat',
            'artist'     => 'Icon Pop',
            'cover'      => 'images/covers/occaecat-cupidatat.jpg',
            'length'     => '4:02',
            'created_at' => Carbon::now(),
        ]);

        DB::table('songs')->insert([
            'title'      => 'Sunt in culpa',
            'artist'     => 'Icon Pop',
            'cover'      => 'images/covers/sunt-in-culpa.jpg',
            'length'     => '2:59',
            'created_at' => Carbon::now(),
        ]);
    }
}
