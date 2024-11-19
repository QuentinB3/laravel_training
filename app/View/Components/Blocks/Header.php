<?php

namespace App\View\Components\Blocks;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public string $pageName;
    /**
     * Create a new component instance.
     */
    public function __construct($pageName)
    {
        $this->pageName = $pageName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blocks.header');
    }
}
