    <a href="{{ $href }}" class="flex items-center gap-2 px-2 py-1.5 rounded-md hover:bg-neutral-200/50 {{ $attributes }}">
        @isset($icon)
            <span class="block w-5 min-w-5 h-5 min-h-5 text-neutral-500">{{ $icon }}</span>
        @endisset
        <span class="text-neutral-800">{{ $content }}</span>
    </a>
