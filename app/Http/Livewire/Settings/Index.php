<?php

namespace App\Http\Livewire\Settings;

use App\Models\PaymentSetting;
use App\Models\Setting;
use App\Models\ThemeSetting;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Hash;

class Index extends Component
{
    use WithFileUploads;

    public $GeneralSetting = false;
    public $PaymentSetting = false;
    public $ThemeSetting = false;

    public $phone,$color,$color_button,$color_line,$size_header,$size_footer, $email, $theme, $address, $footer_color, $header_color, $hover, $payment, $tab, $paypal, $tab_secret_key, $tab_public_key, $paypal_client_id, $paypal_secret_key, $facebook, $name_ar, $name_en, $description_en, $description_ar, $setting, $created_at, $image_path, $logo, $favicon, $favicon_path;

    public function render()
    {
        $setting = Setting::first();
        $payment = PaymentSetting::first();
        $theme = ThemeSetting::first();

        if ($setting) {
            $this->getSetting($setting, $payment, $theme);
        }


        return view('livewire.settings.index');
    }

//toggle collapse
    public function generalSetting()
    {

        $this->GeneralSetting = !$this->GeneralSetting;
    }

//toggle collapse
    public function paymentSetting()
    {


        $this->PaymentSetting = !$this->PaymentSetting;

    }

//toggle collapse
    public function themeSetting()
    {


        $this->ThemeSetting = !$this->ThemeSetting;

    }


    public function getSetting($setting, $payment, $theme)
    {

//        general setting
        $this->setting = $setting;


        $this->name_ar = $this->setting['name_ar'] ?? '';
        $this->name_en = $this->setting['name_en'] ?? '';
        $this->description_en = $this->setting['description_en'] ?? '';
        $this->description_ar = $this->setting['description_ar'] ?? '';
        $this->status = $this->setting['status'] ?? '';
        $this->image_path = $this->setting['image_path'] ?? '';
        $this->logo = $this->setting['logo'] ?? '';
        $this->favicon = $this->setting['favicon'] ?? '';
        $this->favicon_path = $this->setting['favicon_path'] ?? '';
        $this->phone = $this->setting['phone'] ?? '';
        $this->facebook = $this->setting['facebook'] ?? '';




        $this->email = $this->setting['email'] ?? '';
        $this->address = $this->setting['address'] ?? '';
        //paymentsetting
        $this->payment = $payment;
        $this->tab = $this->payment['tab'] ?? '';
        $this->paypal = $this->payment['paypal'] ?? '';
        $this->tab_secret_key = $this->payment['tab_secret_key'] ?? '';
        $this->tab_public_key = $this->payment['tab_public_key'] ?? '';
        $this->paypal_client_id = $this->payment['paypal_client_id'] ?? '';
        $this->paypal_secret_key = $this->payment['paypal_secret_key'] ?? '';
        //theme setting
        $this->theme = $theme;
        $this->footer_color = $this->theme['footer_color'] ?? '';
        $this->header_color = $this->theme['header_color'] ?? '';
        $this->hover = $this->theme['hover'] ?? '';
        $this->color = $this->theme['colors'] ?? '';
        $this->color_button = $this->theme['color_button'] ?? '';
        $this->color_line = $this->theme['color_line'] ?? '';
        $this->size_header = $this->theme['size_header'] ?? '';
        $this->size_footer = $this->theme['size_footer'] ?? '';





    }


    public function update()
    {

        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',


        ]);

        $setting = Setting::firstOrCreate();

        $setting->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'address' => $this->address,
            'phone' => $this->phone,
            'facebook' => $this->facebook,
            'email' => $this->email,

            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
        ]);
        if ($this->logo) {
            $thumbnail = $this->logo;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/settings/' . $filename));
            $setting->logo = $filename;
            $setting->save();
        }

        if ($this->favicon) {
            $thumbnail = $this->favicon;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/settings/' . $filename));
            $setting->favicon = $filename;
            $setting->save();
        }

        if ($setting) {


            flash(trans('lang.updated_successfully'));

        }
    }

    public function updatePayment()
    {


        $this->validate([

            'tab_secret_key' => 'required',
            'tab_public_key' => 'required',
            'paypal_client_id' => 'required',
            'paypal_secret_key' => 'required',

        ]);


        $payment = PaymentSetting::firstOrCreate();

        $payment->update([

            'tab' => $this->tab,
            'paypal' => $this->paypal,
            'tab_secret_key' => $this->tab_secret_key,
            'tab_public_key' => $this->tab_public_key,
            'paypal_client_id' => $this->paypal_client_id,
            'paypal_secret_key' => $this->paypal_secret_key,

        ]);

        if ($payment) {


            flash(trans('lang.updated_successfully'));

        }
    }

    public function updateTheme()
    {

        $this->validate([

            'footer_color' => 'required',
            'header_color' => 'required',
            'hover' => 'required',

        ]);


        $theme = ThemeSetting::firstOrCreate();

        $theme->update([

            'footer_color' => $this->footer_color,
            'header_color' => $this->header_color,
            'hover' => $this->hover,
            'colors' => $this->color,
            'color_button' => $this->color_button,
            'color_line' => $this->color_line,
            'size_header' => $this->size_header,
            'size_footer' => $this->size_footer,





        ]);

        if ($theme) {


            flash(trans('lang.updated_successfully'));

        }


    }
}
