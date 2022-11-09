<x-guest-layout>
    {{--<x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>--}}

    {{--<div class="row">
        <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
            <div class="card  shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center fw-light fs-5">Registro</h5>
                <hr class="my-4">
                <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="name" name="name" placeholder="Nombre" required>
                                <div class="valid-feedback">
                                    TODO BIEN
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="number" min="1" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" id="phone" name="phone" placeholder="Telefono" required>
                                <div class="valid-feedback">
                                    TODO BIEN
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" oninput="validarInput(this)" required>
                            </div>
                            <div class="valid-feedback">
                                TODO BIEN
                            </div>
                        </div>
                        <div class="col-6" id="rfc_alert"></div>
                    </div>
                    
                    
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="correo@example.com" required>
                        <div class="valid-feedback">
                            TODO BIEN
                        </div>
                        <div class="invalid-feedback">
                            Correo incorrecto
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required oninput="validarInput(this)">
                            </div>
                            <div class="valid-feedback">
                                TODO BIEN
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="verifyPassword" name="verifyPassword" placeholder="Confirmar password" required >
                            </div>
                            <div class="valid-feedback">
                                TODO BIEN
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea type="text" class="form-control" id="notas" name="notas" placeholder="Notas" required></textarea>
                    </div>

                    
                    <div class="d-grid">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Registrar</button>
                    </div>
                
                </form>
            </div>
            </div>
        </div>
    </div>--}}
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
            <div class="card  shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center fw-light fs-5">Registro</h5>
                <hr class="my-4">
                <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="name" name="name" placeholder="Nombre" required>
                                <div class="valid-feedback">
                                    TODO BIEN
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="number" min="1" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" id="phone" name="phone" placeholder="Telefono" required>
                                <div class="valid-feedback">
                                    TODO BIEN
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" oninput="validarInput(this)" required>
                            </div>
                            <div class="valid-feedback">
                                TODO BIEN
                            </div>
                        </div>
                        <div class="col-6" id="rfc_alert"></div>
                    </div>
                    
                    
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="correo@example.com" required>
                        <div class="valid-feedback">
                            TODO BIEN
                        </div>
                        <div class="invalid-feedback">
                            Correo incorrecto
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required oninput="validarInput(this)">
                            </div>
                            <div class="valid-feedback">
                                TODO BIEN
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="verifyPassword" name="verifyPassword" placeholder="Confirmar password" required >
                            </div>
                            <div class="valid-feedback">
                                TODO BIEN
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <textarea type="text" class="form-control" id="notas" name="notas" placeholder="Notas" required></textarea>
                    </div>
                    
                    
                    <div class="d-grid">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Registrar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    
    <x-slot name="js">
        <script>
            
            function rfcValido(rfc, aceptarGenerico = true) {
                rfc = rfc.substring(0, 10)
                const re = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01]))$/;
                var   validado = rfc.match(re);
                
                if (!validado)
                    return false;

                
                return true;
            }

            function validarInput(input) {
                var rfc         = input.value.trim().toUpperCase(),
                    resultado   = document.getElementById("resultado"),
                    valido;
                    
                var rfcCorrecto = rfcValido(rfc);
                
                if (rfcCorrecto) {
                    if(rfc.length == 12){
                        valido = `
                        <div class="alert alert-success" role="alert">
                            Persona Moral
                        </div>
                        `;
                    }else if(rfc.length == 13){
                        valido = `
                        <div class="alert alert-success" role="alert">
                            Persona Fisica
                        </div>
                        `;
                    }else{
                        valido = `
                        <div class="alert alert-danger" role="alert">
                            RFC INVALIDO
                        </div>
                        `;
                        
                    }
                    
                
                } else {
                    valido = `
                    <div class="alert alert-danger" role="alert">
                        RFC INVALIDO
                    </div>
                    `;
                    
                }
                    
                $('div#rfc_alert').html(valido);
            }
            

        </script>
    </x-slot>
</x-guest-layout>
