<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUsersComponent extends Component
{
    public $users;

    protected $listeners = ['store','update','destroy'];

    public function mount()
    {
        $this->fetchUsersWithRoles();
    }

    public function fetchUsersWithRoles()
    {
        
        $this->users = User::with('roles')->get()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'full_name' => $user->full_name,
                'department' => $user->department,
                'last_login' => $user->last_login,
                'account_status' => $user->account_status,
                'email' => $user->email,
                'role' => $user->getRoleNames(), 
            ];
        });
    }

    public function render()
    {
        return view('livewire.admin-users-component', ['all_users' => $this->users,])->layout('components.admin-layout');
    }

    public function store($userData)
    {
        try {

            $user = new User();
            $user->name = $userData['name'];
            $user->full_name = $userData['full_name'];
            $user->department = $userData['department'];
            $user->email = $userData['email'];
            $user->password = bcrypt($userData['password']);

            
            if (!empty($userData['role'])) {

                if (is_array($userData['role'])) {
                    $user->assignRole($userData['role'][0]);
                } else {
                    $user->assignRole($userData['role']);
                }

            }

            $user->last_login = null;
            $user->account_status = true;

            $user->save();

            $this->emit('userCreated', $user);
        } catch (\Exception $e) {
            dd('Error al guardar el usuario: ' . $e->getMessage());
        }

    }

    public function update($userData)
    {

        $user = User::find($userData['id']);
        if (!$user) {
            session()->flash('error', 'Usuario no encontrado.');
            return;
        }

        $user->name = $userData['name'];
        $user->full_name = $userData['full_name'];
        $user->email = $userData['email'];
        $user->account_status = $userData['account_status'];
        $user->department = $userData['department'];

        if (!empty($userData['password'])) {
            $user->password = bcrypt($userData['password']);
        }


        $user->save();

        if (isset($userData['role'])) {
            $user->syncRoles($userData['role']);
        }

        $this->emit('userUpdated', $user);
        session()->flash('success', 'Usuario actualizado correctamente.');

    }

    public function destroy($userData) {

        User::findOrFail($userData)->delete();

    }


}