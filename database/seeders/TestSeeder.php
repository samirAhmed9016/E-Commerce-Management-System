<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        test::factory()
            ->count(100)
            ->state(
                new Sequence(
                    ['status' => 'enable'],
                    ['status' => 'disable']
                )
            )
            ->state(
                new Sequence(
                    ['show' => '0'],
                    ['show' => '1'],
                    ['hide' => '1'],
                    ['hide' => '0'],
                )
            )
            ->create();
        // for ($i = 0; $i < 50; $i++) {

        //     test::create([
        //         'name' => 'test' . $i,
        //         'status' => '1',
        //         'show' => '1',
        //         'description' => '1',

        //     ]);
        // }
    }
}
