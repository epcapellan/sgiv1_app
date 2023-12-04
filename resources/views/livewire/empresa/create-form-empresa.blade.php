<div>

    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4><i class="m-0"></i></h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Nuevo</a></li>
                            <li class="breadcrumb-item active">Registro Empresa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-end m-2">
                                <a href="{{ route('empresa.index') }}"
                                   class="btn btn-outline-secondary"><i class="fa fa-chevron-circle-left m-1">
                                    </i>Retroceder</a>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-default">
                                        <h4 class="card-header">
                                            <b>Formulario Registro Nueva Empresa</b>
                                        </h4>
                                        <div class="card-body p-0">
                                            <div class="bs-stepper">
                                                <div class="bs-stepper-header" role="tablist">
                                                    <!-- your steps here -->

                                                    <div class="step" data-target="#logins-part">
                                                        <button wire:model="currentStep" type="button" class="step-trigger"
                                                                role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                                            <span class="bs-stepper-circle">1</span>
                                                            <span class="bs-stepper-label">Inf Empresa</span>
                                                        </button>
                                                    </div>

                                                    <div class="line"></div>
                                                    <div class="step" data-target="#information-part">
                                                        <button wire:model="currentStep" type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                                            <span class="bs-stepper-circle">2</span>
                                                            <span class="bs-stepper-label">Contactos Empresa</span>
                                                        </button>
                                                    </div>

                                                    <div class="line"></div>
                                                    <div class="step"  data-target="#information-parts">
                                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-parts" id="information-parts-trigger">
                                                            <span class="bs-stepper-circle">3</span>
                                                            <span class="bs-stepper-label"mas></span>
                                                        </button>

                                                    </div>
                                                </div>
                                                <div class="bs-stepper-content">
                                                    <!-- your steps content here -->
                                                    <form wire:submit="store">
                                                        <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                                            <div class="form-group">
                                                                <label for="empresa">Empresa</label>
                                                                <input wire:model="empresa" type="text" class="form-control" id="empresa"
                                                                       {{$errors->has('empresa') ? 'is-invalid' : ''}} placeholder="Escriba el nombre de la empresa"
                                                                       value="{{old('name', '')}}">
                                                                @if($errors->has('empresa'))
                                                                    <span class="error text-danger">
                                                                    <strong>{{$errors->first('empresa')}}</strong>
                                                                </span>
                                                                @endif
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="rnc">RNC</label>
                                                                <input wire:model="rnc" type="text" class="form-control" id="rnc"
                                                                       {{$errors->has('rnc') ? 'is-invalid' : ''}} placeholder="eje: 000-12345-7"
                                                                    {{$errors->has('rnc') ? 'is-invalid' : ''}}>
                                                                @if($errors->has('rnc'))
                                                                    <span class="error text-danger">
                                                                    <strong>{{$errors->first('rnc')}}</strong>
                                                                </span>
                                                                @endif
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="direccion">Direccion</label>
                                                                <input wire:model="direccion" type="text" class="form-control" id="direccion"
                                                                       {{$errors->has('direccion') ? 'is-invalid' : ''}} placeholder="Escriba la direccion de la empresa"
                                                                    {{$errors->has('direccion') ? 'is-invalid' : ''}}>
                                                                @if($errors->has('direccion'))
                                                                    <span class="error text-danger">
                                                                    <strong>{{$errors->first('direccion')}}</strong>
                                                                </span>
                                                                @endif
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="provincia">Provincia</label>
                                                                <input wire:model="provincia" type="text" class="form-control"
                                                                       id="provincia" placeholder="">
                                                            </div>
                                                            <button class="btn btn-primary" wire:click="next" onclick="stepper.next()">Siguiente</button>
                                                        </div>

                            <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                <div class="form-group">
                                    <label for="email" class="required">Telefono</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i> </span>
                                        </div>
                                        <input wire:model="telefono" type="tel" name="telefono" id="telefono" class="form-control
                                                                {{$errors->has('telefono') ? 'is-invalid' : ''}}" placeholder="(809) 000-0000"
                                               value="{{old('telefono', '')}}">
                                        @if($errors->has('telefono'))
                                            <span class="error text-danger">
                                                                        <strong>{{$errors->first('telefono')}}</strong>
                                                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="required">Telefono 2</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i> </span>
                                        </div>
                                        <input wire:model="telefono2" type="tel" name="telefono2" id="telefono2" class="form-control
                                                                {{$errors->has('telefono2') ? 'is-invalid' : ''}}" placeholder="(809) 000-0000"
                                               value="{{old('telefono2', '')}}">
                                        @if($errors->has('telefono2'))
                                            <span class="error text-danger">
                                                                        <strong>{{$errors->first('telefono2')}}</strong>
                                                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="required">Extension</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-blender-phone"></i> </span>
                                        </div>
                                        <input wire:model="extension" type="tel" name="extension" id="extension" class="form-control
                                                                {{$errors->has('extension') ? 'is-invalid' : ''}}" placeholder="eje: 0025"
                                               value="{{old('extension', '')}}">
                                        @if($errors->has('extension'))
                                            <span class="error text-danger">
                                                                        <strong>{{$errors->first('extension')}}</strong>
                                                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="required">Correo Electronico</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i> </span>
                                        </div>
                                        <input wire:model="email" type="text" name="email" id="email" class="form-control
                                                                {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="eje: example@gmail.com"
                                               value="{{old('email', '')}}">
                                        @if($errors->has('email'))
                                            <span class="error text-danger">
                                                                        <strong>{{$errors->first('email')}}</strong>
                                                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="url" class="required">URL</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-link"></i> </span>
                                        </div>
                                        <input wire:model="url" type="text" name="url" id="url" class="form-control
                                         {{$errors->has('url') ? 'is-invalid' : ''}}" placeholder="eje: example.gob.do"
                                               value="{{old('url', '')}}">
                                        @if($errors->has('url'))
                                            <span class="error text-danger">
                                                                        <strong>{{$errors->first('url')}}</strong>
                                                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <button type="button" wire:click="previous" class="btn btn-danger" onclick="stepper.previous()">Atras</button>
                                <button type="button" wire:click="next" class="btn btn-primary" onclick="stepper.next()">Siguiente</button>
                            </div>

                            <div id="information-parts" class="content" role="tabpanel" aria-labelledby="information-parts-trigger">
                                <div class="form-group">
                                    <label for="estatus">Estatus Empresa</label>
                                    <select wire:model="estatus" class="form-control {{$errors->has('estatus') ? 'is_invalid' : ''}}" name="estatus"
                                            id="estatus" required>
                                        <option value="">Seleccione un estatus </option>
                                        @foreach(App\Models\Empresa::estatus as $estatus)
                                            <option value="{{$estatus}}" {{old('estatus') == $estatus ? 'selected' : ''}}>{{$estatus}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('$estatus'))
                                        <div class="text-danger">
                                            {{$errors->first('$estatus')}}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="observacion" class="required">Observacion</label>
                                    <textarea wire:model="observacion" name="observacion" placeholder="Observacion"
                                              class="form-control">{{old('description', '')}}</textarea>
                                    @if ($errors->has('observacion'))
                                        <span class="error text-danger">
                                                                    <strong>{{$errors->first('observacion')}}</strong>
                                                                </span>
                                    @endif
                                </div>
                                <button class="btn btn-danger" wire:click="previous" onclick="stepper.previous()">Atras</button>
                                <button wire:click.prevent="store()" class="btn btn-success">Guardar</button>
                            </div>
                            </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
