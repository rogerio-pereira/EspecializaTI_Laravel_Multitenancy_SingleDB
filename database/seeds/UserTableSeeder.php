<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Rogerio Pereira',
            'email' => 'test@test.com',
            'password' => bcrypt('123'),
        ]);
        factory(User::class)->create([
            'name' => 'Rogerio Pereira',
            'email' => 'test2@test.com',
            'password' => bcrypt('123'),
            'tenant_id' => 2,
        ]);
    }
}
