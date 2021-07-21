<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'staffs_type_id' => 1,
                'name' => 'Duc Ha Duong',
                'img' => 'https://i.ibb.co/Y8pm7mt/Duc-Ha-Duong.jpg',
                'content' => 'Engineer, entrepreneur, prospectivist, Duc hacks our society in the aim to smoothen its digital transition, advocating for more human interactions at work. He uses his company Officience, a 300 people BPO/ITO shop based in Saigon, Vietnam to ‘walk his talk’ and prove his concepts.',
                'facebook' => ' ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],
            [
                'staffs_type_id' => 1,
                'name' => 'Philippe Gaston',
                'img' => 'https://i.ibb.co/gDmgw4X/Philippe-Gaston.png',
                'content' => 'fter his specialized studies in IT and Management (Jussieu and IAE de Paris) Philippe Gaston worked as a freelance, then joined Société Générale (French Bank) in 1984. After several years in the Central Services in Paris then in New York, he was in charge of the Management Control projects and the Data Center Transformation of the Group and the subsidiaries.
                                Being in regular contact with Vietnam and Société Générale (SG) Singapore, he had the opportunity to intervene in PN center in Danang, Vietnam in 2015.
                                Since leaving SG, he has wanted to bring his expertise to the development of PN. Philippe is a widower and has 4 daughters. ',
                'facebook' => ' ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],

            [
                'staffs_type_id' => 1,
                'name' => 'Hélène Gayomali',
                'img' => 'https://i.ibb.co/sVggz2k/H-l-ne-Gayomali.jpg',
                'content' => 'Hélène works for the diocesan directorate of Catholic Education of Hauts-de-Seine department (France), in charge of development, including the launch of a school in the city of Clichy and the monitoring about what is happening in education today. Hélène previously spent nearly 6 years at Passerelles numériques, first as Education and Selection Manager for almost 3 years in the Philippines, then a few months in Paris for the recruitment of volunteer short missions, before taking the lead of the project in Cebu from 2013 to 2016.
                Passerelles numériques has been a founding and exceptional experience for me, and I am passionate about youth, team management and education issues. ',
                'facebook' => ' ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],
            [
                'staffs_type_id' => 2,
                'name' => 'Maud Lhuillier ',
                'img' => 'https://i.ibb.co/Hr9S5tY/Audede-Rotalier.jpg',
                'content' => '',
                'facebook' => '',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],
            [
                'staffs_type_id' => 2,
                'name' => 'Delphine Cantet ',
                'img' => 'https://i.ibb.co/4pfVtPb/Delphine-Cantet.jpg ',
                'content' => ' ',
                'facebook' => ' ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],

            [
                'staffs_type_id' => 2,
                'name' => 'Noemi Encinares ',
                'img' => ' https://i.ibb.co/4VN5GwK/Noemi-Encinares.png',
                'content' => ' ',
                'facebook' => ' ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],
            [
                'staffs_type_id' => 3,
                'name' => 'Đoàn Triệu Thành',
                'img' => '  ',
                'content' => ' ',
                'facebook' => ' ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],
            [
                'staffs_type_id' => 3,
                'name' => 'Lucas SINROD ',
                'img' => ' https://i.ibb.co/31TsQ0J/Picture24.png',
                'content' => 'The IT world is full of machines and AI, and so can be characteristically cold.
                Through PN I have rediscovered the human side of technology. With every smiling face or curious question, PN students remind me why I learned to code. 
                Computers are fascinating! Tech progress is exciting! Here at our campus in Vietnam, we are turning students who grew up on farms–some having never touched a computer in their lives before joining us–into engineers.
                And we’re having fun doing it, why not? ',
                'facebook' => 'https://www.facebook.com/lucasmsinrod ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],

            [
                'staffs_type_id' => 3,
                'name' => ' Huỳnh Thị Kim Oanh',
                'img' => 'https://i.ibb.co/FHYDCvH/Picture26.png ',
                'content' => ' ',
                'facebook' => ' ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],
            [
                'staffs_type_id' => 3,
                'name' => 'Võ Hoàng Thùy Trang ',
                'img' => ' https://i.ibb.co/xDCDG75/general-manager.jpg ',
                'content' => ' ',
                'facebook' => ' ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],
            [
                'staffs_type_id' => 3,
                'name' => 'Đặng Nguyễn Uyên Phương ',
                'img' => ' https://i.ibb.co/sw3ySTD/Picture29.png ',
                'content' => ' ',
                'facebook' => 'https://www.facebook.com/uphuongdn ',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],
            [
                'staffs_type_id' => 3,
                'name' => 'Châu Mỹ Ngọc ',
                'img' => ' https://i.ibb.co/M2nsn9S/Picture30.png',
                'content' => ' ',
                'facebook' => ' https://www.facebook.com/myngoc.chau.7',
                'linkin' => ' ',
                'twitter' => ' ',
                'instagram' => ' ',
            ],
             

        ];
        try {
            foreach ($data as $item) {
                Staff::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
