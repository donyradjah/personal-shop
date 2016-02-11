<?php

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
        DB::table('product')->truncate();

        $service = [
            ['id' => 1, 'name' => '001501', 'price' => '', 'category_id' => '1', 'desc' => '', 'stock' => '10', 'sell' => '0', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => '001501', 'price' => '', 'category_id' => '1', 'desc' => '', 'stock' => '10', 'sell' => '0', 'created_at' => \Carbon\Carbon::now()],
             ];

        // insert batch
        DB::table('product')->insert($service);

    }
}
