<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course Registration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($user && $user->isAdmin == 0)
                       
                        <div class="mb-4">
                            <p>{{ __("You have successfully registered. Our staff will confirm your participation in the course.") }}</p>
                        </div>
                    @else
                      
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                            <div class="p-6">
                                <h3 class="font-semibold text-lg mb-2">{{ $corsi->titolo }}</h3>
                                <p class="mb-4">{{ $corsi->descrizione }}</p>
                                <ul class="list-disc list-inside">
                                    <li><strong>{{ __('Day')}}:</strong> {{ $corsi->giorno }}</li>
                                    <li><strong>{{ __('Start Time')}}:</strong> {{ \Carbon\Carbon::parse($corsi->orario_inizio)->format('H:i') }}</li>
                                    <li><strong>{{ __('End Time')}}:</strong> {{ \Carbon\Carbon::parse($corsi->orario_fine)->format('H:i') }}</li>
                                </ul>
                            </div>
                        </div>
                    @endif

                   
                    <a href="/corsi" class="btn btn-outline-dark w-full mb-4">{{ __('Back to Courses')}}</a>
                    <a href="/prenotazioni" class="btn btn-outline-warning w-full">{{ __('View All Bookings')}}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
