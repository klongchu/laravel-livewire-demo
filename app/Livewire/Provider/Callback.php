<?php

namespace App\Livewire\Provider;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Callback extends Component
{

    public function mount()
    {

        try {
            //Health
            $response = Http::asForm()->post('https://moph.id.th/api/v1/token', [
                'grant_type' => 'authorization_code',
                'code' => request()->code,
                'redirect_uri' => route('provider.callback'),
            ]);

            //dd($response->json());
            //Provider

            $provider = Http::post('https://provider.id.th/api/v1/services/token', [
                'token' => $response->json()['data']['access_token'],
            ]);

            /*
        Content-type: application/json
Authorization: Bearer {{ provider_access_token จาก Response ของ API ข้อที่ 1 }}
client-id: Client-ID ที่ได้รับจากระบบ Provider ID
secret-key: Secret-Key ที่ได้รับจากระบบ Provider ID

        */

            $profile = Http::withHeaders([
                'Content-type' => 'application/json',
            ])->get('https://provider.id.th/api/v1/services/profile');

            User::create([
                'name' => $profile->json()['data']['name_th'],
                'email' => $profile->json()['data']['email'],
                'cid_hash' => $profile->json()['data']['hash_cid'],
                'account_id' => $profile->json()['data']['account_id'],
                'provider_id' => $profile->json()['data']['provider_id'],
                'hcode' => $profile->json()['data']['organization'][0]['hcode'],
                'hname' => $profile->json()['data']['organization'][0]['hname_th'],
            ]);
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.provider.callback');
    }
}
