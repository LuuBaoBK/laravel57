<?php

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
        factory(App\User::class, 1)->create()->each(function ($u) {
            $u->email = "bao.luu@tctav.com";
            $u->name = "bao.luu";
            $u->password = \Hash::make("123456");
            $u->save();
        });
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 50)->create();
    }
}
