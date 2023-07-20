<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MainLayout extends Component
{

    /**
     * @return View
     */
    public function render(): View
    {
        return view('layouts.main');
    }
}
