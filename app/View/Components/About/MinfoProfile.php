<?php

namespace App\View\Components\About;

use App\Models\Slideshow;
use Closure;
use App\Models\Course;
use App\Models\Layout;
use App\Models\Module;
use App\Models\Profile;
use App\Models\Setting;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MinfoProfile extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about.minfo-profile', [
            'profile' => Profile::first(),
        ]);
    }
}
