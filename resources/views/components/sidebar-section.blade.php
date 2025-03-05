<div class="flex flex-col gap-2" data-sidebar-section>
    @if($title)
        <p class="px-5 text-sm text-neutral-500 group-[.collapsed]/sidebar:opacity-0 group-[.collapsed]/sidebar:h-0">{{ $title }}</p>
    @endif
    <div class="flex flex-col gap-8 group-[.collapsed]/sidebar:gap-0">
        {{ $slot }}
    </div>
</div>
