<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-white">Order Details</h2>
                <div>
                    <a href="{{ route('orders.edit', $order) }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 mr-2">
                        Edit Order
                    </a>
                    <a href="{{ route('orders.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-500">
                        Back to List
                    </a>
                </div>
            </div>

            <div class="ring-1 ring-white/10 rounded-lg bg-rose-800/50 overflow-hidden">
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-white mb-2">Vendor Information</h3>
                            <p class="text-gray-300">{{ $order->VendorName }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-white mb-2">PQ Details</h3>
                            <p class="text-gray-300">Number: {{ $order->PQNo }}</p>
                            <p class="text-gray-300">Date: {{ $order->PQDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-white mb-2">PI Details</h3>
                            <p class="text-gray-300">Number: {{ $order->PINo }}</p>
                            <p class="text-gray-300">Date: {{ $order->PIDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-white mb-2">AP Details</h3>
                            <p class="text-gray-300">Value: ${{ number_format($order->APValue, 2) }}</p>
                            <p class="text-gray-300">Date: {{ $order->APDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-white mb-2">CI Details</h3>
                            <p class="text-gray-300">Number: {{ $order->CINo }}</p>
                            <p class="text-gray-300">Value: ${{ number_format($order->CIValue, 2) }}</p>
                            <p class="text-gray-300">Date: {{ $order->CIDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-white mb-2">BL Details</h3>
                            <p class="text-gray-300">Number: {{ $order->BLNo }}</p>
                            <p class="text-gray-300">Date: {{ $order->BLDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-white mb-2">Additional Details</h3>
                            <p class="text-gray-300">ETA: {{ $order->ETA->format('M d, Y') }}</p>
                            <p class="text-gray-300">BP Value: ${{ number_format($order->BPValue, 2) }}</p>
                            <p class="text-gray-300">BP Date: {{ $order->BPDate->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
