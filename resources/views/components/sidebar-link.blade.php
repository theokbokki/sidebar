    <a href="{{ $href }}" class="flex items-center gap-2 w-full px-2 py-1.5 rounded-md overflow-hidden hover:bg-neutral-200/50" data-sidebar-link>
        @isset($icon)
            <span class="block w-5 min-w-5 h-5 min-h-5 text-neutral-500">{{ $icon }}</span>
        @endisset
        <span class="text-neutral-800 transition-[opacity] group-[[data-collapsible=icon]]/sidebar:opacity-0 truncate">{{ $content }}</span>
    </a>
