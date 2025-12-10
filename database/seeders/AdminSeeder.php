<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Create default admin user
        Admin::create([
            'username' => 'admin',
            'email' => 'admin@oti.co.id',
            'password' => 'admin123', // Will be automatically hashed by model
            'name' => 'Administrator OTI',
        ]);

        // Create another admin example
        Admin::create([
            'username' => 'oti_admin',
            'email' => 'ometeknologiindonesia@gmail.com',
            'password' => 'OTI@2025', // Will be automatically hashed by model
            'name' => 'OTI Admin',
        ]);

        echo "Admin users seeded successfully!\n";
        echo "-----------------------------------\n";
        echo "Username: admin | Password: admin123\n";
        echo "Username: oti_admin | Password: OTI@2025\n";
        echo "-----------------------------------\n";
    }
}
