@if($module->portfolio)
<!-- Portfolio Section Start -->
<div data-scroll-index="5" id="portfolio"
     class="py-5 xl:py-3.5 max-w-content xl:max-2xl:max-w-50rem max-xl:mx-auto xl:ml-auto">

    <div class="px-5 py-8 md:p-8 bg-white dark:bg-nightBlack rounded-2xl service-section lg:p-10 2xl:p-13">
        <div
            class="inline-flex items-center gap-2 px-4 py-2 text-xs tracking-wide text-black dark:text-white border lg:px-5 section-name border-platinum dark:border-greyBlack200 rounded-4xl">
            <i class="fal fa-tasks-alt text-theme"></i>
            {{ __('PORTFOLIO') }}
        </div>
        <div class="mt-5 mb-8 md:my-10 section-title">
            @if($info->portfolio_section_title)
            <h2
                class="title text-[32px] md:text-4xl lg:text-5xl font-extralight text-black dark:text-white leading-1.27">
                {!! $info->portfolio_section_title !!}
            </h2>
            @endif
            @if($info->portfolio_section_subtitle_text)
            <p class="max-w-xl mt-4 md:mt-6 subtitle">
                {!! $info->portfolio_section_subtitle_text !!}
            </p>
            @endif
        </div><!--./section-title-->

        @if($projects->count() !== 0)
            <div class="portfolio_wrapper grid sm:grid-cols-2 gap-4 lg:gap-7.5">
            @foreach ($projects as $project )
            <div class="relative item md:col-span-{{ $loop->first || $loop->last ? 2 : 1 }} z-1 group">
                <a href="project-single.html"
                   class="flex items-center justify-center p-3 overflow-hidden border md:p-4 rounded-xl border-platinum dark:border-greyBlack">
                    <div class="img-wrapper">
                        <x-curator-glider
                            class="rounded-lg max-md:min-h-[17rem] max-md:w-full max-md:object-cover max-md:object-center transition-all duration-300 group-hover:blur-xs"
                            :media="$project->image_cover" />
                        <div
                            class="absolute inset-0 transition-all duration-300 opacity-0 overlay bg-gradient-to-t from-white dark:from-black to-transparent rounded-xl group-hover:opacity-100">
                        </div>
                    </div>
                    <div class="info text-center position-center max-lg:text-3xl text-lead font-semibold text-black dark:text-white leading-1.15 transition duration-500 scale-110 opacity-0 group-hover:scale-100 group-hover:opacity-100 relative z-10">
                        {{--Design<span>Specialization</span>--}}
                        {!! (count($words = explode(' ', $project->name)) > 1) ? $words[0] . ' <span>' . $words[1] . '</span> ' . implode(' ', array_slice($words, 2)) : $project->name !!}
                    </div>
                </a>
                <ul
                    class="absolute z-10 transition-all duration-500 opacity-0 md:top-9 md:right-9 top-6 right-6 group-hover:opacity-100">
                    <li>
                        <a href="#"
                           class="inline-flex items-center gap-2 px-5 py-3 text-sm font-light leading-none text-white transition-colors bg-metalBlack rounded-3xl hover:text-theme">
                            {{ $project->category->name }}
                        </a>
                    </li>
                </ul>
            </div><!--./portfolio-card-->
            @endforeach
        </div>
        @else
            <x-ui.empty-section :auth="'Go to your Dashboard and create a New Project.'" />
        @endif

        <div class="mt-10 text-center more-blogs md:mt-13">
            <a href="#portfolio"
               class="inline-flex items-center gap-2 text-[15px] font-medium border border-theme bg-theme text-white py-4.5 px-9 rounded-4xl leading-none transition-all duration-300 hover:bg-themeHover hover:border-themeHover">
                {{ __('More Projects') }}
            </a>
        </div>
    </div>

</div>
<!-- Portfolio Section End -->
@endif
