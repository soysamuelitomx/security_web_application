<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Protocol;

class AdminProtocolsComponent extends Component
{

    protected $listeners = ['store','update','destroy'];

    public function render()
    {
        $this->all_protocols = Protocol::all();
        return view('livewire.admin-protocols-component')->layout('components.admin-layout');
    }

    public function store($protocolData)
    {
        //dd($protocolData);
        try {
            $protocol = new Protocol(); 

            //
            $protocol->title = $protocolData['title'];
            $protocol->use_case = $protocolData['use_case'];
            $protocol->procedure = $protocolData['procedure'];
            $protocol->description = $protocolData['description'];
            $protocol->severity_level = $protocolData['severity_level'];
            $protocol->active = filter_var($protocolData['active'], FILTER_VALIDATE_BOOLEAN);

            $protocol->save();

            $this->emit('protocolCreated', $protocol); 
        } catch (\Exception $e) {
            dd('Error al guardar el protocolo: ' . $e->getMessage());
        }
    }

    public function update($protocolData)
    {
        
        $protocol = Protocol::find($protocolData['id']);
    
        if (!$protocol) {
            session()->flash('error', 'Protocolo no encontrado.');
            return;
        }

        
        $protocol->title = $protocolData['title'];
        $protocol->use_case = $protocolData['use_case'];
        $protocol->severity_level = $protocolData['severity_level'];
        $protocol->active = filter_var($protocolData['active'], FILTER_VALIDATE_BOOLEAN);
        $protocol->description = $protocolData['description'];
        $protocol->procedure = $protocolData['procedure'];

        
        if (!empty($protocolData['created_at'])) {
            $protocol->created_at = $protocolData['created_at'];
        }

        $protocol->save();

        
        $this->emit('protocolUpdated', $protocol);
        session()->flash('success', 'Protocolo actualizado correctamente.');
    }

    public function destroy($protocolId)
    {
        Protocol::findOrFail($protocolId)->delete();
    }

}