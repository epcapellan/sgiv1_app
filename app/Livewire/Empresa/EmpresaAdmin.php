<?php

namespace App\Livewire\Empresa;

use Illuminate\validation\Rule;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\Empresa;
use App\Models\Reservacion;
use Livewire\withPagination;

class EmpresaAdmin extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    public $search= '';

    public $empresa;

    public $select_id, $nombre, $id_provincia, $direccion, $telefono, $telefono2,
           $extension, $email, $url, $rnc, $observacion,
           $fecha_registro, $estatus, $cambios;

    public function mount()
    {
        $this->empresas = Empresa::all();
        $this->reservacions = reservacion::all();
    }

    public function addNew()
    {
        //
    }

    public function render()
    {
                $empresas = Empresa::latest()->paginate(10);
                return view('livewire.empresa.empresa-admin',
                    ['empresas' => Empresa::where('nombre', 'like',
                        "%{$this->search}%")->latest()->get(),
                    ]);

    }

}
