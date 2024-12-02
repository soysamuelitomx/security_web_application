<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Audit;

class AdminAuditsComponent extends Component
{

    protected $listeners = ['store','update','destroy'];

    public function render()
    {
        $this->all_audits = Audit::all();
        return view('livewire.admin-audits-component')->layout('components.admin-layout');
    }

    public function store($auditData)
    {
        try {
            $audit = new Audit(); 

            $audit->audit_name = $auditData['audit_name'];
            $audit->audit_type = $auditData['audit_type'];
            $audit->auditor = $auditData['auditor'];
            $audit->status = $auditData['status'];

            $audit->save(); 

            $this->emit('auditCreated', $audit); 
        } catch (\Exception $e) {
            dd('Error al guardar la auditoría: ' . $e->getMessage());
        }
    }

    public function update($auditData)
    {
        $audit = Audit::find($auditData['id']); 
        if (!$audit) {
            session()->flash('error', 'Auditoría no encontrada.');
            return;
        }

        
        $audit->audit_name = $auditData['audit_name'];
        $audit->audit_type = $auditData['audit_type'];
        $audit->auditor = $auditData['auditor'];
        $audit->status = $auditData['status'];

        if (!empty($auditData['audit_date'])) {
            $audit->audit_date = $auditData['audit_date'];
        }

        $audit->save();

        $this->emit('auditUpdated', $audit);
        session()->flash('success', 'Auditoría actualizada correctamente.');
    }

    public function destroy($auditId)
    {
        Audit::findOrFail($auditId)->delete();
    }


}
