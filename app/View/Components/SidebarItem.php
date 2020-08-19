<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * Class SidebarItem
 * @package App\View\Components
 */
class SidebarItem extends Component
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @param $active
     * @param $icon
     * @param $name
     */
    public function __construct($active, $icon, $name)
    {
        $this->active = $active;
        $this->icon = $icon;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar-item');
    }
}
