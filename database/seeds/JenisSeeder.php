<?php

    use Illuminate\Database\Seeder;

    class JenisSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('jenis')->truncate();

            $jenis = [
                [ 'jenis' => 'running', 'category_id' => '5','created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'sneaker', 'category_id' => '5','created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'boots', 'category_id' => '5','created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Desert boots', 'category_id' => '5', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Oxford', 'category_id' => '5', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Loafers', 'category_id' => '5', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Monkstrap', 'category_id' => '5', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Denim', 'category_id' => '6', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Leather', 'category_id' => '6', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Varsity', 'category_id' => '6', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Parka', 'category_id' => '6', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Windbreaker', 'category_id' => '6', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Bush', 'category_id' => '6', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Casual', 'category_id' => '9', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Formal', 'category_id' => '9', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Flanel', 'category_id' => '9', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Denim', 'category_id' => '9', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Pendek', 'category_id' => '9', 'created_at' => \Carbon\Carbon::now()],
                [ 'jenis' => 'Batik', 'category_id' => '9', 'created_at' => \Carbon\Carbon::now()],


            ];

            // insert batch
            DB::table('jenis')->insert($jenis);
        }
    }
