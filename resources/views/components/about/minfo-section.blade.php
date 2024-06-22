@if($module->about)
<!-- About Me Section Start -->
<div data-scroll-index="1" id="about"
     class="py-3.5  max-w-content xl:max-2xl:max-w-50rem max-xl:mx-auto xl:ml-auto">

    <div class="px-5 py-8 md:p-8 bg-white dark:bg-nightBlack rounded-2xl about-section lg:p-10 2xl:p-13">
        @if($info->about_section_subtitle_text)
        <div
            class="inline-flex items-center gap-2 px-4 py-2 text-xs tracking-wide text-black dark:text-white border lg:px-5 section-name border-platinum dark:border-greyBlack200 rounded-4xl">
            <i class="fal fa-user text-theme"></i>
            {!! $info->about_section_subtitle_text !!}
        </div>
        @endif

        @if($info->about_section_title)
        <div class="mt-7 md:mt-10 section-title">
            <h2
                class="title text-[32px] md:text-4xl lg:text-5xl font-extralight text-black dark:text-white leading-1.27">
                {!! $info->about_section_title !!}
            </h2>
            @if($profile->about)
            <p class="max-w-2xl mt-4 md:mt-6 subtitle">
                {!! $profile->about !!}
            </p>
            @else
                <x-ui.empty-section :auth="'Go to your Dashboard and create a New About.'" />
            @endif
        </div>
        @endif
        <div class="mt-6 section-content">
            @if($skills)
            <div class="inline-flex flex-wrap items-center gap-2 mb-5 text-sm md:gap-4">
                @foreach($skills as $skill)
                <a href="#"
                   class="inline-block px-3.5 py-2 transition duration-300 border border-dashed text-black dark:text-white/70 border-platinum dark:border-greyBlack rounded-3xl md:px-5 md: md:py-2 hover:text-theme dark:hover:text-white">
                    {{ $skill->name }} ({{ $skill->rate }})
                </a>
                @endforeach
{{--                <a href="#"--}}
{{--                   class="inline-block px-3.5 py-2 transition duration-300 border border-dashed text-black dark:text-white/70 border-platinum dark:border-greyBlack rounded-3xl md:px-5 md: md:py-2 hover:text-theme dark:hover:text-white">--}}
{{--                    {{ __('Bootstrap (98%)') }}--}}
{{--                </a>--}}
{{--                <a href="#"--}}
{{--                   class="inline-block px-3.5 py-2 transition duration-300 border border-dashed text-black dark:text-white/70 border-platinum dark:border-greyBlack rounded-3xl md:px-5 md: md:py-2 hover:text-theme dark:hover:text-white">--}}
{{--                    {{ __('TailwindCSS (90%)') }}--}}
{{--                </a>--}}
            </div>
            @endif

            <ul class="grid mt-4 mb-10 text-sm lg:mt-6 md:grid-cols-2 gap-x-8 gap-y-3">
                <li class="flex items-center">
                    <span class="flex-[0_0_6rem]">{{  __('Phone') }}</span>
                    <span class="flex-[0_0_2rem]">:</span>
                    <span class="text-black dark:text-white">{{  __('+(971) 543 316 900') }} </span>
                </li>
                <li class="flex items-center">
                    <span class="flex-[0_0_6rem]">{{  __('Email') }}</span>
                    <span class="flex-[0_0_2rem]">:</span>
                    <span class="text-black dark:text-white">{{  __('mutamanelhadi97@gmail.com') }}</span>
                </li>
{{--                <li class="flex items-center">--}}
{{--                    <span class="flex-[0_0_6rem]">Skype</span>--}}
{{--                    <span class="flex-[0_0_2rem]">:</span>--}}
{{--                    <span class="text-black dark:text-white">brown@com</span>--}}
{{--                </li>--}}
                <li class="flex items-center">
                    <span class="flex-[0_0_6rem]">Github</span>
                    <span class="flex-[0_0_2rem]">:</span>
                    <span class="text-black dark:text-white">{{  __('github.com/mutaman97') }}</span>
                </li>
                <li class="flex items-center">
                    <span class="flex-[0_0_6rem]">{{  __('Languages') }}</span>
                    <span class="flex-[0_0_2rem]">:</span>
                    <span class="text-black dark:text-white">{{  __('Arabic, English, German') }}</span>
                </li>
            </ul>

            <ul class="grid grid-cols-2 gap-6 counters md:grid-cols-4 xl:gap-8">
                <li class="">
                    <div class="mb-1 text-2xl font-semibold md:text-3xl number text-theme 2xl:text-4xl">
                        <span>4</span>+
                    </div>
                    <div class="text-sm">{{  __('Years Of Experience') }}</div>
                </li>
                <li class="">
                    <div class="mb-1 text-2xl font-semibold md:text-3xl number text-theme 2xl:text-4xl">
                        <span>30</span>+
                    </div>
                    <div class="text-sm">{{  __('Handled Projects') }}</div>
                </li>
                <li class="">
                    <div class="mb-1 text-2xl font-semibold md:text-3xl number text-theme 2xl:text-4xl">
                        <span>05</span>+
                    </div>
                    <div class="text-sm">{{  __('Open Source Libraries') }}</div>
                </li>
                <li class="">
                    <div class="mb-1 text-2xl font-semibold md:text-3xl number text-theme 2xl:text-4xl">
                        <span>5</span>
                    </div>
                    <div class="text-sm">{{  __('Awards Won') }}</div>
                </li>
            </ul>

        </div>
    </div>

</div>
<!-- About Me Section End -->
@endif
