<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        for($user=0;$user<5;$user++)
        {
          User::create([
            'name'          => Str::random(10),
            'lastname'      => Str::random(10),
            'birth'         => Str::random(10),
            'fone'          => Str::random(11),
            'city'          => Str::random(10),
            'cpf'           => Str::random(11),
            'email'         => Str::random(10)."@gmail.com",
            'password'      => bcrypt('123456'),
          ]);
        }
    }
}
