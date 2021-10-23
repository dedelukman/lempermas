<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([            
            'name' => 'Kue Basah',           
        ]);
        \App\Models\Category::create([            
            'name' => 'Kue Kering',           
        ]);
        \App\Models\Category::create([            
            'name' => 'Masakan',           
        ]);
        \App\Models\Category::create([            
            'name' => 'Minuman',           
        ]);
        \App\Models\Category::create([            
            'name' => 'Frozen Food',           
        ]);
    }
}
