<?php

namespace App\View\Components\About;

use App\Models\Experience;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MinfoExperiences extends Component
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

        return view('components.about.minfo-experiences', [
            'experiences' => Experience::all()
                ->sortDesc()
                ->take(5),
        ]);
    }
}
