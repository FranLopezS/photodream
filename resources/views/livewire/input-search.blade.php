<div class="flex justify-center flex-col items-center w-[1800px]">
    @vite('resources/css/app.css')
    <form class="flex justify-center items-center w-[1000px] mt-10 mb-10" wire:submit="searchImages">
        <input type="text" name="text" placeholder="What are you dreaming about...?" maxlength="50" wire:model="text" class="drop-shadow-lg rounded-full h-16 flex-grow-2 px-8" />
        <button class="relative right-12" wire:loading.remove>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        </button>
    </form>
    @if(count($images) > 0)
        <div class="grid-masonry" wire:loading.remove>
            <div class="grid-sizer"></div>
            @foreach ($images as $image)
                <div class="grid-item mt-4"><img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="rounded-md drop-shadow-md hover:scale-105 hover:z-10 hover:border-white" /></div>
            @endforeach
        </div>
    @endif
    @script
        <script>
            window.addEventListener('contentChanged', (e) => {
                setTimeout(() => {
                    const msry = new Masonry( '.grid-masonry', {
                        // set itemSelector so .grid-sizer is not used in layout
                        itemSelector: '.grid-item',
                        // use element for option
                        columnWidth: '.grid-sizer',
                        percentPosition: true,
                        gutter: 10,
                        fitWidth: true
                    })
                    msry.layout()
                    console.log(msry)
                }, 500);
            });
        </script>
    @endscript
</div>


