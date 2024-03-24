<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteButton extends Component
{
    public $action;
    public $confirmMessage;
    public $buttonText;
    public $buttonClass;

    /**
     * Create a new component instance.
     *
     * @param string $action URL the form will submit to.
     * @param string $confirmMessage Confirmation message displayed upon clicking the button.
     * @param string $buttonText The text displayed on the button.
     * @param string $buttonClass The class(es) applied to the button for styling.
     * @return void
     */
    public function __construct($action, $confirmMessage, $buttonText = 'Delete', $buttonClass = 'danger')
    {
        $this->action = $action;
        $this->confirmMessage = $confirmMessage;
        $this->buttonText = $buttonText;
        $this->buttonClass = $buttonClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete-button');
    }
}
