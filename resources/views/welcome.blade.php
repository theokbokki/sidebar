<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sidebar</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex w-screen h-screen">
        <x-sidebar collapsible="icon">
            <x-sidebar-toggle srOnlyContent="Sidebar toggle"/>
            <div class="flex px-3">
                <a href="#" class="flex items-center justify-center w-9 h-9 hover:bg-stone-200/50 rounded-md"><x-icon-logo/></a>
            </div>
            <x-sidebar-spacer />
            <div class="flex-1 flex flex-col overflow-auto">
                <x-sidebar-section title="Guide">
                    <x-sidebar-group title="Getting Started" collapsible>
                        <x-slot name="icon"><x-lucide-rocket/></x-slot>
                        <x-sidebar-link content="Introduction" href="#" />
                        <x-sidebar-link content="Installation" href="#" />
                        <x-sidebar-link content="Architecture" href="#" />
                        <x-sidebar-link content="Websockets" href="#" />
                    </x-sidebar-group>
                    <x-sidebar-group title="Chrome">
                        <x-slot name="icon"><x-lucide-layout/></x-slot>
                        <x-sidebar-link content="Chrome" href="#" />
                        <x-sidebar-link content="Constructor Classes" href="#" />
                    </x-sidebar-group>
                </x-sidebar-section>
            </div>
            <x-sidebar-spacer />
            <div class="flex flex-col gap-1 px-3">
                <x-sidebar-link content="Settings" href="#">
                    <x-slot name="icon"><x-lucide-settings/></x-slot>
                </x-sidebar-link>

                <x-sidebar-link content="Contact Support" href="#">
                    <x-slot name="icon"><x-lucide-life-buoy/></x-slot>
                </x-sidebar-link>
            </div>
        </x-sidebar>
        <main class="flex-1"></main>
    </body>
</html>
