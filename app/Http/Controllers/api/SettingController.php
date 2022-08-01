<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PaymentSetting;
use App\Models\Setting;
use App\Models\ThemeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SettingController extends Controller
{

    public function settings()
    {

        $settings = Setting::get();
        $theme = ThemeSetting::get();
        $payment = PaymentSetting::get();
        return response()->json(['status' => 1, 'setting' => $settings, 'theme' => $theme, 'payment' => $payment]);

    }


}
