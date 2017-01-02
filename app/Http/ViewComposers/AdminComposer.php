<?php


namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Menu;

class AdminComposer {


    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {

        //$avator_url = 'https://graph.facebook.com/v2.4/710788839026015/picture?type=normal';
        //$view->with('avator_url', $avator_url);
        //view()->share('avator_url', 'https://graph.facebook.com/v2.4/710788839026015/picture?type=normal');
        /*
        Menu::make('admin', function ($menu)
        {

            $UserCompany = Auth::user()->group->name; // Find user which Company
            $menu->add($UserCompany, '/')->data('permissions', ['view_home_page']);
            $menu->add('Reseller', '/')->data('permissions', ['view_home_page']);
            $menu->add('Users', 'dashboard')->data('permissions', ['view_about_page']);
            $menu->add('Log', '/admin')->data('permissions', ['access_admin']);
            $menu->add('Configurations', '/admin')->data('permissions', ['access_admin']);


        })
            ->filter(function ($item)
            {
                $sat = Auth::check() && Auth::user()->canAtLeast($item->data('permissions')) ?: false;

                return ($sat);
            });
        */

    }


}
