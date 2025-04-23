<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting =[
            ['phone'    => '01911233147',
              'email'   =>  'tehzeebbithi.2016@gmail.com',
              'address' =>  'Uttara, Dhaka',
              'facebook'=>   'https://www.facebook.com/',
              'twitter' =>  'http://x.com/',
              'instagram' => 'https://www.instagram.com/',
              'youtube'  =>  'https://www.youtube.com/',
              'logo'    =>   ' logo.png',
              'banner'  =>   'banner.png',
            ]
            ];

            SiteSetting::insert($setting);
    }
}
