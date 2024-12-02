<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Standard;

class AdminStandardComponent extends Component
{

    protected $listeners = ['store','destroy'];

    public function render()
    {
        $this->all_standards = Standard::all();
        return view('livewire.admin-standard-component')->layout('components.admin-layout');
    }

    public function store($standardData)
    {
        try {
            $standard = new Standard();

            $standard->name = $standardData['name'];
            $standard->description = $standardData['description'];

            $standard->save(); 

            $this->emit('standardCreated', $standard); 
        } catch (\Exception $e) {
            dd('Error al guardar el estándar: ' . $e->getMessage());
        }
    }

    public function destroy($standardId)
    {
        Standard::findOrFail($standardId)->delete();
    }

}
