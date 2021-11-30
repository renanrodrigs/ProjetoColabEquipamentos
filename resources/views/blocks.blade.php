<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Blocos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Blocos
                </div>

                <table class="w-full">
                    <thead>
                        <tr class="text-center font-bold">
                            <td class="border px-6 py-4">Nome</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blocks as $block)
                            <tr>
                                <td class="border px-6 py-4">{{ $block->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
