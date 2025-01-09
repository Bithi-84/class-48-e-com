<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('auth.login');

    }

  public function adminLogout()

   {    Auth::logout();
         return redirect('admin/login');
   }
   }