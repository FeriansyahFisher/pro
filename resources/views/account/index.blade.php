<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('All Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="relative overflow-x sm:rounded-lg">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    E-mail
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    CReated Ata
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 text-center">{{ $no++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="px-6 py-4  text-center">{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>