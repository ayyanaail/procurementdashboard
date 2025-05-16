<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="ring-1 ring-white/10 rounded-lg bg-gray-800/30 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-white mb-4">Edit Order</h2>

                    <form action="{{ route('orders.update', $order) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Vendor Name -->
                            <div>
                                <x-input-label for="VendorName" value="Vendor Name" />
                                <x-text-input id="VendorName" name="VendorName" type="text" class="mt-1 block w-full"
                                              :value="old('VendorName', $order->VendorName)" required />
                                <x-input-error :messages="$errors->get('VendorName')" class="mt-2" />
                            </div>

                            <!-- PQ Details -->
                            <div>
                                <x-input-label for="PQNo" value="PQ Number" />
                                <x-text-input id="PQNo" name="PQNo" type="text" class="mt-1 block w-full"
                                              :value="old('PQNo', $order->PQNo)" required />
                                <x-input-error :messages="$errors->get('PQNo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="PQDate" value="PQ Date" />
                                <x-text-input id="PQDate" name="PQDate" type="date" class="mt-1 block w-full"
                                              :value="old('PQDate', $order->PQDate->format('Y-m-d'))" required />
                                <x-input-error :messages="$errors->get('PQDate')" class="mt-2" />
                            </div>

                            <!-- Rest of the fields following the same pattern -->
                            <!-- ... -->

                            <div class="mt-6 flex items-center justify-end col-span-2">
                                <x-secondary-button onclick="window.history.back()" type="button" class="mr-3">
                                    Cancel
                                </x-secondary-button>
                                <x-primary-button>
                                    Update Order
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
