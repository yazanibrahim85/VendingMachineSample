<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SnacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('snacks')->delete();

        DB::table('snacks')->insert([
            [
                'name' => 'M&Ms',
                'code' => 'A1',
                'price' => 3.5,
                'quantity' => 5,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Hershey\'s',
                'code' => 'A2',
                'price' => 5.0,
                'quantity' => 8,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Mars',
                'code' => 'A3',
                'price' => 3.5,
                'quantity' => 6,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Milky Way',
                'code' => 'A4',
                'price' => 4,
                'quantity' => 5,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Cadbury',
                'code' => 'A5',
                'price' => 2.0,
                'quantity' => 2,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
              ],
            [
                'name' => 'Twix',
                'code' => 'B1',
                'price' => 3.5,
                'quantity' => 1,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Snickers',
                'code' => 'B2',
                'price' => 3.5,
                'quantity' => 8,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Cola',
                'code' => 'B3',
                'price' => 3.5,
                'quantity' => 0,
                'is_available' => 0,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Snickers1',
                'code' => 'B4',
                'price' => 3.5,
                'quantity' => 8,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Cola1',
                'code' => 'B5',
                'price' => 3.5,
                'quantity' => 0,
                'is_available' => 0,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'M&Ms',
                'code' => 'C1',
                'price' => 3.5,
                'quantity' => 5,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Hershey\'s',
                'code' => 'C2',
                'price' => 5.0,
                'quantity' => 8,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Mars',
                'code' => 'C3',
                'price' => 3.5,
                'quantity' => 6,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Milky Way',
                'code' => 'C4',
                'price' => 4,
                'quantity' => 5,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Cadbury',
                'code' => 'C5',
                'price' => 2.0,
                'quantity' => 2,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
              ],
              [
                'name' => 'M&Ms',
                'code' => 'D1',
                'price' => 3.5,
                'quantity' => 5,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Hershey\'s',
                'code' => 'D2',
                'price' => 5.0,
                'quantity' => 8,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Mars',
                'code' => 'D3',
                'price' => 3.5,
                'quantity' => 6,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Milky Way',
                'code' => 'D4',
                'price' => 4,
                'quantity' => 5,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Cadbury',
                'code' => 'D5',
                'price' => 2.0,
                'quantity' => 2,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
              ],

              [
                'name' => 'M&Ms',
                'code' => 'E1',
                'price' => 3.5,
                'quantity' => 5,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Hershey\'s',
                'code' => 'E2',
                'price' => 5.0,
                'quantity' => 8,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Mars',
                'code' => 'E3',
                'price' => 3.5,
                'quantity' => 6,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Milky Way',
                'code' => 'E4',
                'price' => 4,
                'quantity' => 5,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
            ],
            [
                'name' => 'Cadbury',
                'code' => 'E5',
                'price' => 2.0,
                'quantity' => 2,
                'is_available' => 1,
                'created_at'=> NOW(),
                'updated_at'=>NOW(),
              ],


        ]);
    }
}
