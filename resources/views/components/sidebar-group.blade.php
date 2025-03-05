<div class="flex flex-col gap-1 px-3 group-[.collapsed]/sidebar:justify-center group-[.collapsed]/sidebar:items-center" data-sidebar-group>
    <{{$tag}}
        type="button"
        class="flex items-center gap-2 px-2 py-1.5 rounded-md group-[.collapsed]/sidebar:w-9 group-[.collapsed]/sidebar:text-nowrap group-[.collapsed]/sidebar:overflow-hidden [&[data-collapsible=true]]:cursor-pointer [&[data-collapsible=true]]:hover:bg-neutral-200/50"
        @if($collapsible)
            data-collapsible="true"
            type="button"
        @endif
    >
        @isset($icon)
            <span class="block w-5 min-w-5 h-5 text-neutral-500">{{ $icon }}</span>
        @endisset
        <span class="text-neutral-800 group-[.collapsed]/sidebar:opacity-0">{{ $title }}</span>
        @if($collapsible)
            <span class="block w-5 h-5 ml-auto text-neutral-500 group-[.collapsed]/sidebar:opacity-0">
                <x-lucide-chevron-right/>
            </span>
        @endif
    </{{ $tag }}>
    <div class="relative flex flex-col gap-1 pl-6 group-[.collapsed]/sidebar:opacity-0  group-[.collapsed]/sidebar:h-0 group-[.collapsed]/sidebar:w-0 group-[.collapsed]/sidebar:[&>[data-sidebar-link]]:w-0  before:absolute before:w-0.25 before:top-0 before:bottom-0 before:left-4 before:bg-neutral-300">
        {{ $slot }}
    </div>
</div>
