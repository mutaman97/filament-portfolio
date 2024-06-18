@if($chatbox->visible)
<div>
    <a target="new" href="https://wa.me/{{ $chatbox->telephone }}/?text={{ $chatbox->message }}">
        <div class="chatbox z-[1000] fixed right-2 xl:right-24 2xl:right-32 bottom-2 xl:bottom-4 w-13 h-13 rounded-full text-primary-50 flex items-center align-center p-3 text-center overflow-hidden hover:opacity-80 transition-all duration-100 cursor-pointer
        {{ $chatbox->animation_style }}" style="background-color: {{ $chatbox->color }}">
            <ion-icon class="text-4xl text-white" name="{{ $chatbox->icon }}"></ion-icon>
        </div>
    </a>
</div>
@endif
