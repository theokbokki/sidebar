<nav class="relative h-full flex flex-col w-74 py-5 bg-neutral-50 transition-[width,transform] ease-out duration-250 group/sidebar [&[data-collapsible=icon]]:w-15 [&[data-collapsible=hidden]]:transform-[translate3d(-100%,0,0)]"
    data-sidebar
    data-collapsible="{{ $collapsible }}"
>
    {{ $slot }}
</nav>
