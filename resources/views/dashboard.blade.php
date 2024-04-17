<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           <a href="{{route('pages.register')}}">Click to proceed</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome!") }}  {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
