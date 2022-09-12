<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'tel_number'=>'+99365097512', 
            'email_address'=>'hudayberdipolat@gmail.com', 
            'address'=>'Ashgabat, Turkmenistan',
        ]);
    }
}
