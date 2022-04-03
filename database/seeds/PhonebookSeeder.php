<?php

use App\Phonebook;
use Illuminate\Database\Seeder;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Phonebook::class, 100)->create(); // вызываем созданную фабрику
    }
}
