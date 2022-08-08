<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $description, $src;
    public function __construct($title = null, $description = null, $src = null)
    {
        $this->title = $title ?? null;
        $this->description = $description ?? null;

        $this->src = $src ?? "https://ui-avatars.com/api/?name=" . $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
