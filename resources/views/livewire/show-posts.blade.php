<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <div class="relative overflow-x-auto">
            <div class="px-6 py-4 flex items-center">
                <x-input class="flex-1 mr-4" placeholder="Escriba el texto a buscar" type="text" wire:model.live="search"/>
                @livewire('create-post')
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="cursor-pointer px-6 py-3"
                            wire:click="order('id')"
                        >
                            ID
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3"
                            wire:click="order('title')"
                        >
                            Title
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3"
                            wire:click="order('content')"
                        >
                            Content
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acción
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $post->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $post->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->content}}
                            </td>
                            <td class="px-6 py-4">
                                Edit
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th colspan="4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Sin registros
                            </th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
