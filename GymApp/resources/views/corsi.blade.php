<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($corsi->isNotEmpty())
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Day</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Time</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Time</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($corsi as $corso)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $corso->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $corso->titolo }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $corso->descrizione }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $corso->giorno }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ \Carbon\Carbon::parse($corso->orario_inizio)->format('H:i') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ \Carbon\Carbon::parse($corso->orario_fine)->format('H:i') }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            @if ($user && $user->isAdmin == 1)
                                                <a type="button" class="btn btn-outline-info my-2 w-100" href="/corsi/{{$corso->id}}">Info</a>
                                           
                                                <form action="{{ route('corsi.destroy', $corso->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger my-2 w-100" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                                                </form>
                                                @else
                                                <a type="button" class="btn btn-outline-success my-2 w-100" href="/corsi/{{$corso->id}}">Subscribe</a>
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-4">No courses available at the moment.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
