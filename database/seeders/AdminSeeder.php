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
        // Stwórz użytkownika admina

        $admin = User::firstOrCreate(
            ['email' => 'l.koziol@work4you.global'],
            [
                'name' => 'Łukasz Kozioł',
                'email_verified_at' => now(),
                'password' => Hash::make('F5qIOCoByKIDucW7'), // zmień hasło na bezpieczne
            ]
        );
        $admin->assignRole('admin');

        $subs = [
            [
                'email' => 'k.karwowska@work4you.global',
                'name' => 'K. Karwowska',
                'password' => 'uQW6Nh0Tj7HeMwOn',
            ],
            [
                'email' => 'm.maj@work4you.global',
                'name' => 'M. Maj',
                'password' => 'KZCPSpchd7LocFzX',
            ],
            [
                'email' => 'a.lewek@work4you.global',
                'name' => 'A. Lewek',
                'password' => 'KZCPSpchd7LocFzc',
            ],
        ];

        foreach ($subs as $subData) {
            $sub = User::firstOrCreate(
                ['email' => $subData['email']],
                [
                    'name' => $subData['name'],
                    'email_verified_at' => now(),
                    'password' => Hash::make($subData['password']),
                ]
            );
            $sub->assignRole('admin');
            $sub->assignRole('admin-sub');
        }
    }
}
