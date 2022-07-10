<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed_show_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shows')->insert([
            'name' => 'Monkey D. Luffy',
            'image' => '1.jpg',
            'occupation' => 'Pirate',
            'origin' => 'East Blue',
            'description' => 'Monkey D. Luffy, also known as Straw Hat Luffy and commonly as Straw Hat, is the main protagonist of the manga and anime, One Piece.'
        ]);
        DB::table('shows')->insert([
            'name' => 'Roronoa Zoro',
            'image' => '2.jpg',
            'occupation' => 'Pirate',
            'origin' => 'East Blue',
            'description' => 'Roronoa Zoro, also known as Pirate Hunter Zoro, is the combatant of the Straw Hat Pirates, and one of their two swordsmen. Formerly a bounty hunter, he is the second member of Luffy'
        ]);
        DB::table('shows')->insert([
            'name' => 'Nami',
            'image' => '3.jpg',
            'occupation' => 'Pirate',
            'origin' => 'East Blue',
            'description' => 'Nami is a slim young woman of average height with orange hair and brown eyes. Most people consider her to be very attractive or even beautiful.'
        ]);
        DB::table('shows')->insert([
            'name' => 'Sanji',
            'image' => '4.jpg',
            'occupation' => 'Cook',
            'origin' => 'East Blue',
            'description' => 'Sanji is a slim, muscular, long-legged man with blond hair which he keeps brushed over one side of his face. Before the timeskip, this was the left side. After the two year timeskip, he switched his hairstyle so that it covers the right side.'
        ]);
        DB::table('shows')->insert([
            'name' => 'Shanks',
            'image' => '5.jpg',
            'occupation' => 'Chief',
            'origin' => 'West Blue',
            'description' => 'Red-Haired Shanks, commonly known as just Red Hair, is the chief of the Red Hair Pirates and one of the Four Emperors that rule over the New World.'
        ]);
        DB::table('shows')->insert([
            'name' => 'Kaido',
            'image' => '6.jpg',
            'occupation' => 'Pirate',
            'origin' => 'Grad Line',
            'description' => 'Kaidou of the Beasts, renowned as the worlds Strongest Creature, is the Governor-General of the Beasts Pirates and one of the Four Emperors ruling over the New World.'
        ]);
    }
}
