<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pelanggan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('pelanggan.update', $currentPelanggan->id) }}">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-label for="tarif_id" :value="__('Tarif')" />
                            <select id="tarif_id" class="block mt-1 w-full" name="tarif_id" required autofocus>>
                                @foreach($tarif as $item)
                                    <option value="{{ $item->id }}" {{ ($currentPelanggan->tarif_id == $item->id) ? ' selected="selected"' : '' }}>Daya {{$item->daya}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-label for="meter_no" :value="__('No Meter')" />
            
                            <x-input id="meter_no" class="block mt-1 w-full" type="number" name="meter_no" value="{{ $currentPelanggan->meter_no }}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="name" :value="__('Nama')" />
            
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $currentPelanggan->name }}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="phone" :value="__('No HP')" />
            
                        <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" value="{{ $currentPelanggan->phone }}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="address" :value="__('Alamat')" />
                        <textarea id="address" class="block mt-1 w-full" name="address" required autofocus>{{ $currentPelanggan->address }}</textarea>
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
                                <th>No Meter</th>
                                <th>Nama</th>
                                <th>No HP</th>
                                <th>Alamat</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelanggan as $item)
                            <tr>
                                <td style="display: flex;">
                                    <a href="{{ route('pelanggan.edit', $item->id) }}" class="mr-5">Edit</a>
                                    <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onClick="return confirm('Delete entry?')"
                                        >Delete</button>
                                    </form>
                                </td>
                                <td>{{ $item->meter_no }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ 'Daya: '.$item->tarif->daya.' Tarif/kwh: '.$item->tarif->tarif_perkwh }}</td>
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


