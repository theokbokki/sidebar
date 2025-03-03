<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $href,
        public string $content,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-link');
    }
}
