<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UserTableSeed::class);
        $this->call(MainTableSeed::class);
        $this->call(ReviewTableSeed::class);
        $this->call(ContactUsTableSeed::class);
        $this->call(PortfolioTableSeed::class);
        $this->call(AboutTableSeed::class);
        $this->call(TeamTableSeed::class);
        $this->call(CarrerTableSeed::class);
        $this->call(JobTableSeed::class);
    }
}
