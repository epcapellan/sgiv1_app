<div>
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4><i class="m-0"></i>Listado de Empresas</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">PanelControl</a></li>
                            <li class="breadcrumb-item active">Empresas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu del contenido -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-end m-2">
                                <a href="{{ route('empresa.crear') }}"
                                   class="btn btn-primary"><i class="fa fa-plus-square m-1">
                                    </i>Nuevo Empresa</a>
                            </div>

                            <h4 class="card-title">
                                <b>componetName | PageTile</b>
                            </h4>
                            <div class="container-fluid">
                                <h2 class="text-center display-4"></h2>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <input wire:model="search" type="text" class="form-control"
                                        name="search" id="search" placeholder="Buscar...">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead class="thead">
                                        <tr>
                                            <th scope="col">Matricula</th>
                                            <th scope="col">Empresa</th>
                                            <th scope="col">RNC</th>
                                            <th scope="col">Direccion</th>
                                            <th scope="col">Provincia</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Telefono 2</th>
                                            <th scope="col">Extension</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">URL</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Observacion</th>
                                            <th scope="col">Fecha Registro</th>
                                            <th scope="col">Multifunción</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($empresas as $empresa)
                                            <tr>
                                                <td class="text-center"><span>
                                                    </span>{{ $empresa->nombre }}</td>
                                                <td>{{$empresa->direccion}}</td>
                                                <td>{{$empresa->id_provincia}}</td>
                                                <td>{{$empresa->telefono}}</td>
                                                <td>{{$empresa->telefono2}}</td>
                                                <td>{{$empresa->extension}}</td>
                                                <td>{{$empresa->email}}</td>
                                                <td>{{$empresa->url}}</td>
                                                <td>{{$empresa->rnc}}</td>
                                                <td>{{$empresa->observacion}}</td>
                                                <td>{{$empresa->fecha_registro}}</td>
                                                <td>{{$empresa->estatus}}</td>
                                                <td class="text-center">
                                                    <div class="text-center">

                                                        <a class="btn btn-primary" title="Editar"
                                                        data-toggle="modal" data-target="#updateDataModal" wire:click="edit({{$empresa->id}}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
