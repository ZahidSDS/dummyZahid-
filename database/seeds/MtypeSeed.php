<?php

use Illuminate\Database\Seeder;

class MtypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Platinum',],
            ['id' => 2, 'name' => 'Gold',],
            ['id' => 3, 'name' => 'Silver',],

        ];

        foreach ($items as $item) {
            \App\Mtype::create($item);
        }
    }
}
