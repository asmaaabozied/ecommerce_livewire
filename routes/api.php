<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PerfumeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//all routes / api here must be api authenticated
Route::group(['middleware' => 'api', 'namespace' => 'Api'], function () {
    Route::post('add-perfumes', '\App\Http\Controllers\Api\PerfumeController@AddPerfume');
    Route::post('filter-perfumes', '\App\Http\Controllers\Api\PerfumeController@filterproducts');
    Route::get('get-most-wanted-perfumes', '\App\Http\Controllers\Api\PerfumeController@index');
    // Route::get('get-most-wanted-perfumes', '\App\Http\Controllers\Api\WantedPerfumesController@index');
    Route::get('last-offer', '\App\Http\Controllers\Api\PerfumeController@index');
    Route::get('package', '\App\Http\Controllers\Api\PackageController@index');
    Route::get('feedback', '\App\Http\Controllers\Api\FeedbackController@index');
    Route::get('get-account-detail', '\App\Http\Controllers\Api\AccountDetailController@index');
    Route::post('store-account-detail', '\App\Http\Controllers\Api\AccountDetailController@store');
    Route::get('edit-account-detail/{id}', '\App\Http\Controllers\Api\AccountDetailController@edit');
    Route::post('store-address', '\App\Http\Controllers\Api\AdressController@store');
    Route::get('get-address', '\App\Http\Controllers\Api\AdressController@index');
    Route::post('edit-address/{id}', '\App\Http\Controllers\Api\AdressController@edit');
    Route::get('get-order-detail', '\App\Http\Controllers\Api\OrderDetailController@index');
    Route::post('edit-order-detail/{id}', '\App\Http\Controllers\Api\OrderDetailController@edit');
    Route::get('ListOfTickets', '\App\Http\Controllers\Api\TicketController@ListOfTickets');
    Route::get('gettickets/{id}', '\App\Http\Controllers\Api\TicketController@show');
    Route::post('create_tickets', '\App\Http\Controllers\Api\TicketController@store');
    Route::get('ListOfDownloads', '\App\Http\Controllers\Api\DownloadController@ListOfDownloads');
    Route::get('getdownload/{id}', '\App\Http\Controllers\Api\DownloadController@show');
    Route::post('create_download', '\App\Http\Controllers\Api\DownloadController@store');
    Route::get('ListOfSellers', '\App\Http\Controllers\Api\SellerController@ListOfSellers');
    Route::get('getseller/{id}', '\App\Http\Controllers\Api\SellerController@show');
    Route::get('ListOfInvests', '\App\Http\Controllers\Api\InvestController@ListOfInvests');
    Route::get('getinvest/{id}', '\App\Http\Controllers\Api\InvestController@show');
    Route::post('create_invest', '\App\Http\Controllers\Api\InvestController@store');
    Route::get('ListOfCarts', '\App\Http\Controllers\Api\CartController@ListOfCarts');
    Route::get('getcart/{id}', '\App\Http\Controllers\Api\CartController@show');
    Route::post('create_cart', '\App\Http\Controllers\Api\CartController@store');
    Route::get('ListOfCheckouts', '\App\Http\Controllers\Api\CheckoutController@ListOfCheckouts');
    Route::get('getcheckout/{id}', '\App\Http\Controllers\Api\CheckoutController@show');
    Route::post('create_checkout', '\App\Http\Controllers\Api\CheckoutController@store');
    Route::get('get-perfume-collection', '\App\Http\Controllers\Api\PerfumeController@index');
    Route::post('create_Newsletter', '\App\Http\Controllers\Api\NewsletterController@store');
    Route::post('create_merchantform', '\App\Http\Controllers\Api\MerchantformController@store');
    Route::post('create_manufacturingform', '\App\Http\Controllers\Api\ManufacturingformController@store');
    Route::post('create_educationform', '\App\Http\Controllers\Api\EducationformController@store');
    Route::post('create_coupon', '\App\Http\Controllers\Api\CouponController@store');
    Route::get('get-contact-collection', '\App\Http\Controllers\Api\ContactController@ListOfContact');
    Route::get('ListOfBanktransfer', '\App\Http\Controllers\Api\BanktransferController@ListOfbanktransfer');
    Route::post('AddBanktransfer', '\App\Http\Controllers\Api\BanktransferController@AddBanktransfer');
    Route::get('seller/{seller}', '\App\Http\Controllers\Api\SellerController@bySeller');


    Route::get('get-order', '\App\Http\Controllers\Api\OrderController@index');
    Route::post('add-workshop', '\App\Http\Controllers\Api\WorkshopController@AddWorkshop');
    Route::get('show-workshop', '\App\Http\Controllers\Api\WorkshopController@index');


    Route::post('ToggleFavouriteProduct', '\App\Http\Controllers\Api\UserController@ToggleFavouriteProduct');
    Route::get('ShowFavouriteProduct', '\App\Http\Controllers\Api\UserController@ShowFavouriteProduct');


    Route::post('add-partner-request', '\App\Http\Controllers\Api\PartnerRequestController@AddPartneRequest');
    Route::post('add-rating', '\App\Http\Controllers\Api\RatingController@AddRating');



    Route::get('ListOfSliders', '\App\Http\Controllers\Api\SliderController@ListOfSliders');
    Route::get('ListOfBrands', '\App\Http\Controllers\Api\BrandController@ListOfBrands');
    Route::get('ListOfCategories', '\App\Http\Controllers\Api\CategoryController@ListOfCategories');
    Route::get('ListOfServices', '\App\Http\Controllers\Api\ServiceController@ListOfServices');
    Route::get('ListOfEducation', '\App\Http\Controllers\Api\EducationController@ListOfEducation');
    Route::get('ListOfBankAccount', '\App\Http\Controllers\Api\BankAccountController@ListOfBankAccount');
    Route::post('AddBankAccount', '\App\Http\Controllers\Api\BankAccountController@AddBankAccount');

    Route::get('PaymentRequest', '\App\Http\Controllers\Api\PaymentController@Pay');
//    Route::post('Pay', '\App\Http\Controllers\Api\PaymentController@PaymentRequest');
    Route::get('check_payment', '\App\Http\Controllers\Api\PaymentController@check_payment');
    Route::post('/charge', '\App\Http\Controllers\Api\PaymentController@PaymentRequest')->name('pay.charge');
    Route::get('/settings', '\App\Http\Controllers\Api\SettingController@settings')->name('settings');


    Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
        function () {






        });
});


