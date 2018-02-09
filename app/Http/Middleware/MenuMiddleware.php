<?php

namespace App\Http\Middleware;

use Closure;
use Menu;
use View;
use Auth;

class MenuMiddleware
{

    public function handle($request, Closure $next)
    {
      Menu::make('primary', function($menu) {

          $home = $menu->add('Home', array('route'  => 'homepage',  'class' => 'navbar-home', 'id' => 'home'));
          $menu->home->prepend('<span class="fa fa-lg fa-home"></span> ');

            $about = $menu->add('About', array('url'  => 'about', 'class' => 'navbar navbar-about dropdown'));

            $menu->about->attr(array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'))->append(' <b class="caret"></b>')->prepend('<span class="glyphicon glyphicon-user"></span> ');


            $menu->about->add('Our Attorneys', array('route'  => 'attorneys'));
            $menu->about->add('Our Team', array('route'  => 'team'));

            // $menu->About->raw('Another Plain Text Item');
            // $menu->about->divide();

            // $menu->add('About',    array('url'  => 'page.about'))
                    //->add('Level2', 'link address')
                    //->add('level3', 'Link address')
                    //->add('level4', 'Link address');




          $services = $menu->add('Services', 'services');

          $menu->services->attr(array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'))->append(' <b class="caret"></b>')->prepend('<span class="fa fa-balance-scale"></span> ');
          $menu->group(['prefix' => 'services'], function($menu){
              //$services->add('Personal Injury', ['url' => 'services/personal-injury/', 'class' => 'navbar-personal-injury']);
              $menu->services->add('Wrongful Death', 'wrongful-death');
              $menu->services->add('Vehicle Accidents', 'vehicle-accidents');
              $menu->services->add('Brain Injuries', '/services/braininjuries');
              $menu->services->add('Catastrophic Injuries', '/services/catastrophic-injuries');
              $menu->services->add('Dog Bite Injury', '/services/dog-bite-injury');
              $menu->services->add('Construction Accidents', '/services/construction-accidents');
              $menu->services->add('Premises Accidents', '/services/premises-accidents');
          });
//              $menu->add('Home', ['route' => 'homepage', 'class' => 'navbar-home', 'id' => 'home'])->link->secure();
//              $menu->add('About', ['url' => 'about', 'class' => 'navbar-about'])->link->secure();
//              $menu->add('Parties', ['url' => 'parties', 'class' => 'navbar-parties'])->link->secure();
//              $menu->add('Opportunity', ['url' => 'opportunity', 'class' => 'navbar-opportunity'])->link->secure();
//              $menu->add('Contact', 'contact')->link->secure();


          $menu->add('Contact',  'contact');

            // $menu->raw('<li>|</li>');
          $number = $menu->add('+1(801) 888-8888',  'callto:18018888888');
            // $menu->raw('Free Consultations');

    // $menu->About->raw('Another Plain Text Item')
        });


            // $menu->add('Home', '/');
            // $menu->add('Sewing Machines', getLang() . '/sewing-machines/qnique');
            // $menu->add('Machine Frames', getLang() . '/machine-frames');
            // $menu->add('Hand Quilting', getLang() . '/hand-quilting');
            // $menu->add('Automated', getLang() . '/automation/qct');
            // $menu->add('truecut', getLang() . '/');
            // $menu->add('Community', getLang() . '/community');
            // $shop = $menu->add('Shop', getLang() . '/shop', ['class' => 'sf-menu']);
            //             $shop->add('Cart', getLang() . '/shop/cart');
            //             $shop->add('Checkout', getLang() . '/shop/checkout');
            // $menu->add('Blog', getLang() . '/articles');
            // $menu->add('Contact', getLang() . '/contact');
            // $menu->add('WHAT WE DO', getLang() . "/");
            // $menu->add('ABOUT US', getLang() . "/");
            // $menu->add('MANUFACTURING', getLang() . "/");
            // $menu->add('INVESTORS', getLang() . "/");
            // $menu->add('NEWS', getLang() . "/");
            // $menu->add('CAREERS', getLang() . "/");
            // $menu->add('CONTACT', getLang() . "/");




        return $next($request);
    }
}
