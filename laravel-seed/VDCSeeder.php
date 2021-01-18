<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VDCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable();
        $vdcs = [
            //bhojpur(1)

            ['name_en'=>'Bhojpur Municipality','name_np'=>'भोजपुर नगरपालिका','district_id'=>'1','type_id'=>'1'],
            ['name_en'=>'ShadanNand Municipality','name_np'=>'षडानन्द नगरपालिका','district_id'=>'1','type_id'=>'1'],
            ['name_en'=>'TyamkeMaiyum Village Municipality','name_np'=>'ट्याम्केमैयुम गाउँपालिका','district_id'=>'1','type_id'=>'0'],
            ['name_en'=>'RamPrasadRai Village Municipality','name_np'=>'रामप्रसाद राई गाउँपालिका','district_id'=>'1','type_id'=>'0'],
            ['name_en'=>'Arun Village Municipality','name_np'=>'अरुण गाउँपालिका','district_id'=>'1','type_id'=>'0'],
            ['name_en'=>'Pauwadungma Village Municipality','name_np'=>'पौवादुङमा गाउँपालिका','district_id'=>'1','type_id'=>'0'],
            ['name_en'=>'Salpasilichho Village Municipality','name_np'=>'साल्पासिलिछो गाउँपालिका','district_id'=>'1','type_id'=>'0'],
            ['name_en'=>'Aamchok Village Municipality','name_np'=>'आमचोक गाउँपालिका','district_id'=>'1','type_id'=>'0'],
            ['name_en'=>'Hatuwagadhi Village Municipality','name_np'=>'हतुवागढी गाउँपालिका','district_id'=>'1','type_id'=>'0'],


            //Dhankutta(2)
            ['name_en'=>'Pakhribas Municipality','name_np'=>'पाख्रिबास नगरपालिका','district_id'=>'2','type_id'=>'1'],
            ['name_en'=>'Dhankutta Municipality','name_np'=>'धनकुटा नगरपालिका','district_id'=>'2','type_id'=>'1'],
            ['name_en'=>'Mahalaxmi Municipality','name_np'=>'महालक्ष्मी नगरपालिका','district_id'=>'2','type_id'=>'1'],
            ['name_en'=>'SanguriGadh Village Municipality','name_np'=>'साँगुरीगढी गाउँपालिका','district_id'=>'2','type_id'=>'0'],
            ['name_en'=>'Khalsa Chhintang Shahidbhumi Village Municipality','name_np'=>'खाल्सा छिन्ताङ सहिदभूमि गाउँपालिका','district_id'=>'2','type_id'=>'0'],
            ['name_en'=>'Chhathar Jorpati Village Municipality','name_np'=>'छथर जोरपाटी गाउँपालिका','district_id'=>'2','type_id'=>'0'],
            ['name_en'=>'Choubise Village Municipality','name_np'=>'चौविसे गाउँपालिका','district_id'=>'2','type_id'=>'0'],

            //Ilam(3)
             ['name_en'=>'Ilam Municipality','name_np'=>'ईलाम नगरपालिका','district_id'=>'3','type_id'=>'1'],
             ['name_en'=>'Deumai Municipality','name_np'=>'देउमाई नगरपालिका','district_id'=>'3','type_id'=>'1'],
             ['name_en'=>'Mai Municipality','name_np'=>'माई नगरपालिका','district_id'=>'3','type_id'=>'1'],
             ['name_en'=>'Suryodaya Municipality','name_np'=>'सूर्योदय नगरपालिका','district_id'=>'3','type_id'=>'1'],
             ['name_en'=>'Phakphokthum Village Municipality','name_np'=>'फाकफोकथुम गाउँपालिका','district_id'=>'3','type_id'=>'0'],
             ['name_en'=>'Chulachuli Village Municipality','name_np'=>'चुलाचुली गाउँपालिका','district_id'=>'3','type_id'=>'0'],
             ['name_en'=>'Maijogmai Village Municipality','name_np'=>'माईजोगमाई गाउँपालिका','district_id'=>'3','type_id'=>'0'],
             ['name_en'=>'Mansebung Village Municipality','name_np'=>'माङसेबुङ गाउँपालिका','district_id'=>'3','type_id'=>'0'],
             ['name_en'=>'Rong Village Municipality','name_np'=>'रोङ गाउँपालिका','district_id'=>'3','type_id'=>'0'],
             ['name_en'=>'Sandakpur Village Municipality','name_np'=>'सन्दकपुर गाउँपालिका','district_id'=>'3','type_id'=>'0'],


             //Jhapa(4)
             ['name_en'=>'Mechinagar Municipality','name_np'=>'मेचीनगर नगरपालिका','district_id'=>'4','type_id'=>'1'],
             ['name_en'=>'Damak Municipality','name_np'=>'दमक नगरपालिका','district_id'=>'4','type_id'=>'1'],
             ['name_en'=>'Kankai Municipality','name_np'=>'कन्काई नगरपालिका','district_id'=>'4','type_id'=>'1'],
             ['name_en'=>'Bhadrapur Municipality','name_np'=>'भद्रपुर नगरपालिका','district_id'=>'4','type_id'=>'1'],
             ['name_en'=>'ArjunDhara Municipality','name_np'=>'अर्जुनधारा नगरपालिका','district_id'=>'4','type_id'=>'1'],
             ['name_en'=>'ShivaSatakshi Municipality','name_np'=>'शिवशताक्षी नगरपालिका','district_id'=>'4','type_id'=>'1'],
             ['name_en'=>'GauraDaha Municipality','name_np'=>'गौरादह नगरपालिका','district_id'=>'4','type_id'=>'1'],
             ['name_en'=>'Birtamod Municipality','name_np'=>'विर्तामोड नगरपालिका','district_id'=>'4','type_id'=>'1'],
             ['name_en'=>'Kamal Village Municipality','name_np'=>'कमल गाउँपालिका','district_id'=>'4','type_id'=>'0'],
             ['name_en'=>'GauriGunj Village Municipality','name_np'=>'गौरीगंज गाउँपालिका','district_id'=>'4','type_id'=>'0'],
             ['name_en'=>'Bahradashi Village Municipality','name_np'=>'बाह्रदशी गाउँपालिका','district_id'=>'4','type_id'=>'0'],
             ['name_en'=>'Jhapa Village Municipality','name_np'=>'झापा गाउँपालिका','district_id'=>'4','type_id'=>'0'],
             ['name_en'=>'BuddhaShanti Village Municipality','name_np'=>'बुद्धशान्ति गाउँपालिका','district_id'=>'4','type_id'=>'0'],
             ['name_en'=>'HaldiBari Village Municipality','name_np'=>'हल्दिवारी गाउँपालिका','district_id'=>'4','type_id'=>'0'],
             ['name_en'=>'KachanKawal Village Municipality','name_np'=>'कचनकवल गाउँपालिका','district_id'=>'4','type_id'=>'0'],


            //Khotang(5)
            ['name_en'=>'Halesi Tuwachung Municipality','name_np'=>'हलेसी तुवाचुङ नगरपालिका','district_id'=>'5','type_id'=>'1'],
            ['name_en'=>'Rupakot Majhuwagadhi Municipality','name_np'=>' रुपाकोट मझुवागढी नगरपालिका','district_id'=>'5','type_id'=>'1'],
            ['name_en'=>'Aiselukharka Village Municipality','name_np'=>'ऐसेलुखर्क गाउँपालिका','district_id'=>'5','type_id'=>'0'],
            ['name_en'=>'Lamidanda Village Municipality','name_np'=>'लामीडाँडा गाउँपालिका','district_id'=>'5','type_id'=>'0'],
            ['name_en'=>'Jantedhunga Village Municipality','name_np'=>'जन्तेढुंगा गाउँपालिका','district_id'=>'5','type_id'=>'0'],
            ['name_en'=>'Khotehang Village Municipality','name_np'=>'खोटेहाङ गाउँपालिका','district_id'=>'5','type_id'=>'0'],
            ['name_en'=>'Kepilasgadhi Village Municipality','name_np'=>'केपिलासगढी गाउँपालिका','district_id'=>'5','type_id'=>'0'],
            ['name_en'=>'Diprung Village Municipality','name_np'=>'दिप्रुङ गाउँपालिका','district_id'=>'5','type_id'=>'0'],
            ['name_en'=>'Sakela Village Municipality','name_np'=>'साकेला गाउँपालिका','district_id'=>'5','type_id'=>'0'],
            ['name_en'=>'BarahaPokhari Village Municipality','name_np'=>'वराहपोखरी गाउँपालिका','district_id'=>'5','type_id'=>'0'],

            //Morang(6)
            ['name_en'=>'Biratnagar Metropolitan','name_np'=>'विराटनगर महानगरपालिका','district_id'=>'6','type_id'=>'3'],
            ['name_en'=>'Belbari Municipality','name_np'=>'बेलवारी नगरपालिका','district_id'=>'6','type_id'=>'1'],
            ['name_en'=>'Letang Municipality','name_np'=>'लेटाङ नगरपालिका','district_id'=>'6','type_id'=>'1'],
            ['name_en'=>'Pathari Shanishchare Municipality','name_np'=>'पथरी शनिश्चरे नगरपालिका','district_id'=>'6','type_id'=>'1'],
            ['name_en'=>'Rangeli Municipality','name_np'=>'रंगेली नगरपालिका','district_id'=>'6','type_id'=>'1'],
            ['name_en'=>'Ratuwamai Municipality','name_np'=>'रतुवामाई नगरपालिका','district_id'=>'6','type_id'=>'1'],
            ['name_en'=>'Sunawarshi Municipality','name_np'=>'सुनवर्षि नगरपालिका','district_id'=>'6','type_id'=>'1'],
            ['name_en'=>'Urlabari Municipality','name_np'=>'उर्लावारी नगरपालिका','district_id'=>'6','type_id'=>'1'],
            ['name_en'=>'Sundarharaicha Municipality','name_np'=>'सुन्दरहरैचा नगरपालिका','district_id'=>'6','type_id'=>'1'],
            ['name_en'=>'BudhiGanga Village Municipality','name_np'=>'बुढीगंगा गाउँपालिका','district_id'=>'6','type_id'=>'0'],
            ['name_en'=>'DhanaPalthan Village Municipality','name_np'=>'धनपालथान गाउँपालिका','district_id'=>'6','type_id'=>'0'],
            ['name_en'=>'Gramthan Village Municipality','name_np'=>'ग्रामथान गाउँपालिका','district_id'=>'6','type_id'=>'0'],
            ['name_en'=>'Jahada Village Municipality','name_np'=>'जहदा गाउँपालिका','district_id'=>'6','type_id'=>'0'],
            ['name_en'=>'Kanepokhari Village Municipality','name_np'=>'कानेपोखरी गाउँपालिका','district_id'=>'6','type_id'=>'0'],
            ['name_en'=>'Katahari Village Municipality','name_np'=>'कटहरी गाउँपालिका','district_id'=>'6','type_id'=>'0'],
            ['name_en'=>'Kerabari Village Municipality','name_np'=>'केरावारी गाउँपालिका','district_id'=>'6','type_id'=>'0'],

            //Okhaldhunga(7)
            ['name_en'=>'SiddhiCharan Municipality','name_np'=>'सिद्दिचरण नगरपालिका','district_id'=>'7','type_id'=>'1'],
            ['name_en'=>'Khijidemba Village Municipality','name_np'=>'खिजिदेम्बा गाउँपालिका','district_id'=>'7','type_id'=>'0'],
            ['name_en'=>'ChampaDevi Village Municipality','name_np'=>'चम्पादेवी गाउँपालिका','district_id'=>'7','type_id'=>'0'],
            ['name_en'=>'Chishankhugadhi Village Municipality','name_np'=>'चिशंखुगढी गाउँपालिका','district_id'=>'7','type_id'=>'0'],
            ['name_en'=>'Manebhanjyangmun Village Municipality','name_np'=>'मानेभञ्याङ गाउँपालिका','district_id'=>'7','type_id'=>'0'],
            ['name_en'=>'Molung Village Municipality','name_np'=>'मोलुङ गाउँपालिका','district_id'=>'7','type_id'=>'0'],
            ['name_en'=>'Likhu Village Municipality','name_np'=>'लिखु गाउँपालिका','district_id'=>'7','type_id'=>'0'],
            ['name_en'=>'Sunkoshi Municipality','name_np'=>'सुनकोशी गाउँपालिका','district_id'=>'7','type_id'=>'0'],


            //pachthar(8)
             ['name_en'=>'Phidim Municipality','name_np'=>'फिदिम नगरपालिका','district_id'=>'8','type_id'=>'1'],
             ['name_en'=>'Phalelung Village Municipality','name_np'=>'फालेलुंग गाउँपालिका','district_id'=>'8','type_id'=>'0'],
             ['name_en'=>'Phalgunanda Village Municipality','name_np'=>'फाल्गुनन्द गाउँपालिका','district_id'=>'8','type_id'=>'0'],
             ['name_en'=>'Hilihang Village Municipality','name_np'=>'हिलिहाङ गाउँपालिका','district_id'=>'8','type_id'=>'0'],
             ['name_en'=>'Kummayak Village Municipality','name_np'=>'कुम्मायक गाउँपालिका','district_id'=>'8','type_id'=>'0'],
             ['name_en'=>'Miklajung Village Municipality','name_np'=>'मिक्लाजुङ गाउँपालिका','district_id'=>'8','type_id'=>'0'],
             ['name_en'=>'Tumwewa Village Municipality','name_np'=>'तुम्बेवा गाउँपालिका','district_id'=>'8','type_id'=>'0'],

            //sankhuwasabha(9)
            ['name_en'=>'Chainpur Municipality','name_np'=>'चैनपुर नगरपालिका','district_id'=>'9','type_id'=>'1'],
            ['name_en'=>'DharmaDevi Municipality','name_np'=>'धर्मदेवी नगरपालिका','district_id'=>'9','type_id'=>'1'],
            ['name_en'=>'Khandbari Municipality','name_np'=>'खाँदवारी नगरपालिका','district_id'=>'9','type_id'=>'1'],
            ['name_en'=>'Madi Municipality','name_np'=>'मादी नगरपालिका','district_id'=>'9','type_id'=>'1'],
            ['name_en'=>'Panchkhapan Municipality','name_np'=>'पाँचखपन नगरपालिका','district_id'=>'9','type_id'=>'1'],
            ['name_en'=>'BhotKhola Village Municipality','name_np'=>'भोटखोला गाउँपालिका','district_id'=>'9','type_id'=>'0'],
            ['name_en'=>'Chichila Village Municipality','name_np'=>'चिचिला गाउँपालिका','district_id'=>'9','type_id'=>'0'],
            ['name_en'=>'Makalu Village Municipality','name_np'=>'मकालु गाउँपालिका','district_id'=>'9','type_id'=>'0'],
            ['name_en'=>'SavaPokhari Village Municipality','name_np'=>'सभापोखरी गाउँपालिका','district_id'=>'9','type_id'=>'0'],
            ['name_en'=>'Silichong Village Municipality','name_np'=>'सिलीचोङ गाउँपालिका','district_id'=>'9','type_id'=>'0'],

            //solukhumbu(10)
            ['name_en'=>'Solududhkunda Municipality','name_np'=>'सोलुदुधकुण्ड नगरपालिका','district_id'=>'10','type_id'=>'1'],
            ['name_en'=>'DudhKoshi Village Municipality','name_np'=>'दुधकोसी गाउँपालिका','district_id'=>'10','type_id'=>'0'],
            ['name_en'=>'Khumbu Pasanglhamu Village Municipality','name_np'=>'खुम्वु पासाङल्हमु गाउँपालिका','district_id'=>'10','type_id'=>'0'],
            ['name_en'=>'Dudkausika Village Municipality','name_np'=>'दुधकौशिका गाउँपालिका','district_id'=>'10','type_id'=>'0'],
            ['name_en'=>'Nechasalyan Village Municipality','name_np'=>'नेचासल्यान गाउँपालिका','district_id'=>'10','type_id'=>'0'],
            ['name_en'=>'Mahakulung Village Municipality','name_np'=>'माहाकुलुङ गाउँपालिका','district_id'=>'10','type_id'=>'0'],
            ['name_en'=>'LikhuPike Village Municipality','name_np'=>'लिखु पिके गाउँपालिका','district_id'=>'10','type_id'=>'0'],
            ['name_en'=>'Sotang Village Municipality','name_np'=>'सोताङ गाउँपालिका','district_id'=>'10','type_id'=>'0'],

            //Sunsari(11)
            ['name_en'=>'Itahari Sub-Metropolitan','name_np'=>'ईटहरी उपमहानगरपालिका','district_id'=>'11','type_id'=>'2'],
            ['name_en'=>'Dharan Sub-Metropolitan','name_np'=>'धरान उपमहानगरपालिका','district_id'=>'11','type_id'=>'2'],
            ['name_en'=>'Inaruwa Municipality','name_np'=>'ईनरुवा नगरपालिका','district_id'=>'11','type_id'=>'1'],
            ['name_en'=>'Duhabi Municipality','name_np'=>'दुहवी नगरपालिका','district_id'=>'11','type_id'=>'1'],
            ['name_en'=>'RamDhuni Municipality','name_np'=>'रामधुनी नगरपालिका','district_id'=>'11','type_id'=>'1'],
            ['name_en'=>'Baraha Municipality','name_np'=>'बराह नगरपालिका','district_id'=>'11','type_id'=>'1'],
            ['name_en'=>'DewanGanj Village Municipality','name_np'=>'देवानगञ्ज गाउँपालिका','district_id'=>'11','type_id'=>'0'],
            ['name_en'=>'Koshi Village Municipality','name_np'=>'कोशी गाउँपालिका','district_id'=>'11','type_id'=>'0'],
            ['name_en'=>'Gadhi Village Municipality','name_np'=>'गढी गाउँपालिका','district_id'=>'11','type_id'=>'0'],
            ['name_en'=>'Barju Village Municipality','name_np'=>'बर्जु गाउँपालिका','district_id'=>'11','type_id'=>'0'],
            ['name_en'=>'Bhokraha Village Municipality','name_np'=>'भोक्राहा गाउँपालिका','district_id'=>'11','type_id'=>'0'],
            ['name_en'=>'HariNagara Village Municipality','name_np'=>'हरिनगरा गाउँपालिका','district_id'=>'11','type_id'=>'0'],

                //taplejung(12)
             ['name_en'=>'Phungling Municipality','name_np'=>'फुङलिङ नगरपालिका','district_id'=>'12','type_id'=>'1'],
             ['name_en'=>'Aathrai Tribeni Village Municipality','name_np'=>'आठराई त्रिवेणी गाउँपालिका','district_id'=>'12','type_id'=>'0'],
             ['name_en'=>'Sidingba Village Municipality','name_np'=>'सिदिङ्वा गाउँपालिका','district_id'=>'12','type_id'=>'0'],
             ['name_en'=>'Phaktanglung Village Municipality','name_np'=>'फक्ताङलुङ गाउँपालिका','district_id'=>'12','type_id'=>'0'],
             ['name_en'=>'Mikwakhola Village Municipality','name_np'=>'मिक्वाखोला गाउँपालिका','district_id'=>'12','type_id'=>'0'],
             ['name_en'=>'Meringden Village Municipality','name_np'=>'मेरिङदेन गाउँपालिका','district_id'=>'12','type_id'=>'0'],
             ['name_en'=>'Maiwakhola Village Municipality','name_np'=>'मैवाखोला गाउँपालिका','district_id'=>'12','type_id'=>'0'],
             ['name_en'=>'Yangwarak Village Municipality','name_np'=>'याङवरक गाउँपालिका','district_id'=>'12','type_id'=>'0'],
             ['name_en'=>'Sirijangha Village Municipality','name_np'=>'सिरीजङ्घा गाउँपालिका','district_id'=>'12','type_id'=>'0'],

            //tehrathum(13)
            ['name_en'=>'Myanglung Municipality','name_np'=>'म्याङलुङ नगरपालिका','district_id'=>'13','type_id'=>'1'],
            ['name_en'=>'Laligurans Municipality','name_np'=>'लालीगुराँस नगरपालिका','district_id'=>'13','type_id'=>'1'],
            ['name_en'=>'Aathrai Village Municipality','name_np'=>'आठराई गाउँपालिका','district_id'=>'13','type_id'=>'0'],
            ['name_en'=>'Chhathar Village Municipality','name_np'=>'छथर गाउँपालिका','district_id'=>'13','type_id'=>'0'],
            ['name_en'=>'Phedap Village Municipality','name_np'=>'फेदाप गाउँपालिका','district_id'=>'13','type_id'=>'0'],
            ['name_en'=>'Menchhayayem Village Municipality','name_np'=>'मेन्छयायेम गाउँपालिका','district_id'=>'13','type_id'=>'0'],



            //udayapur(14)
            ['name_en'=>'Kataari Municipality','name_np'=>'कटारी नगरपालिका','district_id'=>'14','type_id'=>'1'],
            ['name_en'=>'Chaudandigadhi Municipality','name_np'=>'चौदण्डीगढी नगरपालिका','district_id'=>'14','type_id'=>'1'],
            ['name_en'=>'Triyuga Municipality','name_np'=>'त्रियुगा नगरपालिका','district_id'=>'14','type_id'=>'1'],
            ['name_en'=>'Belaka Municipality','name_np'=>'वेलका नगरपालिका','district_id'=>'14','type_id'=>'1'],
            ['name_en'=>'Udayapurgadhi Village Municipality','name_np'=>'उदयपुरगढी गाउँपालिका','district_id'=>'14','type_id'=>'0'],
            ['name_en'=>'Tapli Village Municipality','name_np'=>'ताप्ली गाउँपालिका','district_id'=>'14','type_id'=>'0'],
            ['name_en'=>'Rautamai Village Municipality','name_np'=>'रौतामाई गाउँपालिका','district_id'=>'14','type_id'=>'0'],

            //Bara(15)
            ['name_en'=>'Kalaiya Sub-Metropolitan','name_np'=>'कलैया उपमहानगरपालिका','district_id'=>'15','type_id'=>'2'],
            ['name_en'=>'Jeetpur Simara Sub-Metropolitan','name_np'=>'जीतपुर सिमरा उपमहानगरपालिका','district_id'=>'15','type_id'=>'2'],
            ['name_en'=>'Kolhabi Municipality','name_np'=>'कोल्हवी नगरपालिका','district_id'=>'15','type_id'=>'1'],
            ['name_en'=>'Nijgadh Municipality','name_np'=>'निजगढ नगरपालिका','district_id'=>'15','type_id'=>'1'],
            ['name_en'=>'Mahagadhimai Municipality','name_np'=>'महागढीमाई नगरपालिका','district_id'=>'15','type_id'=>'1'],
            ['name_en'=>'Simraungadh Municipality','name_np'=>'सिम्रौनगढ नगरपालिका','district_id'=>'15','type_id'=>'1'],
            ['name_en'=>'Pachrauta Municipality','name_np'=>'पचरौता नगरपालिका','district_id'=>'15','type_id'=>'1'],
            ['name_en'=>'Aadarsha kotwal Village Municipality','name_np'=>'आदर्श कोटवाल गाउँपालिका','district_id'=>'15','type_id'=>'0'],
            ['name_en'=>'Karaiyamai Village Municipality','name_np'=>'करैयामाई गाउँपालिका','district_id'=>'15','type_id'=>'0'],
            ['name_en'=>'Devtal Village Municipality','name_np'=>'देवताल गाउँपालिका','district_id'=>'15','type_id'=>'0'],
            ['name_en'=>'Parwanipur Village Municipality','name_np'=>'परवानीपुर गाउँपालिका','district_id'=>'15','type_id'=>'0'],
            ['name_en'=>'Prasauni Village Municipality','name_np'=>'प्रसौनी गाउँपालिका','district_id'=>'15','type_id'=>'0'],
            ['name_en'=>'Pheta Village Municipality','name_np'=>'फेटा गाउँपालिका','district_id'=>'15','type_id'=>'0'],
            ['name_en'=>'Baragadhi Village Municipality','name_np'=>'बारागढी गाउँपालिका','district_id'=>'15','type_id'=>'0'],
            ['name_en'=>'Suwarna Village Municipality','name_np'=>'सुवर्ण गाउँपालिका','district_id'=>'15','type_id'=>'0'],
            ['name_en'=>'Bishrampur Village Municipality','name_np'=>'विश्रामपुर गाउँपालिका','district_id'=>'15','type_id'=>'0'],

            //dhanusha(16)
            ['name_en'=>'Janakpur Sub-Metropolitan','name_np'=>'जनकपुर उपमहानगरपालिका','district_id'=>'16','type_id'=>'2'],
            ['name_en'=>'kshireshwornath Municipality','name_np'=>'क्षिरेश्वरनाथ नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Ganeshman Charnath Municipality','name_np'=>'गणेशमान चारनाथ नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Dhanushadham Municipality','name_np'=>'धनुषाधाम नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Nagrain Municipality','name_np'=>'नगराइन नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Bideha Municipality','name_np'=>'विदेह नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Mithila Municipality','name_np'=>'मिथिला नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'SahidNagar Municipality','name_np'=>'शहीदनगर नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Sabaila Municipality','name_np'=>'सबैला नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Kamala Municipality','name_np'=>'कमला नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Mithila Bihari Municipality','name_np'=>'मिथिला बिहारी नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Hansapur Municipality','name_np'=>'हंसपुर नगरपालिका','district_id'=>'16','type_id'=>'1'],
            ['name_en'=>'Janaknandini Village Municipality','name_np'=>'जनकनन्दिनी गाउँपालिका','district_id'=>'16','type_id'=>'0'],
            ['name_en'=>'Bateshwor Village Municipality','name_np'=>'बटेश्वर गाउँपालिका','district_id'=>'16','type_id'=>'0'],
            ['name_en'=>'Mukhiyapatti musaharmiya Village Municipality','name_np'=>'मुखियापट्टी मुसहरमिया गाउँपालिका','district_id'=>'16','type_id'=>'0'],
            ['name_en'=>'laxminiya Village Municipality','name_np'=>'लक्ष्मीनिया गाउँपालिका','district_id'=>'16','type_id'=>'0'],
            ['name_en'=>'Dhanauji Village Municipality','name_np'=>'धनौजी गाउँपालिका','district_id'=>'16','type_id'=>'0'],


            //mahottari(17)
            ['name_en'=>'Jaleshwar Municipality','name_np'=>'जलेश्वर नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Bardibas Municipality','name_np'=>'बर्दिबास नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Gaushala Municipality','name_np'=>'गौशाला नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Loharpatti Municipality','name_np'=>'लोहरपट्टी नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Ramgopalpur Municipality','name_np'=>'रामगोपालपुर नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Manra Municipality','name_np'=>'मनरा शिसवा नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Matihani Municipality','name_np'=>'मटिहानी नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Bhagaha Municipality','name_np'=>'भँगाहा नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Balwa Municipality','name_np'=>'बलवा नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Aurahi Municipality','name_np'=>'औरही नगरपालिका','district_id'=>'17','type_id'=>'1'],
            ['name_en'=>'Ekdara Village Municipality','name_np'=>'एकडारा गाउँपालिका','district_id'=>'17','type_id'=>'0'],
            ['name_en'=>'Sonma Village Municipality','name_np'=>'सोनमा गाउँपालिका','district_id'=>'17','type_id'=>'0'],
            ['name_en'=>'Samsi Village Municipality','name_np'=>'साम्सी गाउँपालिका','district_id'=>'17','type_id'=>'0'],
            ['name_en'=>'Mahottari Village Municipality','name_np'=>'महोत्तरी गाउँपालिका','district_id'=>'17','type_id'=>'0'],
            ['name_en'=>'Pipra Village Municipality','name_np'=>'पिपरा गाउँपालिका','district_id'=>'17','type_id'=>'0'],

            //parsa(18)
            ['name_en'=>'Birgunj Metropolitan','name_np'=>'बिरगंज महानगरपालिका','district_id'=>'18','type_id'=>'3'],
            ['name_en'=>'Pokhariya Municipality','name_np'=>'पोखरिया नगरपालिका','district_id'=>'18','type_id'=>'1'],
            ['name_en'=>'Bahudarmai Municipality','name_np'=>'बहुदरमाई नगरपालिका','district_id'=>'18','type_id'=>'1'],
            ['name_en'=>'Parsagadhi Municipality','name_np'=>'पर्सागढी नगरपालिका','district_id'=>'18','type_id'=>'1'],
            ['name_en'=>'Thori Village Municipality','name_np'=>'ठोरी गाउँपालिका','district_id'=>'18','type_id'=>'0'],
            ['name_en'=>'Jagarnathpur Village Municipality','name_np'=>'जगरनाथपुर गाउँपालिका','district_id'=>'18','type_id'=>'0'],
            ['name_en'=>'Dhobini Village Municipality','name_np'=>'धोबीनी गाउँपालिका','district_id'=>'18','type_id'=>'0'],
            ['name_en'=>'Chhipaharmai Village Municipality','name_np'=>'छिपहरमाई गाउँपालिका','district_id'=>'18','type_id'=>'0'],
            ['name_en'=>'Pakaha Mainpur Village Municipality','name_np'=>'पकाहा मैनपुर गाउँपालिका','district_id'=>'18','type_id'=>'0'],
            ['name_en'=>'Bindabasini Village Municipality','name_np'=>'बिन्दबासिनी गाउँपालिका','district_id'=>'18','type_id'=>'0'],
            ['name_en'=>'Sakhuwa Prasauni Village Municipality','name_np'=>'सखुवा प्रसौनी गाउँपालिका','district_id'=>'18','type_id'=>'0'],
            ['name_en'=>'Paterwa Sugauli Village Municipality','name_np'=>'पटेर्वा सुगौली गाउँपालिका','district_id'=>'18','type_id'=>'0'],
            ['name_en'=>'Kalikamai Village Municipality','name_np'=>'कालिकामाई गाउँपालिका','district_id'=>'18','type_id'=>'0'],
            ['name_en'=>'Jira Bhawani Village Municipality','name_np'=>'जिरा भवानी गाउँपालिका','district_id'=>'18','type_id'=>'0'],

            //rautahat(19)
            ['name_en'=>'Chandrapur Municipality','name_np'=>'चन्द्रपुर नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Garuda Municipality','name_np'=>'गरुडा नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Gaur Municipality','name_np'=>'गौर नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Baudhimai Municipality','name_np'=>'बौधीमाई नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Brindawan Municipality','name_np'=>'बृन्दावन नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Dewahi Gonahi Municipality','name_np'=>'देवाही गोनाही नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Gadhimai Municipality','name_np'=>'गढीमाई नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Gujara Municipality','name_np'=>'गुजरा नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Katahariya Municipality','name_np'=>'कटहरिया नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Madhav Narayan Municipality','name_np'=>'माधव नारायण नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Maulapur Municipality','name_np'=>'मौलापुर नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Phatuwabijaypur Municipality','name_np'=>'फतुवाबिजयपुर नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Ishnath Municipality','name_np'=>'ईशनाथ नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Paroha Municipality','name_np'=>'परोहा नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Rajpur Municipality','name_np'=>'राजपुर नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Rajdevi Municipality','name_np'=>'राजदेवी नगरपालिका','district_id'=>'19','type_id'=>'1'],
            ['name_en'=>'Durga Bhagawati Village Municipality','name_np'=>'','district_id'=>'19','type_id'=>'0'],
            ['name_en'=>'Yamunamai Village Municipality','name_np'=>'यमुनामाई गाउँपालिका','district_id'=>'19','type_id'=>'0'],

            //saptari(20)
            ['name_en'=>'Rajbiraj Municipality','name_np'=>'राजविराज नगरपालिका','district_id'=>'20','type_id'=>'1'],
            ['name_en'=>'Kanchanrup Municipality','name_np'=>'कञ्चनरुप नगरपालिका','district_id'=>'20','type_id'=>'1'],
            ['name_en'=>'Dakneshwori Municipality','name_np'=>'डाक्नेश्वरी नगरपालिका','district_id'=>'20','type_id'=>'1'],
            ['name_en'=>'Bodebarsain Municipality','name_np'=>'बोदेबरसाईन नगरपालिका','district_id'=>'20','type_id'=>'1'],
            ['name_en'=>'Khadak Municipality','name_np'=>'खडक नगरपालिका','district_id'=>'20','type_id'=>'1'],
            ['name_en'=>'ShambhuNath Municipality','name_np'=>'शम्भुनाथ नगरपालिका','district_id'=>'20','type_id'=>'1'],
            ['name_en'=>'Surunga Municipality','name_np'=>'सुरुङ्‍गा नगरपालिका','district_id'=>'20','type_id'=>'1'],
            ['name_en'=>'HanumanNagar Kankalini Municipality','name_np'=>'हनुमाननगर कङ्‌कालिनी नगरपालिका','district_id'=>'20','type_id'=>'1'],
            ['name_en'=>'Saptakoshi Municipality','name_np'=>'सप्तकोशी नगरपालिका','district_id'=>'20','type_id'=>'1'],
            ['name_en'=>'Agnisair Krishnasawaran Village Municipality','name_np'=>'अग्निसाइर कृष्णासवरन गाउँपालिका','district_id'=>'20','type_id'=>'0'],
            ['name_en'=>'Chhinnamasta Village Municipality','name_np'=>'छिन्नमस्ता गाउँपालिका','district_id'=>'20','type_id'=>'0'],
            ['name_en'=>'Mahadeva Village Municipality','name_np'=>'महादेवा गाउँपालिका','district_id'=>'20','type_id'=>'0'],
            ['name_en'=>'Tirahut Village Municipality','name_np'=>'तिरहुत गाउँपालिका','district_id'=>'20','type_id'=>'0'],
            ['name_en'=>'Tilathi Koiladi Village Municipality','name_np'=>'तिलाठी कोईलाडी गाउँपालिका','district_id'=>'20','type_id'=>'0'],
            ['name_en'=>'Rupani Village Municipality','name_np'=>'रुपनी गाउँपालिका','district_id'=>'20','type_id'=>'0'],
            ['name_en'=>'Belhi Chapena Village Municipality','name_np'=>'बेल्ही चपेना गाउँपालिका','district_id'=>'20','type_id'=>'0'],
            ['name_en'=>'Bishnupur Village Municipality','name_np'=>'बिष्णुपुर गाउँपालिका','district_id'=>'20','type_id'=>'0'],
            ['name_en'=>'Balan Bihul Village Municipality','name_np'=>'बलान-बिहुल गाउँपालिका','district_id'=>'20','type_id'=>'0'],

            //sarlahi(21)
            ['name_en'=>'Ishworpur Municipality','name_np'=>'ईश्वरपुर नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Malangwa Municipality','name_np'=>'मलंगवा नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Lalbandi Municipality','name_np'=>'लालबन्दी नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Haripur Municipality','name_np'=>'हरिपुर नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Haripurwa Municipality','name_np'=>'हरिपुर्वा नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Harion Municipality','name_np'=>'हरिवन नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Barhathwa Municipality','name_np'=>'बरहथवा नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Balra Municipality','name_np'=>'बलरा नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Godaita Municipality','name_np'=>'गोडैटा नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Bagmati Municipality','name_np'=>'बागमती नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Kawilasi Municipality','name_np'=>'कविलासी नगरपालिका','district_id'=>'21','type_id'=>'1'],
            ['name_en'=>'Chakraghatta Village Municipality','name_np'=>'चक्रघट्टा गाउँपालिका','district_id'=>'21','type_id'=>'0'],
            ['name_en'=>'Chandranagar Village Municipality','name_np'=>'चन्द्रनगर गाउँपालिका','district_id'=>'21','type_id'=>'0'],
            ['name_en'=>'Dhankaul Village Municipality','name_np'=>'धनकौल गाउँपालिका','district_id'=>'21','type_id'=>'0'],
            ['name_en'=>'Brahmapuri Village Municipality','name_np'=>'ब्रह्मपुरी गाउँपालिका','district_id'=>'21','type_id'=>'0'],
            ['name_en'=>'Ramnagar Village Municipality','name_np'=>'रामनगर गाउँपालिका','district_id'=>'21','type_id'=>'0'],
            ['name_en'=>'Bishnu Village Municipality','name_np'=>'विष्णु गाउँपालिका','district_id'=>'21','type_id'=>'0'],
            ['name_en'=>'Kaudena Village Municipality','name_np'=>'कौडेना गाउँपालिका','district_id'=>'21','type_id'=>'0'],
            ['name_en'=>'Parsa Village Municipality','name_np'=>'पर्सा गाउँपालिका','district_id'=>'21','type_id'=>'0'],
            ['name_en'=>'Basbariya Village Municipality','name_np'=>'बसबरीया गाउँपालिका','district_id'=>'21','type_id'=>'0'],

            //siraha(22)
            ['name_en'=>'Lahan Municipality','name_np'=>'लहान नगरपालिका','district_id'=>'22','type_id'=>'1'],
            ['name_en'=>'Dhangadhimai Municipality','name_np'=>'धनगढीमाई नगरपालिका','district_id'=>'22','type_id'=>'1'],
            ['name_en'=>'Siraha Municipality','name_np'=>'सिरहा नगरपालिका','district_id'=>'22','type_id'=>'1'],
            ['name_en'=>'GolBajar Municipality','name_np'=>'गोलबजार नगरपालिका','district_id'=>'22','type_id'=>'1'],
            ['name_en'=>'Mirchaiya Municipality','name_np'=>'मिर्चैयाँ नगरपालिका','district_id'=>'22','type_id'=>'1'],
            ['name_en'=>'Kalyanpur Municipality','name_np'=>'कल्याणपुर नगरपालिका','district_id'=>'22','type_id'=>'1'],
            ['name_en'=>'Karjanha Municipality','name_np'=>'कर्जन्हा नगरपालिका','district_id'=>'22','type_id'=>'1'],
            ['name_en'=>'Sukhipur Municipality','name_np'=>'सुखीपुर नगरपालिका','district_id'=>'22','type_id'=>'1'],
            ['name_en'=>'Bhagwanpur Village Municipality','name_np'=>'भगवानपुर गाउँपालिका','district_id'=>'22','type_id'=>'0'],
            ['name_en'=>'Aurahi Village Municipality','name_np'=>'औरही गाउँपालिका','district_id'=>'22','type_id'=>'0'],
            ['name_en'=>'Bishnupur Village Municipality','name_np'=>'विष्णुपुर गाउँपालिका','district_id'=>'22','type_id'=>'0'],
            ['name_en'=>'Bariyapatti Village Municipality','name_np'=>'बरियारपट्टी गाउँपालिका','district_id'=>'22','type_id'=>'0'],
            ['name_en'=>'Laxmipur Patari Village Municipality','name_np'=>'लक्ष्मीपुर पतारी गाउँपालिका','district_id'=>'22','type_id'=>'0'],
            ['name_en'=>'Naraha Village Municipality','name_np'=>'नरहा गाउँपालिका','district_id'=>'22','type_id'=>'0'],
            ['name_en'=>'Sakhuwanankarkatti Village Municipality','name_np'=>'सखुवानान्कारकट्टी गाउँपालिका','district_id'=>'22','type_id'=>'0'],
            ['name_en'=>'Anarma Village Municipality','name_np'=>'अर्नमा गाउँपालिका','district_id'=>'22','type_id'=>'0'],
            ['name_en'=>'Nawarajpur Village Municipality','name_np'=>'नवराजपुर गाउँपालिका','district_id'=>'22','type_id'=>'0'],

            //Bhaktapur(23)
            ['name_en'=>'Changunarayan Municipality','name_np'=>'चाँगुनारायण नगरपालिका','district_id'=>'23','type_id'=>'1'],
            ['name_en'=>'Bhaktapur Municipality','name_np'=>'भक्तपुर नगरपालिका','district_id'=>'23','type_id'=>'1'],
            ['name_en'=>'Madhyapur Thimi Municipality','name_np'=>'मध्यपुर थिमी नगरपालिका','district_id'=>'23','type_id'=>'1'],
            ['name_en'=>'Suryabinayak Municipality','name_np'=>'सूर्यविनायक नगरपालिका','district_id'=>'23','type_id'=>'1'],

            //Chitwan(24)
            ['name_en'=>'Bharatpur Metropolitan','name_np'=>'भरतपुर महानगरपालिका','district_id'=>'24','type_id'=>'3'],
            ['name_en'=>'Kalika Municipality','name_np'=>'कालिका नगरपालिका','district_id'=>'24','type_id'=>'1'],
            ['name_en'=>'Khairhani Municipality','name_np'=>'खैरहनी नगरपालिका','district_id'=>'24','type_id'=>'1'],
            ['name_en'=>'Madi Municipality','name_np'=>'माडी नगरपालिका','district_id'=>'24','type_id'=>'1'],
            ['name_en'=>'Ratnanagar Municipality','name_np'=>'रत्ननगर नगरपालिका','district_id'=>'24','type_id'=>'1'],
            ['name_en'=>'Rapti Municipality','name_np'=>'राप्ती नगरपालिका','district_id'=>'24','type_id'=>'1'],
            ['name_en'=>'Ichchhakamana Village Municipality','name_np'=>'इच्छाकामना गाउँपालिका','district_id'=>'24','type_id'=>'0'],

            //Dhading(25)
            ['name_en'=>'Dhunibeshi Municipality','name_np'=>'धुनीबेंशी नगरपालिका','district_id'=>'25','type_id'=>'1'],
            ['name_en'=>'Neelakantha Municipality','name_np'=>'निलकण्ठ नगरपालिका','district_id'=>'25','type_id'=>'1'],
            ['name_en'=>'Khaniyabas Village Municipality','name_np'=>'खनियाबास गाउँपालिका','district_id'=>'25','type_id'=>'0'],
            ['name_en'=>'Gajuri Village Municipality','name_np'=>'गजुरी गाउँपालिका','district_id'=>'25','type_id'=>'0'],
            ['name_en'=>'Galchhi Village Municipality','name_np'=>'गल्छी गाउँपालिका','district_id'=>'25','type_id'=>'0'],
            ['name_en'=>'GangaJamuna Village Municipality','name_np'=>'गङ्गाजमुना गाउँपालिका','district_id'=>'25','type_id'=>'0'],
            ['name_en'=>'Jwalamukhi Village Municipality','name_np'=>'ज्वालामूखी गाउँपालिका','district_id'=>'25','type_id'=>'0'],
            ['name_en'=>'Thakre Village Municipality','name_np'=>'थाक्रे गाउँपालिका','district_id'=>'25','type_id'=>'0'],
            ['name_en'=>'Netrawati Village Municipality','name_np'=>'नेत्रावति गाउँपालिका','district_id'=>'25','type_id'=>'0'],
            ['name_en'=>'Benighat Rorang Village Municipality','name_np'=>'बेनीघाट रोराङ्ग गाउँपालिका','district_id'=>'25','type_id'=>'0'],
            ['name_en'=>'Rubi Valley Village Municipality','name_np'=>'रुवी भ्याली गाउँपालिका','district_id'=>'25','type_id'=>'0'],
            ['name_en'=>'Siddhalek Village Municipality','name_np'=>'सिद्धलेक गाउँपालिका','district_id'=>'25','type_id'=>'0'],


            //Dolakha(26)
            ['name_en'=>'Jiri Municipality','name_np'=>'जिरी नगरपालिका','district_id'=>'26','type_id'=>'1'],
            ['name_en'=>'Bhimeshwor Municipality','name_np'=>'भिमेश्वर नगरपालिका','district_id'=>'26','type_id'=>'1'],
            ['name_en'=>'Kalinchowk Village Municipality','name_np'=>'कालिन्चोक गाउँपालिका','district_id'=>'26','type_id'=>'0'],
            ['name_en'=>'Gaurishankar Village Municipality','name_np'=>'गौरीशङ्कर गाउँपालिका','district_id'=>'26','type_id'=>'0'],
            ['name_en'=>'Tamakoshi Village Municipality','name_np'=>'तामाकोशी गाउँपालिका','district_id'=>'26','type_id'=>'0'],
            ['name_en'=>'Melung Village Municipality','name_np'=>'मेलुङ्ग गाउँपालिका','district_id'=>'26','type_id'=>'0'],
            ['name_en'=>'Bigu Village Municipality','name_np'=>'विगु गाउँपालिका','district_id'=>'26','type_id'=>'0'],
            ['name_en'=>'Baiteshwor Village Municipality','name_np'=>'वैतेश्वर गाउँपालिका','district_id'=>'26','type_id'=>'0'],
            ['name_en'=>'Shailung Village Municipality','name_np'=>'शैलुङ्ग गाउँपालिका','district_id'=>'26','type_id'=>'0'],

            //Kathmandu(27)
            ['name_en'=>'Kathmandu Metropolitan','name_np'=>'काठमाण्डौं महानगरपालिका','district_id'=>'27','type_id'=>'3'],
            ['name_en'=>'Kageshwori Manohara Municipality','name_np'=>'कागेश्वरी मनोहरा नगरपालिका','district_id'=>'27','type_id'=>'1'],
            ['name_en'=>'Kritipur Municipality','name_np'=>'कीर्तिपुर नगरपालिका','district_id'=>'27','type_id'=>'1'],
            ['name_en'=>'Gokarneshwor Municipality','name_np'=>'गोकर्णेश्वर नगरपालिका','district_id'=>'27','type_id'=>'1'],
            ['name_en'=>'Chandragiri Municipality','name_np'=>'चन्द्रागिरी नगरपालिका','district_id'=>'27','type_id'=>'1'],
            ['name_en'=>'Tokha Municipality','name_np'=>'टोखा नगरपालिका','district_id'=>'27','type_id'=>'1'],
            ['name_en'=>'Tarakeshwor Municipality','name_np'=>'तारकेश्वर नगरपालिका','district_id'=>'27','type_id'=>'1'],
            ['name_en'=>'Dakshinkali Municipality','name_np'=>'दक्षिणकाली नगरपालिका','district_id'=>'27','type_id'=>'1'],
            ['name_en'=>'Nagarjun Municipality','name_np'=>'नागार्जुन नगरपालिका','district_id'=>'27','type_id'=>'1'],
            ['name_en'=>'Budhanilkantha Municipality','name_np'=>'बुढानिलकण्ठ नगरपालिका','district_id'=>'27','type_id'=>'1'],
            ['name_en'=>'Shankharapur Municipality','name_np'=>'शङ्खरापुर नगरपालिका','district_id'=>'27','type_id'=>'1'],


            //Kavrepalanchok(28)
            ['name_en'=>'Dhulikhel Municipality','name_np'=>'धुलिखेल नगरपालिका','district_id'=>'28','type_id'=>'1'],
            ['name_en'=>'Banepa Municipality','name_np'=>'बनेपा नगरपालिका','district_id'=>'28','type_id'=>'1'],
            ['name_en'=>'Panauti Municipality','name_np'=>'पनौती नगरपालिका','district_id'=>'28','type_id'=>'1'],
            ['name_en'=>'PanchKhal Municipality','name_np'=>'पाँचखाल नगरपालिका','district_id'=>'28','type_id'=>'1'],
            ['name_en'=>'NamoBuddha Municipality','name_np'=>'नमोबुद्ध नगरपालिका','district_id'=>'28','type_id'=>'1'],
            ['name_en'=>'Mandandeupur Municipality','name_np'=>'मण्डनदेउपुर नगरपालिका','district_id'=>'28','type_id'=>'1'],
            ['name_en'=>'Khani khola Village Municipality','name_np'=>'खानीखोला गाउँपालिका','district_id'=>'28','type_id'=>'0'],
            ['name_en'=>'Chaurideurali Village Municipality','name_np'=>'चौंरीदेउराली गाउँपालिका','district_id'=>'28','type_id'=>'0'],
            ['name_en'=>'Temal Village Municipality','name_np'=>'तेमाल गाउँपालिका','district_id'=>'28','type_id'=>'0'],
            ['name_en'=>'Bethanchowk Village Municipality','name_np'=>'बेथानचोक गाउँपालिका','district_id'=>'28','type_id'=>'0'],
            ['name_en'=>'Bhumlu Village Municipality','name_np'=>'भुम्लु गाउँपालिका','district_id'=>'28','type_id'=>'0'],
            ['name_en'=>'Mahabharat Village Municipality','name_np'=>'महाभारत गाउँपालिका','district_id'=>'28','type_id'=>'0'],
            ['name_en'=>'Roshi Village Municipality','name_np'=>'रोशी गाउँपालिका','district_id'=>'28','type_id'=>'0'],

            //Lalitpur(29)
            ['name_en'=>'Lalitpur Metropolitan','name_np'=>'ललितपुर महानगरपालिका','district_id'=>'29','type_id'=>'3'],
            ['name_en'=>'Godawari Municipality','name_np'=>'गोदावरी नगरपालिका','district_id'=>'29','type_id'=>'1'],
            ['name_en'=>'Konjyosom Village Municipality','name_np'=>'कोन्ज्योसोम गाउँपालिका','district_id'=>'29','type_id'=>'0'],
            ['name_en'=>'Bagmati Village Municipality','name_np'=>'बागमती गाउँपालिका','district_id'=>'29','type_id'=>'0'],
            ['name_en'=>'Mahankal Village Municipality','name_np'=>'महाङ्काल गाउँपालिका','district_id'=>'29','type_id'=>'0'],

            //Makwanpur(30)
            ['name_en'=>'Hetauda Sub-Metropolitan','name_np'=>'हेटौडा उपमहानगरपालिका','district_id'=>'30','type_id'=>'2'],
            ['name_en'=>'Thaha Municipality','name_np'=>'थाहा नगरपालिका','district_id'=>'30','type_id'=>'1'],
            ['name_en'=>'Indrasarowar Village Municipality','name_np'=>'इन्द्रसरोबर गाउँपालिका','district_id'=>'30','type_id'=>'0'],
            ['name_en'=>'Kailash Village Municipality','name_np'=>'कैलाश गाउँपालिका','district_id'=>'30','type_id'=>'0'],
            ['name_en'=>'Bakaiya Village Municipality','name_np'=>'बकैया गाउँपालिका','district_id'=>'30','type_id'=>'0'],
            ['name_en'=>'Bagmati Village Municipality','name_np'=>'बाग्मति गाउँपालिका','district_id'=>'30','type_id'=>'0'],
            ['name_en'=>'Bhimphedi Village Municipality','name_np'=>'भिमफेदी गाउँपालिका','district_id'=>'30','type_id'=>'0'],
            ['name_en'=>'Makawanpurgadhi Village Municipality','name_np'=>'मकवानपुरगढी गाउँपालिका','district_id'=>'30','type_id'=>'0'],
            ['name_en'=>'Manahari Village Municipality','name_np'=>'मनहरी गाउँपालिका','district_id'=>'30','type_id'=>'0'],
            ['name_en'=>'Raksirang Village Municipality','name_np'=>'राक्सिराङ्ग गाउँपालिका','district_id'=>'30','type_id'=>'0'],

            //Nuwakot(31)
            ['name_en'=>'Bidur Municipality','name_np'=>'विदुर नगरपालिका','district_id'=>'31','type_id'=>'1'],
            ['name_en'=>'Belkotgadhi Municipality','name_np'=>'बेलकोटगढी नगरपालिका','district_id'=>'31','type_id'=>'1'],
            ['name_en'=>'Kakani Village Municipality','name_np'=>'ककनी गाउँपालिका','district_id'=>'31','type_id'=>'0'],
            ['name_en'=>'Kispang Village Municipality','name_np'=>'किस्पाङ गाउँपालिका','district_id'=>'31','type_id'=>'0'],
            ['name_en'=>'Tadi Village Municipality','name_np'=>'तादी गाउँपालिका','district_id'=>'31','type_id'=>'0'],
            ['name_en'=>'Tarakeshwor Village Municipality','name_np'=>'तारकेश्वर गाउँपालिका','district_id'=>'31','type_id'=>'0'],
            ['name_en'=>'Dupcheshwor Village Municipality','name_np'=>'दुप्चेश्वर गाउँपालिका','district_id'=>'31','type_id'=>'0'],
            ['name_en'=>'Panchakanya Village Municipality','name_np'=>'पञ्चकन्या गाउँपालिका','district_id'=>'31','type_id'=>'0'],
            ['name_en'=>'Meghang Village Municipality','name_np'=>'मेघाङ गाउँपालिका','district_id'=>'31','type_id'=>'0'],
            ['name_en'=>'Shivapuri Village Municipality','name_np'=>'शिवपुरी गाउँपालिका','district_id'=>'31','type_id'=>'0'],
            ['name_en'=>'Suryagadhi Village Municipality','name_np'=>'सुर्यगढी गाउँपालिका','district_id'=>'31','type_id'=>'0'],

            //Ramechhap(32)
            ['name_en'=>'Manthali Municipality','name_np'=>'मन्थली नगरपालिका','district_id'=>'32','type_id'=>'1'],
            ['name_en'=>'Ramechhap Municipality','name_np'=>'रामेछाप नगरपालिका','district_id'=>'32','type_id'=>'1'],
            ['name_en'=>'Umakunda Village Municipality','name_np'=>'उमाकुण्ड गाउँपालिका','district_id'=>'32','type_id'=>'0'],
            ['name_en'=>'Khandadevi Village Municipality','name_np'=>'खाँडादेवी गाउँपालिका','district_id'=>'32','type_id'=>'0'],
            ['name_en'=>'Gokulganga Village Municipality','name_np'=>'गोकुलगङ्गा गाउँपालिका','district_id'=>'32','type_id'=>'0'],
            ['name_en'=>'Doramba Village Municipality','name_np'=>'दोरम्बा गाउँपालिका','district_id'=>'32','type_id'=>'0'],
            ['name_en'=>'Sunapati Village Municipality','name_np'=>'सुनापती गाउँपालिका','district_id'=>'32','type_id'=>'0'],

            //Rasuwa(33)
            ['name_en'=>'Uttargaya Village Municipality','name_np'=>'उत्तरगया गाउँपालिका','district_id'=>'33','type_id'=>'0'],
            ['name_en'=>'Kalika Village Municipality','name_np'=>'कालिका गाउँपालिका','district_id'=>'33','type_id'=>'0'],
            ['name_en'=>'Gosaikunda Village Municipality','name_np'=>'गोसाईकुण्ड गाउँपालिका','district_id'=>'33','type_id'=>'0'],
            ['name_en'=>'Naukunda Village Municipality','name_np'=>'नौकुण्ड गाउँपालिका','district_id'=>'33','type_id'=>'0'],
            ['name_en'=>'Parvatikunda Village Municipality','name_np'=>'पार्वतीकुण्ड गाउँपालिका','district_id'=>'33','type_id'=>'0'],

            //Sindhuli(34)
            ['name_en'=>'Kamalamai Municipality','name_np'=>'कमलामाई नगरपालिका','district_id'=>'34','type_id'=>'1'],
            ['name_en'=>'Dudhauli Municipality','name_np'=>'दुधौली नगरपालिका','district_id'=>'34','type_id'=>'1'],
            ['name_en'=>'Golanjor Village Municipality','name_np'=>'गोलन्जर गाउँपालिका','district_id'=>'34','type_id'=>'0'],
            ['name_en'=>'Ghyanglekh Village Municipality','name_np'=>'घ्याङलेख गाउँपालिका','district_id'=>'34','type_id'=>'0'],
            ['name_en'=>'Tinpatan Village Municipality','name_np'=>'तीनपाटन गाउँपालिका','district_id'=>'34','type_id'=>'0'],
            ['name_en'=>'Phikkal Village Municipality','name_np'=>'फिक्कल गाउँपालिका','district_id'=>'34','type_id'=>'0'],
            ['name_en'=>'Marin Village Municipality','name_np'=>'मरिण गाउँपालिका','district_id'=>'34','type_id'=>'0'],
            ['name_en'=>'Hariharpurgadhi Village Municipality','name_np'=>'हरिहरपुरगढी गाउँपालिका','district_id'=>'34','type_id'=>'0'],

            //Sindhupalchowk(35)
            ['name_en'=>'Chautara Sangachowkgadhi Municipality','name_np'=>'चौतारा साँगाचोकगढी नगरपालिका','district_id'=>'35','type_id'=>'1'],
            ['name_en'=>'Bahrabise Municipality','name_np'=>'बाह्रविसे नगरपालिका','district_id'=>'35','type_id'=>'1'],
            ['name_en'=>'Melamchi Municipality','name_np'=>'मेलम्ची नगरपालिका','district_id'=>'35','type_id'=>'1'],
            ['name_en'=>'Indrawati Village Municipality','name_np'=>'ईन्द्रावती गाउँपालिका','district_id'=>'35','type_id'=>'0'],
            ['name_en'=>'Jugal Village Municipality','name_np'=>'जुगल गाउँपालिका','district_id'=>'35','type_id'=>'0'],
            ['name_en'=>'Panchpokhari thangpal Village Municipality','name_np'=>'पाँचपोखरी थाङपाल गाउँपालिका','district_id'=>'35','type_id'=>'0'],
            ['name_en'=>'Balephi Village Municipality','name_np'=>'बलेफी गाउँपालिका','district_id'=>'35','type_id'=>'0'],
            ['name_en'=>'Bhotekoshi Village Municipality','name_np'=>'भोटेकोशी गाउँपालिका','district_id'=>'35','type_id'=>'0'],
            ['name_en'=>'Lisankhu Pakhar Village Municipality','name_np'=>'लिसङ्खु पाखर गाउँपालिका','district_id'=>'35','type_id'=>'0'],
            ['name_en'=>'Helambu Village Municipality','name_np'=>'हेलम्बु गाउँपालिका','district_id'=>'35','type_id'=>'0'],
            ['name_en'=>'Tripura Sundari Village Municipality','name_np'=>'त्रिपुरासुन्दरी गाउँपालिका','district_id'=>'35','type_id'=>'0'],

            //Baglung(36)
            ['name_en'=>'Baglung Municipality','name_np'=>'बागलुङ नगरपालिका','district_id'=>'36','type_id'=>'1'],
            ['name_en'=>'Galkot Municipality','name_np'=>'गल्कोट नगरपालिका','district_id'=>'36','type_id'=>'1'],
            ['name_en'=>'Jaimini Municipality','name_np'=>'जैमिनी नगरपालिका','district_id'=>'36','type_id'=>'1'],
            ['name_en'=>'Dhorpatan Municipality','name_np'=>'ढोरपाटन नगरपालिका','district_id'=>'36','type_id'=>'1'],
            ['name_en'=>'Bareng Village Municipality','name_np'=>'वरेङ गाउँपालिका','district_id'=>'36','type_id'=>'0'],
            ['name_en'=>'Kathekhola Village Municipality','name_np'=>'काठेखोला गाउँपालिका','district_id'=>'36','type_id'=>'0'],
            ['name_en'=>'Tamankhola Village Municipality','name_np'=>'तमानखोला गाउँपालिका','district_id'=>'36','type_id'=>'0'],
            ['name_en'=>'Tarakhola Village Municipality','name_np'=>'ताराखोला गाउँपालिका','district_id'=>'36','type_id'=>'0'],
            ['name_en'=>'Nisikhola Village Municipality','name_np'=>'निसीखोला गाउँपालिका','district_id'=>'36','type_id'=>'0'],
            ['name_en'=>'badigad Village Municipality','name_np'=>'वडिगाड गाउँपालिका','district_id'=>'36','type_id'=>'0'],

            //Gorkha(37)
            ['name_en'=>'Gorkha Municipality','name_np'=>'गोरखा नगरपालिका','district_id'=>'37','type_id'=>'1'],
            ['name_en'=>'Palungtar Municipality','name_np'=>'पालुङटार नगरपालिका','district_id'=>'37','type_id'=>'1'],
            ['name_en'=>'Sulikot Village Municipality','name_np'=>'सुलीकोट गाउँपालिका','district_id'=>'37','type_id'=>'0'],
            ['name_en'=>'Siranchowk Village Municipality','name_np'=>'सिरानचोक गाउँपालिका','district_id'=>'37','type_id'=>'0'],
            ['name_en'=>'Ajirkot Village Municipality','name_np'=>'अजिरकोट गाउँपालिका','district_id'=>'37','type_id'=>'0'],
            ['name_en'=>'Aarughat Village Municipality','name_np'=>'आरूघाट गाउँपालिका','district_id'=>'37','type_id'=>'0'],
            ['name_en'=>'Gandaki Village Municipality','name_np'=>'गण्डकी गाउँपालिका','district_id'=>'37','type_id'=>'0'],
            ['name_en'=>'Chumanuwri Village Municipality','name_np'=>'चुमनुव्री गाउँपालिका','district_id'=>'37','type_id'=>'0'],
            ['name_en'=>'Dharche Village Municipality','name_np'=>'धार्चे गाउँपालिका','district_id'=>'37','type_id'=>'0'],
            ['name_en'=>'Bhimsen Village Municipality','name_np'=>'भिमसेन गाउँपालिका','district_id'=>'37','type_id'=>'0'],
            ['name_en'=>'Shahid Lakhan Village Municipality','name_np'=>'शहिद लखन गाउँपालिका','district_id'=>'37','type_id'=>'0'],

            //Kaski(38)
            ['name_en'=>'Pokhara Lekhnath Metropolitan','name_np'=>'पोखरा लेखनाथ महानगरपालिका','district_id'=>'38','type_id'=>'3'],
            ['name_en'=>'Annapurna Village Municipality','name_np'=>'अन्नपूर्ण गाउँपालिका','district_id'=>'38','type_id'=>'0'],
            ['name_en'=>'Machhapuchhre Village Municipality','name_np'=>'माछापुच्छ्रे गाउँपालिका','district_id'=>'38','type_id'=>'0'],
            ['name_en'=>'Madi Village Municipality','name_np'=>'मादी गाउँपालिका','district_id'=>'38','type_id'=>'0'],
            ['name_en'=>'Rupa Village Municipality','name_np'=>'रूपा गाउँपालिका','district_id'=>'38','type_id'=>'0'],


            //Lamjung(39)
            ['name_en'=>'Besishahar Municipality','name_np'=>'बेसीशहर नगरपालिका','district_id'=>'39','type_id'=>'1'],
            ['name_en'=>'MadhyaNepal Municipality','name_np'=>'मध्यनेपाल नगरपालिका','district_id'=>'39','type_id'=>'1'],
            ['name_en'=>'Rainas Municipality','name_np'=>'रार्इनास नगरपालिका','district_id'=>'39','type_id'=>'1'],
            ['name_en'=>'Sundarbazar Municipality','name_np'=>'सुन्दरबजार नगरपालिका','district_id'=>'39','type_id'=>'1'],
            ['name_en'=>'Kwholasothar Village Municipality','name_np'=>'क्व्होलासोथार गाउँपालिका','district_id'=>'39','type_id'=>'0'],
            ['name_en'=>'Dudhpokhari Village Municipality','name_np'=>'दूधपोखरी गाउँपालिका','district_id'=>'39','type_id'=>'0'],
            ['name_en'=>'Dordi Village Municipality','name_np'=>'दोर्दी गाउँपालिका','district_id'=>'39','type_id'=>'0'],
            ['name_en'=>'Marsyangdi Village Municipality','name_np'=>'मर्स्याङदी गाउँपालिका','district_id'=>'39','type_id'=>'0'],

            //Manang(40)
            ['name_en'=>'Chame Village Municipality','name_np'=>'चामे गाउँपालिका','district_id'=>'40','type_id'=>'0'],
            ['name_en'=>'Narphu Village Municipality','name_np'=>'नारफू गाउँपालिका','district_id'=>'40','type_id'=>'0'],
            ['name_en'=>'Nason Village Municipality','name_np'=>'नाशोङ गाउँपालिका','district_id'=>'40','type_id'=>'0'],
            ['name_en'=>'Nesyang Village Municipality','name_np'=>'नेस्याङ गाउँपालिका','district_id'=>'40','type_id'=>'0'],

            //Mustang(41)
            ['name_en'=>'Gharapjhong Village Municipality','name_np'=>'घरपझोङ गाउँपालिका','district_id'=>'41','type_id'=>'0'],
            ['name_en'=>'Thasang Village Municipality','name_np'=>'थासाङ गाउँपालिका','district_id'=>'41','type_id'=>'0'],
            ['name_en'=>'Dalome Village Municipality','name_np'=>'दालोमे गाउँपालिका','district_id'=>'41','type_id'=>'0'],
            ['name_en'=>'Lomanthang Village Municipality','name_np'=>'लोमन्थाङ गाउँपालिका','district_id'=>'41','type_id'=>'0'],
            ['name_en'=>'Varagung Muktichhetra Village Municipality','name_np'=>'वाह्रगाउँ मुक्तिक्षेत्र गाउँपालिका','district_id'=>'41','type_id'=>'0'],

            //Myagdi(42)
            ['name_en'=>'Beni Village Municipality','name_np'=>'बेनी नगरपालिका','district_id'=>'42','type_id'=>'0'],
            ['name_en'=>'Dhawalagiri Village Municipality','name_np'=>'धवलागिरी गाउँपालिका','district_id'=>'42','type_id'=>'0'],
            ['name_en'=>'Mangala Village Municipality','name_np'=>'मंगला गाउँपालिका','district_id'=>'42','type_id'=>'0'],
            ['name_en'=>'Malika Village Municipality','name_np'=>'मालिका गाउँपालिका','district_id'=>'42','type_id'=>'0'],
            ['name_en'=>'Raghuganga Village Municipality','name_np'=>'रघुगंगा गाउँपालिका','district_id'=>'42','type_id'=>'0'],

            //NawalParasi (East) (43)
            ['name_en'=>'Kawasoti Municipality','name_np'=>'कावासोती नगरपालिका','district_id'=>'43','type_id'=>'1'],
            ['name_en'=>'Gaindakot Municipality','name_np'=>'गैडाकोट नगरपालिका','district_id'=>'43','type_id'=>'1'],
            ['name_en'=>'Devchuli Municipality','name_np'=>'देवचुली नगरपालिका','district_id'=>'43','type_id'=>'1'],
            ['name_en'=>'Madhyabindu Municipality','name_np'=>'मध्यविन्दु नगरपालिका','district_id'=>'43','type_id'=>'1'],
            ['name_en'=>'Bungdikali Village Municipality','name_np'=>'बुङ्दीकाली गाउँपालिका','district_id'=>'43','type_id'=>'0'],
            ['name_en'=>'Bulingtar Village Municipality','name_np'=>'बुलिङटार गाउँपालिका','district_id'=>'43','type_id'=>'0'],
            ['name_en'=>'Binayitribeni Village Municipality','name_np'=>'विनयी त्रिवेणी गाउँपालिका','district_id'=>'43','type_id'=>'0'],
            ['name_en'=>'Hupsekot Village Municipality','name_np'=>'हुप्सेकोट गाउँपालिका','district_id'=>'43','type_id'=>'0'],

            //Parbat(44)
            ['name_en'=>'Kushma Municipality','name_np'=>'कुश्मा नगरपालिका','district_id'=>'44','type_id'=>'1'],
            ['name_en'=>'Phalewas Municipality','name_np'=>'फलेवास नगरपालिका','district_id'=>'44','type_id'=>'1'],
            ['name_en'=>'Jaljala Village Municipality','name_np'=>'जलजला गाउँपालिका','district_id'=>'44','type_id'=>'0'],
            ['name_en'=>'Paiyun Village Municipality','name_np'=>'पैयूं गाउँपालिका','district_id'=>'44','type_id'=>'0'],
            ['name_en'=>'Mahashila Village Municipality','name_np'=>'महाशिला गाउँपालिका','district_id'=>'44','type_id'=>'0'],
            ['name_en'=>'Modi Village Municipality','name_np'=>'मोदी गाउँपालिका','district_id'=>'44','type_id'=>'0'],
            ['name_en'=>'Bihadi Village Municipality','name_np'=>'विहादी गाउँपालिका','district_id'=>'44','type_id'=>'0'],

            //Syangja(45)
            ['name_en'=>'Galyang Municipality','name_np'=>'गल्याङ नगरपालिका','district_id'=>'45','type_id'=>'1'],
            ['name_en'=>'Chapakot Municipality','name_np'=>'चापाकोट नगरपालिका','district_id'=>'45','type_id'=>'1'],
            ['name_en'=>'Putalibazar Municipality','name_np'=>'पुतलीबजार नगरपालिका','district_id'=>'45','type_id'=>'1'],
            ['name_en'=>'Bheerkot Municipality','name_np'=>'भीरकोट नगरपालिका','district_id'=>'45','type_id'=>'1'],
            ['name_en'=>'Waling Municipality','name_np'=>'वालिङ नगरपालिका','district_id'=>'45','type_id'=>'1'],
            ['name_en'=>'Arjunchaupari Village Municipality','name_np'=>'अर्जुनचौपारी गाउँपालिका','district_id'=>'45','type_id'=>'0'],
            ['name_en'=>'Aandhikhola Village Municipality','name_np'=>'आँधिखोला गाउँपालिका','district_id'=>'45','type_id'=>'0'],
            ['name_en'=>'Kaligandaki Village Municipality','name_np'=>'कालीगण्डकी गाउँपालिका','district_id'=>'45','type_id'=>'0'],
            ['name_en'=>'Phedikhola Village Municipality','name_np'=>'फेदीखोला गाउँपालिका','district_id'=>'45','type_id'=>'0'],
            ['name_en'=>'Biruwa Village Municipality','name_np'=>'बिरुवा गाउँपालिका','district_id'=>'45','type_id'=>'0'],
            ['name_en'=>'Harinas Village Municipality','name_np'=>'हरिनास गाउँपालिका','district_id'=>'45','type_id'=>'0'],


            //Tanahun(46)
            ['name_en'=>'Bhanu Municipality','name_np'=>'भानु नगरपालिका','district_id'=>'46','type_id'=>'1'],
            ['name_en'=>'Bhimad Municipality','name_np'=>'भिमाद नगरपालिका','district_id'=>'46','type_id'=>'1'],
            ['name_en'=>'Vyas Municipality','name_np'=>'व्यास नगरपालिका','district_id'=>'46','type_id'=>'1'],
            ['name_en'=>'Shuklagandaki Municipality','name_np'=>'शुक्लागण्डकी नगरपालिका','district_id'=>'46','type_id'=>'1'],
            ['name_en'=>'Anbukhaireni Village Municipality','name_np'=>'आँबुखैरेनी गाउँपालिका','district_id'=>'46','type_id'=>'0'],
            ['name_en'=>'Rishing Village Municipality','name_np'=>'ऋषिङ्ग गाउँपालिका','district_id'=>'46','type_id'=>'0'],
            ['name_en'=>'Ghiring Village Municipality','name_np'=>'घिरिङ गाउँपालिका','district_id'=>'46','type_id'=>'0'],
            ['name_en'=>'Devghat Village Municipality','name_np'=>'देवघाट गाउँपालिका','district_id'=>'46','type_id'=>'0'],
            ['name_en'=>'Myagde Village Municipality','name_np'=>'म्याग्दे गाउँपालिका','district_id'=>'46','type_id'=>'0'],
            ['name_en'=>'Bandipur Village Municipality','name_np'=>'वन्दिपुर गाउँपालिका','district_id'=>'46','type_id'=>'0'],

            //Arghakhanchi(47)
            ['name_en'=>'Sandhikharka Municipality','name_np'=>'सन्धिखर्क नगरपालिका','district_id'=>'47','type_id'=>'1'],
            ['name_en'=>'Shitaganga Municipality','name_np'=>'शितगंगा नगरपालिका','district_id'=>'47','type_id'=>'1'],
            ['name_en'=>'Bhumikasthan Municipality','name_np'=>'भूमिकास्थान नगरपालिका','district_id'=>'47','type_id'=>'1'],
            ['name_en'=>'Chhatradev Village Municipality','name_np'=>'छत्रदेव गाउँपालिका','district_id'=>'47','type_id'=>'0'],
            ['name_en'=>'Panini Village Municipality','name_np'=>'पाणिनी गाउँपालिका','district_id'=>'47','type_id'=>'0'],
            ['name_en'=>'Malarani Village Municipality','name_np'=>'मालारानी गाउँपालिका','district_id'=>'47','type_id'=>'0'],

            //Banke(48)
            ['name_en'=>'Nepalgunj Sub-Metropolitan','name_np'=>'नेपालगंज उपमहानगरपालिका','district_id'=>'48','type_id'=>'2'],
            ['name_en'=>'Kohalpur Municipality','name_np'=>'कोहलपुर नगरपालिका','district_id'=>'48','type_id'=>'1'],
            ['name_en'=>'Narainapur Village Municipality','name_np'=>'नरैनापुर गाउँपालिका','district_id'=>'48','type_id'=>'0'],
            ['name_en'=>'Raptisonari Village Municipality','name_np'=>'राप्तीसोनारी गाउँपालिका','district_id'=>'48','type_id'=>'0'],
            ['name_en'=>'Baijanath Village Municipality','name_np'=>'बैजनाथ गाउँपालिका','district_id'=>'48','type_id'=>'0'],
            ['name_en'=>'Khajura Village Municipality','name_np'=>'खजुरा गाउँपालिका','district_id'=>'48','type_id'=>'0'],
            ['name_en'=>'Duduwa Village Municipality','name_np'=>'डुडुवा गाउँपालिका','district_id'=>'48','type_id'=>'0'],
            ['name_en'=>'Janaki Village Municipality','name_np'=>'जानकी गाउँपालिका','district_id'=>'48','type_id'=>'0'],

            //Bardiya(49)
            ['name_en'=>'Gulariya Municipality','name_np'=>'गुलरिया नगरपालिका','district_id'=>'49','type_id'=>'1'],
            ['name_en'=>'Madhuwan Municipality','name_np'=>'मधुवन नगरपालिका','district_id'=>'49','type_id'=>'1'],
            ['name_en'=>'Rajapur Municipality','name_np'=>'राजापुर नगरपालिका','district_id'=>'49','type_id'=>'1'],
            ['name_en'=>'Thakurbaba Municipality','name_np'=>'ठाकुरबाबा नगरपालिका','district_id'=>'49','type_id'=>'1'],
            ['name_en'=>'Bansgadhi Municipality','name_np'=>'बाँसगढी नगरपालिका','district_id'=>'49','type_id'=>'1'],
            ['name_en'=>'Barbardiya Municipality','name_np'=>'बारबर्दिया नगरपालिका','district_id'=>'49','type_id'=>'1'],
            ['name_en'=>'Badhaiyatal Village Municipality','name_np'=>'बढैयाताल गाउँपालिका','district_id'=>'49','type_id'=>'0'],
            ['name_en'=>'Geruwa Village Municipality','name_np'=>'गेरुवा गाउँपालिका','district_id'=>'49','type_id'=>'0'],


            //Dang(50)
            ['name_en'=>'Tulsipur Sub-Metropolitan','name_np'=>'तुल्सीपुर उपमहानगरपालिका','district_id'=>'50','type_id'=>'2'],
            ['name_en'=>'Ghorahi Sub-Metropolitan','name_np'=>'घोराही उपमहानगरपालिका','district_id'=>'50','type_id'=>'2'],
            ['name_en'=>'Lamahi Municipality','name_np'=>'लमही नगरपालिका','district_id'=>'50','type_id'=>'1'],
            ['name_en'=>'Bangalachuli Village Municipality','name_np'=>'बंगलाचुली गाउँपालिका','district_id'=>'50','type_id'=>'0'],
            ['name_en'=>'Dangisharan Village Municipality','name_np'=>'दंगीशरण गाउँपालिका','district_id'=>'50','type_id'=>'0'],
            ['name_en'=>'Gadhawa Village Municipality','name_np'=>'गढवा गाउँपालिका','district_id'=>'50','type_id'=>'0'],
            ['name_en'=>'Rajpur Village Municipality','name_np'=>'राजपुर गाउँपालिका','district_id'=>'50','type_id'=>'0'],
            ['name_en'=>'Rapti Village Municipality','name_np'=>'राप्ती गाउँपालिका','district_id'=>'50','type_id'=>'0'],
            ['name_en'=>'Shantinagar Village Municipality','name_np'=>'शान्तिनगर गाउँपालिका','district_id'=>'50','type_id'=>'0'],
            ['name_en'=>'Babai Village Municipality','name_np'=>'बबई गाउँपालिका','district_id'=>'50','type_id'=>'0'],


            //Eastern Rukum(51)
            ['name_en'=>'Putha Uttarganga Village Municipality','name_np'=>'पुथा उत्तरगंगा गाउँपालिका','district_id'=>'51','type_id'=>'0'],
            ['name_en'=>'Bhume Village Municipality','name_np'=>'भूमे गाउँपालिका','district_id'=>'51','type_id'=>'0'],
            ['name_en'=>'Sisne Village Municipality','name_np'=>'सिस्ने गाउँपालिका','district_id'=>'51','type_id'=>'0'],


            //Gulmi(52)
            ['name_en'=>'Musikot Municipality','name_np'=>'मुसिकोट नगरपालिका','district_id'=>'52','type_id'=>'1'],
            ['name_en'=>'Resunga Municipality','name_np'=>'रेसुङ्गा नगरपालिका','district_id'=>'52','type_id'=>'1'],
            ['name_en'=>'Ishma Village Municipality','name_np'=>'ईस्मा गाउँपालिका','district_id'=>'52','type_id'=>'0'],
            ['name_en'=>'Gulmi Darbar Village Municipality','name_np'=>'गुल्मी दरबार गाउँपालिका','district_id'=>'52','type_id'=>'0'],
            ['name_en'=>'Satyawati Village Municipality','name_np'=>'सत्यवती गाउँपालिका','district_id'=>'52','type_id'=>'0'],
            ['name_en'=>'Chandrakot Village Municipality','name_np'=>'चन्द्रकोट गाउँपालिका','district_id'=>'52','type_id'=>'0'],
            ['name_en'=>'Ruru Village Municipality','name_np'=>'रुरु गाउँपालिका','district_id'=>'52','type_id'=>'0'],
            ['name_en'=>'Chhatrakot Village Municipality','name_np'=>'छत्रकोट गाउँपालिका','district_id'=>'52','type_id'=>'0'],
            ['name_en'=>'Dhurkot Village Municipality','name_np'=>'धुर्कोट गाउँपालिका','district_id'=>'52','type_id'=>'0'],
            ['name_en'=>'Madane Village Municipality','name_np'=>'मदाने गाउँपालिका','district_id'=>'52','type_id'=>'0'],

            //Kapilvastu(53)
            ['name_en'=>'Kapilvastu Municipality','name_np'=>'कपिलवस्तु नगरपालिका','district_id'=>'53','type_id'=>'1'],
            ['name_en'=>'Buddhabhumi Municipality','name_np'=>'बुद्धभूमी नगरपालिका','district_id'=>'53','type_id'=>'1'],
            ['name_en'=>'Shivaraj Municipality','name_np'=>'शिवराज नगरपालिका','district_id'=>'53','type_id'=>'1'],
            ['name_en'=>'Maharajgunj Municipality','name_np'=>'महाराजगंज नगरपालिका','district_id'=>'53','type_id'=>'1'],
            ['name_en'=>'KrishnaNagar Municipality','name_np'=>'कृष्णनगर नगरपालिका','district_id'=>'53','type_id'=>'1'],
            ['name_en'=>'Banganga Municipality','name_np'=>'बाणगंगा नगरपालिका','district_id'=>'53','type_id'=>'1'],
            ['name_en'=>'Yasodhara Village Municipality','name_np'=>'यसोधरा गाउँपालिका','district_id'=>'53','type_id'=>'0'],
            ['name_en'=>'Shuddhodhan Village Municipality','name_np'=>'सुद्धोधन गाउँपालिका','district_id'=>'53','type_id'=>'0'],
            ['name_en'=>'Bijaynagar Village Municipality','name_np'=>'विजयनगर गाउँपालिका','district_id'=>'53','type_id'=>'0'],

            //Palpa(54)
            ['name_en'=>'Rampur Municipality','name_np'=>'रामपुर नगरपालिका','district_id'=>'54','type_id'=>'1'],
            ['name_en'=>'Tansen Municipality','name_np'=>'तानसेन नगरपालिका','district_id'=>'54','type_id'=>'1'],
            ['name_en'=>'Nisdi Village Municipality','name_np'=>'निस्दी गाउँपालिका','district_id'=>'54','type_id'=>'0'],
            ['name_en'=>'Purbakhola Village Municipality','name_np'=>'पूर्वखोला गाउँपालिका','district_id'=>'54','type_id'=>'0'],
            ['name_en'=>'Rambha Village Municipality','name_np'=>'रम्भा गाउँपालिका','district_id'=>'54','type_id'=>'0'],
            ['name_en'=>'Mathagadhi Village Municipality','name_np'=>'माथागढी गाउँपालिका','district_id'=>'54','type_id'=>'0'],
            ['name_en'=>'Tinau Village Municipality','name_np'=>'तिनाउ गाउँपालिका','district_id'=>'54','type_id'=>'0'],
            ['name_en'=>'Baganaskali Village Municipality','name_np'=>'बगनासकाली गाउँपालिका','district_id'=>'54','type_id'=>'0'],
            ['name_en'=>'Ribdikot Village Municipality','name_np'=>'रिब्दिकोट गाउँपालिका','district_id'=>'54','type_id'=>'0'],
            ['name_en'=>'Rainadevi Chhahara Village Municipality','name_np'=>'रैनादेवी छहरा गाउँपालिका','district_id'=>'54','type_id'=>'0'],

            //NawalParasi (West)(55)
            ['name_en'=>'Bardghat Municipality','name_np'=>'बर्दघाट नगरपालिका','district_id'=>'55','type_id'=>'1'],
            ['name_en'=>'Ramgram Municipality','name_np'=>'रामग्राम नगरपालिका','district_id'=>'55','type_id'=>'1'],
            ['name_en'=>'Sunwal Municipality','name_np'=>'सुनवल नगरपालिका','district_id'=>'55','type_id'=>'1'],
            ['name_en'=>'Susta Village Municipality','name_np'=>'सुस्ता गाउँपालिका','district_id'=>'55','type_id'=>'0'],
            ['name_en'=>'Palhinandan Village Municipality','name_np'=>'पाल्हीनन्दन गाउँपालिका','district_id'=>'55','type_id'=>'0'],
            ['name_en'=>'Pratappur Village Municipality','name_np'=>'प्रतापपुर गाउँपालिका','district_id'=>'55','type_id'=>'0'],
            ['name_en'=>'Sarawal Village Municipality','name_np'=>'सरावल गाउँपालिका','district_id'=>'55','type_id'=>'0'],


            //Pyuthan(56)
            ['name_en'=>'Pyuthan Municipality','name_np'=>'प्यूठान नगरपालिका','district_id'=>'56','type_id'=>'1'],
            ['name_en'=>'Swargadwari Municipality','name_np'=>'स्वर्गद्वारी नगरपालिका','district_id'=>'56','type_id'=>'1'],
            ['name_en'=>'Gaumukhi Village Municipality','name_np'=>'गौमुखी गाउँपालिका','district_id'=>'56','type_id'=>'0'],
            ['name_en'=>'Mandavi Village Municipality','name_np'=>'माण्डवी गाउँपालिका','district_id'=>'56','type_id'=>'0'],
            ['name_en'=>'Sarumarani Village Municipality','name_np'=>'सरुमारानी गाउँपालिका','district_id'=>'56','type_id'=>'0'],
            ['name_en'=>'Mallarani Village Municipality','name_np'=>'मल्लरानी गाउँपालिका','district_id'=>'56','type_id'=>'0'],
            ['name_en'=>'Naubahini Village Municipality','name_np'=>'नौवहिनी गाउँपालिका','district_id'=>'56','type_id'=>'0'],
            ['name_en'=>'Jhimruk Village Municipality','name_np'=>'झिमरुक गाउँपालिका','district_id'=>'56','type_id'=>'0'],
            ['name_en'=>'Airawati Village Municipality','name_np'=>'ऐरावती गाउँपालिका','district_id'=>'56','type_id'=>'0'],

            //Rolpa(57)
            ['name_en'=>'Rolpa Municipality','name_np'=>'रोल्पा नगरपालिका','district_id'=>'57','type_id'=>'1'],
            ['name_en'=>'Triveni Village Municipality','name_np'=>'त्रिवेणी गाउँपालिका','district_id'=>'57','type_id'=>'0'],
            ['name_en'=>'Duikholi Village Municipality','name_np'=>'दुईखोली गाउँपालिका','district_id'=>'57','type_id'=>'0'],
            ['name_en'=>'Madi Village Municipality','name_np'=>'माडी गाउँपालिका','district_id'=>'57','type_id'=>'0'],
            ['name_en'=>'Runtigadhi Village Municipality','name_np'=>'रुन्टीगढी गाउँपालिका','district_id'=>'57','type_id'=>'0'],
            ['name_en'=>'Lungri Village Municipality','name_np'=>'लुङग्री गाउँपालिका','district_id'=>'57','type_id'=>'0'],
            ['name_en'=>'Sukidaha Village Municipality','name_np'=>'सुकिदह गाउँपालिका','district_id'=>'57','type_id'=>'0'],
            ['name_en'=>'Sunchhahari Village Municipality','name_np'=>'सुनछहरी गाउँपालिका','district_id'=>'57','type_id'=>'0'],
            ['name_en'=>'Suwarnawati Village Municipality','name_np'=>'सुवर्णावती गाउँपालिका','district_id'=>'57','type_id'=>'0'],
            ['name_en'=>'Thabang Village Municipality','name_np'=>'थवाङ गाउँपालिका','district_id'=>'57','type_id'=>'0'],


            //Rupandehi(58)
            ['name_en'=>'Butwal Sub-Metropolitan','name_np'=>'बुटवल उपमहानगरपालिका','district_id'=>'58','type_id'=>'2'],
            ['name_en'=>'Devdaha Municipality','name_np'=>'देवदह नगरपालिका','district_id'=>'58','type_id'=>'1'],
            ['name_en'=>'Lumbini Sanskritik Municipality','name_np'=>'लुम्बिनी सांस्कृतिक नगरपालिका','district_id'=>'58','type_id'=>'1'],
            ['name_en'=>'Sainamaina Municipality','name_np'=>'सैनामैना नगरपालिका','district_id'=>'58','type_id'=>'1'],
            ['name_en'=>'Siddharthanagar Municipality','name_np'=>'सिद्धार्थनगर नगरपालिका','district_id'=>'58','type_id'=>'1'],
            ['name_en'=>'Tilottama Municipality','name_np'=>'तिलोत्तमा नगरपालिका','district_id'=>'58','type_id'=>'1'],
            ['name_en'=>'Gaidahawa Village Municipality','name_np'=>'गैडहवा गाउँपालिका','district_id'=>'58','type_id'=>'0'],
            ['name_en'=>'Kanchan Village Municipality','name_np'=>'कञ्चन गाउँपालिका','district_id'=>'58','type_id'=>'0'],
            ['name_en'=>'Kotahimai Village Municipality','name_np'=>'कोटहीमाई गाउँपालिका','district_id'=>'58','type_id'=>'0'],
            ['name_en'=>'Marchawari Village Municipality','name_np'=>'मर्चवारी गाउँपालिका','district_id'=>'58','type_id'=>'0'],
            ['name_en'=>'Mayadevi Village Municipality','name_np'=>'मायादेवी गाउँपालिका','district_id'=>'58','type_id'=>'0'],
            ['name_en'=>'Omsatiya Village Municipality','name_np'=>'ओमसतिया गाउँपालिका','district_id'=>'58','type_id'=>'0'],
            ['name_en'=>'Rohini Village Municipality','name_np'=>'रोहिणी गाउँपालिका','district_id'=>'58','type_id'=>'0'],
            ['name_en'=>'Sammarimai Village Municipality','name_np'=>'सम्मरीमाई गाउँपालिका','district_id'=>'58','type_id'=>'0'],
            ['name_en'=>'Siyari Village Municipality','name_np'=>'सियारी गाउँपालिका','district_id'=>'58','type_id'=>'0'],
            ['name_en'=>'Shuddhodhan Village Municipality','name_np'=>'शुद्धोधन गाउँपालिका','district_id'=>'58','type_id'=>'0'],

            //Dailekh(59)
            ['name_en'=>'Narayan Municipality','name_np'=>'नारायण नगरपालिका','district_id'=>'59','type_id'=>'1'],
            ['name_en'=>'Dullu Municipality','name_np'=>'दुल्लु नगरपालिका','district_id'=>'59','type_id'=>'1'],
            ['name_en'=>'Chamunda Bindrasaini Municipality','name_np'=>'चामुण्डा विन्द्रासैनी नगरपालिका','district_id'=>'59','type_id'=>'1'],
            ['name_en'=>'Aathabis Municipality','name_np'=>'आठबीस नगरपालिका','district_id'=>'59','type_id'=>'1'],
            ['name_en'=>'Bhagawatimai Village Municipality','name_np'=>'भगवतीमाई गाउँपालिका','district_id'=>'59','type_id'=>'0'],
            ['name_en'=>'Gurans Village Municipality','name_np'=>'गुराँस गाउँपालिका','district_id'=>'59','type_id'=>'0'],
            ['name_en'=>'Dungeshwor Village Municipality','name_np'=>'डुंगेश्वर गाउँपालिका','district_id'=>'59','type_id'=>'0'],
            ['name_en'=>'Naumule Village Municipality','name_np'=>'नौमुले गाउँपालिका','district_id'=>'59','type_id'=>'0'],
            ['name_en'=>'Mahabu Village Municipality','name_np'=>'महावु गाउँपालिका','district_id'=>'59','type_id'=>'0'],
            ['name_en'=>'Bhairabi Village Municipality','name_np'=>'भैरवी गाउँपालिका','district_id'=>'59','type_id'=>'0'],
            ['name_en'=>'Thantikandh Village Municipality','name_np'=>'ठाँटीकाँध गाउँपालिका','district_id'=>'59','type_id'=>'0'],

            //Dolpa(60)
            ['name_en'=>'Thuli Bheri Municipality','name_np'=>'ठुली भेरी नगरपालिका','district_id'=>'60','type_id'=>'1'],
            ['name_en'=>'Tripurasundari Municipality','name_np'=>'त्रिपुरासुन्दरी नगरपालिका','district_id'=>'60','type_id'=>'1'],
            ['name_en'=>'Dolpo Buddha Village Municipality','name_np'=>'डोल्पो बुद्ध गाउँपालिका','district_id'=>'60','type_id'=>'0'],
            ['name_en'=>'Shephoksundo Village Municipality','name_np'=>'शे फोक्सुन्डो गाउँपालिका','district_id'=>'60','type_id'=>'0'],
            ['name_en'=>'Jagdulla Village Municipality','name_np'=>'जगदुल्ला गाउँपालिका','district_id'=>'60','type_id'=>'0'],
            ['name_en'=>'Mudkechula Village Municipality','name_np'=>'मुड्केचुला गाउँपालिका','district_id'=>'60','type_id'=>'0'],
            ['name_en'=>'Kaike Village Municipality','name_np'=>'काईके गाउँपालिका','district_id'=>'60','type_id'=>'0'],
            ['name_en'=>'Chharka Tangsong Village Municipality','name_np'=>'छार्का ताङसोङ गाउँपालिका','district_id'=>'60','type_id'=>'0'],

            //Humla(61)
            ['name_en'=>'Simkot Village Municipality','name_np'=>'सिमकोट गाउँपालिका','district_id'=>'61','type_id'=>'0'],
            ['name_en'=>'Namkha Village Municipality','name_np'=>'नाम्खा गाउँपालिका','district_id'=>'61','type_id'=>'0'],
            ['name_en'=>'Kharpunath Village Municipality','name_np'=>'खार्पुनाथ गाउँपालिका','district_id'=>'61','type_id'=>'0'],
            ['name_en'=>'Sarkegad Village Municipality','name_np'=>'सर्केगाड गाउँपालिका','district_id'=>'61','type_id'=>'0'],
            ['name_en'=>'Chankheli Village Municipality','name_np'=>'चंखेली गाउँपालिका','district_id'=>'61','type_id'=>'0'],
            ['name_en'=>'Adanchuli Village Municipality','name_np'=>'अदानचुली गाउँपालिका','district_id'=>'61','type_id'=>'0'],
            ['name_en'=>'Tajakot Village Municipality','name_np'=>'ताँजाकोट गाउँपालिका','district_id'=>'61','type_id'=>'0'],

            //Jajarkot(62)
            ['name_en'=>'Bheri Municipality','name_np'=>'भेरी नगरपालिका','district_id'=>'62','type_id'=>'1'],
            ['name_en'=>'Chhedagad Municipality','name_np'=>'छेडागाड नगरपालिका','district_id'=>'62','type_id'=>'1'],
            ['name_en'=>'Tribeni Nalgaad Municipality','name_np'=>'त्रिवेणी नलगाड नगरपालिका','district_id'=>'62','type_id'=>'1'],
            ['name_en'=>'Barekot Village Municipality','name_np'=>'बारेकोट गाउँपालिका','district_id'=>'62','type_id'=>'0'],
            ['name_en'=>'Kushe Village Municipality','name_np'=>'कुसे गाउँपालिका','district_id'=>'62','type_id'=>'0'],
            ['name_en'=>'Junichaande Village Municipality','name_np'=>'जुनीचाँदे गाउँपालिका','district_id'=>'62','type_id'=>'0'],
            ['name_en'=>'Shibalaya Village Municipality','name_np'=>'शिवालय गाउँपालिका','district_id'=>'62','type_id'=>'0'],

            //Jumla(63)
            ['name_en'=>'Chandannath Municipality','name_np'=>'चन्दननाथ नगरपालिका','district_id'=>'63','type_id'=>'1'],
            ['name_en'=>'Kankasundari Village Municipality','name_np'=>'कनकासुन्दरी गाउँपालिका','district_id'=>'63','type_id'=>'0'],
            ['name_en'=>'Sinja Village Municipality','name_np'=>'सिंजा गाउँपालिका','district_id'=>'63','type_id'=>'0'],
            ['name_en'=>'Hima Village Municipality','name_np'=>'हिमा गाउँपालिका','district_id'=>'63','type_id'=>'0'],
            ['name_en'=>'Tila Village Municipality','name_np'=>'तिला गाउँपालिका','district_id'=>'63','type_id'=>'0'],
            ['name_en'=>'Guthichaur Village Municipality','name_np'=>'गुठिचौर गाउँपालिका','district_id'=>'63','type_id'=>'0'],
            ['name_en'=>'Tatopani Village Municipality','name_np'=>'तातोपानी गाउँपालिका','district_id'=>'63','type_id'=>'0'],
            ['name_en'=>'Patarasi Village Municipality','name_np'=>'पातारासी गाउँपालिका','district_id'=>'63','type_id'=>'0'],

            //Kalikot(64)
            ['name_en'=>'Khandachakra Municipality','name_np'=>'खाँडाचक्र नगरपालिका','district_id'=>'64','type_id'=>'1'],
            ['name_en'=>'Raskot Municipality','name_np'=>'रास्कोट नगरपालिका','district_id'=>'64','type_id'=>'1'],
            ['name_en'=>'Tilagufa Municipality','name_np'=>'तिलागुफा नगरपालिका','district_id'=>'64','type_id'=>'1'],
            ['name_en'=>'Pachaljharana Village Municipality','name_np'=>'पचालझरना गाउँपालिका','district_id'=>'64','type_id'=>'0'],
            ['name_en'=>'Sanni Triveni Village Municipality','name_np'=>'सान्नी त्रिवेणी गाउँपालिका','district_id'=>'64','type_id'=>'0'],
            ['name_en'=>'Narharinath Village Municipality','name_np'=>'नरहरिनाथ गाउँपालिका','district_id'=>'64','type_id'=>'0'],
            ['name_en'=>'Mahawai Village Municipality','name_np'=>'महावै गाउँपालिका','district_id'=>'64','type_id'=>'0'],
            ['name_en'=>'Palata Village Municipality','name_np'=>'पलाता गाउँपालिका','district_id'=>'64','type_id'=>'0'],

            //Mugu(65)
            ['name_en'=>'Chhayanathrara Municipality','name_np'=>'छायाँनाथ रारा नगरपालिका','district_id'=>'65','type_id'=>'1'],
            ['name_en'=>'Mugum karmarong Village Municipality','name_np'=>'मुगुम कार्मारोंग गाउँपालिका','district_id'=>'65','type_id'=>'0'],
            ['name_en'=>'Soru Village Municipality','name_np'=>'सोरु गाउँपालिका','district_id'=>'65','type_id'=>'0'],
            ['name_en'=>'Khatyad Village Municipality','name_np'=>'खत्याड गाउँपालिका','district_id'=>'65','type_id'=>'0'],

            //Salyan(66)
            ['name_en'=>'Shaarada Municipality','name_np'=>'शारदा नगरपालिका','district_id'=>'66','type_id'=>'1'],
            ['name_en'=>'Bagchaur Municipality','name_np'=>'बागचौर नगरपालिका','district_id'=>'66','type_id'=>'1'],
            ['name_en'=>'Bangad kupinde Municipality','name_np'=>'बनगाड कुपिण्डे नगरपालिका','district_id'=>'66','type_id'=>'1'],
            ['name_en'=>'Kalimati Village Municipality','name_np'=>'कालिमाटी गाउँपालिका','district_id'=>'66','type_id'=>'0'],
            ['name_en'=>'Kapurkot Village Municipality','name_np'=>'कपुरकोट गाउँपालिका','district_id'=>'66','type_id'=>'0'],
            ['name_en'=>'Chhatreshwori Village Municipality','name_np'=>'छत्रेश्वरी गाउँपालिका','district_id'=>'66','type_id'=>'0'],
            ['name_en'=>'Dhorchaur Village Municipality','name_np'=>'ढोरचौर गाउँपालिका','district_id'=>'66','type_id'=>'0'],
            ['name_en'=>'kumakhmalika Village Municipality','name_np'=>'कुमाखमालिका गाउँपालिका','district_id'=>'66','type_id'=>'0'],
            ['name_en'=>'Darma Village Municipality','name_np'=>'दार्मा गाउँपालिका','district_id'=>'66','type_id'=>'0'],

            //Surkhet(67)
            ['name_en'=>'Birendranagar Municipality','name_np'=>'बीरेन्द्रनगर नगरपालिका','district_id'=>'67','type_id'=>'1'],
            ['name_en'=>'Bheriganga Municipality','name_np'=>'भेरीगंगा नगरपालिका','district_id'=>'67','type_id'=>'1'],
            ['name_en'=>'Gurbhakot Municipality','name_np'=>'गुर्भाकोट नगरपालिका','district_id'=>'67','type_id'=>'1'],
            ['name_en'=>'Panchapuri Municipality','name_np'=>'पञ्चपुरी नगरपालिका','district_id'=>'67','type_id'=>'1'],
            ['name_en'=>'Lekbeshi Municipality','name_np'=>'लेकवेशी नगरपालिका','district_id'=>'67','type_id'=>'1'],
            ['name_en'=>'Chaukune Village Municipality','name_np'=>'चौकुने गाउँपालिका','district_id'=>'67','type_id'=>'0'],
            ['name_en'=>'Barahatal Village Municipality','name_np'=>'बराहताल गाउँपालिका','district_id'=>'67','type_id'=>'0'],
            ['name_en'=>'Chingad Village Municipality','name_np'=>'चिङ्गाड गाउँपालिका','district_id'=>'67','type_id'=>'0'],
            ['name_en'=>'Simta Village Municipality','name_np'=>'सिम्ता गाउँपालिका','district_id'=>'67','type_id'=>'0'],


            //Western Rukum(68)
            ['name_en'=>'Chaurjahari Municipality','name_np'=>'चौरजहारी नगरपालिका','district_id'=>'68','type_id'=>'1'],
            ['name_en'=>'Aathbiskot Municipality','name_np'=>'आठबिसकोट नगरपालिका','district_id'=>'68','type_id'=>'1'],
            ['name_en'=>'Banphikot Village Municipality','name_np'=>'बाँफिकोट गाउँपालिका','district_id'=>'68','type_id'=>'0'],
            ['name_en'=>'Sani Bheri Village Municipality','name_np'=>'सानी भेरी गाउँपालिका','district_id'=>'68','type_id'=>'0'],

            //Achham(69)
            ['name_en'=>'Mangalsen Municipality','name_np'=>'मंगलसेन नगरपालिका','district_id'=>'69','type_id'=>'1'],
            ['name_en'=>'Kamalbazar Municipality','name_np'=>'कमलबजार नगरपालिका','district_id'=>'69','type_id'=>'1'],
            ['name_en'=>'Sanfebagar Municipality','name_np'=>'साँफेबगर नगरपालिका','district_id'=>'69','type_id'=>'1'],
            ['name_en'=>'Panchadewal Binayak Municipality','name_np'=>'पन्चदेवल विनायक नगरपालिका','district_id'=>'69','type_id'=>'1'],
            ['name_en'=>'Chaurpati Village Municipality','name_np'=>'चौरपाटी गाउँपालिका','district_id'=>'69','type_id'=>'0'],
            ['name_en'=>'Mellekh Village Municipality','name_np'=>'मेल्लेख गाउँपालिका','district_id'=>'69','type_id'=>'0'],
            ['name_en'=>'Bannigadhi Jaygadh Village Municipality','name_np'=>'बान्निगढी जयगढ गाउँपालिका','district_id'=>'69','type_id'=>'0'],
            ['name_en'=>'Ramaroshan Village Municipality','name_np'=>'रामारोशन गाउँपालिका','district_id'=>'69','type_id'=>'0'],
            ['name_en'=>'Dhakari Village Municipality','name_np'=>'ढकारी गाउँपालिका','district_id'=>'69','type_id'=>'0'],
            ['name_en'=>'Turmakhad Village Municipality','name_np'=>'तुर्माखाँद गाउँपालिका','district_id'=>'69','type_id'=>'0'],

            //Baitadi(70)
            ['name_en'=>'Dasharathchand Municipality','name_np'=>'दशरथचन्द नगरपालिका','district_id'=>'70','type_id'=>'1'],
            ['name_en'=>'Patan Municipality','name_np'=>'पाटन नगरपालिका','district_id'=>'70','type_id'=>'1'],
            ['name_en'=>'Melauli Municipality','name_np'=>'मेलौली नगरपालिका','district_id'=>'70','type_id'=>'1'],
            ['name_en'=>'Purchaudi Municipality','name_np'=>'पुर्चौडी नगरपालिका','district_id'=>'70','type_id'=>'1'],
            ['name_en'=>'Sunarya Village Municipality','name_np'=>'सुर्नया गाउँपालिका','district_id'=>'70','type_id'=>'0'],
            ['name_en'=>'Sigas Village Municipality','name_np'=>'सिगास गाउँपालिका','district_id'=>'70','type_id'=>'0'],
            ['name_en'=>'Shivanath Village Municipality','name_np'=>'शिवनाथ गाउँपालिका','district_id'=>'70','type_id'=>'0'],
            ['name_en'=>'Pancheshwor Village Municipality','name_np'=>'पञ्चेश्वर गाउँपालिका','district_id'=>'70','type_id'=>'0'],
            ['name_en'=>'Dogdakedar Village Municipality','name_np'=>'दोगडाकेदार गाउँपालिका','district_id'=>'70','type_id'=>'0'],
            ['name_en'=>'Dilasaini Village Municipality','name_np'=>'डीलासैनी गाउँपालिका','district_id'=>'70','type_id'=>'0'],


            //Bajhang(71)
            ['name_en'=>'Jayaprithvi Municipality','name_np'=>'जयपृथ्वी नगरपालिका','district_id'=>'71','type_id'=>'1'],
            ['name_en'=>'Bungal Municipality','name_np'=>'बुंगल नगरपालिका','district_id'=>'71','type_id'=>'1'],
            ['name_en'=>'Talkot Village Municipality','name_np'=>'तलकोट गाउँपालिका','district_id'=>'71','type_id'=>'0'],
            ['name_en'=>'Masta Village Municipality','name_np'=>'मष्टा गाउँपालिका','district_id'=>'71','type_id'=>'0'],
            ['name_en'=>'Khaptadchhanna Village Municipality','name_np'=>'खप्तडछान्ना गाउँपालिका','district_id'=>'71','type_id'=>'0'],
            ['name_en'=>'Thalara Village Municipality','name_np'=>'थलारा गाउँपालिका','district_id'=>'71','type_id'=>'0'],
            ['name_en'=>'Bitthadchir Village Municipality','name_np'=>'वित्थडचिर गाउँपालिका','district_id'=>'71','type_id'=>'0'],
            ['name_en'=>'Surma Village Municipality','name_np'=>'सूर्मा गाउँपालिका','district_id'=>'71','type_id'=>'0'],
            ['name_en'=>'Chhabispathivera Village Municipality','name_np'=>'छबिसपाथिभेरा गाउँपालिका','district_id'=>'71','type_id'=>'0'],
            ['name_en'=>'Durgathali Village Municipality','name_np'=>'दुर्गाथली गाउँपालिका','district_id'=>'71','type_id'=>'0'],
            ['name_en'=>'Kedarasyu Village Municipality','name_np'=>'केदारस्युँ गाउँपालिका','district_id'=>'71','type_id'=>'0'],
            ['name_en'=>'Kanda Village Municipality','name_np'=>'काँडा गाउँपालिका','district_id'=>'71','type_id'=>'0'],

            //Bajura(72)
            ['name_en'=>'Badimalika Municipality','name_np'=>'बडीमालिका नगरपालिका','district_id'=>'72','type_id'=>'1'],
            ['name_en'=>'Triveni Municipality','name_np'=>'त्रिवेणी नगरपालिका','district_id'=>'72','type_id'=>'1'],
            ['name_en'=>'Budhiganga Municipality','name_np'=>'बुढीगंगा नगरपालिका','district_id'=>'72','type_id'=>'1'],
            ['name_en'=>'Budhinanda Municipality','name_np'=>'बुढीनन्दा नगरपालिका','district_id'=>'72','type_id'=>'1'],
            ['name_en'=>'Gaumul Village Municipality','name_np'=>'गौमुल गाउँपालिका','district_id'=>'72','type_id'=>'0'],
            ['name_en'=>'Pandav Gufa Village Municipality','name_np'=>'पाण्डव गुफा गाउँपालिका','district_id'=>'72','type_id'=>'0'],
            ['name_en'=>'Swamikartik Village Municipality','name_np'=>'स्वामीकार्तिक गाउँपालिका','district_id'=>'72','type_id'=>'0'],
            ['name_en'=>'Chhededaha Village Municipality','name_np'=>'छेडेदह गाउँपालिका','district_id'=>'72','type_id'=>'0'],
            ['name_en'=>'Himali Village Municipality','name_np'=>'हिमाली गाउँपालिका','district_id'=>'72','type_id'=>'0'],

            //Dadeldhura(73)
            ['name_en'=>'Amargadhi Municipality','name_np'=>'अमरगढी नगरपालिका','district_id'=>'73','type_id'=>'1'],
            ['name_en'=>'Parshuram Municipality','name_np'=>'परशुराम नगरपालिका','district_id'=>'73','type_id'=>'1'],
            ['name_en'=>'Aalital Village Municipality','name_np'=>'आलिताल गाउँपालिका','district_id'=>'73','type_id'=>'0'],
            ['name_en'=>'Bhageshwor Village Municipality','name_np'=>'भागेश्वर गाउँपालिका','district_id'=>'73','type_id'=>'0'],
            ['name_en'=>'Navadurga Village Municipality','name_np'=>'नवदुर्गा गाउँपालिका','district_id'=>'73','type_id'=>'0'],
            ['name_en'=>'Ajayameru Village Municipality','name_np'=>'अजयमेरु गाउँपालिका','district_id'=>'73','type_id'=>'0'],
            ['name_en'=>'Ganyapadhura Village Municipality','name_np'=>'गन्यापधुरा गाउँपालिका','district_id'=>'73','type_id'=>'0'],

            //Darchula(74)
            ['name_en'=>'Shailyashikhar Municipality','name_np'=>'शैल्यशिखर नगरपालिका','district_id'=>'74','type_id'=>'1'],
            ['name_en'=>'Malikarjun Village Municipality','name_np'=>'मालिकार्जुन गाउँपालिका','district_id'=>'74','type_id'=>'0'],
            ['name_en'=>'Apihimal Village Municipality','name_np'=>'अपिहिमाल गाउँपालिका','district_id'=>'74','type_id'=>'0'],
            ['name_en'=>'Duhun Village Municipality','name_np'=>'दुहुँ गाउँपालिका','district_id'=>'74','type_id'=>'0'],
            ['name_en'=>'Naugad Village Municipality','name_np'=>'नौगाड गाउँपालिका','district_id'=>'74','type_id'=>'0'],
            ['name_en'=>'Marma Village Municipality','name_np'=>'मार्मा गाउँपालिका','district_id'=>'74','type_id'=>'0'],
            ['name_en'=>'Lekam Village Municipality','name_np'=>'लेकम गाउँपालिका','district_id'=>'74','type_id'=>'0'],
            ['name_en'=>'Vyans Village Municipality','name_np'=>'ब्याँस गाउँपालिका','district_id'=>'74','type_id'=>'0'],

            //Doti(75)
            ['name_en'=>'Dipayal Silgadhi Municipality','name_np'=>'दिपायल सिलगढी नगरपालिका','district_id'=>'75','type_id'=>'1'],
            ['name_en'=>'Shikhar Municipality','name_np'=>'शिखर नगरपालिका','district_id'=>'75','type_id'=>'1'],
            ['name_en'=>'Purbichauki Village Municipality','name_np'=>'पूर्वीचौकी गाउँपालिका','district_id'=>'75','type_id'=>'0'],
            ['name_en'=>'Badikedar Village Municipality','name_np'=>'बडीकेदार गाउँपालिका','district_id'=>'75','type_id'=>'0'],
            ['name_en'=>'Jorayal Village Municipality','name_np'=>'जोरायल गाउँपालिका','district_id'=>'75','type_id'=>'0'],
            ['name_en'=>'Sayal Village Municipality','name_np'=>'सायल गाउँपालिका','district_id'=>'75','type_id'=>'0'],
            ['name_en'=>'Aadarsha Village Municipality','name_np'=>'आदर्श गाउँपालिका','district_id'=>'75','type_id'=>'0'],
            ['name_en'=>'k i singh Village Municipality','name_np'=>'के.आई.सिं. गाउँपालिका','district_id'=>'75','type_id'=>'0'],
            ['name_en'=>'Bogatan Village Municipality','name_np'=>'बोगटान गाउँपालिका','district_id'=>'75','type_id'=>'0'],

            //Kailali(76)
            ['name_en'=>'Dhangadhi Sub-Metropolitan','name_np'=>'धनगढी उपमहानगरपालिका','district_id'=>'76','type_id'=>'2'],
            ['name_en'=>'Tikapur Municipality','name_np'=>'टिकापुर नगरपालिका','district_id'=>'76','type_id'=>'1'],
            ['name_en'=>'Ghodaghodi Municipality','name_np'=>'घोडाघोडी नगरपालिका','district_id'=>'76','type_id'=>'1'],
            ['name_en'=>'Lamkichuha Municipality','name_np'=>'लम्कीचुहा नगरपालिका','district_id'=>'76','type_id'=>'1'],
            ['name_en'=>'Bhajani Municipality','name_np'=>'भजनी नगरपालिका','district_id'=>'76','type_id'=>'1'],
            ['name_en'=>'Gauriganga Municipality','name_np'=>'गौरीगंगा नगरपालिका','district_id'=>'76','type_id'=>'1'],
            ['name_en'=>'Bardgoriya Village Municipality','name_np'=>'बर्दगोरिया गाउँपालिका','district_id'=>'76','type_id'=>'0'],
            ['name_en'=>'Mohanyal Village Municipality','name_np'=>'मोहन्याल गाउँपालिका','district_id'=>'76','type_id'=>'0'],
            ['name_en'=>'Kailari Village Municipality','name_np'=>'कैलारी गाउँपालिका','district_id'=>'76','type_id'=>'0'],
            ['name_en'=>'Joshipur Village Municipality','name_np'=>'जोशीपुर गाउँपालिका','district_id'=>'76','type_id'=>'0'],
            ['name_en'=>'Chure Village Municipality','name_np'=>'चुरे गाउँपालिका','district_id'=>'76','type_id'=>'0'],

            //Kanchanpur(77)
            ['name_en'=>'Bheemdatta Municipality','name_np'=>'भीमदत्त नगरपालिका','district_id'=>'77','type_id'=>'1'],
            ['name_en'=>'Punarbas Municipality','name_np'=>'पुर्नवास नगरपालिका','district_id'=>'77','type_id'=>'1'],
            ['name_en'=>'Bedkot Municipality','name_np'=>'वेदकोट नगरपालिका','district_id'=>'77','type_id'=>'1'],
            ['name_en'=>'Mahakali Municipality','name_np'=>'महाकाली नगरपालिका','district_id'=>'77','type_id'=>'1'],
            ['name_en'=>'Shuklaphanta Municipality','name_np'=>'शुक्लाफाँटा नगरपालिका','district_id'=>'77','type_id'=>'1'],
            ['name_en'=>'Belauri Municipality','name_np'=>'बेलौरी नगरपालिका','district_id'=>'77','type_id'=>'1'],
            ['name_en'=>'Krishnapur Municipality','name_np'=>'कृष्णपुर नगरपालिका','district_id'=>'77','type_id'=>'1'],
            ['name_en'=>'Beldandi Village Municipality','name_np'=>'बेलडाडी गाउँपालिका','district_id'=>'77','type_id'=>'0'],
            ['name_en'=>'Laljhadi Village Municipality','name_np'=>'लालझाडी गाउँपालिका','district_id'=>'77','type_id'=>'0'],

        ];
        DB::table('v_d_c_s')->insert($vdcs);
    }
    public function truncateTable()
    {
        Schema::disableForeignKeyConstraints();
        \App\Models\VDC::truncate();
        Schema::enableForeignKeyConstraints();
    }
}
