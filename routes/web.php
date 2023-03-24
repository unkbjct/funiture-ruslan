<?php

use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {

    $products = Product::select();
    $products = $products->get();

    $products->transform(function ($item) {
        $item->image = Image::where("product", $item->id)->first();
        return $item;
    });

    
    return view('welcome', [
        'products' => $products,
    ]);
})->name('home');


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/registration', function () {
    return view('sign-up');
})->name('signup');


Route::group(['prefix' => 'catalog', 'namespace' => 'catalog'], function () {

    Route::get('/', function (Request $request) {
        $request->flash();

        $products = Product::select();

        if ($request->has('title') && $request->title) $products->where("title", "LIKE", "%{$request->title}%");
        if ($request->has('categories') && $request->categories) $products->whereIn("categoires", $request->categories);
        if ($request->has('price-from') && $request->input('price-from')) $products->where("price", ">", $request->input('price-from'));
        if ($request->has('price-to') && $request->input('price-to')) $products->where("price", "<", $request->input('price-to'));

        $products = $products->get();

        $products->transform(function ($item) {
            $item->image = Image::where("product", $item->id)->first();
            return $item;
        });
        return view('catalog', [
            'products' => $products,
        ]);
    })->name('catalog');


    Route::get('/{product}', function (Product $product) {

        $product->image = Image::where("product", $product->id)->first();

        $products = Product::select();

        $products = $products->get();

        $products->transform(function ($item) {
            $item->image = Image::where("product", $item->id)->first();
            return $item;
        });

        return view('catalog.product', [
            'product' => $product,
            'products' => $products,
        ]);
    })->name('product');
});


Route::get('/order', function () {
    return view('order');
})->name('order');


Route::get('/cart/add', function (Request $request) {
    return;
})->name('product.cart.add');


Route::post('/registration', function (Request $request) {
    $request->flash();
    $attributes = [
        'email' => 'Почта',
        'name' => 'Имя',
        'surname' => 'Фамилия',
        'passwd' => 'Пароль',
        'confirmPasswd' => 'Подтверждение пароля',
    ];

    $request->validate([
        'email' => 'required|unique:users|max:255',
        'name' => 'required',
        'surname' => 'required',
        'passwd' => 'required',
        'confirmPasswd' => 'required',
    ], [], $attributes);

    $user = new User();
    $user->email = $request->email;
    $user->name = $request->name;
    $user->surname = $request->surname;
    $user->password = $request->passwd;
    $user->save();

    if (Auth::attempt(['password' => $request->passwd, 'email' => $request->email])) {
        return redirect()->route('account');
    }
})->name('core.signup');


Route::post('/login')->name('core.login');


Route::get('/account', function () {
    return view('account');
})->name('account');


Route::post('/{user}/edit', function (Request $request, User $user) {
    $user->name = $request->name;
    $user->surname = $request->surname;
    $user->email = $request->email;
    $user->save();
    return redirect()->route('account')->with(['success' => 'Профиль изменен!']);
})->name('user.edit');
