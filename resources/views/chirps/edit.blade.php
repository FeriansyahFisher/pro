<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('Edit Chirper') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                    <form method="POST" action="{{ route('chirps.update', $chirp) }}">
                        @csrf
                        @method('patch')
                        <textarea
                            name="message"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        >{{ old('message', $chirp->message) }}</textarea>
                        <div class="mt-4 space-x-2">
                            <x-button>{{ __('Save') }}</x-button>
                            <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>