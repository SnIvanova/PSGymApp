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
                    @forelse($prenotazioni as $prenotazione)
                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto table-striped table-hover">
                                <thead class="bg-gray-50">
                                    <tr class="text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <th scope="col" class="px-6 py-3 text-center">Corso</th>
                                        <th scope="col" class="px-6 py-3 text-center">Giorno</th>
                                        <th scope="col" class="px-6 py-3 text-center">Orario</th>
                                        <th scope="col" class="px-6 py-3 text-center">Stato</th>
                                        <th scope="col" class="px-6 py-3 text-center">Azioni</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $prenotazione->corsi->titolo }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">{{ $prenotazione->corsi->giorno }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                            {{ \Carbon\Carbon::parse($prenotazione->corsi->orario_inizio)->format('H:i') }} - 
                                            {{ \Carbon\Carbon::parse($prenotazione->corsi->orario_fine)->format('H:i') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                            {{ $prenotazione->is_pending ? 'In attesa di conferma' : 'Confermata' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                            <form method="POST" action="{{ route('prenotazioni.destroy', $prenotazione->id) }}" onsubmit="return confirm('Sei sicuro di voler annullare questa prenotazione?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-indigo-600 hover:text-indigo-900 btn btn-outline-dark my-2 w-100">Annulla</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @empty
                        <p>Non ci sono prenotazioni!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
