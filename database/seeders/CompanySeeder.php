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

        // Get all user IDs from the users table
        $userIds = User::pluck('id')->toArray(); // Ensure you have users in the database

        foreach (range(1, 10) as $index) { // Adjust the range for the number of companies to insert
            DB::table('companies')->insert([
                'name' => $faker->company,
                'email' => $faker->unique()->companyEmail,
                'address' => $faker->address,
                'website' => $faker->url,
                'user_id' => $faker->randomElement($userIds), // Use the array of user IDs
            ]);
        }
    }
}
