@if($courses->count() === 0)
    <x-ui.empty-section :auth="'Go to your Dashboard and create a New Course.'" />
@else
    <div class="mb-8 mt-7 md:my-10 section-title">
        <h2
            class="title text-[32px] md:text-4xl lg:text-5xl font-extralight text-black dark:text-white leading-1.27">
            My <span class="font-semibold text-theme">{{  __('Education') }}</span>
        </h2>
        <p class="max-w-xl mt-4 md:mt-6 subtitle">
            I design products that are more than pretty. I make them shippable and usable, tempor
            non mollit dolor et do aute
        </p>
    </div>

    <div class="experience">
        <ul
            class="space-y-5 md:space-y-11 relative md:before:content-[''] md:before:absolute md:before:left-64 md:before:border-r md:before:border-platinum md:dark:before:border-metalBlack md:before:h-[calc(100%_-1.5rem)] md:before:top-1/2 md:before:-translate-y-1/2">

            @foreach ($courses as $course )
                <li
                    class="p-5 border rounded-xl md:flex max-md:space-y-2 border-platinum dark:border-metalBlack md:border-0 md:p-0 md:rounded-none">
                    <div class="flex items-center justify-between mb-5 md:w-64 md:block md:mb-0">
                        <h6
                            class="text-sm font-medium text-black dark:text-white text-opacity-60 md:text-base md:text-opacity-100">
                            {{  $course->institution  }}
                        </h6>
                        <p class="text-[13px] md:text-sm text-theme">
                            {{ \Carbon\Carbon::parse($course->start_date)->format('F, Y') }} -
                            {{ \Carbon\Carbon::parse($course->end_date)->format('F, Y') }}
                        </p>
                    </div>
                    <div
                        class="md:flex-1 md:pl-16 relative md:before:content-[''] md:before:absolute md:before:-left-1 md:before:top-3 md:before:w-2 md:before:h-2 md:before:bg-theme md:before:rounded-full md:before:shadow-dots_glow">
                        <h4
                            class="text-xl xl:text-2xl font-medium xl:font-medium leading-7 text-black dark:text-white mb-2.5">
                            {{$course->name}}
                        </h4>
                        <p>
                            {{  $course->description  }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endif
