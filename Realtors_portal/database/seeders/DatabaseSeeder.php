<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('estate')-> insert([]);
        DB::table('estate_type')-> insert([]);
        DB::table('estate_status')-> insert([]);
        DB::table('city')-> insert(
            [
                'city_name' => 'Ha Noi',
                'country_id'=> '01',
            ]
        );
        DB::table('country')-> insert([]);
        DB::table('in_charge')-> insert([]);
        DB::table('employee')-> insert([]);
        DB::table('contract')-> insert([]);
        DB::table('client')-> insert([]);
        DB::table('transaction')-> insert([]);
        DB::table('transaction_type')-> insert([]);
        DB::table('contract_invoice')-> insert([]);
        DB::table('under_contract')-> insert([]);
        DB::table('contract_type')-> insert([]);
        DB::table('payment_frequency')-> insert([]);

    }
}
