<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'fullname' => 'Ela',
            'institution_id' => 2,
            'from' =>'PT BIM',
            'phonenumber' => '0897654321',
            'email' => 'selfianasari0@mail.com',
            'note' => 'bismillah',
        ]);
    }
}
