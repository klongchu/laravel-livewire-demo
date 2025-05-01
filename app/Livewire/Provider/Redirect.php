<?php

namespace App\Livewire\Provider;

use Livewire\Component;

class Redirect extends Component
{

    public $client_id ="";
    public $redirect_uri ="";
    public $response_type ="";
    public $url ='';


    public function mount(){
        $this->redirect_uri = route('provider.callback');
        $this->response_type = "code";
    }


    public function render()
    {
        return view('livewire.provider.redirect');
    }
}
