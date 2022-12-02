<?php

use App\Models\Category;
use App\Models\Role;
use App\Models\Tag;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $roles = ['Admin', 'User'];
        collect($roles)->each(function ($role) {
            Role::create([
                'name' => $role
            ]);
        });


        $email = 'test@gmail.com';
        User::create([
            'name' => $faker->name,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => Hash::make($email), // password same as email
            'remember_token' => Str::random(10),
            'role_id' => 1
        ]);


        Tag::factory(100)->make()->each(function ($tag) use ($faker) {
            $tag->create([
                'name' => $faker->firstName()
            ]);
        });

        $types = ['Atrical', 'Journal', 'Profiles'];
        collect($types)->each(function ($type) {
            Type::create([
                'name' => $type
            ]);
        });

        Category::factory(100)->make()->each(function ($category) use ($faker) {
            $category->create([
                'name' => $faker->firstName(),
                'type_id' => Type::all()->random()->id
            ]);
        });

        // Category::factory(100)->create()->each(function ($user) use ($faker) {
        // $user->detail()->create([
        //     'first_name' => $faker->firstName(),
        //     'last_name' => $faker->lastName,
        //     'birthday' => $faker->dateTimeBetween('1990-01-01', '2012-12-31'),
        //     'phone_no' => $faker->numerify('###-###-####'),
        //     'about_me' => $faker->text,
        //     'gender' => $faker->randomElement(['male', 'female']),
        //     'age' => $faker->numberBetween($min = 18, $max = 59),
        //     'country' => $faker->country(),
        // ]);
        // $array = [1, 2, 3, 4];
        // if (($key = array_search($user->id, $array)) !== false) {
        //     unset($array[$key]);
        // }
        // $user->follow(User::find($faker->randomElement($array)));
        // $user->subscribe(User::find($faker->randomElement($array)));
        // });
        // User::factory(3)->make()->each(function ($user) use ($faker) {
        //     $email = $faker->unique()->safeEmail;
        //     $user->create([
        //         'name' => $faker->name,
        //         'email' => $email,
        //         'email_verified_at' => now(),
        //         'password' => Hash::make($email), // password same as email
        //         'remember_token' => Str::random(10),
        //     ]);
        // });

    }
}
