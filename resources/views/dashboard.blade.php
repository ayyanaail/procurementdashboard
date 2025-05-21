<x-app-layout>
    <div class="rounded-lg bg-red-500 shadow">
        <div class="p-4 text-gray-100">
            <h1 class="text-2xl font-semibold text-white">Shipment Updates Dashboard</h1>
        </div>
    </div>
    <ul role="list" class="divide-y divide-gray-100">
        @foreach($orders as $order)
           <li class="relative flex justify-between gap-x-6 py-5">
               <div class="min-w-32 max-w-32 gap-x-4 flex items-center justify-start">
                    <div>
                        <p class="text-sm/6 font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                {{$order->VendorName}}
                            </a>
                        </p>
                    </div>
                </div>
               <div class="container mx-auto pt-4 px-4">
                   <div class="flex flex-col md:flex-row items-start justify-between gap-4">
                       <!-- Step 1 PQ Created -->
                       <div class="flex-1 text-center">
                           <div class="relative">
                               <div class="px-2 w-10 h-10 mx-auto bg-green-500 rounded-full text-sm font-bold text-white flex items-center justify-center">PQ</div>
                               <div class="mt-2">
{{--                                   <h3 class="font-semibold text-gray-800">PQ Created</h3>--}}
                                   <p class="text-sm text-gray-600">{{$order->PQNo}}</p>
                                   <p class="text-xs text-gray-500">{{$order->PQDate->format('d/m/Y')}}</p>
                               </div>
                           </div>
                       </div>
                       <!-- Connector -->
                       <div class="flex-1 hidden md:block h-1 bg-green-500 self-start mt-5"></div>
                       <!-- Step 2 PI Issued -->
                       <div class="flex-1 text-center">
                           <div class="relative">
                               @if(isset($order->PIDate))
                                   <div class="px-2 w-10 h-10 mx-auto bg-green-500 rounded-full text-sm font-bold text-white flex items-center justify-center">PI</div>
                                   <div class="mt-2">
{{--                                       <h3 class="font-semibold text-gray-800">Proforma Invoice</h3>--}}
                                       <p class="text-sm text-gray-600">PI No: {{$order->PINo}}</p>
                                       <p class="text-xs text-gray-500">{{$order->PIDate->format('d,m,Y')}}</p>
                                   </div>
                               @else
                                   <div class="px-2 w-10 h-10 mx-auto bg-red-500 rounded-full text-sm font-bold text-white flex items-center justify-center">PI</div>
                                   <div class="mt-2">
{{--                                       <h3 class="font-semibold text-gray-800">Proforma Invoice</h3>--}}
                                       <p class="text-sm text-gray-600">PI Pending for </p>
                                       <p class="text-xs text-gray-500">May 18, 2025</p>
                                   </div>
                               @endif
                           </div>
                       </div>
                       @if(isset($order->PIDate))
                           <!-- Connector -->
                           <div class="flex-1 hidden md:block h-1 bg-green-500 self-start mt-5"></div>
                       @else
                           <div class="flex-1 hidden md:block h-1 bg-red-500 self-start mt-5"></div>
                       @endif
                       <!-- Step 3 Advance Paid -->
                       <div class="flex-1 text-center">
                           <div class="relative">
                               @if(isset($order->APDate))
                                   <div class="px-2 w-10 h-10 mx-auto bg-green-500 rounded-full text-sm font-bold text-white flex items-center justify-center">AP</div>
                                   <div class="mt-2">
                                       <p class="text-sm text-gray-600">Value: {{$order->APValue}}</p>
                                       <p class="text-xs text-gray-500">{{$order->APDate->format('d,m,Y')}}</p>
                                   </div>
                               @else
                                   <div class="px-2 w-10 h-10 mx-auto bg-red-500 rounded-full text-sm font-bold text-white flex items-center justify-center">AP</div>
                                   <div class="mt-2">
{{--                                       <h3 class="font-semibold text-gray-800">Advance Payment</h3>--}}
                                       <p class="text-sm text-gray-600">Pending For</p>
                                       <p class="text-xs text-gray-500"><span class="text-red-600 font-bold">
                                           @isset($order->PIDate)
                                               {{round($order->PIDate->diffInDays(now()))}}
                                           @endisset
                                               Days</span>
                                       </p>
                                   </div>
                               @endif
                           </div>
                       </div>
                       <!-- Connector -->
                       @if(isset($order->APDate))
                           <!-- Connector -->
                           <div class="flex-1 hidden md:block h-1 bg-green-500 self-start mt-5"></div>
                       @else
                           <div class="flex-1 hidden md:block h-1 bg-red-500 self-start mt-5"></div>
                       @endif
                       <!-- Step 4 Commercial Invoice -->
                       <div class="flex-1 text-center">
                           <div class="relative">
                               @if(isset($order->CIDate))
                                   <div class="px-2 w-10 h-10 mx-auto bg-green-500 rounded-full text-sm font-bold text-white flex items-center justify-center">CI</div>
                                   <div class="mt-2">
                                       <p class="text-sm text-gray-600">Value: {{$order->CIValue}}</p>
                                       <p class="text-xs text-gray-500">{{$order->APDate->format('d,m,Y')}}</p>
                                   </div>
                               @else
                                   <div class="px-2 w-10 h-10 mx-auto bg-red-500 rounded-full text-sm font-bold text-white flex items-center justify-center">CI</div>
                                   <div class="mt-2">
                                       @isset($order->APDate)
                                           <p class="text-sm text-gray-600">Pending For</p>
                                           <p class="text-xs text-red-500">{{round($order->APDate->diffInDays(now()))}} Days</p>
                                       @endisset
                                   </div>
                               @endif
                           </div>
                       </div>
                       <!-- Connector -->
                       @if(isset($order->CIDate))
                           <!-- Connector -->
                           <div class="flex-1 hidden md:block h-1 bg-green-500 self-start mt-5"></div>
                       @else
                           <div class="flex-1 hidden md:block h-1 bg-red-500 self-start mt-5"></div>
                       @endif
                       <!-- Step 5 BP -->
                       <div class="flex-1 text-center">
                           <div class="relative">
                               @if(isset($order->BPDate))
                                   <div class="px-2 w-10 h-10 mx-auto bg-green-500 rounded-full text-sm font-bold text-white flex items-center justify-center">BP</div>
                                   <div class="mt-2">
                               {{--    <h3 class="font-semibold text-gray-800"></h3>--}}
                                       <p class="text-sm text-gray-600">Value: {{$order->BPDate}}</p>
                                   </div>
                               @else
                                   <div class="px-2 w-10 h-10 mx-auto bg-red-500 rounded-full text-sm font-bold text-white flex items-center justify-center">BP</div>
                                   <div class="mt-2">
                                       {{--                                       <h3 class="font-semibold text-gray-800">Advance Payment</h3>--}}

                                       <div class="text-xs text-gray-500">
                                           @isset($order->CIDate)
                                                   <p class="text-sm text-gray-600">Pending</p>
                                                   <p class="text-xs text-red-600">{{round($order->CIDate->diffInDays(now()))}} Days</p>
                                           @endisset
                                       </div>
                                   </div>
                               @endif
                           </div>
                       </div>
                       <!-- Connector -->
                       @if(isset($order->CIDate))
                           <!-- Connector -->
                           <div class="flex-1 hidden md:block h-1 bg-red-500 self-start mt-5"></div>
                       @else
                           <div class="flex-1 hidden md:block h-1 bg-red-500 self-start mt-5"></div>
                       @endif
                       <!-- Step 6 ETA -->
                       <div class="flex-1 text-center">
                           <div class="relative">
                               @if(isset($order->ETA))
                                   <div class="px-2 w-10 h-10 mx-auto bg-green-500 rounded-full text-sm font-bold text-white flex items-center justify-center">ETA</div>
                                   <div class="mt-2">
                                       {{--    <h3 class="font-semibold text-gray-800"></h3>--}}
                                       <p class="text-sm text-gray-600">{{$order->ETA->format('d,m,Y')}}</p>
                                   </div>
                               @else
                                   <div class="px-2 w-10 h-10 mx-auto bg-red-500 rounded-full text-sm font-bold text-white flex items-center justify-center">ETA</div>
                                   <div class="mt-2">
                                       <div class="text-xs text-gray-500">
                                           @isset($order->BPDate)
                                                   <p class="text-sm text-gray-600">Pending For</p>
                                                   <p>{{round($order->BPDate->diffInDays(now()))}} Days</p>
                                           @endisset
                                       </div>
                                   </div>
                               @endif
                           </div>
                       </div>
                   </div>
               </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
