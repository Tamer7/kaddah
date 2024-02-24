<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', [MainController::class, 'index'])->name('home.index');

Route::controller(CategoryController::class)
    ->name('categories.')
    ->group(function() {
        Route::get('/categories', 'index')->name('index');
        Route::get('/categories/{category}', 'subcategory')->name('sub');
    }
);
Route::controller(ProductController::class)
    ->name('products.')
    ->group(function() {
        Route::get('/products', 'index')->name('index');
        Route::get('/products/{product}', 'product')->name('product');
    })
;
Route::controller(EventController::class)
    ->name('events.')
    ->group(function() {
        Route::get('/events', 'index')->name('index');
    })
;
Route::controller(ArticleController::class)
    ->name('blogs.')
    ->group(function() {
        Route::get('/blogs', 'index')->name('index');
    })
;
Route::controller(BrandController::class)
    ->name('brands.')
    ->group(function() {
        Route::get('/brands', 'index')->name('index');
        Route::get('/brands/{slug}', 'show')->name('show');
    })
;
Route::get('/about-us', function () {
    return view('pages.about-us');
});
Route::get('/contact-us', function () {
    return view('pages.contact');
});

















Route::post('/contact-us', [MainController::class, 'contactStore'])->name('contact.store');

Route::get('/media/events', [MediaController::class, 'events'])->name('event.index');
Route::get('/media/events/{slug}', [MediaController::class, 'eventShow'])->name('event.show');

Route::get('/media/blogs', [MediaController::class, 'blogs'])->name('blog.index');
Route::get('/media/blogs/{slug}', [MediaController::class, 'blogShow'])->name('blog.show');

Route::get('/latest-products', [ShopController::class, 'latest'])->name('products.latest');

Route::get('/products/search', [ShopController::class, 'search'])->name('product.search');

Route::get('/category', [ShopController::class, 'parent'])->name('category.parent.base');
Route::get('/category/{parent}', [ShopController::class, 'child'])->name('category.child');
Route::get('/category/{parent}/{child}', [ShopController::class, 'products'])->name('category.products');
Route::get('/category/{parent}/{child}/{slug}', [ShopController::class, 'product'])->name('product.show');

Route::get('/product/modal/{slug}', [MainController::class, 'modal'])->name('product.modal');

//Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::put('/cart/{product}/{cart}', [CartController::class, 'update'])
    ->withoutMiddleware(['csrf.verify'])->name('cart.update');
Route::delete('/cart/{product}/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');//->middleware('auth');
Route::get('/cart/guest-checkout', [CartController::class, 'checkout'])->name('checkout.guest');
Route::get('/checkout/request-quote/received', function () {
    return view('pages.thankyou');
})->name('checkout.reqquote.received');

Route::post('/cart/checkout', [CartController::class, 'orderStore'])->name('checkout.store');

Route::get('/compare', [CartController::class, 'compare'])->name('cart.compare');
Route::post('/compare/add', [CartController::class, 'addToCompare'])->name('compare.store');
Route::get('/ajaxCompare', [CartController::class, 'compareProducts'])->name('compare.ajax');
Route::delete('/compare/{product}/{compare}', [CartController::class, 'destroyCompare'])->name('compare.destroy');

//Ajax Routes
Route::get('/ajax/menuBanner', [AjaxController::class, 'banners'])->name('menu.banner');
Route::get('/ajax/modal/{slug}', [AjaxController::class, 'singleProduct'])->name('product.single');
Route::get('/ajax/brand/{id}', [AjaxController::class, 'getBrand'])->name('product.brand');
Route::get('/ajax/category/{productId}', [AjaxController::class, 'getCategory'])->name('product.category');
Route::get('/ajax/category/parent/{categoryId}', [AjaxController::class, 'getParent'])->name('category.parent');
Route::get('/ajax/searchCategory', [AjaxController::class, 'searchCategory'])->name('category.search');
Route::get('/ajax/latest-products', [AjaxController::class, 'latest'])->name('ajax.latest');

Route::get('/ajax/dashbaord/orders', [AjaxController::class, 'orders'])->name('ajax.orders');

//Ajax Cart Routes
Route::post('/ajaxCart/add', [AjaxController::class, 'cartStore'])->name('cartStore.ajax');
Route::get('/ajaxCart/items', [AjaxController::class, 'cartItems'])->name('cart.items');
Route::get('/ajaxCart/empty', [AjaxController::class, 'emptyCart'])->name('empty.cart');

//Ajax Wishlist Routes
//Route::get('/ajaxWishlist/items', [AjaxController::class, 'wishlistItems'])->name('wishlist.items');

//User Routes
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/dashboard/{tracking_id}', [UserController::class, 'order'])->name('user.order');
Route::get('/dashboard/cancel/{tracking_id}', [UserController::class, 'cancelOrder'])->name('order.cancel');

//Route::get('/wishlist', [UserController::class, 'wishlist'])->name('user.wishlist')->middleware('auth');

// Route::get('/about-us', function() {
//     return view('pages/about');
// });

Route::get('/services', function () {
    return view('pages/services');
});

Route::get('/media', function () {
    return view('pages/media');
});

Route::get('/login-popup', function () {
    return view('pages.login-popup');
})->name('login.popup');

Route::post('/login', function () {
    return view('pages.login-popup');
})->name('login');

Route::post('/sign-up', [RegisterController::class, 'create'])->name('user.register');

Route::get('/sendmail', function (Request $request) {
    $ip = "my IP";
    echo 'testing...1';

    $m = Mail::raw('Hi user, a new login into your account from the IP Address: ', function ($message) {
        // $message->from('has4it@gmail.com', env('MAIL_FROM_NAME'));
        $message->to('sheraz.ahmad1989@gmail.com', 'User Name');
    });
    //sheraz.ahmad1989@gmail.com

    echo '2';
    print_r($m);
});

Route::get('/contact/received', function () {
    return view('email.thankyou');
})->name('contact.received');

Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
