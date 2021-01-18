<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable();
        $districts = [
            ['name_en'=>'Bhojpur','name_np'=>' भोजपुर','province_id'=>'1'],
            ['name_en'=>'Dhankuta','name_np'=>'धनकुटा','province_id'=>'1'],
            ['name_en'=>'Ilam','name_np'=>'ईलाम','province_id'=>'1'],
            ['name_en'=>'Jhapa','name_np'=>'झापा','province_id'=>'1'],
            ['name_en'=>'Khotang','name_np'=>'खोटाङ','province_id'=>'1'],
            ['name_en'=>'Morang','name_np'=>'मोरङ','province_id'=>'1'],
            ['name_en'=>'Okhaldhunga','name_np'=>'ओखलढुङ्गा','province_id'=>'1'],
            ['name_en'=>'Panchthar','name_np'=>'पाँचथर','province_id'=>'1'],
            ['name_en'=>'Sankhuwasabha','name_np'=>'संखुवासभा','province_id'=>'1'],
            ['name_en'=>'Solukhumbu','name_np'=>'सोलुखुम्बु','province_id'=>'1'],
            ['name_en'=>'Sunsari','name_np'=>'सुनसरी','province_id'=>'1'],
            ['name_en'=>'Taplejung','name_np'=>'ताप्लेजुङ्ग','province_id'=>'1'],
            ['name_en'=>'Tehrathum','name_np'=>'तेह्रथुम','province_id'=>'1'],
            ['name_en'=>'Udayapur','name_np'=>'उदयपुर','province_id'=>'1'],
            ['name_en'=>'Bara','name_np'=>'बारा','province_id'=>'2'],
            ['name_en'=>'Dhanusha','name_np'=>'धनुषा','province_id'=>'2'],
            ['name_en'=>'Mahottari','name_np'=>'महोत्तरी','province_id'=>'2'],
            ['name_en'=>'Parsa','name_np'=>'पर्सा','province_id'=>'2'],
            ['name_en'=>'Rautahat','name_np'=>'रौतहट','province_id'=>'2'],
            ['name_en'=>'Saptari','name_np'=>'सप्तरी','province_id'=>'2'],
            ['name_en'=>'Sarlahi','name_np'=>'सर्लाही','province_id'=>'2'],
            ['name_en'=>'Siraha','name_np'=>'सिराहा','province_id'=>'2'],
            ['name_en'=>'Bhaktapur','name_np'=>'भक्तपुर','province_id'=>'3'],
            ['name_en'=>'Chitwan','name_np'=>'चितवन','province_id'=>'3'],
            ['name_en'=>'Dhading','name_np'=>'धादिङ','province_id'=>'3'],
            ['name_en'=>'Dolakha','name_np'=>'दाेलखा','province_id'=>'3'],
            ['name_en'=>'Kathmandu','name_np'=>'काठमाडौँ','province_id'=>'3'],
            ['name_en'=>'Kavrepalanchok','name_np'=>'काभ्रेपलान्चोक','province_id'=>'3'],
            ['name_en'=>'Lalitpur','name_np'=>'ललितपुर','province_id'=>'3'],
            ['name_en'=>'Makwanpur','name_np'=>'मकवानपुर','province_id'=>'3'],
            ['name_en'=>'Nuwakot','name_np'=>'नुवाकोट','province_id'=>'3'],
            ['name_en'=>'Ramechhap','name_np'=>'रामेछाप','province_id'=>'3'],
            ['name_en'=>'Rasuwa','name_np'=>'रसुवा','province_id'=>'3'],
            ['name_en'=>'Sindhuli','name_np'=>'सिन्धुली','province_id'=>'3'],
            ['name_en'=>'Sindhupalchowk','name_np'=>'सिन्धुपाल्चोक','province_id'=>'3'],
            ['name_en'=>'Baglung','name_np'=>'बागलुङ','province_id'=>'4'],
            ['name_en'=>'Gorkha','name_np'=>'गोरखा','province_id'=>'4'],
            ['name_en'=>'Kaski','name_np'=>'कास्की','province_id'=>'4'],
            ['name_en'=>'Lamjung','name_np'=>'लमजुङ','province_id'=>'4'],
            ['name_en'=>'Manang','name_np'=>'मनाङ','province_id'=>'4'],
            ['name_en'=>'Mustang','name_np'=>'मुस्ताङ','province_id'=>'4'],
            ['name_en'=>'Myagdi','name_np'=>'म्याग्दी','province_id'=>'4'],
            ['name_en'=>'NawalParasi (East)','name_np'=>'नवलपरासी (बर्दघाट सुस्ता पूर्व)','province_id'=>'4'],
            ['name_en'=>'Parbat','name_np'=>'पर्वत','province_id'=>'4'],
            ['name_en'=>'Syangja','name_np'=>'स्याङ्जा','province_id'=>'4'],
            ['name_en'=>'Tanahun','name_np'=>'तनहुँ','province_id'=>'4'],
            ['name_en'=>'Arghakhanchi','name_np'=>'अर्घाखाँची','province_id'=>'5'],
            ['name_en'=>'Banke','name_np'=>'बाँके','province_id'=>'5'],
            ['name_en'=>'Bardiya','name_np'=>'बर्दिया','province_id'=>'5'],
            ['name_en'=>'Dang','name_np'=>'दाङ','province_id'=>'5'],
            ['name_en'=>'Eastern Rukum','name_np'=>'पूर्वी रुकुम','province_id'=>'5'],
            ['name_en'=>'Gulmi','name_np'=>'गुल्मी','province_id'=>'5'],
            ['name_en'=>'Kapilvastu','name_np'=>'कपिलवस्तु','province_id'=>'5'],
            ['name_en'=>'Palpa','name_np'=>'पाल्पा','province_id'=>'5'],
            ['name_en'=>'NawalParasi (West)','name_np'=>'नवलपरासी (बर्दघाट सुस्ता पश्चिम)','province_id'=>'5'],
            ['name_en'=>'Pyuthan','name_np'=>'प्युठान','province_id'=>'5'],
            ['name_en'=>'Rolpa','name_np'=>'रोल्पा','province_id'=>'5'],
            ['name_en'=>'Rupandehi','name_np'=>'रुपन्देही','province_id'=>'5'],
            ['name_en'=>'Dailekh','name_np'=>'दैलेख','province_id'=>'6'],
            ['name_en'=>'Dolpa','name_np'=>'डोल्पा','province_id'=>'6'],
            ['name_en'=>'Humla','name_np'=>'हुम्ला','province_id'=>'6'],
            ['name_en'=>'Jajarkot','name_np'=>'जाजरकोट','province_id'=>'6'],
            ['name_en'=>'Jumla','name_np'=>'जुम्ला','province_id'=>'6'],
            ['name_en'=>'Kalikot','name_np'=>'कालिकोट','province_id'=>'6'],
            ['name_en'=>'Mugu','name_np'=>'मुगु','province_id'=>'6'],
            ['name_en'=>'Salyan','name_np'=>'सल्यान','province_id'=>'6'],
            ['name_en'=>'Surkhet','name_np'=>'सुर्खेत','province_id'=>'6'],
            ['name_en'=>'Western Rukum','name_np'=>'पश्चिमी रुकुम ','province_id'=>'6'],
            ['name_en'=>'Achham','name_np'=>'अछाम','province_id'=>'7'],
            ['name_en'=>'Baitadi','name_np'=>'बैतडी','province_id'=>'7'],
            ['name_en'=>'Bajhang','name_np'=>'बझाङ','province_id'=>'7'],
            ['name_en'=>'Bajura','name_np'=>'बाजुरा','province_id'=>'7'],
            ['name_en'=>'Dadeldhura','name_np'=>'डडेलधुरा','province_id'=>'7'],
            ['name_en'=>'Darchula','name_np'=>'दार्चुला','province_id'=>'7'],
            ['name_en'=>'Doti','name_np'=>'डोटी,','province_id'=>'7'],
            ['name_en'=>'Kailali','name_np'=>'कैलाली','province_id'=>'7'],
            ['name_en'=>'Kanchanpur','name_np'=>'कंचनपुर','province_id'=>'7'],




        ];
        DB::table('districts')->insert($districts);
    }
    public function truncateTable()
    {
        Schema::disableForeignKeyConstraints();
        \App\Models\District::truncate();
        Schema::enableForeignKeyConstraints();
    }
}
