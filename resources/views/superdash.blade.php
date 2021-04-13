<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    vous êtes connecter en tant qu'administrateur!1

                    <div class="container">
                        <h1>appel</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5 text-center" style="width:18rem;">
                    <div class="card-body">
                      <h5 class="card-title">NOMBRE DE CLASSE</h5>
                      <h6 class="card-subtitle mb-2 text-muted"> niveau 6em à 3em</h6>
                      <select name="id" id="" class="form-control">
                        @foreach ($datas as $datas)
                            <option>{{ $datas->name}}</option>
                        @endforeach
                    </select>
                    <br>
                      <div>
                        <button type="card-button" class="btn btn-primary center" data-toggle="modal" data-target="#exampleModal01" data-whatever="@mdo">ajouter une classe</button>
                   </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5 text-center" style="width:18rem;">
                    <div class="card-body">
                      <h5 class="card-title">PROFESSEUR</h5>
                      <h6 class="card-subtitle mb-2 text-muted">charger de cours</h6>
                      <select class="form-control" name="" id="">listes
                          <option value="">ouedraogo </option>
                          <option value="">kaborer </option>
                      </select>
                      <br>
                      <div>
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal02" data-whatever="@fat">ajouter Professeur</button>
                    </div>
                    </div>
                  </div>
            </div>

            <div class="col">
                <div class="card mt-5 text-center" style="width:18rem;">
                    <div class="card-body">
                      <h5 class="card-title">PROFESSEUR</h5>
                      <h6 class="card-subtitle mb-2 text-muted">charger de cours</h6>
                      <select class="form-control" name="" id="">listes
                          <option value="">ouedraogo </option>
                          <option value="">kaborer </option>
                      </select>
                      <br>
                      <div>
                        <button type="button" class="btn btn-primary">valider</button>
                    </div>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card mt-5 text-center" style="width:18rem;">
                    <div class="card-body">
                      <h5 class="card-title">PROFESSEUR</h5>
                      <h6 class="card-subtitle mb-2 text-muted">charger de cours</h6>
                      <select class="form-control" name="" id="">listes
                          <option value="">ouedraogo </option>
                          <option value="">kaborer </option>
                      </select>
                      <br>
                      <div>
                        <button type="button" class="btn btn-primary ">ajouter Professeur</button>
                    </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card" >
                    <div class="overflow-auto">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">nom</th>
                                <th scope="col">email</th>
                                <th scope="col">statut</th>
                                <th scope="col">matieres / classe</th>
                            </tr>
                            </thead>
                            <tbody>




                        @foreach ($data1 as $data1)
                            <tr>
                                <th scope="row">{{ $data1->name}}</th>
                                <td>{{ $data1->email}}</td>
                                <td>{{ $data1->statut}}</td>
                                <td>{{ $data1->matiere1}}, {{ $data1->matiere2}} {{ $data1->classe}}</td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                    <x-guest-layout>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />

                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required />
                                </div>

                                <!-- select statut -->
                                <div class="mt-4">
                                    <select class="block mt-1 w-full" name="role_id" id="">
                                        <option class="block mt-1 w-full" value="eleve">élève</option>
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <select name="id" id="" class="form-control">
                                        @foreach ($datas1 as $datas1)
                                            <option value="{{ $datas1->name}}">{{ $datas1->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a> --}}
                                    <div class="mt-4">
                                        <select class="block mt-1 w-full" name="statut" id="">
                                            <option class="block mt-1 w-full" value="eleve">élève</option>
                                        </select>
                                    </div>

                            </div>

                                </div>

                        {{-- </x-auth-card> --}}


                </div>

                    <x-button class="ml-4btn btn-primary"> {{ __('Register') }}</x-button>
                </form>

        </x-guest-layout>
            <div class="col"></div>
        </div>
    </div>
<div class="container">
        <div class="row">
            <div class="col mt-5">
                {{-- formulaire 01 --}}
                <div class="modal fade" id="exampleModal01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">ajouter un profeseur</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <x-guest-layout>
                                {{-- <x-auth-card>
                                    <x-slot name="logo">
                                        <a href="/">
                                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                        </a>
                                    </x-slot> --}}

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    <form method="POST" action="{{ route('classes') }}">
                                        @csrf
                                        <!-- select statut -->
                                        <div class="mt-4">
                                            <select class="block mt-1 w-full" name="niveau" id="">
                                                <option class="block mt-1 w-full" value="6em">6em</option>
                                                <option class="block mt-1 w-full" value="5em">5em</option>
                                                <option class="block mt-1 w-full" value="4em">4em</option>
                                                <option class="block mt-1 w-full" value="3em">3em</option>
                                            </select>
                                        </div>
                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            {{-- <x-label for="email" :value="__('Name')" /> --}}

                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                                        </div>

                            </x-guest-layout>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <x-button class="ml-4btn btn-primary"> {{ __('Register') }}</x-button>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
                {{-- formulaire 02 --}}
            <div class="col mt-5">
                <div class="modal fade" id="exampleModal02" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ajouter un profeseur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                <div class="modal-body">
                    <x-guest-layout>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />

                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required />
                                </div>

                                <!-- select statut -->
                                <div class="mt-4">
                                    <select class="block mt-1 w-full" name="role_id" id="">
                                        <option class="block mt-1 w-full" value="admin">professeur</option>
                                        <option class="block mt-1 w-full" value="eleve">élève</option>
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <select class="block mt-1 w-full" name="matiere1" id="" >
                                        <option class="block mt-1 w-full" value=""></option>
                                        <option class="block mt-1 w-full" value="Francais">Francais</option>
                                        <option class="block mt-1 w-full" value="Anglais">Anglais</option>
                                        <option class="block mt-1 w-full" value="histoire geograpie">histoire geograpie</option>
                                        <option class="block mt-1 w-full" value="sciences">sciences</option>
                                        <option class="block mt-1 w-full" value="mathematique">mathematique</option>
                                        <option class="block mt-1 w-full" value="Sport">Sport</option>
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <select class="block mt-1 w-full" name="matiere2" id="">
                                        <option class="block mt-1 w-full" value=" "></option>
                                        <option class="block mt-1 w-full" value="Francais">Francais</option>
                                        <option class="block mt-1 w-full" value="Anglais">Anglais</option>
                                        <option class="block mt-1 w-full" value="societe">histoire geograpie</option>
                                        <option class="block mt-1 w-full" value="sciences">sciences</option>
                                        <option class="block mt-1 w-full" value="mathematique">mathematique</option>
                                        <option class="block mt-1 w-full" value="Sport">Sport</option>
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <select class="block mt-1 w-full" name="classe" id="">
                                        <option class="block mt-1 w-full" value=" "></option>
                                        <option class="block mt-1 w-full" value="6em">6em</option>
                                        <option class="block mt-1 w-full" value="5em">5em</option>
                                        <option class="block mt-1 w-full" value="4em">4em</option>
                                        <option class="block mt-1 w-full" value="3em">3em</option>
                                    </select>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a> --}}
                                    <div class="mt-4">
                                        <select class="block mt-1 w-full" name="statut" id="">
                                            <option class="block mt-1 w-full" value="professeur">professeur</option>
                                            <option class="block mt-1 w-full" value="eleve">élève</option>
                                        </select>
                                    </div>

                            </div>

                                </div>

                        {{-- </x-auth-card> --}}


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <x-button class="ml-4btn btn-primary"> {{ __('Register') }}</x-button>
                </form>
                </div>
            </div>
        </x-guest-layout>
            {{-- fin --}}
             {{-- formulaire 03 --}}
             {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Recipient:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message-text"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                  </div>
                </div>
              </div> --}}
            {{-- fin --}}
              {{-- formulaire 04 --}}
            {{-- fin --}}


    </div>
</div>
</x-app-layout>
<script src="/modal.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

