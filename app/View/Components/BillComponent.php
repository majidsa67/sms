<?php

namespace App\View\Components;

use App\Models\Geotechnic;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class BillComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $items;

    public function __construct($id)
    {
        $this->items=Geotechnic::query()
            ->where( 'id' , '$id')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bill-component');
    }
}
