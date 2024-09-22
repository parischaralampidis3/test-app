<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User; // Import the User model

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

  
        $userIds = User::pluck('id')->toArray(); 

        foreach (range(1, 10) as $index) {
            DB::table('company')->insert([
                'name' => $faker->company,
                'email' => $faker->unique()->companyEmail,
                'address' => $faker->address,
                'website' => $faker->url,
                'user_id' => $faker->randomElement($userIds), 
            ]);
        }
    }
}
