<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tarif') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('tarif.update', $currentTarif->id) }}">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-label for="daya" :value="__('Daya')" />
            
                            <x-input id="daya" class="block mt-1 w-full" type="number" name="daya" value="{{$currentTarif->daya}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="tarif_perkwh" :value="__('Tarif/kwh')" />
            
                            <x-input id="tarif_perkwh" class="block mt-1 w-full" type="number" name="tarif_perkwh" value="{{$currentTarif->tarif_perkwh}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="beban" :value="__('Beban')" />
            
                            <x-input id="beban" class="block mt-1 w-full" type="number" name="beban" value="{{$currentTarif->beban}}" required autofocus />
                        </div>
                        <div class="flex items-center mt-4">            
                            <x-button>
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Daya</th>
                                <th>Tarif/kwh</th>
                                <th>Beban</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tarif as $item)
                            <tr>
                                <td style="display: flex;">
                                    <a href="{{ route('tarif.edit', $item->id) }}" class="mr-5">Edit</a>
                                    <form action="{{ route('tarif.destroy', $item->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onClick="return confirm('Delete entry?')"
                                        >Delete</button>
                                    </form>
                                </td>
                                <td>{{ $item->daya }}</td>
                                <td>{{ $item->tarif_perkwh }}</td>
                                <td>{{ $item->daya }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
    @endpush
</x-app-layout>


