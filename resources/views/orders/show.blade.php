<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-white">Order Details</h2>
                <div>
                    <a href="{{ route('orders.edit', $order) }}" class="px-4 py-2 bg-rose-600 text-white rounded-md hover:bg-rose-500 mr-2">
                        Edit Order
                    </a>
                    <a href="{{ route('orders.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-500">
                        Back to List
                    </a>
                </div>
            </div>

            <div class="border border-rose-500 rounded-lg bg-white overflow-hidden">
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-600 mb-2">Vendor Name</h3>
                            <p class="text-gray-600">{{ $order->VendorName }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-white mb-2">Purchase Quotation</h3>
                            <p class="text-gray-600">PQNo: {{ $order->PQNo }}</p>
                            <p class="text-gray-600">Date: {{ $order->PQDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-gray-600 mb-2">PI Details</h3>
                            <p class="text-gray-600">Number: {{ $order->PINo }}</p>
                            <p class="text-gray-600">Date: {{ $order->PIDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-gray-600 mb-2">AP Details</h3>
                            <p class="text-gray-600">Value: ${{ number_format($order->APValue, 2) }}</p>
                            <p class="text-gray-600">Date: {{ $order->APDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-gray-600 mb-2">CI Details</h3>
                            <p class="text-gray-600">Number: {{ $order->CINo }}</p>
                            <p class="text-gray-600">Value: ${{ number_format($order->CIValue, 2) }}</p>
                            <p class="text-gray-600">Date: {{ $order->CIDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-gray-600 mb-2">BL Details</h3>
                            <p class="text-gray-600">BLNo: {{ $order->BLNo }}</p>
                            <p class="text-gray-600">IssueDate: {{ $order->BLDate->format('M d, Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium text-gray-600 mb-2">Additional Details</h3>
                            <p class="text-gray-600">ETA: {{ $order->ETA->format('M d, Y') }}</p>
                            <p class="text-gray-600">BalancePayment Value: ${{ number_format($order->BPValue, 2) }}</p>
                            <p class="text-gray-600">BalancePayment Date: {{ $order->BPDate->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
