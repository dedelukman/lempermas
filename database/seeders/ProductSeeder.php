<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([            
            'name' => 'Cilok',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 1250,           
            'price_discount' => 1250*0.88,           
            'discount' => 12,           
            'discount_value' => 1250*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Bala Bala',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 1250,           
            'price_discount' => 1250*0.88,           
            'discount' => 12,           
            'discount_value' => 1250*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Bakwan Jagung',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 1250,           
            'price_discount' => 1250*0.88,           
            'discount' => 12,           
            'discount_value' => 1250*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Donat Gula',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Piscok',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Donat Mesis',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 2000,           
            'price_discount' => 2000*0.88,           
            'discount' => 12,           
            'discount_value' => 2000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Molen',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Roti Sosis',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Donat Isi Coklat',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 2000,           
            'price_discount' => 2000*0.88,           
            'discount' => 12,           
            'discount_value' => 2000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Puding Susu',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 2000,           
            'price_discount' => 2000*0.88,           
            'discount' => 12,           
            'discount_value' => 2000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Martabak',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 2500,           
            'price_discount' => 2500*0.88,           
            'discount' => 12,           
            'discount_value' => 2500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Pisang Keju',           
            'category_id' => 1,           
            'supplier_id' => 1,           
            'price' => 5000,           
            'price_discount' => 5000*0.88,           
            'discount' => 12,           
            'discount_value' => 5000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Buras Sayur',           
            'category_id' => 1,           
            'supplier_id' => 2,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Buras Oncom',           
            'category_id' => 1,           
            'supplier_id' => 2,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Papais',           
            'category_id' => 1,           
            'supplier_id' => 2,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Pastel Bihun',           
            'category_id' => 1,           
            'supplier_id' => 3,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Pastel Telor',           
            'category_id' => 1,           
            'supplier_id' => 3,           
            'price' => 2500,           
            'price_discount' => 2500*0.88,           
            'discount' => 12,           
            'discount_value' => 2500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Dadar Gulung',           
            'category_id' => 1,           
            'supplier_id' => 3,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Riso Rogut',           
            'category_id' => 1,           
            'supplier_id' => 3,           
            'price' => 2500,           
            'price_discount' => 2500*0.88,           
            'discount' => 12,           
            'discount_value' => 2500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Kroket',           
            'category_id' => 1,           
            'supplier_id' => 4,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Pisang Goreng',           
            'category_id' => 1,           
            'supplier_id' => 4,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Lemper ayam',           
            'category_id' => 1,           
            'supplier_id' => 4,           
            'price' => 3000,           
            'price_discount' => 3000*0.88,           
            'discount' => 12,           
            'discount_value' => 3000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Tahu isi',           
            'category_id' => 1,           
            'supplier_id' => 5,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Nasi Uduk Mika',           
            'category_id' => 3,           
            'supplier_id' => 5,           
            'price' => 6000,           
            'price_discount' => 6000*0.88,           
            'discount' => 12,           
            'discount_value' => 6000*0.12,           
        ]);\App\Models\Product::create([            
            'name' => 'Nasi Uduk Kerucut',           
            'category_id' => 3,           
            'supplier_id' => 5,           
            'price' => 8000,           
            'price_discount' => 8000*0.88,           
            'discount' => 12,           
            'discount_value' => 8000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Bihun goreng',           
            'category_id' => 3,           
            'supplier_id' => 5,           
            'price' => 6000,           
            'price_discount' => 6000*0.88,           
            'discount' => 12,           
            'discount_value' => 6000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Combro',           
            'category_id' => 1,           
            'supplier_id' => 6,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Onde onde',           
            'category_id' => 1,           
            'supplier_id' => 6,           
            'price' => 2000,           
            'price_discount' => 2000*0.88,           
            'discount' => 12,           
            'discount_value' => 2000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Sosis Solo',           
            'category_id' => 1,           
            'supplier_id' => 6,           
            'price' => 3000,           
            'price_discount' => 3000*0.88,           
            'discount' => 12,           
            'discount_value' => 3000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Gemblong',           
            'category_id' => 1,           
            'supplier_id' => 7,           
            'price' => 2000,           
            'price_discount' => 2000*0.88,           
            'discount' => 12,           
            'discount_value' => 2000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Ketan urab',           
            'category_id' => 1,           
            'supplier_id' => 7,           
            'price' => 2000,           
            'price_discount' => 2000*0.88,           
            'discount' => 12,           
            'discount_value' => 2000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Uli goreng',           
            'category_id' => 1,           
            'supplier_id' => 7,           
            'price' => 2000,           
            'price_discount' => 2000*0.88,           
            'discount' => 12,           
            'discount_value' => 2000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Kue ali',           
            'category_id' => 1,           
            'supplier_id' => 7,           
            'price' => 6000,           
            'price_discount' => 6000*0.88,           
            'discount' => 12,           
            'discount_value' => 6000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Bolu kukus',           
            'category_id' => 1,           
            'supplier_id' => 8,           
            'price' => 2000,           
            'price_discount' => 2000*0.88,           
            'discount' => 12,           
            'discount_value' => 2000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Bolu kukus gula merah',           
            'category_id' => 1,           
            'supplier_id' => 9,           
            'price' => 2000,           
            'price_discount' => 2000*0.88,           
            'discount' => 12,           
            'discount_value' => 2000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Apem',           
            'category_id' => 1,           
            'supplier_id' => 9,           
            'price' => 1500,           
            'price_discount' => 1500*0.88,           
            'discount' => 12,           
            'discount_value' => 1500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Risol Mayo',           
            'category_id' => 1,           
            'supplier_id' => 10,           
            'price' => 2500,           
            'price_discount' => 2500*0.88,           
            'discount' => 12,           
            'discount_value' => 2500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Susu vla vanila',           
            'category_id' => 1,           
            'supplier_id' => 10,           
            'price' => 3000,           
            'price_discount' => 3000*0.88,           
            'discount' => 12,           
            'discount_value' => 3000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Pastri Pisang Coklat',           
            'category_id' => 1,           
            'supplier_id' => 10,           
            'price' => 3000,           
            'price_discount' => 3000*0.88,           
            'discount' => 12,           
            'discount_value' => 3000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Risol ayam sayur',           
            'category_id' => 1,           
            'supplier_id' => 11,           
            'price' => 2500,           
            'price_discount' => 2500*0.88,           
            'discount' => 12,           
            'discount_value' => 2500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Gabin tape',           
            'category_id' => 1,           
            'supplier_id' => 11,           
            'price' => 2500,           
            'price_discount' => 2500*0.88,           
            'discount' => 12,           
            'discount_value' => 2500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Brownies donat',           
            'category_id' => 1,           
            'supplier_id' => 11,           
            'price' => 3000,           
            'price_discount' => 3000*0.88,           
            'discount' => 12,           
            'discount_value' => 3000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Bubur merah putih',           
            'category_id' => 1,           
            'supplier_id' => 12,           
            'price' => 11000,           
            'price_discount' => 11000*0.88,           
            'discount' => 12,           
            'discount_value' => 11000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Bubur tiga bersaudara',           
            'category_id' => 1,           
            'supplier_id' => 12,           
            'price' => 11000,           
            'price_discount' => 11000*0.88,           
            'discount' => 12,           
            'discount_value' => 11000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Lumpur lapindo',           
            'category_id' => 1,           
            'supplier_id' => 12,           
            'price' => 2500,           
            'price_discount' => 2500*0.88,           
            'discount' => 12,           
            'discount_value' => 2500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Lumpur kentang',           
            'category_id' => 1,           
            'supplier_id' => 12,           
            'price' => 2500,           
            'price_discount' => 2500*0.88,           
            'discount' => 12,           
            'discount_value' => 2500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Nasi bakar',           
            'category_id' => 3,           
            'supplier_id' => 13,           
            'price' => 11000,           
            'price_discount' => 11000*0.88,           
            'discount' => 12,           
            'discount_value' => 11000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Nasi goreng Mawut',           
            'category_id' => 3,           
            'supplier_id' => 13,           
            'price' => 6000,           
            'price_discount' => 6000*0.88,           
            'discount' => 12,           
            'discount_value' => 6000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Peyek Rebon / kacang',           
            'category_id' => 2,           
            'supplier_id' => 14,           
            'price' => 7000,           
            'price_discount' => 7000*0.88,           
            'discount' => 12,           
            'discount_value' => 7000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Nasi kurung',           
            'category_id' => 3,           
            'supplier_id' => 15,           
            'price' => 6000,           
            'price_discount' => 6000*0.88,           
            'discount' => 12,           
            'discount_value' => 6000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Bubur ketan',           
            'category_id' => 1,           
            'supplier_id' => 15,           
            'price' => 4000,           
            'price_discount' => 4000*0.88,           
            'discount' => 12,           
            'discount_value' => 4000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Bubur Sum sum',           
            'category_id' => 1,           
            'supplier_id' => 15,           
            'price' => 4000,           
            'price_discount' => 4000*0.88,           
            'discount' => 12,           
            'discount_value' => 4000*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Asinan Betawi',           
            'category_id' => 1,           
            'supplier_id' => 16,           
            'price' => 17500,           
            'price_discount' => 17500*0.88,           
            'discount' => 12,           
            'discount_value' => 17500*0.12,           
        ]);
        \App\Models\Product::create([            
            'name' => 'Mie goreng pedas',           
            'category_id' => 1,           
            'supplier_id' => 17,           
            'price' => 6000,           
            'price_discount' => 6000*0.88,           
            'discount' => 12,           
            'discount_value' => 6000*0.12,           
        ]);
    }
}
