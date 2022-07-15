<?php

namespace App\View;
use Illuminate\View\Component;
class UsersLayout extends Component
{

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.users');
    }
}
