<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(ChannelTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DiscussionTableSeeder::class);
    }
}
