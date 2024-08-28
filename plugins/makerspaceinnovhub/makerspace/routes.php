<?php 

use Makerspaceinnovhub\Makerspace\Controllers\CsrfController;
use App\Http\Middleware\VerifyCsrf;
use Cms\Classes\Controller as CmsController;
//API endpoints
Route::middleware(['api'])->group(function () {
    Route::group(['prefix' => 'api/v1'], function () {
        Route::get('services/category', 'Makerspaceinnovhub\Makerspace\Controllers\ServiceCategory@indexAPI');
        Route::get('services/category/{slug}', 'Makerspaceinnovhub\Makerspace\Controllers\Service@filterAPI');
        Route::get('news', 'Makerspaceinnovhub\Makerspace\Controllers\News@indexAPI');
        Route::get('news/{$slug}', 'Makerspaceinnovhub\Makerspace\Controllers\News@showAPI');
        Route::get('tbi', 'Makerspaceinnovhub\Makerspace\Controllers\Tbi@indexAPI');
        Route::get('partnerlist','Makerspaceinnovhub\Makerspace\Controllers\Partnerlist@indexAPI');
        Route::get('reviews','Makerspaceinnovhub\Makerspace\Controllers\Reviews@indexAPI');
        Route::get('team', 'Makerspaceinnovhub\Makerspace\Controllers\Team@indexAPI');

        //Pages
        Route::get('home', 'Makerspaceinnovhub\Makerspace\Controllers\Home@indexAPI');
        Route::get('about', 'Makerspaceinnovhub\Makerspace\Controllers\About@indexAPI');
        Route::get('ourservices', 'Makerspaceinnovhub\Makerspace\Controllers\ServicePage@indexAPI');
        Route::get('newspage', 'Makerspaceinnovhub\Makerspace\Controllers\NewsPage@indexAPI');
        Route::get('startups', 'Makerspaceinnovhub\Makerspace\Controllers\Startups@indexAPI');
        Route::get('contact', 'Makerspaceinnovhub\Makerspace\Controllers\Contact@indexAPI');

        
    });

});

//Generate the CSRF Token   
Route::middleware(['web'])->group(function () {
    Route::get('/token', [CsrfController::class, 'getCsrfToken']);
});

//Verify if the token is match and if match the token the post method API trigger
Route::middleware(['web'])->group(function () {
    Route::post('/api/v1/entries', 'Makerspaceinnovhub\Makerspace\Controllers\FormController@sendRawEmail')->middleware(VerifyCsrf::class);
});
Route::fallback(function() {
    return response()->view('errors.404', [], 404);
});