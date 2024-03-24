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
                    @if($prenotazioni->isNotEmpty())
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="text-left text-gray-700">
                                    <th>ID</th>
                                    <th>Titolo Corso</th>
                                    <th>Utente</th>
                                    <th>Stato</th>
                                    <th>Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prenotazioni as $prenotazione)
                                    <tr class="border-t">
                                        <td>{{ $prenotazione->id }}</td>
                                        <td>{{ $prenotazione->corsi->titolo }}</td>
                                        <td>{{ $prenotazione->user->name }}</td>
                                        <td>{{ $prenotazione->isPending ? 'In attesa di conferma' : 'Confermata' }}</td>
                                        <td>
                                            @if($prenotazione->isPending)
                                                <x-confirm-button action="{{ route('prenotazioni.update', $prenotazione->id) }}" confirmMessage="Confermare questa prenotazione?" method="PUT" isPending="0" buttonText="Conferma" buttonClass="success"></x-confirm-button>
                                            @else
                                                <x-confirm-button action="{{ route('prenotazioni.update', $prenotazione->id) }}" confirmMessage="Annullare questa prenotazione?" method="PUT" isPending="1" buttonText="Annulla" buttonClass="dark"></x-confirm-button>
                                            @endif
                                            <x-delete-button action="{{ route('prenotazioni.destroy', $prenotazione->id) }}" confirmMessage="Sei sicuro di voler eliminare questa prenotazione?" buttonText="Elimina" buttonClass="danger"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Non ci sono prenotazioni!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
