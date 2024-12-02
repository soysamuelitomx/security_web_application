<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use App\Models\User;
use App\Models\Problematic;

class AdminEventsComponent extends Component
{
    protected $listeners = ['updateProblematic'];

    public $all_events;

    public function render()
    {
        $this->all_events = Event::with(['Connection_Event_To_User', 'Connection_Event_To_ProblemCategory'])
            ->get()
            ->map(function ($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'start' => $event->start,
                    'end' => $event->end,
                    'description' => $event->description,
                    'problematic_name' => $event->Connection_Event_To_ProblemCategory->name,
                    'is_resolved' => $event->is_resolved,
                    'user_name' => $event->Connection_Event_To_User->name,
                    'created_at' => $event->created_at,
                    'updated_at' => $event->updated_at,
                ];
            })->toArray();

        return view('livewire.admin-events-component')->layout('components.admin-layout');

    }

    public function updateProblematic($id, $isResolved)
    {
        $event = Event::find($id);
        
        if ($event) {
            
            $event->is_resolved = $isResolved;
            $event->save(); 
        }
    }

}