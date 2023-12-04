<?php

namespace App\Livewire\Empresa;

use Livewire\Component;
use App\Models\Empresa;
use App\Models\Reservacion;

class CreateFormEmpresa extends Component
{

    public $currentStep =   1;
    public $totalSteps = 3;

    public $empresa;

    public $select_id, $nombre, $id_provincia, $direccion, $telefono, $telefono2,
        $extension, $email, $url, $rnc, $observacion,
        $fecha_registro, $estatus, $cambios;

    public function next()
    {
        if ($this->currentStep < 3) {
            $this->currentStep++;
        }
    }

    public function previous()
    {
        if($this->currentStep > 1) {
            $this->currentStep --;
        }
    }

    public function render()
    {
        return view('livewire.empresa.create-form-empresa');
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function  resetInput()
    {
        $this->nombre = null;
        $this->id_provincia = null;
        $this->direccion = null;
        $this->telefono = null;
        $this->telefono2 = null;
        $this->extension = null;
        $this->email = null;
        $this->url = null;
        $this->rnc = null;
        $this->observacion = null;
        $this->estatus = null;
    }

    protected  $rules = [
        'nombre' => ['required|min:10'],
        'direccion' => ['required|min:10|max:55'],
        'rnc' => ['required|min:10'],
        'id_provincia' => ['required|min:5'],
        'estatus' => ['required'],
        'observacion' => ['nullable'],
        'telefono' => ['required|min:13'],
        'telefono2' => ['required|min:13'],
        'extension' => ['required|min:4'],
        'email' => ['required|email|max:255'],
        'url' => ['nullable|url'],
    ];

    protected  $messages = [
        'nombre.required' => 'El nombre de la empresa es obligatorio',
        'direccion.required' => 'La direccion de la empresa es obligatorio',
        'telefono.required' => 'El telefono de la empresa es obligatorio',
        'telefono2.required' => 'El telefono2 de la empresa es obligatorio',
        'extension.required' => 'La Extension de la empresa es obligatorio',
        'email.required' => 'El Correo de la empresa es obligatorio',
        'url.required' => 'El url de la empresa es obligatorio',
        'rnc.required' => 'El RNC de la empresa es obligatorio',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validationData = $this->validate();
        Empresa::create($validationData);

        $this->resetInput();
        $this->dispatch('hide-form', ['message' => 'La Empresa fue agregada satisfactoriamente']);

        $this->currentStep = 1;

        dd();

    }

    public function back($step)
    {
        $this->currentStep  =   $step;
    }

    public function edit($id)
    {
        //
    }

    public function update()
    {
        //
    }
}
