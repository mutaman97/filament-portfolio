@props(['sliders' => null])

@if($sliders != null)
    @if($sliders->is_active)
        <div class="mb-2 mt-14 xl:mb-0 xl:mt-20">
            <div class="items-center grid-cols-12 overflow-hidden md:grid">
                @if($sliders->show_title)
                    <div class="hidden col-span-2 md:inline-block">
                        <h6
                            class="font-medium text-black dark:text-white/80 text-sm md:max-w-[8rem] border-l border-theme pl-4">
                            {{ $sliders->title }}
                        </h6>
                    </div>
                @endif
                <div class="col-span-10 logo-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach($sliders->content as $slider)
                                <div class="swiper-slide">
                                    @if($slider['image_url'])
                                    <a href="{{ $slider['image_url'] }}"
                                       class="transition duration-200 flex-center">
                                        <img src="{{ asset('storage/' . $slider['image_path'] ) }}" alt="{{ $slider['image_alt'] }}">
                                    </a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endif
