<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sidebar</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex w-screen h-screen">
        <x-sidebar>
            <div class="flex items-center justify-between px-5">
                <a href="#"><x-icon-logo/></a>
                <button class="p-1 cursor-pointer rounded-md hover:bg-neutral-200/50">
                    <span class="sr-only">Navigation toggle</span>
                    <span class="block w-5 h-5 text-neutral-500"><x-lucide-panel-left /></span>
                </button>
            </div>
            <div class="flex-1 flex flex-col"></div>
            <div class="flex flex-col gap-1 px-3">
                <x-sidebar-link content="settings" href="#">
                    <x-slot name="icon"><x-lucide-settings/></x-slot name="icon">
                </x-sidebar-link>

                <x-sidebar-link content="Contact Support" href="#">
                    <x-slot name="icon"><x-lucide-life-buoy/></x-slot name="icon">
                </x-sidebar-link>
            </div>
        </x-sidebar>
        <main class="flex-1"></main>
    </body>
</html>
