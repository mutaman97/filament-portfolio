<?php

namespace App\View\Components\About;

use App\Models\Skill;
use App\Models\Slideshow;
use Closure;
use App\Models\Course;
use App\Models\Layout;
use App\Models\Module;
use App\Models\Profile;
use App\Models\Setting;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MinfoSection extends Component
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
        return view('components.about.minfo-section', [
            'sliders' => getSlider('about-section', new Slideshow),
            'module' => Module::query()
                ->select(['about'])
                ->first(),
            'profile' => Profile::first(),
            'courses' => Course::all()
                ->sortDesc()
                ->take(5),
            'skills' => Skill::query()
                ->orderBy('created_at', 'desc')
                ->take(12)
                ->get(),
            'info' => Layout::query()
                ->select([
                    'about_section_fill',
                    'about_section_title',
                    'about_section_subtitle_text'
                ])
                ->first(),
        ]);
    }
}
