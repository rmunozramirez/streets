<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use App\Channel;
use App\Subcategory;
use App\Category;
use App\Post;
use App\Page;
use App\Posttag;
use App\Postcategory;
use App\User;
use App\Profile;
use App\Role;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // $all_ch = Channel::all();
        // $all_sub = Subcategory::pluck('title', 'id')->all();
        // $all_cat = Category::orderBy('title', 'asc')->pluck('title', 'id')->all();
        // //$all_postcategories = Postcategory::pluck('title', 'id')->all();
        // //$all_posts = Post::all();
        // //$all_pages = Page::all();
        // //$all_posttags = Posttag::pluck('name', 'id')->all(); 
        // //$all_users = User::all();
        // $all_pr = Profile::all();
        // $all_roles = Role::pluck('name', 'id')->all();
        // $page_name = 'App';
        // View::share(array('all_ch' => $all_ch, 
        //                     'all_sub' => $all_sub,
        //                     'all_cat' => $all_cat,
                            
        //                     'all_pr' =>  $all_pr,
        //                     'all_roles' =>  $all_roles,
        //                     'page_name' =>  $page_name,
        //                 ));

        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
