<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Orders</h2>
                <a href="{{ route('orders.create') }}" class="px-4 py-2 bg-rose-600 text-white rounded-md hover:ring-1 hover:ring-rose-600 hover:bg-white hover:text-rose-600 hover:font-bold">
                    Create New Order
                </a>
            </div>

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-600 text-white rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="ring-1 ring-white/10 rounded-lg bg-gray-50 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full  divide-red-700">
                        <thead>
                        <tr class="bg-rose-600">
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Vendor Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">PQ Details</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">PI Details</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-rose-200">
                        @foreach($orders as $order)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $order->VendorName }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                    {{ $order->PQNo }} <br>
                                    <span class="text-sm text-gray-600">{{ $order->PQDate->format('M d, Y') }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                    {{ $order->PINo }} <br>
                                    <span class="text-sm text-gray-600">{{ $order->PIDate->format('M d, Y') }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <a href="{{ route('orders.show', $order) }}" class="text-indigo-400 hover:text-indigo-300 mr-3">View</a>
                                    <a href="{{ route('orders.edit', $order) }}" class="text-blue-400 hover:text-blue-300 mr-3">Edit</a>
                                    <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:text-red-300" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-4">
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
