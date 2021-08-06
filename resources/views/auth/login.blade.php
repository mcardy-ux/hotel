<x-guest-layout>
        <div class="fixed-background"></div>
        <main>
            <div class="container">
                <div class="row h-100">
                    <div class="col-12 col-md-10 mx-auto my-auto">
                        <div class="card auth-card">
                            <div class="position-relative image-side ">
    
                                <p class=" text-white h2">ADMINISTRACIÓN HOTEL</p>
    
                                <p class="white mb-0">
                                    Por favor use sus credenciales para iniciar sesion.
                                </p>
                            </div>
                            <div class="form-side">
                                <a href="/">
                                    <span class="logo-single"></span>
                                </a>
                                <h6 class="mb-4">Iniciar Sesion</h6>
                                

                                      <!-- Session Status -->
                                    <x-auth-session-status  :status="session('status')" />

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors  :errors="$errors" />

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div>
                                            <x-label for="email" :value="__('Correo Electronico')" />

                                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                        </div>

                                        <!-- Password -->
                                        <div class="row mb-12">

                                            <div class="mt-4 col-md-11">
                                                <x-label for="password" :value="__('Contraseña')" />

                                                <x-input id="password" class="form-control"
                                                                type="password"
                                                                name="password"
                                                                required autocomplete="current-password" />
                                                                
                                            </div>
                                            <div class="mt-12 col-md-1">
                                                               
                                                <button id="show_password" class="btn btn-outline-primary mb-0" type="button" onclick="mostrarPassword()"> <span class="glyph-icon simple-icon-eye"></span> </button>
                                                               
                                            </div>
                                        </div>
                                        <!-- Remember Me -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Olvido la contraseña?') }}
                                                </a>
                                            @endif

                                            <x-button class="btn btn-primary btn-lg btn-shadow">
                                                {{ __('Iniciar') }}
                                            </x-button>
                                        </div>
                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</x-guest-layout>
