<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function homePage() {
        // return "home page";
        return view('site.pages.home');
    }

    public function aboutPage() {
        return "about page";
    }

    public function contactPage() {
        // return "contact page";
        return view('site.pages.contact');

    }

    public function categoryWisePostPage() {
        // return "category wise post";
        return view('site.pages.category_wise_post');
    }

    public function singlePostPage() {
        return view('site.pages.single_post');
    }

}
