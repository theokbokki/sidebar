<div class="flex flex-col gap-2" data-sidebar-section>
    @if($title)
        <p class="px-5 text-sm text-neutral-500 transition-[height,opacity] group-[[data-collapsible=icon]]/sidebar:opacity-0 group-[[data-collapsible=icon]]/sidebar:h-0">{{ $title }}</p>
    @endif
    <div class="flex flex-col gap-1 transition-[gap] group-[[data-collapsible=icon]]/sidebar:gap-0">
        {{ $slot }}
    </div>
</div>
