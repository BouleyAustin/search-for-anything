<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HeaderAccountSwitch extends Component
{
    public $showHeader;
    public $pages;
    public $routeName;
    public $selection;

    public function mount(Request $request)
    {
        if($request->query('pageId')){
            $this->selection = $request->query('pageId');
        }

        $this->pages = Auth::user()->pages()->select('id', 'name')->get()->toArray();

        $this->routeName = \Request::route()->getName();
        $approvedRoutes = ['dashboard', 'custom', 'content'];

        if(in_array($this->routeName, $approvedRoutes) && count($this->pages) > 1){
            $this->showHeader = true;
        }
        else{
            $this->showHeader = false;
        }
    }

    public function updatedSelection()
    {
        return redirect(route($this->routeName, ['pageId' => $this->selection]));
    }

    public function render()
    {
        return view('livewire.header-account-switch');
    }
}
