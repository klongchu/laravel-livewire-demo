<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class Login extends Component
{
    #[Layout('components.layouts.guest')] 

    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $password;



    public $remember = false;

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {

        $validated = $this->validate([
            'email' => 'required|min:6',
            'password' => 'required|min:8',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        // dd($credentials);


        if (Auth::attempt($credentials, $this->remember)) {
            $this->dispatch('login-success');
            return $this->redirectIntended();
        }



        $this->dispatch('login-error');
        session()->flash('error', 'Invalid credentials!');
    }

}
