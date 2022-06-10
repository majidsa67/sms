<?php

namespace App\View\Components;

use App\Models\Geotechnic;
use Illuminate\View\Component;

class TotalCostComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $item;
    public function __construct()
    {
       $this->item=Geotechnic::query()
           ->get();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.total-cost-component');
    }
}
