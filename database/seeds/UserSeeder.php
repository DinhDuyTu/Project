<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i <= 200; $i++) { 
            $role_id = $faker->numberBetween(0, 1);
            DB::table('users')->insert([
                'name' => $faker->unique()->text(20),
                'email' => $faker->unique()->safeEmail,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'address' => $faker->unique()->text(20),
                'phone' => $faker->unique()->text(20),
                'avatar' => '/images/avatar/avatar-defult.jpeg',
                'role_id' => $role_id,
                'created_at' => $faker->dateTimeBetween('-18 months'),
                'updated_at' => now(),
            ]);
        }
    }
}
