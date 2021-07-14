<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * The input name.
     *
     * @var string
     */
    public $name;

    /**
     * The input label.
     *
     * @var string
     */
    public $label;

    /**
     * The input placeholder.
     *
     * @var string
     */
    public $placeholder;

    /**
     * The select iterable
     *
     * @var array
     */
    public $iterable;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $placeholder, $iterable)
    {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->iterable = $iterable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
