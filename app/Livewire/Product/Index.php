<?php

namespace App\Livewire\Product;

use Livewire\Component;

class Index extends Component
{
    public $activeRoute = 'order-list';

    public function render()
    {
        $isActive = $this->activeRoute == 'order-list' ? 'active' : '';
        
        return view('livewire.product.index', compact('isActive'))
        ->layout('components.layouts.app_backend', compact('isActive')); 
    }
}
