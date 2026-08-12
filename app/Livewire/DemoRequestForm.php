<?php

namespace App\Livewire;

use App\Mail\DemoRequestSubmitted;
use App\Models\DemoRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class DemoRequestForm extends Component
{
    public string $name = '';

    public string $establishment = '';

    public string $phone = '';

    public string $email = '';

    public string $message = '';

    public bool $submitted = false;

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'establishment' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['nullable', 'string', 'max:2000'],
        ];
    }

    protected function validationAttributes(): array
    {
        return [
            'name' => 'nom',
            'establishment' => 'établissement',
            'phone' => 'téléphone',
            'email' => 'email',
            'message' => 'message',
        ];
    }

    public function submit(): void
    {
        $data = $this->validate();

        $demoRequest = DemoRequest::create($data);

        try {
            Mail::to(config('clinicsoft.demo_request_recipient'))
                ->send(new DemoRequestSubmitted($demoRequest));
        } catch (\Throwable $e) {
            Log::warning('Échec de l’envoi de l’email de demande de démo : '.$e->getMessage());
        }

        $this->reset(['name', 'establishment', 'phone', 'email', 'message']);
        $this->submitted = true;
    }

    public function requestAnother(): void
    {
        $this->submitted = false;
    }

    public function render()
    {
        return view('livewire.demo-request-form');
    }
}
