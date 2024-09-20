<?php

namespace Database\Seeders;

use App\Models\Guest;
use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institution::create(['name' => 'Dinas']);
        Institution::create(['name' => 'Sekolah']);
        Institution::create(['name' => 'Perusahaan']);

        Guest::factory(1000)->create();
    }
}
