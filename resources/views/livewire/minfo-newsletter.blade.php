<div>
    <form class="mx-auto mt-6 flex w-full flex-col gap-3 px-5 sm:flex-row" wire:submit="create">
        {{ $this->form }}
        <span class="-mt-[0.2rem]">
            <x-ui.button class="p-2 text-sm" type="submit" icon="chevron-forward-outline">
                {{ $buttonText }}
            </x-ui.button>
        </span>
    </form>
</div>
