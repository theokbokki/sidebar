<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarGroup extends Component
{
    public string $tag;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public bool $collapsible = false,
    ) {
        if ($collapsible) {
            $this->tag = "button";
            return;
        }

        $this->tag = "p";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-group');
    }
}
