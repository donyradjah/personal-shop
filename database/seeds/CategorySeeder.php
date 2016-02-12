<?php

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
        DB::table('category')->truncate();

        $category = [
            ['id' => 1, 'category' => 'Fashion Pria', 'type' => 'main', 'child_id' => '',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'category' => 'Baju Tidur', 'type' => 'child', 'child_id' => '1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'category' => 'Hoodie', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'category' => 'Pakaian Dalam', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'category' => 'Sepatu', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'category' => 'Jaket', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 7, 'category' => 'Jam', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 8, 'category' => 'Aksesoris', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 9, 'category' => 'Kemeja', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 10, 'category' => 'Polo Shirt', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 11, 'category' => 'Sweater', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 12, 'category' => 'Celana Jeans', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 13, 'category' => 'Celana panjang', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 14, 'category' => 'Celana pendek', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 15, 'category' => 'Lainnya', 'type' => 'child', 'child_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 16, 'category' => 'Fashion Wanita', 'type' => 'main', 'child_id' => '', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 17, 'category' => 'Jaket', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 18, 'category' => 'Dress', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 19, 'category' => 'Blouse', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 20, 'category' => 'Kemeja', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 21, 'category' => 'Tanktop', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 22, 'category' => 'Rok', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 23, 'category' => 'Legging', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 24, 'category' => 'Sweater', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 25, 'category' => 'Cardigan', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 26, 'category' => 'Vest & Rompi', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 27, 'category' => 'Hoodie', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 28, 'category' => 'Sepatu', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 29, 'category' => 'Lainnya', 'type' => 'child', 'child_id' => '16', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 30, 'category' => 'Laptop', 'type' => 'main', 'child_id' => '', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 31, 'category' => 'Aksesoris', 'type' => 'child', 'child_id' => '30', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 32, 'category' => 'Batterai', 'type' => 'child', 'child_id' => '30', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 33, 'category' => 'Charger', 'type' => 'child', 'child_id' => '30', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 34, 'category' => 'Tas', 'type' => 'child', 'child_id' => '30', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 35, 'category' => 'Komputer', 'type' => 'main', 'child_id' => '', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 36, 'category' => 'Peripheral', 'type' => 'child', 'child_id' => '35', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 37, 'category' => 'Komponen Computer', 'type' => 'child', 'child_id' => '35', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 38, 'category' => 'Optical Drive', 'type' => 'child', 'child_id' => '35', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 39, 'category' => 'VGA Card', 'type' => 'child', 'child_id' => '35', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 40, 'category' => 'Harddisk & Flashdisk', 'type' => 'child', 'child_id' => '35', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 41, 'category' => 'Printer', 'type' => 'child', 'child_id' => '35', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 42, 'category' => 'Networking', 'type' => 'child', 'child_id' => '35', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 43, 'category' => 'Electronic', 'type' => 'main', 'child_id' => '', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 44, 'category' => 'Game Console', 'type' => 'child', 'child_id' => '43', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 45, 'category' => 'Audio', 'type' => 'child', 'child_id' => '43', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 46, 'category' => 'TV', 'type' => 'child', 'child_id' => '43', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 47, 'category' => 'Telephone', 'type' => 'child', 'child_id' => '43', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 48, 'category' => 'Listrik', 'type' => 'child', 'child_id' => '43', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 49, 'category' => 'Pencahayaan', 'type' => 'child', 'child_id' => '43', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 50, 'category' => 'Lainnya', 'type' => 'child', 'child_id' => '43', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 51, 'category' => 'Dapur', 'type' => 'main', 'child_id' => '', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 52, 'category' => 'Penyimpanan Makanan', 'type' => 'child', 'child_id' => '49', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 53, 'category' => 'Peralatan Dapur', 'type' => 'child', 'child_id' => '49', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 54, 'category' => 'Pisau', 'type' => 'child', 'child_id' => '49', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 55, 'category' => 'Food & Drink Maker', 'type' => 'child', 'child_id' => '49', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 56, 'category' => 'Peralatan Makan', 'type' => 'child', 'child_id' => '49', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 57, 'category' => 'Bekal', 'type' => 'child', 'child_id' => '49', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 58, 'category' => 'Handphone & Tablet', 'type' => 'main', 'child_id' => '', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 59, 'category' => 'Smartphone', 'type' => 'child', 'child_id' => '56', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 60, 'category' => 'Tablet', 'type' => 'child', 'child_id' => '56', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 61, 'category' => 'Fliphone', 'type' => 'child', 'child_id' => '56', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 62, 'category' => 'Kamera', 'type' => 'main', 'child_id' => '', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 63, 'category' => 'Lensa & Aksesoris', 'type' => 'child', 'child_id' => '60', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 64, 'category' => 'Flash & Aksesoris', 'type' => 'child', 'child_id' => '60', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 65, 'category' => 'Batterai , Charge & Grip', 'type' => 'child', 'child_id' => '60', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 66, 'category' => 'Aksesoris', 'type' => 'child', 'child_id' => '60', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 67, 'category' => 'Roll Film', 'type' => 'child', 'child_id' => '60', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 68, 'category' => 'Frame & Album', 'type' => 'child', 'child_id' => '60', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('category')->insert($category);
    }
}
