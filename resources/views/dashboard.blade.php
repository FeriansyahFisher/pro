<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <div class="text-center">
            You're logged in!
        </div>
    </x-slot>
</x-app-layout>
