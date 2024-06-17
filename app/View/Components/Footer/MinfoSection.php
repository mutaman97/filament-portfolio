<?php

namespace App\View\Components\Footer;

use Closure;
use App\Models\Layout;
use App\Models\Module;
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
        return view('components.footer.minfo-section', [
            'info' => Layout::query()
                ->select([
                    'newsletter_section_title',
                    'newsletter_section_subtitle_text',
                    'newsletter_section_button_text',
                    'newsletter_section_image',
                    'footer_section_fill'
                ])
                ->first(),
            'setting' => Setting::query()
                ->select(['logo', 'name', 'logo_dark_mode', 'logo_size'])
                ->first(),
            'module' => Module::query()
                ->select(['newsletter', 'footer'])
                ->first(),
        ]);
    }
}
