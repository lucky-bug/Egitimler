<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('name', Role::ADMIN)->first();
        $roleUser = Role::where('name', Role::USER)->first();

        $userAdmin = User::create([
            'name' => 'Ibrokhim Shokirov',
            'email' => 'admin@example.com',
            'password' => bcrypt('secret'),
        ]);
        $userAdmin->roles()->attach($roleAdmin);

        $userUser = User::create([
            'name' => 'Emily Carter',
            'email' => 'emily@example.com',
            'password' => bcrypt('secret'),
        ]);
        $userUser->roles()->attach($roleUser);

        factory(User::class, 100)->create()->each(function ($user) use ($roleUser) {
            $user->roles()->attach($roleUser);
        });
    }
}
