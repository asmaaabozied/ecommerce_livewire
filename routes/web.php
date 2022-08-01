<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;


Auth::routes();

Route::get('PaymentRequest', '\App\Http\Controllers\Api\PaymentController@Pay');
Route::get('check_payment', '\App\Http\Controllers\Api\PaymentController@check_payment')->name('check_payment');

Route::post('/charge', '\App\Http\Controllers\Api\PaymentController@PaymentRequest')->name('pay.charge');

Route::prefix('upload')->name('upload.')->group(function () {
    Route::post('/image', [HelperController::class, 'upload_image'])->name('image');
    Route::post('/file', [HelperController::class, 'upload_file'])->name('file');
    Route::post('/remove-file', [HelperController::class, 'remove_files'])->name('remove-file');
});
Route::prefix('notifications')->name('notifications.')->group(function () {
    Route::get('/', [NotificationsController::class, 'index'])->name('index');
    Route::get('/ajax', [NotificationsController::class, 'notifications_ajax'])->name('ajax');
    Route::post('/see', [NotificationsController::class, 'notifications_see'])->name('see');
});


Route::get('manifest.json', [HelperController::class, 'manifest'])->name('manifest');


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {



    /* Start Admin Routes */

    Route::prefix('admin')->middleware(['auth', 'ActiveAccount'])->name('admin.')->namespace('App\Http\Controllers\Dashboard')->group(function () {

        Route::view('contactlinks', 'contacts');
        Route::view('categories', 'dashboard.categories.index');
        Route::view('education', 'dashboard.education.index');
        Route::view('bankaccounts', 'dashboard.bankaccounts.index');
        Route::view('pages', 'dashboard.pages.index');
        Route::view('perfumerequestlinks', 'dashboard.perfumerequest.index');
        Route::view('cities', 'dashboard.cities.index');
        Route::view('countries', 'dashboard.countries.index');
        //sliders
        Route::view('sliders', 'dashboard.sliders.index');
        //articles
        Route::view('articles', 'dashboard.articles.index');
        //brands
        Route::view('brands', 'dashboard.brands.index');
        //services
        Route::view('services', 'dashboard.services.index');
        //settings
        Route::view('settings', 'dashboard.settings.index');
        //packages
        Route::view('packages', 'dashboard.packages.index');

        Route::view('packagefeatures', 'dashboard.packagefeatures.index');

        //users && roles
        Route::view('users', 'dashboard.users.index');
        Route::view('roles', 'dashboard.roles.index');
//    notes
        Route::view('notes', 'dashboard.notes.index');
        Route::view('coupons', 'dashboard.coupons.index');
        Route::view('partnerrequests', 'dashboard.partnerrequests.index');
        Route::view('perfumerequest', 'dashboard.perfumerequest.index');
        Route::view('merchant', 'dashboard.merchant.index');
        Route::view('perfume', 'dashboard.perfumes.index');
        Route::view('position', 'dashboard.position.index');
        Route::view('workshop', 'dashboard.workshop.index');
        Route::view('bill', 'dashboard.bill.index');
        Route::view('accountdetail', 'dashboard.accountdetail.index');
        Route::view('address', 'dashboard.address.index');
        Route::view('order_detail', 'dashboard.order_detail.index');
        Route::view('order', 'dashboard.order.index');
        Route::view('Tickets', 'dashboard.ticket.index');
        Route::view('Downloads', 'dashboard.download.index');





        // Route::view('perfume','perfumes');
        Route::get('/traffic-statics', 'TrafficsController@statics')->name('index');
        Route::get('traffics', 'TrafficsController@index')->name('traffics.index');
        Route::get('traffics/{traffic}/logs', 'TrafficsController@logs')->name('traffics.logs');
        Route::get('error-reports', 'TrafficsController@error_reports')->name('traffics.error-reports');
        Route::get('error-reports/{report}', 'TrafficsController@error_report')->name('traffics.error-report');
        Route::get('/requests_perfumes', function () {
            return view('dashboard.requests_perfumes');
        })->name('requests_perfumes');

        Route::get('/perfumes', function () {
            return view('dashboard.perfumes');
        })->name('perfumes');

        Route::get('/merchantdashboard', function () {
            return view('dashboard.merchant');
        })->name('merchantdashboard');

        Route::get('/trader', function () {
            return view('dashboard.trader');
        })->name('trader');



    });

    /* End Admin Routes */


// Front End Route

      Route::get('/', function () {
    return view('layouts.front');
});

    Route::get('/bankaccounts', function () {
        return view('layouts.BankAccounts');
    })->name('BankAccounts');
    Route::get('/partnerrequest', function () {
        return view('layouts.PartnerRequest');
    })->name('PartnerRequest');

    Route::get('/checkout', function () {
        return view('layouts.checkout');
    })->name('checkout');
    Route::get('/Register', function () {
        return view('layouts.register');
    })->name('Register');
    Route::get('/myaccount', function () {
        return view('front.myaccount');
    })->name('myaccount');
    Route::get('/address', function () {
        return view('front.address');
    })->name('address');

    Route::get('/Perfume', function () {
        return view('layouts.perfume');
    })->name('Perfume');

    Route::get('/orders', function () {
        return view('layouts.orders');
    })->name('orders');

    Route::get('/Downloads', function () {
        return view('layouts.Downloads');
    })->name('Downloads');

    Route::get('/tickets', function () {
        return view('layouts.tickets');
    })->name('tickets');

    Route::get('/orderdetails', function () {
        return view('layouts.orderdetails');
    })->name('orderdetails');

    Route::get('/packages', function () {
        return view('layouts.packages');
    })->name('packages');

    Route::get('/MerchantServices', function () {
        return view('layouts.MerchantServices');
    })->name('MerchantServices');

    Route::get('/Perfumeratings', function () {
        return view('layouts.Perfumeratings');
    })->name('Perfumeratings');

    Route::get('/manufacturing', function () {
        return view('layouts.manufacturing');
    })->name('manufacturing');

    Route::get('/education', function () {
        return view('layouts.education');
    })->name('education');

    Route::get('/cart', function () {
        return view('layouts.cart');
    })->name('cart');

    Route::get('/workshop_online', function () {
        return view('layouts.workshop_online');
    })->name('workshop_online');

    Route::get('/workshop_office', function () {
        return view('layouts.workshop_office');
    })->name('workshop_office');

    Route::get('/notes', function () {
        return view('layouts.notes');
    })->name('notes');
    Route::get('/recommendations', function () {
        return view('front.includes.recommendation');
    })->name('recommendations');

    Route::get('/home', function () {
        return view('dashboard.homepage');
    })->name('home');
    Route::get('/dashboard', function () {
        return view('dashboard.homepage');
    })->name('dashboard');


    Route::get('/accountdetails', function () {
        return view('layouts.accountDetails');
    })->name('accountDetails');

    Route::get('/accountaddress', function () {
        return view('layouts.AccountAddress');
    })->name('AccountAddress');

    Route::get('/sellers', function () {
        return view('layouts.sellers');
    })->name('sellers');

    Route::get('/sellerprofile', function () {
        return view('layouts.SellerProfile');
    })->name('SellerProfile');

    Route::get('/accountdetails', function () {
        return view('layouts.accountDetails');
    })->name('accountDetails');

    Route::get('/accountaddress', function () {
        return view('layouts.AccountAddress');
    })->name('AccountAddress');

    Route::get('/sellers', function () {
        return view('layouts.sellers');
    })->name('sellers');

    Route::get('/sellerprofile', function () {
        return view('layouts.SellerProfile');
    })->name('SellerProfile');

    Route::get('/contact-vendor', function () {
        return view('layouts.ContactVendor');
    })->name('ContactVendor');
//     Route::get('/login', function () {
//         return view('auth.login');
//     });

});
// hanan 2

Route::view('llogin','livewire.home');
Route::view('contactlinks', 'contacts');
Route::get('/post-create',[PerfumeController::class, 'create'])->name('post.create');
Route::post('/post-store',[PerfumeController::class, 'store'])->name('post.store');
Route::get('/post-list',[PerfumeController::class, 'list'])->name('post.list');
Route::get('/post-view/{id}',[PerfumeController::class, 'view'])->name('post.view');
// Route::get('/login', function () {
//     return view('auth.login');
// });

#Manage Review
Route::post('/review-store',[PerfumeController::class, 'reviewstore'])->name('review.store');

// Route::view('perfumerequestlinks', 'perfumerequest');


