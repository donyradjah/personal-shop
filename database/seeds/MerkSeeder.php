<?php

    use Illuminate\Database\Seeder;

    class MerkSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('merk')->truncate();

            $merk = [
                ['id' => 1,'merk' => 'Vans'  ],
            ];

            // insert batch
            DB::table('merk')->insert($merk);
        }
    }
