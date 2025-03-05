    <a href="{{ $href }}" class="flex items-center gap-2 w-full px-2 py-1.5 rounded-md group-[.collapsed]/sidebar:w-9 group-[.collapsed]/sidebar:text-nowrap group-[.collapsed]/sidebar:overflow-hidden hover:bg-neutral-200/50" data-sidebar-link>
        @isset($icon)
            <span class="block w-5 min-w-5 h-5 min-h-5 text-neutral-500">{{ $icon }}</span>
        @endisset
        <span class="text-neutral-800 group-[.collapsed]/sidebar:opacity-0">{{ $content }}</span>
    </a>
