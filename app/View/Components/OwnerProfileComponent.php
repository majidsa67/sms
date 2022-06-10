<?php

namespace App\View\Components;

use http\Env\Request;
use Illuminate\View\Component;

class OwnerProfileComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $inputs;
    public function __construct(Request $request)
    {
        $inputs=$request->only(
            'name',
            'lastname',
            'national_id',
            'address',

        );
        $result = Contact::create($inputs);
        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        } else {
            return back()->with('error');
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.owner-profile-component');
    }
}
