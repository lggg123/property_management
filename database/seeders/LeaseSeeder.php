<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lease;

class LeaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Lease::create([
            'name' => '1',
            'email' => 'Fix water leak',
            'start_date' => '2021-01-01',
            'end_date' => '2021-01-02',
            'monthly_rent' => 1200.00
        ]);
    }
}
