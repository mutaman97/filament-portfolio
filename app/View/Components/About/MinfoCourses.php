<?php

namespace App\View\Components\About;

use Closure;
use App\Models\Course;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MinfoCourses extends Component
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

        return view('components.about.minfo-courses', [
            'courses' => Course::all()
                ->sortDesc()
                ->take(5),
        ]);
    }
}
