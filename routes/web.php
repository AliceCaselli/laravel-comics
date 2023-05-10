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

Route::get('/', function () {

    $linksNav = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'

    ];

    $listsFooter = [
        [
            'title' => 'DC COMICS',
            'links' => [
                'characters',
                'comics',
                'movies',
                'tv',
                'games',
                'videos',
                'news'
            ]
        ],

        [
            'title' => 'shop',
            'links' => [
                'shop DC',
                'shop DC collectibles'
            ]
        ],

        [
            'title' => 'dc',
            'links' => [
                'term of use',
                'privacy policy (new)',
                'ad choises',
                'advertising',
                'jobs',
                'subscriptions',
                'talent workshop',
                'CPSC certificates',
                'ratings',
                'shop help',
                'contact us'
            ]
        ],

        [
            'title' => 'sites',
            'links' => [
                'DC',
                'MAD magazine',
                'DC kids',
                'DC universe',
                'DC power visa',
            ]
        ],
    ];

    $comics = config('comics');

    return view('home', compact('linksNav', 'listsFooter', 'comics'));
});
