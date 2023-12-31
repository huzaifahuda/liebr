<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::fallback(function () {

    return view("404");

});

Route::get('/', [App\Http\Controllers\frontend\HomeContoller::class, 'index'])->name('/home');
Route::get('/checkout', [App\Http\Controllers\frontend\ChekoutController::class, 'index'])->name('/checkout');

// Route::get('/', function () {
//     return view('frontend.index');
// });
//Route::resource('/',App\Http\Controllers\HomeController::class);


Route::middleware(['auth'])
    ->group(function () {

//        user routes
        Route::resource('/flexpools', App\Http\Controllers\frontend\FlexpoolsController::class);
        Route::resource('/companies', App\Http\Controllers\frontend\CompaniesController::class);
        Route::resource('/projects', App\Http\Controllers\frontend\ProjectsController::class);


//        admin routes
        Route::get('/adminpanel', function () {
            return redirect('admin/dashboard');
        });
//Route::group(['middleware' => ['auth']], function() {
        Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::resource('admin/roles', App\Http\Controllers\RoleController::class);
        Route::resource('admin/permissions', App\Http\Controllers\PermissionsController::class);
        Route::resource('admin/users', App\Http\Controllers\UserController::class);
        Route::resource('admin/products', App\Http\Controllers\ProductController::class);
        Route::resource('admin/dashboard',App\Http\Controllers\HomeController::class);
        Route::resource('admin/countries',CountryController::class);

//    Categories Routes

        Route::resource('admin/categories',\App\Http\Controllers\management\CategoryController::class);
        Route::resource('admin/skills',\App\Http\Controllers\management\SkillsController::class);
        Route::resource('admin/appearance',\App\Http\Controllers\management\CategoryController::class);

        //keyword
        Route::resource('admin/keyword',App\Http\Controllers\Management\KeywordController::class);

        //blog
        Route::resource('admin/post',BlogController::class);

        //Store
        Route::resource('admin/store',StoreController::class);

        //video
        Route::resource('admin/videos',VideoshowController::class);

        //slider
        Route::resource('admin/slider',SliderController::class);

        //testimonial
        Route::resource('admin/testimonial',App\Http\Controllers\Management\TestimonialController::class);

        //userinfo
        Route::resource('admin/user-info',UserinfoController::class);

        //pages
        Route::resource('admin/pages',PageController::class);

        Route::resource('admin/contacts',App\Http\Controllers\Management\ContactController::class);

        Route::get('admin/subscriber',[App\Http\Controllers\Management\ContactController::class,'subscriber']);

        //coupon
        Route::resource('admin/coupon',CouponController::class);
        Route::resource('admin/theme-setting', App\Http\Controllers\Management\ThemeSettingsController::class);
        Route::post('admin/theme-setting-fields', [App\Http\Controllers\Management\ThemeSettingsController::class,'theme_setting_fields']);

    });



Auth::routes();

