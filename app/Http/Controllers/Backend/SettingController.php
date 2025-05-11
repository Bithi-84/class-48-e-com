<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function showSettings()
    {  
        $generalSettings = SiteSetting::first();
        // dd($generalSettings);
       return view('backend.settings.general-settings',compact('generalSettings'));
    }
}
