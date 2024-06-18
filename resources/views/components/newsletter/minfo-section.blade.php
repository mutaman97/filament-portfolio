@if($module->newsletter)
    <div data-scroll-index="8" class="py-5 xl:py-3.5 max-w-content xl:max-2xl:max-w-50rem max-xl:mx-auto xl:ml-auto">
        <div class="px-5 py-8 bg-white dark:bg-nightBlack rounded-2xl contact-section lg:p-13">
            <div class=" items-center justify-center px-4 py-6 text-center lg:py-8">
                <div class="flex flex-col items-center">
                    <span class="-rotate-1 rounded-lg bg-yellow-100 py-px px-2 text-sm text-yellow-800">{!! $info->newsletter_section_title !!}</span>
                    <h3 class="mt-2 max-w-2xl text-center text-2xl font-bold leading-tight sm:text-3xl md:text-4xl md:leading-tight">{!! $info->newsletter_section_subtitle_text !!}</h3>
                        <livewire:minfo-newsletter :buttonText='$info->newsletter_section_button_text'>
                </div>
            </div>
        </div>
    </div>
@endif
