<?php

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

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;



Route::group(['prefix' => ''], function () {
    Route::group(['prefix' => 'email'], function () {
        Route::get('inbox', function () {
            return view('example.pages.email.inbox');
        });
        Route::get('read', function () {
            return view('example.pages.email.read');
        });
        Route::get('compose', function () {
            return view('example.pages.email.compose');
        });
    });

    Route::group(['prefix' => 'apps'], function () {
        Route::get('chat', function () {
            return view('example.pages.apps.chat');
        });
        Route::get('calendar', function () {
            return view('example.pages.apps.calendar');
        });
    });

    Route::group(['prefix' => 'ui-components'], function () {
        Route::get('accordion', function () {
            return view('example.pages.ui-components.accordion');
        });
        Route::get('alerts', function () {
            return view('example.pages.ui-components.alerts');
        });
        Route::get('badges', function () {
            return view('example.pages.ui-components.badges');
        });
        Route::get('breadcrumbs', function () {
            return view('example.pages.ui-components.breadcrumbs');
        });
        Route::get('buttons', function () {
            return view('example.pages.ui-components.buttons');
        });
        Route::get('button-group', function () {
            return view('example.pages.ui-components.button-group');
        });
        Route::get('cards', function () {
            return view('example.pages.ui-components.cards');
        });
        Route::get('carousel', function () {
            return view('example.pages.ui-components.carousel');
        });
        Route::get('collapse', function () {
            return view('example.pages.ui-components.collapse');
        });
        Route::get('dropdowns', function () {
            return view('example.pages.ui-components.dropdowns');
        });
        Route::get('list-group', function () {
            return view('example.pages.ui-components.list-group');
        });
        Route::get('media-object', function () {
            return view('example.pages.ui-components.media-object');
        });
        Route::get('modal', function () {
            return view('example.pages.ui-components.modal');
        });
        Route::get('navs', function () {
            return view('example.pages.ui-components.navs');
        });
        Route::get('navbar', function () {
            return view('example.pages.ui-components.navbar');
        });
        Route::get('pagination', function () {
            return view('example.pages.ui-components.pagination');
        });
        Route::get('popovers', function () {
            return view('example.pages.ui-components.popovers');
        });
        Route::get('progress', function () {
            return view('example.pages.ui-components.progress');
        });
        Route::get('scrollbar', function () {
            return view('example.pages.ui-components.scrollbar');
        });
        Route::get('scrollspy', function () {
            return view('example.pages.ui-components.scrollspy');
        });
        Route::get('spinners', function () {
            return view('example.pages.ui-components.spinners');
        });
        Route::get('tabs', function () {
            return view('example.pages.ui-components.tabs');
        });
        Route::get('tooltips', function () {
            return view('example.pages.ui-components.tooltips');
        });
    });

    Route::group(['prefix' => 'advanced-ui'], function () {
        Route::get('cropper', function () {
            return view('example.pages.advanced-ui.cropper');
        });
        Route::get('owl-carousel', function () {
            return view('example.pages.advanced-ui.owl-carousel');
        });
        Route::get('sortablejs', function () {
            return view('example.pages.advanced-ui.sortablejs');
        });
        Route::get('sweet-alert', function () {
            return view('example.pages.advanced-ui.sweet-alert');
        });
    });

    Route::group(['prefix' => 'forms'], function () {
        Route::get('basic-elements', function () {
            return view('example.pages.forms.basic-elements');
        });
        Route::get('advanced-elements', function () {
            return view('example.pages.forms.advanced-elements');
        });
        Route::get('editors', function () {
            return view('example.pages.forms.editors');
        });
        Route::get('wizard', function () {
            return view('example.pages.forms.wizard');
        });
    });

    Route::group(['prefix' => 'charts'], function () {
        Route::get('apex', function () {
            return view('example.pages.charts.apex');
        });
        Route::get('chartjs', function () {
            return view('example.pages.charts.chartjs');
        });
        Route::get('flot', function () {
            return view('example.pages.charts.flot');
        });
        Route::get('morrisjs', function () {
            return view('example.pages.charts.morrisjs');
        });
        Route::get('peity', function () {
            return view('example.pages.charts.peity');
        });
        Route::get('sparkline', function () {
            return view('example.pages.charts.sparkline');
        });
    });

    Route::group(['prefix' => 'tables'], function () {
        Route::get('basic-tables', function () {
            return view('example.pages.tables.basic-tables');
        });
        Route::get('data-table', function () {
            return view('example.pages.tables.data-table');
        });
    });

    Route::group(['prefix' => 'icons'], function () {
        Route::get('feather-icons', function () {
            return view('example.pages.icons.feather-icons');
        });
        Route::get('flag-icons', function () {
            return view('example.pages.icons.flag-icons');
        });
        Route::get('mdi-icons', function () {
            return view('example.pages.icons.mdi-icons');
        });
    });

    Route::group(['prefix' => 'general'], function () {
        Route::get('blank-page', function () {
            return view('example.pages.general.blank-page');
        });
        Route::get('faq', function () {
            return view('example.pages.general.faq');
        });
        Route::get('invoice', function () {
            return view('example.pages.general.invoice');
        });
        Route::get('profile', function () {
            return view('example.pages.general.profile');
        });
        Route::get('pricing', function () {
            return view('example.pages.general.pricing');
        });
        Route::get('timeline', function () {
            return view('example.pages.general.timeline');
        });
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', function () {
            return view('example.pages.auth.login');
        });
        Route::get('register', function () {
            return view('example.pages.auth.register');
        });
    });

    Route::group(['prefix' => 'error'], function () {
        Route::get('404', function () {
            return view('example.pages.error.404');
        });
        Route::get('500', function () {
            return view('example.pages.error.500');
        });
    });

    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    });
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function() {
    return redirect()->route('home');
});


Route::group(
    ['middleware' => ['auth'], 'prefix' => 'crm'],
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::resource('tags', TagController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('rating', RatingController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('types', TypeController::class);
        Route::resource('users', UserController::class);
        Route::resource('posts', PostController::class);
    }
);

// Notificatoion Routes
Route::get('/notification/markAsRead',[FrontendController::class,'markAsRead'])->name('notifications.markAsRead');

// Frontend Routes
Route::name('frontend.')->group(function () {
    Route::controller(FrontendController::class)->group(function () {
        Route::get('/upload-post', 'uploadPost')->name('upload-post');
        Route::post('/upload-temp-post', 'uploadTempPost')->name('upload.temp-post');
    });
});




// 404 for undefined routes
Route::any('/{page?}', function () {
    return View::make('example.pages.error.404');
})->where('page', '.*');
