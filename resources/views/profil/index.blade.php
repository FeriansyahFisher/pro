@foreach ($user as $akun)@endforeach
@foreach ($user_profil as $profil)@endforeach
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('Profil Saya') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <img src="{{ asset('images/profil/profil-pic.png') }}" style="height:200px; width:200px" class="mx-auto" alt="Profil Image">
        <div id="profil-name" class="text-center">
            <h3 class="text-2xl my-5">{{ isset($profil->nama) ? $profil->nama : $akun->email }}</h3>
        </div>

        <form method="POST" action="{{ route("user_profil.store") }}">
            @csrf
            <div id="user-akun" class="grid lg:grid-cols-3 grid-cols-1 gap-4">
                <div>Nama Agan</div>
                <div class="col-span-2">
                    <x-input name="nama" type="text" value="{{ isset($profil->nama) ? $profil->nama : '' }}" class="w-full"></x-input>
                </div>
                <div>Email</div>
                <div class="col-span-2">
                    <x-input name="email" type="email" value="{{ isset($akun) ? $akun->email : '' }}" class="w-full"></x-input>
                </div>
                <div>Tanggal Lahir</div>
                <div>
                    <x-input name="tgl_lahir" type="date" value="{{ isset($profil->tgl_lahir) ? $profil->tgl_lahir : '' }}" class="w-full"></x-input>
                </div><div></div>
                <div>Jenis Kelamin</div>
                <div class="col-span-2">
                    <x-input name="jenkel" type="text" value="{{ isset($profil->jenkel) ? $profil->jenkel : '' }}" class="w-full"></x-input>
                </div>
                <div>Alamat</div>
                <div class="col-span-2">
                    <x-input name="alamat" type="text" value="{{ isset($profil->nama) ? $profil->nama : '' }}" class="w-full"></x-input>
                </div>
                <div>No Telp</div>
                <div class="col-span-2">
                    <x-input name="no_telp" type="text" value="{{ isset($profil->no_telp) ? $profil->no_telp : '' }}" class="w-full"></x-input>
                </div>
                <div>Pic User</div>
                <div class="col-span-2">
                    <x-input name="pic" type="text" value="{{ isset($profil->pic) ? $profil->pic : '' }}" class="w-full"></x-input>
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