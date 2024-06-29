@if($module->hero)
<!-- Hero/Introduction Section Start -->
<div data-scroll-index="0" id="home"
     class="py-5 xl:py-3.5 max-w-content xl:max-2xl:max-w-50rem max-xl:mx-auto xl:ml-auto">

    <div class="px-5 py-8 bg-white dark:bg-nightBlack rounded-2xl hero-section md:p-8 lg:p-10 2xl:p-13">
        <div
            class="inline-flex items-center gap-2 px-4 py-2 text-xs tracking-wide text-black dark:text-white border lg:px-5 section-name border-platinum dark:border-greyBlack200 rounded-4xl">
            <i class="fal fa-home text-theme"></i>
            {{__('INTRODUCE')}}
        </div>
        <div class="items-center gap-6 hero-content md:flex xl:gap-10">
            <div class="text-content pt-7 lg:pt-8 max-lg:max-w-[30rem]">
                <h1
                    class="text-[32px] lg:text-5xl xl:text-4xl 2xl:text-5xl font-semibold text-black dark:text-white leading-1.27 lg:leading-1.27 xl:leading-1.27 2xl:leading-1.27 mb-4 lg:mb-5">
                    @if($info->hero_section_title)
                        {!! $info->hero_section_title !!}
                    @endif
                </h1>
                @if($info->hero_section_subtitle_text)
                <p>
                    {!! $info->hero_section_subtitle_text !!}
                </p>
                @endif
                <ul class="flex items-center mt-4 -mx-3 lg:mt-5">
                    <li class="flex items-center mx-3 text-regular">
                        <i class="mr-2 fal fa-check-double text-theme"></i>
                        {{ __('Available for work') }}
                    </li>
                    <li class="flex items-center mx-3 text-regular">
                        <i class="mr-2 fal fa-check-double text-theme"></i>
                        {{ __('Full Time Job') }}
                    </li>
                </ul>
                <ul class="mt-7 buttons flex justify-center gap-4">
                    <li data-scroll-nav="8">
                        <a href="{{ $info->hero_section_button_url }}" target="{{ $info->hero_button_link_target }}"
                           class="btn-theme inline-flex items-center gap-2 bg-theme text-power__black py-4 md:py-4.5 lg:px-9 px-7 rounded-2xl leading-none transition-all duration-300 hover:shadow-theme_shadow text-white font-medium text-[15px] md:text-base">
                            <i class="fal fa-paper-plane"></i>
                            {{ $info->hero_section_button_text }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ $info->hero_alt_button_url }}" target="{{ $info->hero_alt_button_link_target }}"
                           class="btn-theme inline-flex items-center gap-2 bg-neutral-600 text-power__black py-4 md:py-4.5 lg:px-9 px-7 rounded-2xl leading-none transition-all duration-300 hover:shadow-theme_shadow text-white font-medium text-[15px] md:text-base">
                            <i class="fab fa-github"></i>
                            {{ $info->hero_alt_button_text }}
                        </a>
                    </li>
                </ul>

            </div>
            <div class="hero-image flex-[0_0_20.3rem] max-md:hidden">
                @if($info->hero_section_image)
                    <img
                        src="{{ asset('storage/' . $info->hero_section_image)}}"
                        class="dark:hidden"
                        alt="Hero Image - Light Mode">
                    <img
                        src="{{ asset('storage/' . $info->hero_section_image)}}"
                        class="hidden dark:block"
                        alt="Hero Image - Dark Mode">
                @else
                    <img
                        src="{{ asset('img/core/hero-image.png') }}"
                        class="dark:hidden"
                        alt="Hero Image - Light Mode">
                    <img
                        src="{{ asset('img/core/hero-image.png') }}"
                        class="hidden dark:block"
                        alt="Hero Image - Dark Mode">
                @endif
            </div>
        </div>

        {{-- Hero Section Slider --}}
        <x-hero.minfo-slider :$sliders />

    </div>

</div>
<!-- Hero/Introduction Section End -->
@endif
