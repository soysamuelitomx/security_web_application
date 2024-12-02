<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminRolesComponent extends Component
{
    public function render()
    {
        return view('livewire.admin-roles-component')->layout('components.admin-layout');
    }
}
