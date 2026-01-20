<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    
<div class="flex w-4/5 mx-auto justify-center space-x-2 bg-gray-800 p-4 border border-gray-500/50 rounded-md text-md">
    <div class="flex items-center">
        <input type="radio" name="options" id="html" class="hidden peer">
        <label for="html" class="cursor-pointer rounded py-2 px-8 text-white transition-colors duration-200 peer-checked:bg-indigo-600 peer-checked:text-white">All</label>
    </div>
    @foreach ($categories as $category)

    <div class="flex items-center">
        <input type="radio" name="options" id="html" class="hidden peer">
        <label for="html" class="cursor-pointer rounded py-2 px-8 text-white transition-colors duration-200 peer-checked:bg-indigo-600 peer-checked:text-white">{{ $category->name }}</label>
    </div>

    @endforeach
</div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
