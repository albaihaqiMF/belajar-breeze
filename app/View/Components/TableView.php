<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public function __construct($title = null)
    {
        $this->data = $title ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table-view', [
            'data' => $this->data,
        ]);
    }
}
