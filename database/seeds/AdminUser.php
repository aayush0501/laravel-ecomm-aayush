<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Profile;
use App\Category;
class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = Role::create([
            'name' => 'Customer',
            'description' => 'Customer Role'
        ]);

        $role = Role::create([
            'name' => 'Admin',
            'description' => 'Admin Role'
        ]);

        $user = User::create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
            'role_id' => '2'
        ]);

        Profile::create([
            'user_id' => $user->id,
            'slug' => 'admin'
        ]);

        
        // Category::create([
        //     'title' => 'Cosmetics',
        //     'description' => 'This is Cosmetic'
        // ]);


    }
}
