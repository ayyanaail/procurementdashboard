<x-app-layout>
    <div class="flow-root pb-10">
        <ul role="list" class="-mb-8 mx-3 sm:mx-10">
            <li>
                <div class="relative pb-8">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                        <div>
                            <span class="flex size-8 items-center justify-center rounded-full bg-green-500 ring-8 ring-white">
                              <svg class="size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                              </svg>
                            </span>
                        </div>
                        <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                            <div>
                                <p class="text-sm text-gray-500">Created Order to <a href="#" class="font-medium text-gray-900">{{$order->PQNo}}</a></p>
                            </div>
                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                {{$order->created_at->toDateString()}} (    {{ $order->created_at->diffForHumans() }}
)
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="relative pb-8">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                        <div>
                            <span class="flex size-8 items-center justify-center rounded-full bg-green-500 ring-8 ring-white">
                              <svg class="size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                              </svg>
                            </span>
                        </div>
                        <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                            <div>
                                <p class="text-sm text-gray-500">PI Received <a href="#" class="font-medium text-gray-900">{{$order->PINo}}</a></p>
                            </div>
                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                {{$order->PIDate->toDateString()}} ( {{ $order->PIDate->diffForHumans() }} )
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="relative pb-8">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                        <div>
                            <span class="flex size-8 items-center justify-center rounded-full bg-green-500 ring-8 ring-white">
                              <svg class="size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                              </svg>
                            </span>
                        </div>
                        <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                            <div>
                                <p class="text-sm text-gray-500">Advance Payment: <a href="#" class="font-medium text-gray-900">MVR{{$order->APValue}}</a></p>
                            </div>
                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                {{$order->APDate->toDateString()}} ( {{ $order->APDate->diffForHumans() }} )
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="relative pb-8">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                        <div>
                            <span class="flex size-8 items-center justify-center rounded-full bg-green-500 ring-8 ring-white">
                              <svg class="size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                              </svg>
                            </span>
                        </div>
                        <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                            <div>
                                <p class="text-sm text-gray-500">Commercial Invoice <a href="#" class="font-medium text-gray-900">{{$order->CIValue}}</a></p>
                            </div>
                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                {{$order->CIDate->toDateString()}} ( {{ $order->CIDate->diffForHumans() }} )
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="relative pb-10">
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                        <div>
                            <span class="flex size-8 items-center justify-center rounded-full bg-green-500 ring-8 ring-white">
                              <svg class="size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                              </svg>
                            </span>
                        </div>
                        <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                            <div>
                                <p class="text-sm text-gray-500">BL Number <a href="#" class="font-medium text-gray-900">{{$order->BLNo}}</a></p>
                            </div>
                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                {{$order->BLDate->toDateString()}} ( {{ $order->BLDate->diffForHumans() }} )
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="relative pb-8">
                    <div class="relative flex space-x-3">
                        <div>
                            <span class="flex size-8 items-center justify-center rounded-full bg-green-500 ring-8 ring-white">
                              <svg class="size-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                              </svg>
                            </span>
                        </div>
                        <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                            <div>
                                <p class="text-sm text-gray-500">Balance Payment: <a href="#" class="font-medium text-gray-900">MVR:{{$order->BPValue}}</a></p>
                            </div>
                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                {{$order->BPDate->toDateString()}} ( {{ $order->BPDate->diffForHumans() }} )
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>


{{--    FORM DISPLAY--}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-600">Order Details</h2>
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
