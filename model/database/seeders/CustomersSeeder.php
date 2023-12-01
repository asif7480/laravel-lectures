<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customers;


class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // customers::create([
        //     'name' => 'Asif',
        //     'email' => 'Asif@gmail.com'
        // ]);

        $customers = collect(
            [

                [
                    'name' => 'Ali',
                    'email' => 'Ali@gmail.com'
                ],
                [
                    'name' => 'Zia',
                    'email' => 'Zia@gmail.com'
                ],
                [
                    'name' => 'Aslam',
                    'email' => 'Aslam@gmail.com'
                ]
            ]
        );

        $customers->each(function($customer){
            customers::insert($customer);
        });
    }
}
