<div class="flex flex-col gap-1 px-3" data-sidebar-group>
    <{{$tag}}
        class="group peer flex items-center gap-2 px-2 py-1.5 rounded-md overflow-hidden transition-[background,width] [&[data-collapsible=true]]:cursor-pointer [&[data-collapsible=true]]:hover:bg-neutral-200/50"
        @if($collapsible)
            data-collapsible="true"
            type="button"
            data-state="closed"
        @endif
    >
        @isset($icon)
            <span class="block w-5 min-w-5 h-5 text-neutral-500">{{ $icon }}</span>
        @endisset
        <span class="text-neutral-800 transition-[opacity] truncate group-[[data-collapsible=icon]]/sidebar:opacity-0">{{ $title }}</span>
        @if($collapsible)
            <span class="block w-5 h-5 ml-auto text-neutral-500 transition-[opacity,rotate] group-[[data-collapsible=icon]]/sidebar:opacity-0 group-[[data-state=open]]:rotate-90">
                <x-lucide-chevron-right/>
            </span>
        @endif
    </{{ $tag }}>
    <div class="grid grid-rows-[1fr] transition-[grid-template-rows,opacity] group-[[data-collapsible=icon]]/sidebar:grid-rows-[0fr] group-[[data-collapsible=icon]]/sidebar:opacity-0 peer-[[data-state=closed]]:grid-rows-[0fr] peer-[[data-state=closed]]:opacity-0">
        <div class="relative flex flex-col gap-1 overflow-hidden pl-6 before:absolute before:w-0.25 before:top-0 before:bottom-0 before:left-4 before:bg-neutral-300">
            {{ $slot }}
        </div>
    </div>
</div>
