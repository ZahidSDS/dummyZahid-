<?php

use Illuminate\Database\Seeder;

class ClientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'mtype_id' => 2, 'name' => 'Zahid', 'surname' => 'Islam','phone' => '0430437703','address' => 'Macdonald St','mailing_address' =>'Bankstown', 'expire_date' => '2019-04-07',],
            ['id' => 2, 'mtype_id' => 2, 'name' => 'David', 'surname' => 'Mertz','phone' => '0430477703','address' => 'Emery ave','mailing_address' =>'Belmore', 'expire_date' => '2019-05-07',],
            ['id' => 3, 'mtype_id' => 3, 'name' => 'Elvera', 'surname' => 'Howell','phone' => '0455537704','address' => 'Denman RD','mailing_address' =>'Yagoona', 'expire_date' => '2019-05-17',],
            ['id' => 4, 'mtype_id' => 1, 'name' => 'Jasmin', 'surname' => 'Jenkins','phone' => '04607437705','address' => 'Liverpool st','mailing_address' =>'Liverpool', 'expire_date' => '2019-04-07',],
            ['id' => 5, 'mtype_id' => 3, 'name' => 'Fayyad', 'surname' => 'Hassan','phone' => '0490837706','address' => 'Elizabeth St','mailing_address' =>'Sydney', 'expire_date' => '2019-04-27',],

        ];

        foreach ($items as $item) {
            \App\Client::create($item);
        }
    }
}
