<div>

    <div wire:ignore.self class="modal fade" id="createDataModal" tabindex="-1" role="dialog"
         aria-labelledby="createDataModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="creteDataLabel">Agregar Nueva Empresa</h5>
                    <button wire:click.Prevent="cancel()" type="button" class="btn btn-close"
                            data-dismiss="modal" aria-label="close">X</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name" class="required">Empresa</label>
                            <input wire:model="name" type="text" name="name" id="name" class="form-control
                                   {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Escriba el nombre de la empresa"
                                   value="{{old('name', '')}}">
                            @if($errors->has('name'))
                                <span class="error text-danger">
                                    <strong>{{$errors->first('name')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="direccion" class="required">Direccion</label>
                            <input wire:model="direccion" type="text" name="direccion" id="direccion" class="form-control
                                   {{$errors->has('direccion') ? 'is-invalid' : ''}}" placeholder="Escriba la dirrecion de la empresa"
                                   value="{{old('direccion', '')}}">
                            @if($errors->has('direccion'))
                            <span class="error text-danger">
                                    <strong>{{$errors->first('direccion')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="telefono" class="required">Telefono</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input wire:model="telefono" type="text" name="telefono" id="telefono" class="form-control
                                       {{$errors->has('telefono') ? 'is-invalid' : ''}}"  placeholder="(809) 000-0000"
                                value="{{old('telefono', '')}}">
                                @if($errors->has('telefono'))
                                    <span class="error text-danger"></span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telefono" class="required">Telefono 2</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input wire:model="telefono2" type="text" name="telefono2" id="telefono2" class="form-control
                                       {{$errors->has('telefono2') ? 'is-invalid' : ''}}"  placeholder="(809) 000-0000"
                                       value="{{old('telefono2', '')}}">
                                @if($errors->has('telefono2'))
                                    <span class="error text-danger"></span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="required">Extension</label>
                                <input wire:model="email" type="text" name="email" id="email" class="form-control
                                   {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="eje:2323"
                                       value="{{old('name', '')}}">
                                @if($errors->has('name'))
                                    <span class="error text-danger">
                                    <strong>{{$errors->first('name')}}</strong>
                                </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="email" class="required">Correo Electronico</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                                <input wire:model="email" type="email" name="email" id="email" class="form-control
                                   {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Escriba el correo de la empresa"
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
                                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                                </div>
                                <input wire:model="url" type="url" name="url" id="url" class="form-control
                                {{$errors->has('url') ? 'is-invalid' : ''}}" placeholder="eje: example.gob.do"
                                value="{{old('url', '')}}">
                                @if($errors->has('url'))
                                    <span class="error text-danger">
                                        <strong>{{$errors->first('url')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="required">RNC</label>
                            <input wire:model="rnc" type="text" name="rnc" id="rnc" class="form-control
                                   {{$errors->has('rnc') ? 'is-invalid' : ''}}" placeholder="eje: 000-12345-7"
                                   value="{{old('rnc', '')}}">
                            @if($errors->has('rnc'))
                                <span class="error text-danger">
                                    <strong>{{$errors->first('rnc')}}</strong>
                                </span>
                            @endif
                        </div>

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
                            <textarea wire:model="observacion" name="observacion" placeholder="Observacion" class="form-control">{{old('description', '')}}</textarea>
                            @if ($errors->has('observacion'))
                                <span class="error text-danger">
                                    <strong>{{$errors->first('observacion')}}</strong>
                                </span>
                            @endif
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismss="modal">Cerrar</button>
                    <button type="button" wire:click.prevent="store()" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
