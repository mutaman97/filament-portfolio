@props(['page', 'maintenance' => null, 'discovery' => null, 'header_core' => null, 'hero_core' => null, 'about_core' =>
null, 'portfolio_core' => null, 'clients_core' => null, 'contact_core' => null, 'newsletter_core' => null, 'footer_core'
=> null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('theme') == 'dark' ? 'dark' : '' }}">

<head>
    <x-header.minfo-meta />
    <x-header.minfo-scripts />
</head>

<body class="relative custom_cursor">
    @if(!$maintenance || $discovery && auth()->user())

        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

        <!-- Custom Cursor Start -->
        <div
            class="custom_cursor_one fixed top-0 left-0 w-8 h-8 border border-gray-400 rounded-full pointer-events-none">
        </div>
        <div
            class="custom_cursor_two w-1 h-1 rounded-full border border-gray-400 bg-metborder-gray-400 fixed pointer-events-none left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        </div>
        <!-- Custom Cursor End -->


        <!-- App Preloader Start -->
        <div id="preloader">
            <div class="loader_line"></div>
            <div
                class="absolute w-20 h-20 transition-all delay-300 -translate-x-1/2 -translate-y-1/2 rounded-full logo top-1/2 left-1/2 bg-nightBlack border-greyBlack flex-center">
                <img src="assets/img/mutaman-logo.svg" alt="Mutaman">
            </div>
        </div>
        <!-- App Preloader End

            <!-- App Start -->
        <div class="relative pt-10 minfo__app max-xl:pt-20">
            <div
                class="menu-overlay fixed top-0 left-0 w-full h-full bg-black/60 transition-all duration-200 z-999 opacity-0 invisible [&.is-menu-open]:visible [&.is-menu-open]:opacity-100">
            </div>
            <div class="max-lg:px-4">
                <x-ui.chatbox />

                <!-- Mobile Menu Bar Start -->
                <div
                    class="fixed top-0 left-0 right-0 z-30 flex items-center justify-between p-2 px-3 bg-white/10 mobile-menu-bar sm:px-6 backdrop-blur-md xl:hidden">
                    <div class="text-lg font-medium name">
                        <a href="/" class="flex items-center gap-2 text-black dark:text-white">
                            <img src="assets/img/mutaman-logo.svg" alt="Mutaman">
{{--                            <span>{{  __('Mutaman') }}</span>--}}
                        </a>
                    </div>
                    <!-- Mobile Hamburger Menu Start -->
                    <button
                        class="w-12 h-12 border rounded-full hamburger menu_toggle bg-white dark:bg-nightBlack border-platinum dark:border-greyBlack flex-center"
                        type="button"
                        aria-label="Open Mobile Menu">
                        <svg viewBox="0 0 20 12" class="w-6"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.33333 11.3333C5.33333 11.1565 5.40357 10.987 5.5286 10.8619C5.65362 10.7369 5.82319 10.6667 6 10.6667H19.3333C19.5101 10.6667 19.6797 10.7369 19.8047 10.8619C19.9298 10.987 20 11.1565 20 11.3333C20 11.5101 19.9298 11.6797 19.8047 11.8047C19.6797 11.9298 19.5101 12 19.3333 12H6C5.82319 12 5.65362 11.9298 5.5286 11.8047C5.40357 11.6797 5.33333 11.5101 5.33333 11.3333ZM2.66667 6C2.66667 5.82319 2.7369 5.65362 2.86193 5.5286C2.98695 5.40357 3.15652 5.33333 3.33333 5.33333H16.6667C16.8435 5.33333 17.013 5.40357 17.1381 5.5286C17.2631 5.65362 17.3333 5.82319 17.3333 6C17.3333 6.17681 17.2631 6.34638 17.1381 6.4714C17.013 6.59643 16.8435 6.66667 16.6667 6.66667H3.33333C3.15652 6.66667 2.98695 6.59643 2.86193 6.4714C2.7369 6.34638 2.66667 6.17681 2.66667 6ZM0 0.666667C0 0.489856 0.0702379 0.320287 0.195262 0.195262C0.320286 0.070238 0.489856 0 0.666667 0H14C14.1768 0 14.3464 0.070238 14.4714 0.195262C14.5964 0.320287 14.6667 0.489856 14.6667 0.666667C14.6667 0.843478 14.5964 1.01305 14.4714 1.13807C14.3464 1.2631 14.1768 1.33333 14 1.33333H0.666667C0.489856 1.33333 0.320286 1.2631 0.195262 1.13807C0.0702379 1.01305 0 0.843478 0 0.666667Z"
                                  class="fill-theme dark:fill-white" />
                        </svg>
                    </button>
                    <!-- Mobile Hamburger Menu End -->
                </div>
                <!-- Mobile Menu Bar End -->


                <!-- Mobile Menu Sidebar Start -->
                <div
                    class="mobile-menu fixed top-0 -right-full w-full max-w-mobilemenu bg-flashWhite dark:bg-nightBlack z-999 h-full xl:hidden transition-all duration-300 [&.is-menu-open]:right-0 py-12 px-8 overflow-y-scroll">
                    <button
                        class="absolute flex items-center justify-center w-9 h-9 text-sm text-white rounded-full close-menu top-4 right-4 bg-greyBlack" aria-label="Close Menu">
                        <i class="fal fa-times"></i>
                    </button>
                    <div class="mb-6 text-lg font-medium text-black dark:text-white menu-title">
                        Menu
                    </div>
                    <ul class="space-y-5 font-normal main-menu">
                        <li data-scroll-nav="0" class="relative group active">
                            <a href="#home" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-home"></i>
                            </span>
                                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Home
                            </span>
                            </a>
                        </li>
                        <li data-scroll-nav="1" class="relative group">
                            <a href="#about" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-user"></i>
                            </span>
                                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                About
                            </span>
                            </a>
                        </li>
                        <li data-scroll-nav="2" class="relative group">
                            <a href="#" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-briefcase"></i>
                            </span>
                                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Service
                            </span>
                            </a>
                        </li>
                        <li data-scroll-nav="3" class="relative group">
                            <a href="#skill" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-graduation-cap"></i>
                            </span>
                                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Skills
                            </span>
                            </a>
                        </li>
                        <li data-scroll-nav="4" class="relative group">
                            <a href="#resume" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-file-alt"></i>
                            </span>
                                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Resume
                            </span>
                            </a>
                        </li>
                        <li data-scroll-nav="5" class="relative group">
                            <a href="#portfolio" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-tasks-alt"></i>
                            </span>
                                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Portfolio
                            </span>
                            </a>
                        </li>
                        <li data-scroll-nav="6" class="relative group">
                            <a href="#blog" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-blog"></i>
                            </span>
                                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Blog
                            </span>
                            </a>
                        </li>
                        <li data-scroll-nav="7" class="relative group">
                            <a href="#testimonial" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-comment-alt-lines"></i>
                            </span>
                                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Testimonial
                            </span>
                            </a>
                        </li>
                        <li data-scroll-nav="8" class="relative group">
                            <a href="#contact" class="flex items-center space-x-2 group">
                            <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                                <i class="fal fa-envelope"></i>
                            </span>
                                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                                Contact
                            </span>
                            </a>
                        </li>
                    </ul>
                    <br><br>
                    <div class="mb-4 font-medium text-black dark:text-white menu-title text-md">
                        Get in Touch
                    </div>
                    <!-- Social Share Icon Start  -->
                    <div class="flex items-center space-x-4 social-icons">
                        <a href="#" class="flex transition duration-200 hover:text-white" title="Share with Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="flex transition duration-200 hover:text-white" title="Share with Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="flex transition duration-200 hover:text-white" title="Share with X">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="flex transition duration-200 hover:text-white" title="Share with X">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <!-- Social Share Icon End  -->
                </div>
                <!-- Mobile Menu Sidebar End -->

                {{-- Profile Section --}}
                <x-about.minfo-profile/>


                <!-- Nav/Navigation Start -->
                <div
                    class="minfo__nav__wrapper bg-snowWhite dark:bg-power__black max-xl:hidden fixed top-1/2 -translate-y-1/2 right-4 2xl:right-14 z-30 flex items-center flex-col gap-4 border border-platinum dark:border-metalBlack rounded-4xl px-2.5 py-4">

                    <!-- Site Logo Start -->
                    <div class="flex border rounded-full logo w-15 h-15 border-platinum dark:border-metalBlack flex-center">
                        <a href="/">
                            <img src="assets/img/mutaman-logo.svg" alt="Mutaman">
                        </a>
                    </div>
                    <!-- Site Logo Start -->


                    <!-- Main Menu/Navigation Start -->
                    <div class="my-4 menu">
                        <ul class="space-y-2 text-center">
                            <li data-scroll-nav="0" class="relative group active">
                                <a href="#home"
                                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                   data-title="Home">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-home"></i>
                                </span>
                                </a>
                            </li>
                            <li data-scroll-nav="1" class="relative group">
                                <a href="#about"
                                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                   data-title="About">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-user"></i>
                                </span>
                                </a>
                            </li>
                            <li data-scroll-nav="2" class="relative group">
                                <a href="#service"
                                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                   data-title="Service">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-briefcase"></i>
                                </span>
                                </a>
                            </li>
                            <li data-scroll-nav="3" class="relative group">
                                <a href="#skill"
                                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                   data-title="Skills">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-graduation-cap"></i>
                                </span>
                                </a>
                            </li>
                            <li data-scroll-nav="4" class="relative group">
                                <a href="#resume"
                                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                   data-title="Resume">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-file-alt"></i>
                                </span>
                                </a>
                            </li>
                            <li data-scroll-nav="5" class="relative group">
                                <a href="#portfolio"
                                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                   data-title="Portfolio">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-tasks-alt"></i>
                                </span>
                                </a>
                            </li>
                            <li data-scroll-nav="6" class="relative group">
                                <a href="#blog"
                                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                   data-title="Blog">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-blog"></i>
                                </span>
                                </a>
                            </li>
                            <li data-scroll-nav="7" class="relative group">
                                <a href="#testimonial"
                                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                   data-title="Testimonial">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-comment-alt-lines"></i>
                                </span>
                                </a>
                            </li>
                            <li data-scroll-nav="8" class="relative group">
                                <a href="#contact"
                                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                                   data-title="Contact">
                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                                    <i class="fal fa-envelope"></i>
                                </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Main Menu/Navigation End -->

                    <!-- Share Button Wrapper Start -->
{{--                    <div class="relative share group">--}}
{{--                        <button--}}
{{--                            class="w-10 h-10 text-sm border rounded-full border-platinum dark:border-metalBlack flex-center group-hover:bg-white dark:group-hover:bg-metalBlack text-black dark:text-white"--}}
{{--                            aria-label="Share">--}}
{{--                            <i class="fal fa-share-alt"></i>--}}
{{--                        </button>--}}

{{--                        <!-- Social Share Icon Start  -->--}}
{{--                        <div--}}
{{--                            class="absolute bottom-0 flex items-center invisible px-5 py-6 space-x-3 transition-all duration-300 -translate-y-1/2 opacity-0 social-icons top-1/2 bg-white dark:bg-nightBlack rounded-4xl right-6 group-hover:opacity-100 group-hover:visible group-hover:right-10 -z-1">--}}
{{--                            <a href="#" class="flex transition duration-200 hover:text-theme" title="Share with Facebook">--}}
{{--                                <i class="fab fa-facebook"></i>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="flex transition duration-200 hover:text-theme" title="Share with Linkedin">--}}
{{--                                <i class="fab fa-linkedin-in"></i>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="flex transition duration-200 hover:text-theme" title="Share with X">--}}
{{--                                <i class="fab fa-twitter"></i>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="flex transition duration-200 hover:text-theme" title="Share with X">--}}
{{--                                <i class="fab fa-instagram"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <!-- Social Share Icon End  -->--}}
{{--                    </div>--}}
                    <!-- Share Button Wrapper End -->

                </div>
                <!-- Nav/Navigation End -->


                <!-- Main Content Start -->
                <div class="relative mx-auto minfo__contentBox max-w-container xl:max-2xl:max-w-65rem">

                    @if($hero_core)
                        <x-hero.minfo-section />
                    @endif

                    @if($about_core)
                        <x-about.minfo-section />
                    @endif


                    <!-- My Services Section Start -->
                    <div data-scroll-index="2" id="service"
                         class="py-5 xl:py-3.5 max-w-content xl:max-2xl:max-w-50rem max-xl:mx-auto xl:ml-auto">

                        <div class="px-5 py-8 md:p-8 bg-white dark:bg-nightBlack rounded-2xl service-section lg:p-10 2xl:p-13">
                            <div
                                class="inline-flex items-center gap-2 px-4 py-2 text-xs tracking-wide text-black dark:text-white border lg:px-5 section-name border-platinum dark:border-greyBlack200 rounded-4xl">
                                <i class="fal fa-briefcase text-theme"></i>
                                SERVICES
                            </div>
                            <div class="mb-8 mt-7 md:my-10 section-title">
                                <h2
                                    class="title text-[32px] md:text-4xl lg:text-5xl font-extralight text-black dark:text-white leading-1.27">
                                    My <span class="font-semibold text-theme">Services</span>
                                </h2>
                                <p class="max-w-xl mt-4 md:mt-6 subtitle">
                                    {{ __('As a Full Stack Web Developer with expertise in Laravel, I offer a comprehensive range of services to help you build, optimize, and elevate your online presence.') }}
                                </p>
                            </div>

                            <div class="grid gap-5 md:gap-6 service-card-wrapper sm:grid-cols-2 lg:gap-7 2xl:gap-8">
                                <div
                                    class="relative p-5 transition duration-300 border py-7 md:p-7 card-item group border-platinum dark:border-metalBlack rounded-2xl xl:p-8 2xl:p-10 hover:border-theme">
                                    <div
                                        class="absolute transition duration-300 md:top-10 icon right-6 top-7 md:right-8 group-hover:-rotate-45 lg:top-11">
                                        <svg width="33" h eight="32" viewBox="0 0 33 32" class="fill-theme"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.6599 0.813965C15.4258 0.813965 14.3875 1.68953 14.1331 2.8505H5.30667V1.61411C5.30608 1.46748 5.24728 1.3271 5.14319 1.22382C5.03911 1.12055 4.89826 1.06284 4.75164 1.0634H1.18069C1.03463 1.0637 0.894615 1.12178 0.791231 1.22497C0.687847 1.32815 0.629491 1.46805 0.628906 1.61411V5.1937C0.629491 5.33976 0.687847 5.47966 0.791231 5.58284C0.894615 5.68602 1.03463 5.7441 1.18069 5.7444H4.75164C4.89826 5.74496 5.03911 5.68726 5.14319 5.58398C5.24728 5.48071 5.30608 5.34032 5.30667 5.1937V3.95623H11.5059C8.07879 5.5101 5.48724 8.56947 4.56483 12.301C3.3553 12.517 2.42896 13.584 2.42896 14.8537C2.42896 16.2777 3.59309 17.4453 5.01619 17.4453C6.4393 17.4453 7.60451 16.2777 7.60451 14.8537C7.60451 13.6647 6.79182 12.6539 5.6954 12.3529C6.78739 8.28189 10.0674 5.1253 14.2065 4.21862C14.5505 5.24594 15.5218 5.99276 16.6599 5.99276C17.7979 5.99276 18.7703 5.24598 19.1143 4.21862C23.2544 5.1244 26.5334 8.2809 27.6254 12.3529C26.5284 12.6535 25.7163 13.6644 25.7163 14.8537C25.7163 16.2777 26.8804 17.4453 28.3035 17.4453C29.7266 17.4453 30.8918 16.2777 30.8918 14.8537C30.8918 13.5836 29.9649 12.5166 28.7548 12.301C27.8324 8.56931 25.2411 5.51004 21.8138 3.95623H28.0141V5.1937C28.0147 5.34032 28.0735 5.48071 28.1776 5.58398C28.2817 5.68726 28.4225 5.74496 28.5691 5.7444H32.1401C32.2867 5.74496 32.4275 5.68726 32.5316 5.58398C32.6357 5.48071 32.6945 5.34032 32.6951 5.1937V1.61411C32.6945 1.46748 32.6357 1.32709 32.5316 1.22382C32.4275 1.12054 32.2867 1.06284 32.1401 1.0634H28.5691C28.4225 1.06284 28.2817 1.12054 28.1776 1.22382C28.0735 1.32709 28.0147 1.46748 28.0141 1.61411V2.8505H19.1888C18.9345 1.68942 17.894 0.813965 16.6599 0.813965ZM16.6599 1.91646C17.4844 1.91646 18.1414 2.5739 18.1414 3.4012C18.1414 3.42454 18.1413 3.44833 18.1403 3.47139C18.1396 3.47391 18.1389 3.47643 18.1382 3.47896C18.1341 3.50576 18.132 3.53283 18.1319 3.55994C18.0542 4.31124 17.4302 4.88703 16.6591 4.88703C15.8961 4.88703 15.2778 4.32324 15.1894 3.5837C15.19 3.5486 15.1872 3.51352 15.1811 3.47895C15.1804 3.47607 15.1797 3.4732 15.179 3.47032C15.178 3.44761 15.1769 3.4242 15.1769 3.40122C15.1769 2.57391 15.8353 1.91646 16.6599 1.91646ZM1.7314 2.16913H4.19985V4.63867H1.7314V2.16913ZM29.1198 2.16913H31.5894V4.63867H29.1198V2.16913ZM16.6599 7.7237C16.6109 7.72447 16.5623 7.73173 16.5153 7.7453C16.5076 7.74729 16.5 7.74945 16.4925 7.75178C16.4493 7.76573 16.4079 7.78495 16.3694 7.809C16.3583 7.81617 16.3475 7.82374 16.337 7.83168C16.3004 7.85777 16.267 7.88823 16.2378 7.92239C16.2371 7.92274 16.2364 7.9231 16.2357 7.92347L8.19968 17.645C8.13809 17.7187 8.09675 17.8071 8.07971 17.9016C8.06267 17.9961 8.07052 18.0933 8.10249 18.1839L11.5568 27.8709C10.9036 28.1831 10.4489 28.8547 10.4489 29.6234C10.4489 30.6848 11.3155 31.5617 12.3753 31.5617H20.9458C22.0057 31.5617 22.8722 30.6848 22.8722 29.6234C22.8722 28.8542 22.4172 28.1818 21.7632 27.8698L25.2186 18.1839C25.251 18.0936 25.2594 17.9965 25.2429 17.902C25.2264 17.8075 25.1857 17.719 25.1246 17.645L17.1209 7.96882C17.0702 7.89314 17.0016 7.83116 16.9211 7.7884C16.8407 7.74564 16.7509 7.72341 16.6599 7.7237ZM16.1091 9.80883V16.332C14.9156 16.589 14.0154 17.6624 14.0154 18.9343C14.0154 20.3958 15.2034 21.5993 16.6599 21.5993C18.1162 21.5993 19.3043 20.3958 19.3043 18.9343C19.3043 17.6637 18.4065 16.5915 17.2149 16.3331V9.8153L24.0717 18.1061L20.6551 27.6852H12.6645L9.24907 18.1018L16.1091 9.80883ZM5.01619 13.3679C5.84077 13.3679 6.4977 14.0264 6.4977 14.8537C6.4977 15.681 5.84077 16.3385 5.01619 16.3385C4.19162 16.3385 3.53469 15.681 3.53469 14.8537C3.53469 14.0264 4.19162 13.3679 5.01619 13.3679ZM28.2992 13.3679C28.3006 13.3679 28.302 13.3679 28.3034 13.3679C29.1279 13.3679 29.7848 14.0264 29.7849 14.8537C29.7849 15.681 29.1279 16.3385 28.3034 16.3385C27.4788 16.3385 26.8218 15.681 26.8218 14.8537C26.8218 14.0279 27.4767 13.3702 28.2992 13.3679ZM16.6599 17.3794C17.5132 17.3794 18.1986 18.0651 18.1986 18.9343C18.1986 19.8036 17.5132 20.4936 16.6599 20.4936C15.8064 20.4936 15.1211 19.8036 15.1211 18.9343C15.1211 18.0651 15.8064 17.3794 16.6599 17.3794ZM12.3751 28.7909H20.9456C21.4066 28.7909 21.7663 29.1502 21.7663 29.6234C21.7663 30.0967 21.4066 30.456 20.9456 30.456H12.3751C11.9141 30.456 11.5545 30.0967 11.5545 29.6234C11.5545 29.1502 11.9141 28.7909 12.3751 28.7909Z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="text-5xl font-extrabold transition duration-300 md:text-6xl number lg:text-7xl text-greyBlack opacity-30 group-hover:opacity-100">
                                        01
                                    </div>
                                    <h4 class="mt-5 mb-4 text-xl font-medium text-black dark:text-white xl:text-2xl">
                                        {{  __('UI/UX Design') }}
                                    </h4>
                                    <p>
                                        {{  __('I focus on delivering visually appealing interfaces that provide seamless navigation and a delightful user experience.') }}
                                    </p>
                                </div>
                                <div
                                    class="relative p-5 transition duration-300 border py-7 md:p-7 card-item group border-platinum dark:border-metalBlack rounded-2xl xl:p-8 2xl:p-10 hover:border-theme">
                                    <div
                                        class="absolute transition duration-300 md:top-10 icon right-6 top-7 md:right-8 group-hover:-rotate-45 lg:top-11">
                                        <svg width="37" height="31" viewBox="0 0 37 31" class="fill-theme"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.21101 30.4333H34.179C34.7012 30.4333 35.202 30.2259 35.5712 29.8567C35.9404 29.4875 36.1479 28.9867 36.1479 28.4645V2.48079C36.1479 1.95862 35.9404 1.45785 35.5712 1.08862C35.202 0.719392 34.7012 0.511963 34.179 0.511963H2.21101C1.68885 0.511963 1.18807 0.719392 0.818844 1.08862C0.449617 1.45785 0.242188 1.95862 0.242188 2.48079V28.4645C0.242188 28.9867 0.449617 29.4875 0.818844 29.8567C1.18807 30.2259 1.68885 30.4333 2.21101 30.4333ZM1.43904 2.48079C1.43904 2.27605 1.52038 2.0797 1.66515 1.93492C1.80992 1.79015 2.00628 1.70882 2.21101 1.70882H34.179C34.3838 1.70882 34.5801 1.79015 34.7249 1.93492C34.8697 2.0797 34.951 2.27605 34.951 2.48079V5.29938H1.43904V2.48079ZM1.43904 6.49624H34.951V28.4645C34.951 28.6693 34.8697 28.8656 34.7249 29.0104C34.5801 29.1552 34.3838 29.2365 34.179 29.2365H2.21101C2.00628 29.2365 1.80992 29.1552 1.66515 29.0104C1.52038 28.8656 1.43904 28.6693 1.43904 28.4645V6.49624Z" />
                                            <path d="M14.6033 2.90552H2.63477V4.10237H14.6033V2.90552Z" />
                                            <path d="M32.5562 2.90552H31.3594V4.10237H32.5562V2.90552Z" />
                                            <path d="M28.3687 2.90527H27.1719V4.10213H28.3687V2.90527Z" />
                                            <path
                                                d="M9.81721 20.0386H10.6131C10.8056 20.0375 10.9941 20.0938 11.1545 20.2003C11.315 20.3067 11.44 20.4585 11.5139 20.6363C11.5877 20.8141 11.6069 21.0099 11.569 21.1987C11.5312 21.3874 11.438 21.5606 11.3013 21.6962L10.7388 22.2588C10.626 22.3693 10.5615 22.5198 10.5593 22.6777C10.5596 22.7568 10.5756 22.8352 10.6064 22.9081C10.6373 22.981 10.6822 23.0471 10.7388 23.1026L12.959 25.3227C13.0144 25.3793 13.0805 25.4242 13.1534 25.4551C13.2263 25.4859 13.3047 25.5019 13.3838 25.5022C13.5417 25.5 13.6922 25.4355 13.8027 25.3227L14.3653 24.7662C14.4982 24.6256 14.6712 24.5294 14.8608 24.4909C15.0504 24.4523 15.2472 24.4732 15.4245 24.5507C15.6034 24.6222 15.7563 24.7463 15.8632 24.9066C15.9701 25.0668 16.0257 25.2558 16.0229 25.4484V26.2443C16.0229 26.403 16.086 26.5552 16.1982 26.6674C16.3104 26.7797 16.4626 26.8427 16.6213 26.8427H19.7631C19.9218 26.8427 20.074 26.7797 20.1862 26.6674C20.2985 26.5552 20.3615 26.403 20.3615 26.2443V25.4484C20.3578 25.2556 20.4132 25.0663 20.5201 24.9058C20.6271 24.7454 20.7806 24.6215 20.9599 24.5507C21.1372 24.4732 21.334 24.4523 21.5236 24.4909C21.7132 24.5294 21.8863 24.6256 22.0191 24.7662L22.5817 25.3227C22.6938 25.4342 22.8455 25.4967 23.0036 25.4967C23.1617 25.4967 23.3133 25.4342 23.4255 25.3227L25.6456 23.1026C25.7022 23.0471 25.7471 22.981 25.778 22.9081C25.8088 22.8352 25.8248 22.7568 25.8251 22.6777C25.8229 22.5198 25.7584 22.3693 25.6456 22.2588L25.0891 21.6962C24.9485 21.5634 24.8523 21.3903 24.8138 21.2007C24.7752 21.0111 24.7961 20.8143 24.8736 20.637C24.9444 20.4576 25.0683 20.3042 25.2287 20.1972C25.3892 20.0903 25.5785 20.0349 25.7713 20.0386H26.5732C26.7319 20.0386 26.8841 19.9756 26.9963 19.8633C27.1086 19.7511 27.1716 19.5989 27.1716 19.4402V16.2984C27.1716 16.1397 27.1086 15.9875 26.9963 15.8753C26.8841 15.763 26.7319 15.7 26.5732 15.7H25.7773C25.5848 15.6994 25.3968 15.6419 25.237 15.5346C25.0771 15.4274 24.9526 15.2753 24.879 15.0974C24.8054 14.9196 24.7861 14.7239 24.8235 14.5351C24.8609 14.3463 24.9533 14.1728 25.0891 14.0364L25.6516 13.4738C25.7644 13.3634 25.8289 13.2128 25.8311 13.0549C25.8308 12.9758 25.8148 12.8974 25.784 12.8245C25.7531 12.7516 25.7081 12.6855 25.6516 12.6301L23.4314 10.4099C23.376 10.3534 23.3099 10.3084 23.237 10.2776C23.1641 10.2467 23.0857 10.2307 23.0066 10.2304C22.8487 10.2326 22.6981 10.2971 22.5877 10.4099L22.0251 10.9664C21.8922 11.107 21.7192 11.2032 21.5296 11.2417C21.34 11.2803 21.1432 11.2594 20.9659 11.1819C20.7865 11.1111 20.6331 10.9872 20.5261 10.8268C20.4192 10.6663 20.3638 10.477 20.3675 10.2842V9.48832C20.3675 9.32961 20.3044 9.17739 20.1922 9.06517C20.08 8.95294 19.9278 8.88989 19.7691 8.88989H16.6273C16.4686 8.88989 16.3164 8.95294 16.2042 9.06517C16.0919 9.17739 16.0289 9.32961 16.0289 9.48832V10.2842C16.0317 10.4768 15.976 10.6658 15.8692 10.8261C15.7623 10.9863 15.6093 11.1104 15.4305 11.1819C15.2532 11.2594 15.0563 11.2803 14.8668 11.2417C14.6772 11.2032 14.5041 11.107 14.3712 10.9664L13.8087 10.4099C13.6966 10.2984 13.5449 10.2359 13.3868 10.2359C13.2287 10.2359 13.0771 10.2984 12.9649 10.4099L10.7448 12.6301C10.6882 12.6855 10.6432 12.7516 10.6124 12.8245C10.5816 12.8974 10.5656 12.9758 10.5652 13.0549C10.5675 13.2128 10.632 13.3634 10.7448 13.4738L11.3013 14.0364C11.4419 14.1693 11.538 14.3423 11.5766 14.5319C11.6152 14.7215 11.5943 14.9183 11.5167 15.0956C11.4453 15.2745 11.3212 15.4275 11.1609 15.5343C11.0007 15.6412 10.8117 15.6969 10.6191 15.694H9.81721C9.65849 15.694 9.50628 15.7571 9.39405 15.8693C9.28183 15.9815 9.21878 16.1337 9.21878 16.2924V19.4342C9.21799 19.5133 9.23288 19.5917 9.2626 19.665C9.29232 19.7383 9.33628 19.805 9.39193 19.8612C9.44757 19.9174 9.51381 19.962 9.58681 19.9925C9.65981 20.0229 9.73811 20.0386 9.81721 20.0386ZM10.4156 16.8969H10.6131C11.0416 16.8953 11.46 16.767 11.8157 16.5282C12.1715 16.2894 12.4487 15.9507 12.6124 15.5548C12.7761 15.1588 12.8192 14.7233 12.736 14.303C12.6529 13.8827 12.4473 13.4964 12.1451 13.1926L12.0075 13.0789L13.3838 11.7025L13.5215 11.8401C13.8252 12.1423 14.2116 12.3479 14.6319 12.431C15.0522 12.5142 15.4877 12.4712 15.8837 12.3074C16.2796 12.1437 16.6183 11.8665 16.8571 11.5108C17.0959 11.155 17.2241 10.7366 17.2257 10.3082V10.0867H19.1706V10.2842C19.1706 10.7127 19.2976 11.1316 19.5356 11.4879C19.7737 11.8442 20.112 12.122 20.5079 12.2859C20.9038 12.4499 21.3394 12.4928 21.7597 12.4092C22.1799 12.3256 22.566 12.1192 22.8689 11.8162L23.0066 11.6786L24.3829 13.0549L24.2453 13.1926C23.9431 13.4964 23.7375 13.8827 23.6544 14.303C23.5712 14.7233 23.6142 15.1588 23.778 15.5548C23.9417 15.9507 24.2189 16.2894 24.5747 16.5282C24.9304 16.767 25.3488 16.8953 25.7773 16.8969H25.9748V18.8417H25.7773C25.3488 18.8417 24.9299 18.9687 24.5736 19.2067C24.2173 19.4448 23.9395 19.7831 23.7756 20.179C23.6116 20.5749 23.5687 21.0105 23.6523 21.4308C23.7359 21.851 23.9423 22.2371 24.2453 22.54L24.3829 22.6777L22.9826 24.0541L22.845 23.9164C22.542 23.6134 22.156 23.407 21.7357 23.3234C21.3155 23.2398 20.8798 23.2827 20.4839 23.4467C20.0881 23.6107 19.7497 23.8884 19.5117 24.2447C19.2736 24.601 19.1466 25.0199 19.1467 25.4484V25.6459H17.2257V25.4484C17.2241 25.0199 17.0959 24.6015 16.8571 24.2458C16.6183 23.89 16.2796 23.6129 15.8837 23.4491C15.4877 23.2854 15.0522 23.2424 14.6319 23.3255C14.2116 23.4087 13.8252 23.6142 13.5215 23.9164L13.3838 24.0541L12.0075 22.6537L12.1451 22.5161C12.4481 22.2131 12.6545 21.8271 12.7381 21.4068C12.8217 20.9866 12.7788 20.5509 12.6148 20.1551C12.4508 19.7592 12.1731 19.4208 11.8168 19.1828C11.4605 18.9448 11.0416 18.8177 10.6131 18.8178H10.4156V16.8969Z" />
                                            <path
                                                d="M18.1956 22.6535C19.1425 22.6535 20.0681 22.3727 20.8554 21.8466C21.6427 21.3206 22.2563 20.5729 22.6186 19.6981C22.981 18.8233 23.0758 17.8607 22.8911 16.9321C22.7063 16.0034 22.2504 15.1504 21.5808 14.4808C20.9113 13.8113 20.0583 13.3553 19.1296 13.1706C18.2009 12.9859 17.2383 13.0807 16.3636 13.443C15.4888 13.8054 14.7411 14.419 14.215 15.2063C13.689 15.9936 13.4082 16.9192 13.4082 17.866C13.4082 19.1357 13.9126 20.3534 14.8104 21.2513C15.7082 22.1491 16.9259 22.6535 18.1956 22.6535ZM18.1956 14.2755C18.9058 14.2755 19.6 14.4861 20.1904 14.8806C20.7809 15.2751 21.2411 15.8359 21.5129 16.492C21.7846 17.1481 21.8557 17.87 21.7172 18.5665C21.5787 19.263 21.2367 19.9028 20.7345 20.405C20.2324 20.9071 19.5926 21.2491 18.8961 21.3876C18.1996 21.5262 17.4777 21.4551 16.8216 21.1833C16.1655 20.9115 15.6047 20.4513 15.2102 19.8608C14.8156 19.2704 14.6051 18.5762 14.6051 17.866C14.6051 16.9138 14.9833 16.0005 15.6567 15.3271C16.3301 14.6538 17.2433 14.2755 18.1956 14.2755Z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="text-5xl font-extrabold transition duration-300 md:text-6xl number lg:text-7xl text-greyBlack opacity-30 group-hover:opacity-100">
                                        02
                                    </div>
                                    <h4 class="mt-5 mb-4 text-xl font-medium text-black dark:text-white xl:text-2xl">
                                        {{  __('Web Development') }}
                                    </h4>
                                    <p>
                                        {{  __('Transform your ideas into a functional, responsive, and user-friendly website with my full-stack web development services.') }}
                                    </p>
                                </div>
                                <div
                                    class="relative p-5 transition duration-300 border py-7 md:p-7 card-item group border-platinum dark:border-metalBlack rounded-2xl xl:p-8 2xl:p-10 hover:border-theme">
                                    <div
                                        class="absolute transition duration-300 md:top-10 icon right-6 top-7 md:right-8 group-hover:-rotate-45 lg:top-11">
                                        <svg width="32" height="31" viewBox="0 0 32 31" class="fill-theme"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M31.3586 0.492502C31.2987 0.432719 31.2251 0.388514 31.1441 0.363749C31.0632 0.338985 30.9775 0.334415 30.8944 0.350439L25.0786 1.48138C23.2662 1.83313 21.6006 2.71933 20.2963 4.02588L14.5195 9.80262L13.7678 9.05075C13.6963 8.97916 13.6053 8.93014 13.5062 8.90977C13.4071 8.88939 13.3042 8.89855 13.2103 8.93612L5.81363 11.8906C5.75062 11.9158 5.69319 11.9532 5.64464 12.0006L4.15803 13.449C4.09591 13.5095 4.05003 13.5848 4.02463 13.6678C3.99922 13.7507 3.99509 13.8388 4.01263 13.9237C4.03016 14.0087 4.0688 14.0879 4.12498 14.1541C4.18115 14.2202 4.25307 14.2711 4.33409 14.3022L8.9895 16.0847L10.1156 17.2108L6.67576 18.6295C6.59712 18.662 6.52771 18.7134 6.47368 18.7791C6.41966 18.8449 6.38268 18.9229 6.36603 19.0063C6.34938 19.0898 6.35358 19.176 6.37824 19.2575C6.40291 19.3389 6.44729 19.413 6.50744 19.4731L12.3781 25.3438C12.4751 25.4408 12.6066 25.4953 12.7437 25.4953C12.7777 25.4953 12.8117 25.4919 12.8451 25.4854C12.9285 25.4687 13.0065 25.4316 13.0722 25.3775C13.1379 25.3234 13.1893 25.254 13.2218 25.1753L14.6403 21.7357L15.7159 22.8113L17.4981 27.4663C17.5291 27.5474 17.58 27.6194 17.6461 27.6756C17.7123 27.7318 17.7915 27.7705 17.8765 27.788C17.9108 27.795 17.9458 27.7986 17.9808 27.7986C18.0499 27.7986 18.1182 27.7848 18.1818 27.7579C18.2454 27.7311 18.303 27.6918 18.3512 27.6424L19.7997 26.1556C19.8471 26.1071 19.8844 26.0497 19.9095 25.9866L22.8642 18.5901C22.9017 18.4962 22.9109 18.3933 22.8905 18.2942C22.8702 18.1952 22.8212 18.1042 22.7497 18.0327L22.0487 17.3317L27.8259 11.5545C29.1317 10.2483 30.0177 8.58187 30.3702 6.76883L31.5007 0.956895C31.5168 0.873772 31.5122 0.78797 31.4875 0.707006C31.4627 0.626043 31.4184 0.55239 31.3586 0.492502ZM6.29266 12.8129L13.2776 10.023L13.7883 10.5338L9.24644 15.0757L5.4588 13.6255L6.29266 12.8129ZM13.143 19.2245C13.131 19.2293 13.1193 19.2345 13.108 19.24L12.1024 19.7356L12.6 18.7344C12.605 18.7247 12.6093 18.7146 12.6135 18.7043L13.653 16.6186L16.7723 15.0696L15.2325 18.1973L13.143 19.2245ZM12.5613 24.0644L7.78667 19.29L10.9053 18.0039L11.5086 18.6071L10.4953 20.6458C10.4471 20.7426 10.4304 20.8521 10.4478 20.9589C10.4651 21.0656 10.5155 21.1643 10.5919 21.2408C10.6267 21.2748 10.6662 21.3036 10.7092 21.3264C10.7185 21.3315 10.7274 21.3365 10.7369 21.3411C10.7784 21.3613 10.8225 21.3758 10.8679 21.3842C10.8751 21.3855 10.8822 21.3853 10.8895 21.3863C10.9122 21.3901 10.9352 21.3923 10.9582 21.393C10.9743 21.393 10.9902 21.389 11.0063 21.3875C11.0205 21.3862 11.0343 21.3853 11.0484 21.3828C11.0963 21.3751 11.1429 21.3606 11.1867 21.3398L13.233 20.3315L13.8472 20.9459L12.5613 24.0644ZM21.7775 18.523L18.9874 25.5076L18.1747 26.3416L16.7526 22.6276L21.3174 18.0629L21.7775 18.523ZM27.094 10.8238L16.1421 21.7758L14.2155 19.8497L15.8469 19.0476C15.9492 18.9972 16.0321 18.9143 16.0825 18.812L18.375 14.1549C18.4228 14.0579 18.4389 13.9484 18.4212 13.8417C18.4035 13.735 18.3527 13.6366 18.2761 13.5603C18.1996 13.484 18.101 13.4336 17.9943 13.4162C17.8875 13.3988 17.7781 13.4153 17.6812 13.4634L13.0376 15.7696C12.9366 15.8196 12.8548 15.9012 12.8046 16.002L11.994 17.6285L10.0755 15.709L21.0274 4.75707C21.3452 4.44074 21.6883 4.15083 22.0532 3.89024L27.9601 9.79715C27.6996 10.1622 27.4099 10.5055 27.094 10.8238ZM29.3549 6.57089C29.1962 7.38401 28.916 8.16858 28.5235 8.89821L22.9519 3.32659C23.6808 2.93485 24.4644 2.65502 25.2765 2.49651L30.3389 1.512L29.3549 6.57089Z" />
                                            <path
                                                d="M22.4563 6.66505C21.8248 6.66495 21.2129 6.88381 20.7247 7.28433C20.2365 7.68485 19.9023 8.24225 19.7791 8.86155C19.6558 9.48086 19.7511 10.1237 20.0487 10.6807C20.3463 11.2376 20.8278 11.6741 21.4111 11.9158C21.9945 12.1575 22.6436 12.1895 23.2479 12.0062C23.8522 11.823 24.3742 11.4359 24.7251 10.9109C25.076 10.3859 25.2339 9.75546 25.1721 9.12705C25.1102 8.49863 24.8324 7.9111 24.3859 7.46457C24.1331 7.21035 23.8324 7.00879 23.5012 6.87155C23.17 6.73432 22.8148 6.66413 22.4563 6.66505ZM23.6547 10.593C23.4177 10.8301 23.1156 10.9915 22.7868 11.0569C22.458 11.1224 22.1171 11.0888 21.8074 10.9605C21.4976 10.8322 21.2328 10.6149 21.0466 10.3362C20.8603 10.0574 20.7609 9.72964 20.7609 9.39436C20.7609 9.05909 20.8603 8.73134 21.0466 8.45257C21.2328 8.1738 21.4976 7.95653 21.8074 7.82823C22.1171 7.69993 22.458 7.66637 22.7868 7.73179C23.1156 7.79721 23.4177 7.95867 23.6547 8.19575C23.8134 8.35243 23.9394 8.53905 24.0255 8.74481C24.1115 8.95057 24.1557 9.17136 24.1557 9.39436C24.1557 9.61737 24.1115 9.83816 24.0255 10.0439C23.9394 10.2497 23.8134 10.4363 23.6547 10.593Z" />
                                            <path
                                                d="M6.6209 26.0877L8.38254 24.3262C8.43055 24.2782 8.46863 24.2212 8.49462 24.1585C8.5206 24.0958 8.53397 24.0285 8.53397 23.9606C8.53397 23.8927 8.5206 23.8255 8.49462 23.7628C8.46864 23.7 8.43055 23.643 8.38254 23.595C8.33453 23.547 8.27753 23.5089 8.21481 23.483C8.15208 23.457 8.08485 23.4436 8.01695 23.4436C7.94905 23.4436 7.88182 23.457 7.81909 23.483C7.75636 23.5089 7.69937 23.547 7.65136 23.595L5.88971 25.3565C5.8417 25.4045 5.80362 25.4615 5.77764 25.5242C5.75165 25.587 5.73828 25.6542 5.73828 25.7221C5.73828 25.79 5.75165 25.8572 5.77764 25.92C5.80362 25.9827 5.8417 26.0397 5.88972 26.0877C5.93773 26.1357 5.99472 26.1738 6.05745 26.1998C6.12018 26.2258 6.18741 26.2391 6.25531 26.2391C6.3232 26.2391 6.39044 26.2258 6.45316 26.1998C6.51589 26.1738 6.57289 26.1357 6.6209 26.0877Z" />
                                            <path
                                                d="M4.57839 26.6672L4.07544 27.17C3.97921 27.2672 3.9254 27.3985 3.92578 27.5353C3.92617 27.6721 3.98072 27.8031 4.0775 27.8998C4.17428 27.9964 4.3054 28.0508 4.44217 28.051C4.57894 28.0512 4.71022 27.9972 4.80728 27.9008L5.30954 27.3987C5.40556 27.3016 5.45925 27.1704 5.45886 27.0338C5.45848 26.8971 5.40406 26.7662 5.30749 26.6696C5.21092 26.573 5.08004 26.5185 4.94344 26.5181C4.80683 26.5176 4.6756 26.5712 4.57839 26.6672Z" />
                                            <path
                                                d="M3.07636 28.1697L2.28425 28.9618C2.18729 29.0588 2.13281 29.1903 2.13281 29.3274C2.13281 29.4645 2.18728 29.596 2.28424 29.693C2.38121 29.79 2.51271 29.8444 2.64984 29.8444C2.78696 29.8444 2.91847 29.79 3.01543 29.693L3.80754 28.9012C3.85558 28.8532 3.89368 28.7962 3.91969 28.7335C3.94569 28.6707 3.95908 28.6035 3.9591 28.5356C3.95911 28.4677 3.94575 28.4004 3.91978 28.3377C3.8938 28.2749 3.85572 28.2179 3.80771 28.1699C3.7597 28.1218 3.7027 28.0837 3.63997 28.0577C3.57723 28.0317 3.50998 28.0183 3.44207 28.0183C3.37416 28.0183 3.30691 28.0317 3.24416 28.0576C3.18141 28.0836 3.12439 28.1217 3.07636 28.1697Z" />
                                            <path
                                                d="M2.74661 25.2089L5.16605 22.7894C5.21406 22.7413 5.25215 22.6844 5.27813 22.6216C5.30411 22.5589 5.31749 22.4917 5.31749 22.4238C5.31749 22.3559 5.30411 22.2886 5.27813 22.2259C5.25215 22.1632 5.21406 22.1062 5.16605 22.0582C5.11804 22.0102 5.06105 21.9721 4.99832 21.9461C4.93559 21.9201 4.86836 21.9067 4.80046 21.9067C4.73256 21.9067 4.66533 21.9201 4.6026 21.9461C4.53987 21.9721 4.48288 22.0102 4.43487 22.0582L2.01543 24.4778C1.96727 24.5257 1.92904 24.5827 1.90293 24.6455C1.87682 24.7083 1.86335 24.7756 1.86328 24.8436C1.86321 24.9115 1.87656 24.9789 1.90254 25.0417C1.92853 25.1045 1.96664 25.1616 2.01471 25.2097C2.06278 25.2577 2.11986 25.2959 2.18268 25.3218C2.2455 25.3478 2.31283 25.3612 2.38081 25.3611C2.44879 25.361 2.5161 25.3476 2.57886 25.3214C2.64163 25.2953 2.69864 25.2571 2.74661 25.2089Z" />
                                            <path
                                                d="M0.98704 25.5052L0.573307 25.9189C0.476346 26.0159 0.421875 26.1474 0.421875 26.2845C0.421875 26.4216 0.476348 26.5531 0.573309 26.6501C0.67027 26.7471 0.801778 26.8015 0.938901 26.8015C1.07603 26.8015 1.20753 26.7471 1.30449 26.6501L1.71822 26.2364C1.76639 26.1884 1.80462 26.1314 1.83073 26.0686C1.85683 26.0058 1.87031 25.9385 1.87037 25.8706C1.87044 25.8026 1.8571 25.7353 1.83111 25.6724C1.80513 25.6096 1.76701 25.5525 1.71894 25.5045C1.67087 25.4564 1.61379 25.4183 1.55097 25.3923C1.48815 25.3663 1.42082 25.353 1.35284 25.353C1.28486 25.3531 1.21756 25.3666 1.15479 25.3927C1.09202 25.4188 1.03502 25.457 0.98704 25.5052Z" />
                                            <path
                                                d="M8.74403 26.7083L7.9334 27.5191C7.88524 27.5671 7.84701 27.6241 7.8209 27.6869C7.79479 27.7496 7.78132 27.8169 7.78125 27.8849C7.78118 27.9529 7.79452 28.0202 7.82051 28.083C7.84649 28.1459 7.88461 28.2029 7.93268 28.251C7.98075 28.2991 8.03783 28.3372 8.10065 28.3632C8.16347 28.3892 8.2308 28.4025 8.29878 28.4024C8.36676 28.4024 8.43407 28.3889 8.49683 28.3628C8.5596 28.3367 8.61661 28.2984 8.66458 28.2503L9.47521 27.4395C9.52338 27.3915 9.56161 27.3345 9.58772 27.2717C9.61382 27.209 9.6273 27.1417 9.62736 27.0737C9.62743 27.0057 9.61409 26.9384 9.5881 26.8756C9.56212 26.8127 9.524 26.7557 9.47593 26.7076C9.42786 26.6595 9.37078 26.6214 9.30796 26.5954C9.24514 26.5694 9.17781 26.5561 9.10983 26.5562C9.04185 26.5562 8.97455 26.5697 8.91178 26.5958C8.84901 26.6219 8.79201 26.6602 8.74403 26.7083Z" />
                                            <path
                                                d="M6.94946 28.5025L6.09675 29.3554C6.04874 29.4034 6.01065 29.4604 5.98467 29.5231C5.95869 29.5858 5.94531 29.6531 5.94531 29.721C5.94531 29.7889 5.95869 29.8561 5.98467 29.9188C6.01065 29.9816 6.04874 30.0386 6.09675 30.0866C6.14476 30.1346 6.20175 30.1727 6.26448 30.1986C6.32721 30.2246 6.39444 30.238 6.46234 30.238C6.53024 30.238 6.59747 30.2246 6.6602 30.1986C6.72293 30.1727 6.77992 30.1346 6.82793 30.0866L7.68064 29.2337C7.72865 29.1857 7.76674 29.1287 7.79272 29.066C7.8187 29.0032 7.83208 28.936 7.83208 28.8681C7.83208 28.8002 7.8187 28.733 7.79272 28.6702C7.76674 28.6075 7.72865 28.5505 7.68064 28.5025C7.63263 28.4545 7.57564 28.4164 7.51291 28.3904C7.45018 28.3644 7.38295 28.3511 7.31505 28.3511C7.24716 28.3511 7.17992 28.3644 7.1172 28.3904C7.05447 28.4164 6.99747 28.4545 6.94946 28.5025Z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="text-5xl font-extrabold transition duration-300 md:text-6xl number lg:text-7xl text-greyBlack opacity-30 group-hover:opacity-100">
                                        03
                                    </div>
                                    <h4 class="mt-5 mb-4 text-xl font-medium text-black dark:text-white xl:text-2xl">
                                        {{  __('SEO (Search Engine Optimization)') }}
                                    </h4>
                                    <p>
                                        {{  __('I use the latest techniques and best practices to ensure your website ranks high on search engine results') }}
                                    </p>
                                </div>
                                <div
                                    class="relative p-5 transition duration-300 border py-7 md:p-7 card-item group border-platinum dark:border-metalBlack rounded-2xl xl:p-8 2xl:p-10 hover:border-theme">
                                    <div
                                        class="absolute transition duration-300 md:top-10 icon right-6 top-7 md:right-8 group-hover:-rotate-45 lg:top-11">
                                        <svg width="46" height="31" viewBox="0 0 46 31" class="fill-theme"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M33.5446 15.0219C33.9557 14.9825 34.355 14.862 34.7194 14.6676C35.0839 14.4732 35.4063 14.2086 35.668 13.8891C35.9298 13.5696 36.1258 13.2015 36.2448 12.806C36.3638 12.4104 36.4033 11.9952 36.3612 11.5844C36.3211 11.1734 36.2 10.7744 36.0051 10.4104C35.8102 10.0463 35.5453 9.72446 35.2254 9.46319C34.9057 9.20191 34.5374 9.00642 34.1418 8.88803C33.7463 8.76964 33.3311 8.73063 32.9204 8.77316L32.1235 0.681331C32.1135 0.576954 32.0774 0.476763 32.0186 0.38994C31.9598 0.303118 31.8801 0.232442 31.787 0.184392C31.6938 0.136342 31.59 0.112455 31.4852 0.114919C31.3803 0.117383 31.2778 0.146121 31.187 0.198497C31.1028 0.243969 22.5521 5.13085 19.681 6.34503C17.4575 7.28934 10.7159 9.01783 10.2398 9.14075L4.67756 9.69099C3.68951 9.78857 2.7527 10.1774 1.98595 10.8082C1.21922 11.439 0.657101 12.2832 0.370917 13.234C0.0847331 14.1847 0.0873773 15.1989 0.378513 16.1481C0.669648 17.0974 1.23616 17.9387 2.00617 18.5655C2.21705 18.7421 2.44338 18.8994 2.68244 19.0355C3.58718 19.5602 4.63472 19.7852 5.67511 19.6782L6.54618 28.4061C6.5852 28.8022 6.71806 29.1834 6.93372 29.518C7.14938 29.8526 7.44165 30.131 7.78634 30.3301C8.23999 30.5918 8.76425 30.7047 9.28537 30.6531C9.94654 30.5876 10.5546 30.2623 10.9759 29.7487C11.3973 29.235 11.5974 28.575 11.5324 27.9138L10.6644 19.1806L11.2405 19.1226C11.8503 19.1563 18.7046 19.5257 21.0445 20.0085C24.0885 20.6376 33.4358 23.7555 33.5297 23.7808C33.6283 23.8138 33.7336 23.8218 33.8362 23.8039C33.9387 23.786 34.0351 23.7429 34.1168 23.6785C34.2058 23.6124 34.2757 23.5238 34.3192 23.4219C34.3628 23.32 34.3786 23.2084 34.3649 23.0984L33.5446 15.0219ZM33.0523 10.0357C33.5475 9.98767 34.0416 10.1379 34.4262 10.4535C34.8108 10.7691 35.0546 11.2243 35.104 11.7194C35.129 11.9651 35.1054 12.2133 35.0344 12.4499C34.9634 12.6864 34.8465 12.9067 34.6904 13.098C34.5342 13.2894 34.3419 13.448 34.1244 13.565C33.9068 13.6819 33.6684 13.7549 33.4227 13.7796L33.0523 10.0357ZM1.43898 15.0623C1.34135 14.0706 1.64155 13.0806 2.27359 12.3101C2.90563 11.5396 3.81777 11.0517 4.80948 10.9536L9.79568 10.4613L10.5394 17.9437L5.55321 18.436C5.06147 18.4851 4.56488 18.4367 4.09185 18.2936C3.61883 18.1506 3.17865 17.9156 2.79651 17.6023C2.41437 17.289 2.09778 16.9033 1.86484 16.4675C1.6319 16.0317 1.48719 15.5542 1.43898 15.0623ZM10.2847 28.0327C10.3181 28.3637 10.2186 28.6944 10.008 28.952C9.79752 29.2097 9.49337 29.3732 9.16229 29.4065C8.83129 29.4399 8.50062 29.3404 8.24294 29.1299C7.98529 28.9194 7.8218 28.6152 7.78845 28.2842L6.92595 19.554L9.41903 19.3079L10.2847 28.0327ZM21.3001 18.7889C19.1597 18.3489 13.5728 18.0023 11.8032 17.8849L11.051 10.2167C12.7625 9.75811 18.1599 8.35314 20.1965 7.48181C22.592 6.47765 28.7141 3.05325 30.9694 1.76562L33.0071 22.2927C30.5498 21.4744 23.8698 19.3249 21.3001 18.7889ZM37.69 11.563C37.6701 11.3981 37.7166 11.232 37.8192 11.1013C37.9218 10.9706 38.0721 10.886 38.2371 10.8661L44.4568 10.1168C44.6217 10.0969 44.7879 10.1434 44.9186 10.246C44.9833 10.2968 45.0373 10.3599 45.0777 10.4315C45.118 10.5033 45.1439 10.5821 45.1537 10.6638C45.1636 10.7455 45.1572 10.8284 45.135 10.9076C45.1129 10.9868 45.0753 11.0609 45.0245 11.1256C44.9737 11.1903 44.9107 11.2444 44.8389 11.2847C44.7673 11.3251 44.6883 11.3509 44.6066 11.3608L38.3869 12.1101C38.2523 12.1263 38.1162 12.0984 37.9987 12.0306C37.9146 11.9821 37.8427 11.9145 37.7892 11.8333C37.7356 11.7522 37.7016 11.6596 37.69 11.563ZM37.1316 8.52078L39.5536 5.57875C39.6597 5.44815 39.8133 5.36505 39.9807 5.34773C40.1481 5.3304 40.3155 5.38028 40.4461 5.48637C40.5766 5.59247 40.6598 5.74611 40.6771 5.91348C40.6944 6.08085 40.6445 6.24824 40.5385 6.37884L38.1165 9.32089C38.0216 9.43726 37.888 9.51563 37.7401 9.5418C37.5923 9.5679 37.4399 9.54013 37.3109 9.46335L37.224 9.41326C37.1584 9.36133 37.104 9.29681 37.0637 9.22356C37.0234 9.15023 36.9982 9.06968 36.9897 8.98645C36.981 8.9033 36.9892 8.81923 37.0135 8.73927C37.0379 8.65931 37.0781 8.58497 37.1316 8.52078ZM40.8367 18.2916C40.7385 18.3657 40.6207 18.4092 40.4979 18.4168C40.3752 18.4244 40.2529 18.3957 40.1464 18.3343C40.0738 18.2922 40.0103 18.2359 39.9599 18.1688L37.1018 14.3485C37.0094 14.2156 36.972 14.052 36.9976 13.892C37.0232 13.7321 37.1097 13.5883 37.239 13.4907C37.3683 13.3932 37.5303 13.3496 37.691 13.3689C37.8519 13.3883 37.9989 13.4692 38.1013 13.5946L40.9594 17.4148C41.0593 17.5475 41.1025 17.7143 41.0794 17.8786C41.0564 18.043 40.9691 18.1915 40.8367 18.2916Z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="text-5xl font-extrabold transition duration-300 md:text-6xl number lg:text-7xl text-greyBlack opacity-30 group-hover:opacity-100">
                                        04
                                    </div>
                                    <h4 class="mt-5 mb-4 text-xl font-medium text-black dark:text-white xl:text-2xl">
                                        {{  __('Maintenance and Support') }}
                                    </h4>
                                    <p>
                                        {{  __('Ensure your website remains up-to-date, secure, and fully functional with my maintenance and support services.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- My Services Section End -->

                    <!-- Skills Section Start -->
                        <x-skill.section />
                    <!-- Skills Section End -->

                    <!-- My Resume Section Start -->
                    <div data-scroll-index="4" id="resume"
                         class="py-5 xl:py-3.5 max-w-content xl:max-2xl:max-w-50rem max-xl:mx-auto xl:ml-auto">
                        <div class="px-5 py-8 md:p-8 bg-white dark:bg-nightBlack rounded-2xl service-section lg:p-10 2xl:p-13">
                            <div
                                class="inline-flex items-center gap-2 px-4 py-2 text-xs tracking-wide text-black dark:text-white border lg:px-5 section-name border-platinum dark:border-greyBlack200 rounded-4xl">
                                <i class="fal fa-folder-open text-theme"></i>
                                {{ __('RESUME') }}
                            </div>
                            <x-about.minfo-experiences />

                            <br>
                            <x-about.minfo-courses />
                        </div>
                    </div>
                    <!-- My Resume Section End -->

                    <!-- My Projects Section Start -->
                    @if($portfolio_core)
                        <x-project.minfo-section />
                    @endif
                    <!-- My Projects Section End -->

                    <!-- Blog Section Start -->
                    <div data-scroll-index="6" id="blog"
                         class="py-5 xl:py-3.5 max-w-content xl:max-2xl:max-w-50rem max-xl:mx-auto xl:ml-auto">

{{--                        <div class="px-5 py-8 md:p-8 bg-white dark:bg-nightBlack rounded-2xl service-section lg:p-10 2xl:p-13">--}}
{{--                            <div--}}
{{--                                class="inline-flex items-center gap-2 px-4 py-2 text-xs tracking-wide text-black dark:text-white border lg:px-5 section-name border-platinum dark:border-greyBlack200 rounded-4xl">--}}
{{--                                <i class="fal fa-blog text-theme"></i>--}}
{{--                                BLOG--}}
{{--                            </div>--}}
{{--                            <div class="mt-5 mb-8 md:my-10 section-title">--}}
{{--                                <h2--}}
{{--                                    class="title text-[32px] md:text-4xl lg:text-5xl font-extralight text-black dark:text-white leading-1.27">--}}
{{--                                    Latest <span class="font-semibold text-theme">Insights</span>--}}
{{--                                </h2>--}}
{{--                                <p class="max-w-xl mt-4 md:mt-6 subtitle">--}}
{{--                                    I design products that are more than pretty. I make them shippable and usable, tempor--}}
{{--                                    non mollit dolor et do aute--}}
{{--                                </p>--}}
{{--                            </div><!--./section-title-->--}}

{{--                            <div class="blog-list md:space-y-7.5 space-y-5">--}}

{{--                                <div--}}
{{--                                    class="grid md:gap-2 grid-cols-12 overflow-hidden article group bg-flashWhite dark:bg-metalBlack items-center rounded-2xl p-3.5">--}}
{{--                                    <div class="flex col-span-12 overflow-hidden thumbnail sm:col-span-6 md:col-span-5">--}}
{{--                                        <a href="article-details.html" class="block w-full overflow-hidden rounded-xl">--}}
{{--                                            <img src="assets/img/blog/article1.png"--}}
{{--                                                 class="object-cover object-center w-full h-full min-h-[288px] transition-all duration-300 ease-in-out max-h-60 md:min-h-60 group-hover:scale-105"--}}
{{--                                                 alt="Post Title">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        class="relative flex flex-col col-span-12 px-3 pt-6 pb-2 md:p-5 post-content sm:col-span-6 md:col-span-7">--}}
{{--                                        <div class="flex items-center gap-5">--}}
{{--                                            <div class="text-sm font-medium tags">--}}
{{--                                                <a href="#" class="transition-colors hover:text-theme">--}}
{{--                                                    UI Design--}}
{{--                                                </a>,--}}
{{--                                                <span class="post_date">--}}
{{--                                                03 May 2023--}}
{{--                                            </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="post-title mt-3 md:mt-4.5 mb-6 md:mb-8">--}}
{{--                                            <a href="article-details.html"--}}
{{--                                               class="text-xl font-semibold leading-normal text-black dark:text-white transition-colors line-clamp-2 2xl:text-2xl 2xl:leading-normal hover:text-theme">--}}
{{--                                                Elevate your mornings with perfectly brewed coffee--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="read-details">--}}
{{--                                            <a href="article-details.html"--}}
{{--                                               class="inline-flex items-center gap-2 border border-theme text-theme text-sm py-3.5 px-6 rounded-3xl leading-none transition-all duration-300 hover:bg-themeHover hover:border-themeHover dark:font-medium hover:text-white">--}}
{{--                                                Read More--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="grid md:gap-2 grid-cols-12 overflow-hidden article group bg-flashWhite dark:bg-metalBlack items-center rounded-2xl p-3.5">--}}
{{--                                    <div class="flex col-span-12 overflow-hidden thumbnail sm:col-span-6 md:col-span-5">--}}
{{--                                        <a href="article-details.html" class="block w-full overflow-hidden rounded-xl">--}}
{{--                                            <img src="assets/img/blog/article2.png"--}}
{{--                                                 class="object-cover object-center w-full h-full min-h-[288px] transition-all duration-300 ease-in-out max-h-60 md:min-h-60 group-hover:scale-105"--}}
{{--                                                 alt="Post Title">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        class="relative flex flex-col col-span-12 px-3 pt-6 pb-2 md:p-5 post-content sm:col-span-6 md:col-span-7">--}}
{{--                                        <div class="flex items-center gap-5">--}}
{{--                                            <div class="text-sm font-medium tags">--}}
{{--                                                <a href="#" class="transition-colors hover:text-theme">--}}
{{--                                                    UI Design--}}
{{--                                                </a>,--}}
{{--                                                <span class="post_date">--}}
{{--                                                03 May 2023--}}
{{--                                            </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="post-title mt-3 md:mt-4.5 mb-6 md:mb-8">--}}
{{--                                            <a href="article-details.html"--}}
{{--                                               class="text-xl font-semibold leading-normal text-black dark:text-white transition-colors line-clamp-2 2xl:text-2xl 2xl:leading-normal hover:text-theme">--}}
{{--                                                Mastering the clock: A guide to time management--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="read-details">--}}
{{--                                            <a href="article-details.html"--}}
{{--                                               class="inline-flex items-center gap-2 border border-theme text-theme text-sm py-3.5 px-6 rounded-3xl leading-none transition-all duration-300 hover:bg-themeHover hover:border-themeHover dark:font-medium hover:text-white">--}}
{{--                                                Read More--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="grid md:gap-2 grid-cols-12 overflow-hidden article group bg-flashWhite dark:bg-metalBlack items-center rounded-2xl p-3.5">--}}
{{--                                    <div class="flex col-span-12 overflow-hidden thumbnail sm:col-span-6 md:col-span-5">--}}
{{--                                        <a href="article-details.html" class="block w-full overflow-hidden rounded-xl">--}}
{{--                                            <img src="assets/img/blog/article3.png"--}}
{{--                                                 class="object-cover object-center w-full h-full min-h-[288px] transition-all duration-300 ease-in-out max-h-60 md:min-h-60 group-hover:scale-105"--}}
{{--                                                 alt="Post Title">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div--}}
{{--                                        class="relative flex flex-col col-span-12 px-3 pt-6 pb-2 md:p-5 post-content sm:col-span-6 md:col-span-7">--}}
{{--                                        <div class="flex items-center gap-5">--}}
{{--                                            <div class="text-sm font-medium tags">--}}
{{--                                                <a href="#" class="transition-colors hover:text-theme">--}}
{{--                                                    UI Design--}}
{{--                                                </a>,--}}
{{--                                                <span class="post_date">--}}
{{--                                                03 May 2023--}}
{{--                                            </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="post-title mt-3 md:mt-4.5 mb-6 md:mb-8">--}}
{{--                                            <a href="article-details.html"--}}
{{--                                               class="text-xl font-semibold leading-normal text-black dark:text-white transition-colors line-clamp-2 2xl:text-2xl 2xl:leading-normal hover:text-theme">--}}
{{--                                                Homeward bound: Crafting a productive home pffice--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="read-details">--}}
{{--                                            <a href="article-details.html"--}}
{{--                                               class="inline-flex items-center gap-2 border border-theme text-theme text-sm py-3.5 px-6 rounded-3xl leading-none transition-all duration-300 hover:bg-themeHover hover:border-themeHover dark:font-medium hover:text-white">--}}
{{--                                                Read More--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="mt-10 text-center more-blogs md:mt-13">--}}
{{--                                <a href="#"--}}
{{--                                   class="inline-flex items-center gap-2 text-[15px] font-medium border border-theme bg-theme text-white py-4.5 px-9 rounded-4xl leading-none transition-all duration-300 hover:bg-themeHover hover:border-themeHover">--}}
{{--                                    More Post--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <!-- Blog Section End -->

                    <!-- Testimonial Section Start -->
                    <div data-scroll-index="7" id="testimonial"
                         class="py-5 xl:py-3.5 max-w-content xl:max-2xl:max-w-50rem max-xl:mx-auto xl:ml-auto">

{{--                        <div class="px-5 py-8 md:p-8 bg-white dark:bg-nightBlack rounded-2xl service-section lg:p-10 2xl:p-13">--}}
{{--                            <div--}}
{{--                                class="inline-flex items-center gap-2 px-4 py-2 text-xs tracking-wide text-black dark:text-white border lg:px-5 section-name border-platinum dark:border-greyBlack200 rounded-4xl">--}}
{{--                                <i class="fal fa-comment-alt-check text-theme"></i>--}}
{{--                                TESTIMONIAL--}}
{{--                            </div>--}}
{{--                            <div class="mt-5 mb-8 md:my-10 section-title">--}}
{{--                                <h2--}}
{{--                                    class="title text-[32px] md:text-4xl lg:text-5xl font-extralight text-black dark:text-white leading-1.27">--}}
{{--                                    What <span class="font-semibold text-theme">People Say</span>--}}
{{--                                </h2>--}}
{{--                                <p class="max-w-xl mt-4 md:mt-6 subtitle">--}}
{{--                                    I design products that are more than pretty. I make them shippable and usable, tempor--}}
{{--                                    non mollit dolor et do aute--}}
{{--                                </p>--}}
{{--                            </div><!--./section-title-->--}}

{{--                            <div class="mt-12 testimonial-slider">--}}
{{--                                <div class="swiper">--}}
{{--                                    <div class="swiper-wrapper">--}}
{{--                                        <div class="swiper-slide">--}}
{{--                                            <div class="text-center slider-inner md:px-5">--}}
{{--                                                <div class="image flex-center">--}}
{{--                                                    <img src="assets/img/testimonial/author1.png" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="mt-6 mb-3 text-center rating text-lightOrange">--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                </div>--}}
{{--                                                <div class="text-sm md:text-[15px] leading-loose content">--}}
{{--                                                    Working with <span class="font-semibold text-theme">Reddick</span> is a--}}
{{--                                                    game-changer.--}}
{{--                                                    Their coding expertise and commitment to quality make every project a--}}
{{--                                                    success.--}}
{{--                                                </div>--}}
{{--                                                <div class="mt-5 text-center author">--}}
{{--                                                    <h6 class="text-lg font-medium text-black dark:text-white">Alex Johnson</h6>--}}
{{--                                                    <p class="text-sm">Developer</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div><!--./testimonial-card-->--}}

{{--                                        <div class="swiper-slide">--}}
{{--                                            <div class="text-center slider-inner md:px-5">--}}
{{--                                                <div class="image flex-center">--}}
{{--                                                    <img src="assets/img/testimonial/author2.png" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="mt-6 mb-3 text-center rating text-lightOrange">--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                </div>--}}
{{--                                                <div class="text-sm md:text-[15px] leading-loose content">--}}
{{--                                                    <span class="font-semibold text-theme">Reddick</span> exceeds--}}
{{--                                                    expectations with--}}
{{--                                                    top-tier coding skills. Reliable, collaborative, and a true asset to any--}}
{{--                                                    project. Highly recommended--}}
{{--                                                </div>--}}
{{--                                                <div class="mt-5 text-center author">--}}
{{--                                                    <h6 class="text-lg font-medium text-black dark:text-white">Mily Martin</h6>--}}
{{--                                                    <p class="text-sm">CEO-itTheme</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div><!--./testimonial-card-->--}}

{{--                                        <div class="swiper-slide">--}}
{{--                                            <div class="text-center slider-inner md:px-5">--}}
{{--                                                <div class="image flex-center">--}}
{{--                                                    <img src="assets/img/testimonial/author2.png" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="mt-6 mb-3 text-center rating text-lightOrange">--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"--}}
{{--                                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                        <path--}}
{{--                                                            d="M14.4391 5.35656L10.1019 4.65667C10.0073 4.64115 9.92204 4.58373 9.87552 4.49217L7.86898 0.579903C7.69686 0.241595 7.21151 0.241595 7.03784 0.579903L5.0313 4.49217C4.98788 4.57753 4.9057 4.64115 4.80491 4.65667L0.467749 5.35656C0.0878407 5.41864 -0.0563694 5.87799 0.211892 6.14802L3.31008 9.26728C3.37521 9.33556 3.41088 9.43178 3.39537 9.53265L2.72239 13.8763C2.66346 14.2581 3.05113 14.539 3.39382 14.3667L7.31385 12.3819C7.39914 12.3384 7.50148 12.3353 7.59297 12.3819L11.513 14.3667C11.8572 14.5405 12.2434 14.2566 12.186 13.8763L11.5146 9.54662C11.4944 9.44885 11.5223 9.34332 11.5983 9.26728L14.6949 6.14802C14.9632 5.87799 14.8159 5.41709 14.4391 5.35656Z"--}}
{{--                                                            fill="#FFB657" />--}}
{{--                                                    </svg>--}}
{{--                                                </div>--}}
{{--                                                <div class="text-sm md:text-[15px] leading-loose content">--}}
{{--                                                    <span class="font-semibold text-theme">Reddick</span> delivers--}}
{{--                                                    excellence in every--}}
{{--                                                    line of code. Dependable, innovative, and a key player in project--}}
{{--                                                    success. Outstanding performance.--}}
{{--                                                </div>--}}
{{--                                                <div class="mt-5 text-center author">--}}
{{--                                                    <h6 class="text-lg font-medium text-black dark:text-white">Alex Johnson</h6>--}}
{{--                                                    <p class="text-sm">Developer</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div><!--./testimonial-card-->--}}
{{--                                    </div>--}}

{{--                                    <!-- Slider Controls Start -->--}}
{{--                                    <div--}}
{{--                                        class="testimonial-slider-navigation flex justify-center items-center gap-2.5 mt-10 lg:mt-12">--}}
{{--                                        <button--}}
{{--                                            class="transition border rounded-full button-prev w-11 h-11 group border-platinum dark:border-greyBlack flex-center hover:bg-theme hover:border-theme"--}}
{{--                                            aria-label="Previous">--}}
{{--                                            <svg width="18" height="10" viewBox="0 0 18 10" fill="none"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                                      d="M18 5.08006C18 4.77812 17.7121 4.5334 17.3571 4.5334L2.19486 4.5334L6.07553 0.933214C6.32659 0.719715 6.32659 0.373628 6.07553 0.160126C5.82448 -0.0533767 5.41745 -0.0533766 5.1664 0.160126L0.188289 4.69352C-0.0627618 4.90702 -0.0627618 5.2531 0.188289 5.4666L5.33115 9.83986C5.5822 10.0534 5.98923 10.0534 6.24028 9.83986C6.49134 9.62637 6.49134 9.28028 6.24028 9.06678L2.19486 5.62672L17.3571 5.62671C17.7121 5.62671 18 5.38199 18 5.08006Z"--}}
{{--                                                      class="fill-[#A0A0A0] group-hover:fill-white" />--}}
{{--                                            </svg>--}}
{{--                                        </button>--}}
{{--                                        <div class="text-sm font-light text-center text-black dark:text-white counter w-7"></div>--}}
{{--                                        <button--}}
{{--                                            class="transition border rounded-full button-next w-11 h-11 group border-platinum dark:border-greyBlack flex-center hover:bg-theme hover:border-theme"--}}
{{--                                            aria-label="Next">--}}
{{--                                            <svg width="18" height="10" viewBox="0 0 18 10" fill="none"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                                      d="M4.44113e-07 4.91994C4.17717e-07 5.22187 0.287871 5.4666 0.642857 5.4666L15.8051 5.4666L11.9245 9.06678C11.6734 9.28028 11.6734 9.62637 11.9245 9.83987C12.1755 10.0534 12.5826 10.0534 12.8336 9.83987L17.8117 5.30648C18.0628 5.09298 18.0628 4.7469 17.8117 4.5334L12.6688 0.160134C12.4178 -0.0533766 12.0108 -0.0533766 11.7597 0.160134C11.5087 0.373633 11.5087 0.719718 11.7597 0.933218L15.8051 4.37328L0.642857 4.37328C0.287872 4.37328 4.70509e-07 4.61801 4.44113e-07 4.91994Z"--}}
{{--                                                      class="fill-[#A0A0A0] group-hover:fill-white" />--}}
{{--                                            </svg>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <!-- Slider Controls End -->--}}
{{--                                </div>--}}
{{--                            </div><!--./testimonial-slider-->--}}
{{--                        </div>--}}
                    </div>
                    <!-- Testimonial Section End -->

                    @if($contact_core)
                        <x-contact.minfo-section />
                    @endif

                    @if($newsletter_core)
                        <x-newsletter.minfo-section />
                    @endif

                    @if($footer_core)
                        <x-footer.minfo-section />
                    @endif
                </div>
                <!-- Main Content End -->
            </div>
        </div>
        <!-- App End -->


        <!-- Background Line and Animation -->
        <div
            class="bg-lines fixed inset-0 -z-1 md:max-xl:max-w-[45rem] xl:max-w-60rem 2xl:max-w-container mx-auto max-sm:px-8 sm:max-xl:px-12">
            <div class="line-wrapper max-w-[1130px] w-full h-full ml-auto 2xl:-mr-24 relative flex justify-between">

                <div
                    class="relative w-px h-full border-r border-dashed line line1 border-slate-300 dark:border-metalBlack before:absolute before:w-2 before:h-2 before:bg-theme before:rotate-45 before:-left-1 before:animate-top_bottom">
                </div>

                <div
                    class="relative w-px h-full border-r border-dashed line line2 border-slate-300 dark:border-metalBlack before:absolute before:bottom-0 before:w-2 before:h-2 before:bg-theme before:rotate-45 before:-left-1 before:animate-bottom_top before:animate-delay-3s">
                </div>

                <div
                    class="relative w-px h-full border-r border-dashed line line3 border-slate-300 dark:border-metalBlack before:absolute before:w-2 before:h-2 before:bg-theme before:rotate-45 before:-left-1 before:animate-top_bottom before:animate-delay-3s">
                </div>

                <div
                    class="relative w-px h-full border-r border-dashed line line4 border-slate-300 dark:border-metalBlack before:absolute before:bottom-0 before:w-2 before:h-2 before:bg-theme before:rotate-45 before:-left-1 before:animate-bottom_top before:animate-delay-2s">
                </div>

            </div>
        </div>
        <!-- Ends Here -->

        <!-- Style Switcher Started -->
        <div class="style-switcher fixed right-0 top-1/2 -translate-y-1/2 translate-x-[15rem] w-[15rem] [&.active]:translate-x-0 transition z-[9999]">
            <div class="toggle-btn absolute -left-15 w-15 h-15 bg-white dark:bg-nightBlack text-black dark:text-white flex-center cursor-pointer rounded-[.5rem_0_0_.5rem] select-none shadow-sm shadow-slate-400">
                <span class="fal fa-cog fa-spin"></span>
            </div>
            <div class="theme-select shadow-sm shadow-slate-400 px-6 py-4 bg-white dark:bg-nightBlack rounded-[0_0_0_.5rem]">
                <h5 class="font-medium mb-2 !text-black dark:!text-white text-lg">Theme Mode</h5>

                <div class="flex flex-wrap items-center pt-1">
                    <livewire:dark-mode wire:key='header-dark-mode' />
                </div>
            </div>
        </div>
        <!-- Style Switcher End -->




{{--                <x-core.alert />--}}

{{--        @if($header_core)--}}
{{--            <x-header.section />--}}
{{--        @endif--}}

{{--        <x-ui.background />--}}

{{--        <x-ui.chatbox />--}}

{{--        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />--}}

{{--        @if($hero_core)--}}
{{--            <x-hero.section />--}}
{{--        @endif--}}



{{--        @if($clients_core)--}}
{{--            <x-client.section />--}}
{{--        @endif--}}


{{--        @if($footer_core)--}}
{{--            <x-footer.section />--}}
{{--        @endif--}}

    @endif

    {{-- Maintenance Mode --}}
    @if($maintenance && (!$discovery || !auth()->user()))
        <x-maintenance.section />
    @endif
    {{-- End Maintenance Mode --}}
    <x-curator::modals.modal />
    <x-header.minfo-body-scripts />
</body>

</html>
