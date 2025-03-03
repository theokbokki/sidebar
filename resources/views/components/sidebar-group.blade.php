<div class="flex flex-col gap-1 px-3">
    <{{$tag}}
        type="button"
        class="flex items-center gap-2 px-2 py-1.5 rounded-md [&[data-collapsible=true]]:cursor-pointer [&[data-collapsible=true]]:hover:bg-neutral-200/50"
        @if($collapsible)
            data-collapsible="true"
            type="button"
        @endif
    >
        @isset($icon)
            <span class="block w-5 h-5 text-neutral-500">
                {{ $icon }}
            </span>
        @endisset
        <span class="text-neutral-800">{{ $title }}</span>
        @if($collapsible)
            <span class="block w-5 h-5 ml-auto text-neutral-500">
                <x-lucide-chevron-right/>
            </span>
        @endif
    </{{ $tag }}>
    <div class="relative flex flex-col gap-1 pl-6 before:absolute before:w-0.25 before:top-0 before:bottom-0 before:left-4 before:bg-neutral-300">
        {{ $slot }}
    </div>
</div>
