<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable();
        $provinces = [
            ['name_en'=>'Province No. 1','name_np'=>'प्रदेश नं० १'],
            ['name_en'=>'Province No. 2','name_np'=>'प्रदेश नं० २'],
            ['name_en'=>'Bagmati Pradesh','name_np'=>'बागमती प्रदेश'],
            ['name_en'=>'Gandaki Pradesh', 'name_np'=>'गण्डकी प्रदेश'],
            ['name_en'=>'Lumbini Pradesh', 'name_np'=>'लुम्बिनी प्रदेश'],
            ['name_en'=>'Karnali Pradesh', 'name_np'=>'कर्णाली प्रदेश'],
            ['name_en'=>'Sudurpashchim Pradesh', 'name_np'=>'सुदूरपश्चिम प्रदेश'],


        ];
        DB::table('provinces')->insert($provinces);
    }
    public function truncateTable()
    {
        Schema::disableForeignKeyConstraints();
        \App\Models\Province::truncate();
        Schema::enableForeignKeyConstraints();
    }
}
