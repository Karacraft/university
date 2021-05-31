<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VideoCard extends Component
{
    public $tabHeader;
    public $routeName;
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tabHeader,$routeName,$image)
    {
        $this->tabHeader = $tabHeader;
        $this->routeName = $routeName;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.video-card');
    }
}
