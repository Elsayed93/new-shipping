<?php

namespace App\Http\Controllers\Them;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index()
    {
        $settings = $this->site_settings;
        $navSections = $this->navbar_sections;

        return view('Them.layouts.home', compact('settings', 'navSections'));
    }

    public function profile()
    {
        $settings = $this->site_settings;
        $navSections = $this->navbar_sections;

        return view('Them.profile.profile', compact('settings', 'navSections'));
    }
}
