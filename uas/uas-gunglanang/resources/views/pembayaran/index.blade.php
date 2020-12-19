<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('pembayaran.store') }}">
                        @csrf
                        <div>
                            <x-label for="bill_id" :value="__('Tagihan')" />
                            <select id="bill_id" class="block mt-1 w-full" name="bill_id" required autofocus>>
                                @foreach($tagihanBelumBayar as $item)
                                    <option value="{{ $item->id }}">#{{ $item->id. ' A/n '.$item->customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-label for="payment_via" :value="__('Pembayaran via')" />
                            <select id="payment_via" class="block mt-1 w-full" name="payment_via" required autofocus>>
                                <option value="BCA">BCA</option>
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
                                <th>Pembayaran via</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pembayaran as $item)
                            <tr>
                                <td>{{ $item->bill->customer->name.' (No Meter: '.$item->bill->customer->meter_no.') ' }}</td>
                                <td>Periode : Bulan {{ $item->bill->bill_month.' Tahun '.$item->bill->bill_year }} - Total tagihan: Rp {{ number_format($item->bill->bill_total) }}</td>
                                <td>{{ $item->payment_via }}</td>
                                <td>{{ $item->created_at }}</td>
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


