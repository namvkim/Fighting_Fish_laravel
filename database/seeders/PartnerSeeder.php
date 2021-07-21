<?php

namespace Database\Seeders;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
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
                'name' => 'Blancmesnil',
                'link' => 'https://unespritdefamille.org/blancmesnil/',
                'img' => 'https://i.ibb.co/cF98K2N/Blancmesnil.png',
                'content' => 'The Blanc Mesnil Foundation supports the training of our students in our center in Vietnam (Da Nang) for 3 years',
            ],
            [
                'name' => 'KMS',
                'link' => 'https://kms-technology.com/',
                'img' => 'https://i.ibb.co/qnwN4mJ/KMS-Technology.png',
                'content' => 'Starting from 2018, KMS Technology, 
                a US-based global technology company, has announced its partnership with PN Vietnam, as part of its commitment to support the community. 
                Besides providing financial support, KMS helps PNV by equipping the laboratory; providing specialized workshops & training courses conducted by its experts 
                and several internship opportunities for PNV students. 
                With the most up-to-date knowledge and hands-on experience in the IT industry; 
                KMS aims to help PNV students have a fair and better employment opportunity in the future.',
            ],
            [
                'name' => 'Amanjaya Foundation',
                'link' => 'https://www.amanjaya.org/',
                'img' => 'https://i.ibb.co/SwH9MnC/Fondation-Amanjaya.png',
                'content' => 'Founded in 2008, Amanjaya Foundation supports organizations that work to promote access to education for disadvantaged children and young people. 
                Since 2008, Amanjaya Foundation supports Passerelles numériques',
            ],
            [
                'name' => 'Laidon',
                'link' => 'https://laidon.com/',
                'img' => 'https://i.ibb.co/3c00BB1/Laidon.png',
                'content' => 'Since 2021, Laidon support us in internship and mentoring our students in Graduation Project.',
            ],
            [
                'name' => 'DANAVTC',
                'link' => 'http://danavtc.edu.vn/',
                'img' => 'https://i.ibb.co/DwsHqTg/DVT.png',
                'content' => 'PN Vietnam students have started studying in Danang Vocational Training College (DANAVTC) since September 2017.',
            ],
            [
                'name' => 'J.P.Morgan',
                'link' => 'https://www.jpmorganchase.com/impact',
                'img' => 'https://i.ibb.co/vjmMsX8/J-P-Morgan.png',
                'content' => 'JP Morgan Chase Foundation is an important sponsor to PN in Vietnam and The Philippines, to support our training programs, prepare the students to a successful professional life, establish local partnerships with NGOs, universities, companies, to work together and combine their effort for underprivileged youth.',
            ],
            [
                'name' => 'PYCO GROUP',
                'link' => 'https://pycogroup.com/home',
                'img' => 'https://i.ibb.co/Br0dZ2G/PYCO.png',
                'content' => 'In 2016, PYCO Group, a digital consulting and software development agency, kick-started a long-term partnership with Passerelles numériques Vietnam as part of its commitment to support charity organizations in Vietnam',
            ],
            [
                'name' => 'LeKhanhTech',
                'link' => 'https://lekhanhtech.com/',
                'img' => 'https://i.ibb.co/brdZzVT/Le-Khanh-Tech.png',
                'content' => 'Since 2020, LeKhanhTech has been supporting our specialization module over 3 years.',
            ],
            [
                'name' => 'LinkByNet',
                'link' => 'https://www.linkbynet.com/',
                'img' => 'https://i.ibb.co/3TMX1q3/linkbynet.png',
                'content' => 'LinkByNet sponsored PNV in 2016, 2018, and 2020',
            ],
            [
                'name' => 'Microsoft',
                'link' => 'https://www.microsoft.com/en/',
                'img' => 'https://i.ibb.co/dcSFVGH/microsoft.png',
                'content' => 'Since 2017 Microsoft is actively supporting PN’s actions with a comprehensive approach including funding, software licences donation, the creation of an integrated student management system, volunteering and much more!',
            ],

        ];
        try {
            foreach ($data as $item) {
                Partner::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
