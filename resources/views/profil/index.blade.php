@foreach ($user as $data)@endforeach
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('Profil Saya') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <img src="{{ asset('images/profil/profil-pic.png') }}" style="height:200px; width:200px" class="mx-auto" alt="Profil Image">
        <div id="profil-name" class="text-center">
            <h3 class="text-2xl my-5">{{ $data->user_profil->nama }}</h3>
        </div>

        <form method="POST" action="{{ route("user_profil.store") }}">
            @csrf
            <div id="user-data" class="grid lg:grid-cols-3 grid-cols-1 gap-4">
                <div>Nama Agan</div>
                <div class="col-span-2">
                    <x-input name="nama" type="text" value="{{ isset($data->user_profil->nama) ? $data->user_profil->nama : '' }}" class="w-full"></x-input>
                </div>
                <div>Email</div>
                <div class="col-span-2">
                    <x-input name="email" type="email" value="{{ isset($data) ? $data->email : '' }}" class="w-full"></x-input>
                </div>
                <div>Tanggal Lahir</div>
                <div>
                    <x-input name="tgl_lahir" type="date" value="{{ isset($data->user_profil->tgl_lahir) ? $data->user_profil->tgl_lahir : '' }}" class="w-full"></x-input>
                </div><div></div>
                <div>Jenis Kelamin</div>
                <div class="col-span-2">
                    <x-input name="jenkel" type="text" value="{{ isset($data->user_profil->jenkel) ? $data->user_profil->jenkel : '' }}" class="w-full"></x-input>
                </div>
                <div>Alamat</div>
                <div class="col-span-2">
                    <x-input name="alamat" type="text" value="{{ isset($data->user_profil->nama) ? $data->user_profil->nama : '' }}" class="w-full"></x-input>
                </div>
                <div>No Telp</div>
                <div class="col-span-2">
                    <x-input name="no_telp" type="text" value="{{ isset($data->user_profil->no_telp) ? $data->user_profil->no_telp : '' }}" class="w-full"></x-input>
                </div>
                <div>Pic User</div>
                <div class="col-span-2">
                    <x-input name="pic" type="text" value="{{ isset($data->user_profil->pic) ? $data->user_profil->pic : '' }}" class="w-full"></x-input>
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