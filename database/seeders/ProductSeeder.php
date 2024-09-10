<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();


        DB::table('products')->truncate();

        $products = [
            ['id' => 1, 'points'=>1000,'price'=>100.00,'product_type'=>'Points','trans'=>json_encode([
                'pl'=>'Punkty',
                'en'=>'Points'
            ]),'trans_name'=>json_encode([
                'pl'=>'1000 punktów',
                'en'=>'1000 points'
            ]),'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 2, 'points'=>3000, 'price'=>200.00,'product_type'=>'Points','trans'=>json_encode([
                'pl'=>'Punkty',
                'en'=>'Points'
            ]),'trans_name'=>json_encode([
                'pl'=>'3000 punktów',
                'en'=>'3000 points'
            ]),'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 3, 'points'=>5000, 'price'=>300.00,'product_type'=>'Points','trans'=>json_encode([
                'pl'=>'Punkty',
                'en'=>'Points'
            ]),'trans_name'=>json_encode([
                'pl'=>'5000 punktów',
                'en'=>'5000 points'
            ]),'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 4, 'points'=>10000, 'price'=>400.00,'product_type'=>'Points','trans'=>json_encode([
                'pl'=>'Punkty',
                'en'=>'Points'
            ]),'trans_name'=>json_encode([
                'pl'=>'10000 punktów',
                'en'=>'10000 points'
            ]),'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 5, 'points'=>30000, 'price'=>500.00,'product_type'=>'Points','trans'=>json_encode([
                'pl'=>'Punkty',
                'en'=>'Points'
            ]),'trans_name'=>json_encode([
                'pl'=>'30000 punktów',
                'en'=>'30000 points'
            ]),'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 6, 'points'=>50000, 'price'=>600.00,'product_type'=>'Points','trans'=>json_encode([
                'pl'=>'Punkty',
                'en'=>'Points'
            ]),'trans_name'=>json_encode([
                'pl'=>'50000 punktów',
                'en'=>'50000 points'
            ]), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 7, 'points'=>100000, 'price'=>700.00,'product_type'=>'Points','trans'=>json_encode([
                'pl'=>'Punkty',
                'en'=>'Points'
            ]),'trans_name'=>json_encode([
                'pl'=>'100000 punktów',
                'en'=>'100000 points'
            ]),'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 8, 'points'=>0,'trans'=>json_encode([
                'pl'=>'Dodatkowe',
                'en'=>'Extra'
            ]), 'trans_name'=>json_encode([
                'pl'=>'Banner',
                'en'=>'Banner'
            ]),'price'=>250.00,'product_type'=>'Extra','created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 9, 'points'=>0,'trans'=>json_encode([
                'pl'=>'Dodatkowe',
                'en'=>'Extra'
            ]), 'trans_name'=>json_encode([
                'pl'=>'Wyróżniony pracodawca',
                'en'=>'Featured employer'
            ]), 'price'=>100.00,'product_type'=>'Extra','created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 10, 'points'=>0,'trans'=>json_encode([
                'pl'=>'Dodatkowe',
                'en'=>'Extra'
            ]), 'trans_name'=>json_encode([
                'pl'=>'Artykuł',
                'en'=>'Article'
            ]), 'price'=>250.00,'product_type'=>'Extra','created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 11, 'points'=>0,'trans'=>json_encode([
                'pl'=>'Dodatkowe',
                'en'=>'Extra'
            ]),'trans_name'=>json_encode([
                'pl'=>'Promowanie social',
                'en'=>'Promoting social'
            ]), 'price'=>350.00,'product_type'=>'Extra','created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 12, 'points'=>0,'trans'=>json_encode([
                'pl'=>'Dodatkowe',
                'en'=>'Extra'
            ]),'trans_name'=>json_encode([
                'pl'=>'Certyfikat50/50',
                'en'=>'50/50 certificate'
            ]), 'price'=>150.00,'product_type'=>'Extra','created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
        ];

        DB::table('products')->insert($products);

        Schema::enableForeignKeyConstraints();


    }
}
