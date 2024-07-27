<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Adjust the namespace based on your User model location
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               // Create or update the admin user
               Admin::updateOrCreate(
                ['email' => 'admin@admin.com'],
                [
                    'name' => 'admin',
                    'role' => 'admin',
                    'password' => Hash::make('password')
                    ]
                );

                // Create or update the regular user
                User::updateOrCreate(
                    ['email' => 'user@user.com'],
                    [
                        'name' => 'user',
                        'role' => 'user',
                        'password' => Hash::make('password') // You can replace 'password' with the desired password
                        ]
                    );
                    // Create or update the regular seller
                    Seller::updateOrCreate(
                        ['email' => 'seller@seller.com'],
                        [
                            'name' => 'seller',
                            'role' => 'seller',
                    'password' => Hash::make('password') // You can replace 'password' with the desired password
                ]
            );
    }
}
