<!-- Sidebar Profile Start -->
<div class="w-full mx-auto minfo__sidebar__wrapper xl:fixed xl:top-1/2 xl:left-4 2xl:left-14 xl:-translate-y-1/2 md:max-w-sidebar xl:max-2xl:max-w-xs z-999">
    <div class="p-3 mb-3 overflow-hidden minfo__sidebar bg-white dark:bg-nightBlack rounded-2xl">
        <div class="mx-4 mt-12 text-center user-info lg:mx-6">
            <a href="#"
               class="w-36 mb-2.5 h-3w-36 block mx-auto border-6 border-platinum dark:border-[#2f2f2f] overflow-hidden rounded-full">
                @if($profile->avatar)
                    <x-curator-glider
                        class="hidden dark:block w-full h-full rounded-full bg-secondary-300 bg-gradient-to-tl from-primary-500 to-tertiary-500"
                        :media="$profile->avatar" />
                @else
                    <img
                        src="{{ asset('img/core/profile-picture.png') }}"
                        class="hidden dark:block w-full h-full rounded-full bg-secondary-300 bg-gradient-to-tl from-primary-500 to-tertiary-500"
                        alt="{{  $profile->user->name }}"> <!--Image for Dark Version -->
                    <img
                        src="{{ asset('img/core/profile-picture.png') }}"
                        class="dark:hidden w-full h-full rounded-full bg-secondary-300 bg-gradient-to-tl from-primary-500 to-tertiary-500"
                        alt="{{  $profile->user->name }}"> <!--Image for Light Version -->
                @endif
                @if($profile->is_open_to_work)
                    @if($profile->linkedin)
                        <a href="{{'https://' . $profile->linkedin }}" target="_blank">
                            @endif
                            <div
                                class="absolute -ml-12 -mt-7 inline-block w-auto rounded-sm bg-gradient-to-tl from-primary-500 to-indigo-500 p-1 text-xs text-white lg:-mt-7">
                                <span class="flex items-center gap-1 font-semibold">
                                    <ion-icon class="h-3 w-3" name="logo-linkedin"></ion-icon>
                                    {{ __('Open to Work') }}
                                </span>
                            </div>
                            @if($profile->linkedin)
                        </a>
                    @endif
                @endif

            </a>
            <h6 class="mb-1 text-lg font-semibold text-black dark:text-white name">{{ $profile->user->name }}</h6>
            <div class="leading-none cd-headline clip is-full-width">
                <h6 class="text-sm cd-words-wrapper designation text-theme after:!bg-theme">
                    <b class="font-normal is-visible">{{ __('Full-Stack Web Developer') }}</b>
                    <b class="font-normal">{{  __('PHP Laravel Develuper') }}</b>
                    <b class="font-normal">{{  __('Vue Js, Nuxt Developer') }}</b>
                </h6>
            </div>

        </div>
        <div class="pt-6 mx-4 border-t lg:mx-6 user-meta-info md:mx-7 my-7 border-platinum dark:border-metalBlack">
{{--            <ul class="space-y-3">--}}
{{--                <li class="flex text-sm">--}}
{{--                    <span class="flex-1 font-medium text-black dark:text-white">Residence:</span>--}}
{{--                    <span>Canada</span>--}}
{{--                </li>--}}
{{--                <li class="flex text-sm">--}}
{{--                    <span class="flex-1 font-medium text-black dark:text-white">City:</span>--}}
{{--                    <span>Toronto</span>--}}
{{--                </li>--}}
{{--                <li class="flex text-sm">--}}
{{--                    <span class="flex-1 font-medium text-black dark:text-white">Age:</span>--}}
{{--                    <span>26</span>--}}
{{--                </li>--}}
{{--            </ul>--}}
                <x-ui.social-network />
        </div>
        <div class="px-4 py-5 lg:py-6 lg:px-6 rounded-2xl md:px-8 bg-flashWhite dark:bg-metalBlack">
            @if($skills)
                <div class="text-sm font-medium text-black dark:text-white">{{  __('Skills') }}</div>
                <div class="flex items-center justify-between my-4 space-x-4 skills_circle">
                    @foreach($skills as $skill)
                        <div class="space-y-2 text-center progressCircle">
                            <div class="relative w-12 h-12 circle" data-percent="{{ $skill->rate }}">
                                <div class="absolute inset-0 text-[13px] font-medium label flex-center">{{ $skill->rate }}</div>
                            </div>
                            <p class="text-[13px] font-normal dark:font-light text-black dark:text-white/90">{{ \Illuminate\Support\Str::limit($skill->name, 8, '') }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
            @if($profile->is_downloadable && $profile->document)
            <div class="mt-6">
                <a href="{{ asset('storage/' . $profile->document) }}" download target="_blank"
                   class="text-center text-sm border border-theme bg-theme flex items-center justify-center gap-2 text-white rounded-4xl py-3.5 transition duration-300 text-[15px] font-semibold hover:bg-themeHover hover:border-themeHover">
                    {{ __('View Resume') }}
                    <span class="animate-bounce">
                        <svg width="18" height="18" viewBox="0 0 15 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.0724 4.92378C12.0726 4.91034 12.0726 4.89691 12.0726 4.88368C12.0726 2.53968 10.1657 0.632812 7.82171 0.632812C5.47771 0.632812 3.57084 2.53968 3.57084 4.88368C3.57084 4.89691 3.57084 4.91055 3.57104 4.92378C1.95417 5.0992 0.691406 6.47267 0.691406 8.13554C0.691406 9.91704 2.14059 11.3662 3.92209 11.3662H4.33138C4.55606 11.3662 4.7384 11.1839 4.7384 10.9592C4.7384 10.7345 4.55606 10.5522 4.33138 10.5522H3.92209C2.58952 10.5522 1.50544 9.46811 1.50544 8.13554C1.50544 6.80297 2.58952 5.71888 3.92209 5.71888H4.00309C4.11868 5.71888 4.22898 5.66963 4.30611 5.58355C4.38345 5.49726 4.42028 5.38248 4.40766 5.2673C4.3924 5.12769 4.38487 5.00233 4.38487 4.88348C4.38487 2.98842 5.92665 1.44664 7.82171 1.44664C9.71678 1.44664 11.2586 2.98842 11.2586 4.88348C11.2586 5.00233 11.251 5.12769 11.2358 5.2673C11.2231 5.38228 11.26 5.49726 11.3373 5.58355C11.4144 5.66963 11.5247 5.71888 11.6403 5.71888H11.7217C13.0541 5.71888 14.138 6.80297 14.138 8.13554C14.138 9.46811 13.0541 10.5522 11.7217 10.5522H11.288C11.0634 10.5522 10.881 10.7345 10.881 10.9592C10.881 11.1839 11.0634 11.3662 11.288 11.3662H11.7217C13.5028 11.3662 14.952 9.91704 14.952 8.13554C14.952 6.47247 13.6892 5.099 12.0724 4.92378Z"
                                fill="white" />
                            <path
                                d="M6.26314 11.942C6.0877 12.1876 6.26327 12.5288 6.5651 12.5288H8.81272L7.3764 14.5396C7.25728 14.7064 7.29591 14.9382 7.46268 15.0573C7.62945 15.1764 7.86122 15.1378 7.98034 14.971L9.83579 12.3734C10.0112 12.1278 9.83566 11.7866 9.53382 11.7866H7.2862L8.72252 9.77578C8.84164 9.609 8.80302 9.37724 8.63624 9.25811C8.46947 9.13899 8.23771 9.17762 8.11858 9.34439L6.26314 11.942Z"
                                fill="white" />
                        </svg>
                    </span>
                </a>
            </div>
            @endif
        </div>
        <svg class="absolute w-0 h-0">
            <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox" stroke="white" stroke-width="2">
                <path
                    d="M0.001,0.031 C0.001,0.014,0.026,0.001,0.055,0.001 H0.492 C0.506,0.001,0.52,0.004,0.53,0.009 L0.61,0.052 C0.62,0.057,0.634,0.06,0.649,0.06 H0.947 C0.977,0.06,1,0.074,1,0.091 V0.971 C1,0.987,0.977,1,0.947,1 H0.055 C0.026,1,0.001,0.987,0.001,0.971 V0.031">
                </path>
            </clipPath>
        </svg>
    </div>
</div>
<!-- Sidebar Profile End -->
