<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    public $href;
    public $variant;

    public function __construct($href, $variant = 'default')
    {
        $this->href = $href;
        $this->variant = $variant;
    }

    public function render()
    {
        return view('components.button-link');
    }
}
