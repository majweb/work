<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Role::truncate();
        Permission::truncate();
        Role::create(['name' => 'firm']);
        $recruit = Role::create(['name' => 'recruit']);
        Role::create(['name' => 'worker']);
        Role::create(['name' => 'admin']);

        Permission::create(['name' => 'show offerts','trans'=>json_encode([
            'pl'=>'pokaż oferty',
            'en'=>'show offerts',
        ])]);
        Permission::create(['name' => 'show apps','trans'=>json_encode([
            'pl'=>'pokaż aplikacje',
            'en'=>'show apps'
        ])]);
        Permission::create(['name' => 'transport video','trans'=>json_encode([
            'pl'=>'transport video',
            'en'=>'transfer video'
        ])]);
//
//        $recruit->givePermissionTo($offerts);
//        $recruit->givePermissionTo($apps);
//        $recruit->givePermissionTo($transport);

        Schema::enableForeignKeyConstraints();
    }
}
