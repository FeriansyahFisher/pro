<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('Profil Saya') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <img src="{{ asset('images/profil/profil-pic.png') }}" style="height:200px; width:200px" class="mx-auto" alt="Profil Image">
        <div id="profil-name" class="text-center">
            <h3 class="text-2xl my-5"> Nama Agan Disini</h3>
        </div>

        @foreach ($user as $data)
        @endforeach

        <form method="POST" action="">
            @csrf
            @method('patch')
            <div id="user-data" class="grid lg:grid-cols-3 grid-cols-1 gap-4">
                <div>Email</div>
                <div class="col-span-2">
                    <x-input name="email" type="email" value="{{ $data->nama }}" class="w-full"></x-input>
                </div>
                <div>Jenis Kelamin</div>
                <div class="col-span-2">
                    <x-input name="email" type="email" value="{{ $data->jenkel }}" class="w-full"></x-input>
                </div>
                <div>Alamat</div>
                <div class="col-span-2">
                    <x-input name="email" type="email" value="{{ $data->user->email }}" class="w-full"></x-input>
                </div>
            </div>
            <br>
            <center>
                <x-button class="ml-3">
                    {{__('Simpan')}}
                </x-button>
            </center>
        </form>
    </x-slot>
</x-app-layout>