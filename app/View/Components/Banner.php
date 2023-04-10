<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $btitle = 'asdasds',
        public string $bdescription = 'Текстовое описание под заголовком',
        public string $bimage = 'http://via.placeholder.com/1920x700', //1920x700
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner');
    }
}
