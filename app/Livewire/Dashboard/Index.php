<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $isActive = 'dashboard' ;
        
        return view('livewire.dashboard.index', compact('isActive'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive]);
    }
}
