<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ConfirmButton extends Component
{
    public $action;
    public $confirmMessage;
    public $method;
    public $isPending;
    public $buttonText;
    public $buttonClass;

    public function __construct($action, $confirmMessage, $method, $isPending, $buttonText, $buttonClass)
    {
        $this->action = $action;
        $this->confirmMessage = $confirmMessage;
        $this->method = $method;
        $this->isPending = $isPending;
        $this->buttonText = $buttonText;
        $this->buttonClass = $buttonClass;
    }

    public function render()
    {
        return view('components.confirm-button');
    }
}
