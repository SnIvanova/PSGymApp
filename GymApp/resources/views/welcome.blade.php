@extends('layouts.app')

@section('content')
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Main Content -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Welcome to {{ config('app.name', 'Laravel') }}</h2>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">This is the default welcome page of your application. You can customize it as per your requirements.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
