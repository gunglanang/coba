<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tagihan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('tagihan.store') }}">
                        @csrf
                        <div>
                            <x-label for="customer_id" :value="__('Pelanggan')" />
                            <select id="customer_id" class="block mt-1 w-full" name="customer_id" required autofocus>>
                                @foreach($pelanggan as $item)
                                    <option value="{{ $item->id }}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-label for="bill_year" :value="__('Tahun')" />
                            <select id="bill_year" class="block mt-1 w-full" name="bill_year" required autofocus>>
                                @for($i=date('Y');$i>=2000;$i--)
                                    <option value="{{ $i }}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-label for="bill_month" :value="__('Bulan')" />
                            <select id="bill_month" class="block mt-1 w-full" name="bill_month" required autofocus>>
                                @for($i=1;$i<=12;$i++)
                                    <option value="{{ $i }}" {{ (date('m') == $i ? ' selected="selected"' : '') }}>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-label for="bill_kwhusage" :value="__('Total Kwh')" />
            
                            <x-input id="bill_kwhusage" class="block mt-1 w-full" type="number" name="bill_kwhusage" :value="old('bill_kwhusage')" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="bill_status" :value="__('Status')" />
                            <select id="bill_status" class="block mt-1 w-full" name="bill_status" required autofocus>>
                                <option value="Belum Bayar">Belum Bayar</option>
                            </select>
                        </div>
                        <div class="flex items-center mt-4">            
                            <x-button>
                                {{ __('Create') }}
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
                                <th>Atas Nama</th>
                                <th>Detail</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tagihan as $item)
                            <tr>
                                <td>{{ $item->customer->name.' (No Meter: '.$item->customer->meter_no.') ' }}</td>
                                <td>Periode : Bulan {{ $item->bill_month.' Tahun '.$item->bill_year }} - Total kwh: {{ $item->bill_kwhusage }} * Tarif/kwh: Rp {{ number_format($item->customer->tarif->tarif_perkwh) }} - Total tagihan: Rp {{ number_format($item->bill_total) }}</td>
                                <td>{{ $item->bill_status }}</td>
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


