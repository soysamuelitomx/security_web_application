<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminCalendarComponent extends Component
{
    public function render()
    {
        return view('livewire.admin-calendar-component')->layout('components.admin-layout');
    }
}
