<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prenotazioni') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">



                @if($prenotazioni->count() > 0)
                    <table class="table table-striped table-hover">
                        <thead class="table-light align-middle text-center">
                            <tr>
                            <th scope="col">Corso</th>
                            <th scope="col">Giorno</th>
                            <th scope="col">Orario</th>
                            <th scope="col">Stato</th>
                            <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider text-center align-middle">
                                @foreach($prenotazioni as $value)
                                    <tr>
                                        <td>{{ $value->corsi->titolo}}</td>
                                        <td>{{ $value->corsi->giorno}}</td>
                                        <td>{{ \Carbon\Carbon::parse($value->corsi->orario_inizio)->format('H') }}:00 - {{ \Carbon\Carbon::parse($value->corsi->orario_fine)->format('H') }}:00</td>
                                        @if($value->is_pending == 1)
                                            <td>In attesa di conferma</td>
                                        @else 
                                            <td>Confermata</td>
                                        @endif
                                        <td>
                                        <form method="POST" action="{{ route('prenotazioni.destroy', $value->id) }}" onsubmit="return confirm('Sei sicuro di voler annullare questa prenotazione?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-dark my-2 w-100">Annulla</button>
                                            </form> 
                                        </td>
                                    </tr>
                                @endforeach
                                @else 
                                    <p>Non ci sono prenotazioni!</p>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>