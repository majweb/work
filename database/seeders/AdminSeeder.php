<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'email' => 'l.koziol@work4you.global',
                'name' => 'Łukasz Kozioł',
                'password' => 'F5qIOCoByKIDucW7',
            ],
            [
                'email' => 'k.karwowska@work4you.global',
                'name' => 'Work4you.global',
                'password' => 'uQW6Nh0Tj7HeMwOn',
            ],
            [
                'email' => 'm.maj@work4you.global',
                'name' => 'Work4you.global',
                'password' => 'KZCPSpchd7LocFzX',
            ],
            [
                'email' => 'a.lewek@work4you.global',
                'name' => 'Work4you.global',
                'password' => 'KZCPSpchd7LocFzc',
            ],
        ];

        foreach ($admins as $adminData) {
            $user = User::firstOrCreate(
                ['email' => $adminData['email']],
                [
                    'name' => $adminData['name'],
                    'email_verified_at' => now(),
                    'password' => Hash::make($adminData['password']),
                ]
            );
            $user->syncRoles(['admin']);
        }

        $subAdmins = [
            [
                'email' => 'd.berger@work4you.global',
                'name' => 'D. Berger',
                'password' => 'pW8N3mQ9zR2xV4kL', // wygenerowane hasło
            ],
            [
                'email' => 'm.klocek@work4you.global',
                'name' => 'M. Klocek',
                'password' => 'bJ5vT7nY1mS8fP3q', // wygenerowane hasło
            ],
        ];

        foreach ($subAdmins as $subAdminData) {
            $user = User::firstOrCreate(
                ['email' => $subAdminData['email']],
                [
                    'name' => $subAdminData['name'],
                    'email_verified_at' => now(),
                    'password' => Hash::make($subAdminData['password']),
                ]
            );
            $user->syncRoles(['admin', 'admin-sub']);
        }
    }
}
