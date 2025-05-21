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

                            <div>
                                <x-input-label for="PINo" value="PI Number" />
                                <x-text-input id="PINo" name="PINo" type="text" class="mt-1 block w-full"
                                              :value="old('PINo', $order->PINo)" />
                                <x-input-error :messages="$errors->get('PINo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="PIDate" value="PI Date" />
                                @if(isset($order->PIDate))
                                    <x-text-input id="PIDate" name="PIDate" type="date" class="mt-1 block w-full"
                                                  :value="old('PIDate', $order->PIDate->format('Y-m-d'))" />
                                    <x-input-error :messages="$errors->get('PIDate')" class="mt-2" />
                                @else
                                    <x-text-input id="PIDate" name="PIDate" type="date" class="mt-1 block w-full"
                                                  :value="old('PIDate')" />
                                    <x-input-error :messages="$errors->get('PIDate')" class="mt-2" />
                                @endif
                            </div>
                            <div>
                                <x-input-label for="APValue" value="AP Value" />
                                <x-text-input id="APValue" name="APValue" type="text" class="mt-1 block w-full"
                                              :value="old('APValue', $order->APValue)" />
                                <x-input-error :messages="$errors->get('APValue')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="APDate" value="AP Date" />
                                @if(isset($order->APDate))
                                <x-text-input id="APDate" name="APDate" type="date" class="mt-1 block w-full"
                                              :value="old('APDate', $order->APDate->format('Y-m-d'))" />
                                <x-input-error :messages="$errors->get('APDate')" class="mt-2" />
                                @else
                                    <x-text-input id="APDate" name="APDate" type="date" class="mt-1 block w-full"
                                                  :value="old('APDate')" />
                                    <x-input-error :messages="$errors->get('APDate')" class="mt-2" />
                                @endif
                            </div>

                            <div>
                                <x-input-label for="CINo" value="CI Number" />
                                <x-text-input id="CINo" name="CINo" type="text" class="mt-1 block w-full"
                                              :value="old('CINo', $order->CINo)" />
                                <x-input-error :messages="$errors->get('CINo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="CIValue" value="CI Value" />
                                <x-text-input id="CIValue" name="CIValue" type="text" class="mt-1 block w-full"
                                              :value="old('CIValue', $order->CIValue)" />
                                <x-input-error :messages="$errors->get('CIValue')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="CIDate" value="CI Date" />
                                @if(isset($order->CIDate))
                                    <x-text-input id="CIDate" name="CIDate" type="date" class="mt-1 block w-full"
                                                  :value="old('CIDate', $order->CIDate->format('Y-m-d'))" />
                                    <x-input-error :messages="$errors->get('CIDate')" class="mt-2" />
                                @else
                                    <x-text-input id="CIDate" name="CIDate" type="date" class="mt-1 block w-full"
                                                  :value="old('CIDate')" />
                                    <x-input-error :messages="$errors->get('CIDate')" class="mt-2" />
                                @endif
                            </div>

                            <div>
                                <x-input-label for="BLNo" value="BL number" />
                                <x-text-input id="BLNo" name="BLNo" type="text" class="mt-1 block w-full"
                                              :value="old('BLNo', $order->BLNo)" />
                                <x-input-error :messages="$errors->get('BLNo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="BLDate" value="BL Date" />
                                @if(isset($order->BLDate))
                                    <x-text-input id="BLDate" name="BLDate" type="date" class="mt-1 block w-full"
                                                  :value="old('BLDate', $order->BLDate->format('Y-m-d'))" />
                                    <x-input-error :messages="$errors->get('BLDate')" class="mt-2" />
                                @else
                                    <x-text-input id="BLDate" name="BLDate" type="date" class="mt-1 block w-full"
                                                  :value="old('BLDate')" />
                                    <x-input-error :messages="$errors->get('BLDate')" class="mt-2" />
                                @endif
                            </div>

                            <div>
                                <x-input-label for="BPValue" value="Balance Value" />
                                <x-text-input id="BPValue" name="BPValue" type="text" class="mt-1 block w-full"
                                              :value="old('BPValue', $order->BPValue)" />
                                <x-input-error :messages="$errors->get('BPValue')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="BPDate" value="BP Date" />
                                @if(isset($order->BPDate))
                                    <x-text-input id="BPDate" name="BPDate" type="date" class="mt-1 block w-full"
                                                  :value="old('BPDate', $order->BPDate->format('Y-m-d'))" />
                                    <x-input-error :messages="$errors->get('BPDate')" class="mt-2" />
                                @else
                                    <x-text-input id="BPDate" name="BPDate" type="date" class="mt-1 block w-full"
                                                  :value="old('BPDate')" />
                                    <x-input-error :messages="$errors->get('BPDate')" class="mt-2" />
                                @endif
                            </div>

                            <div>
                                <x-input-label for="ETA" value="ETA Date" />
                                @if(isset($order->ETA))
                                    <x-text-input id="ETA" name="ETA" type="date" class="mt-1 block w-full"
                                                  :value="old('ETA', $order->ETA->format('Y-m-d'))" />
                                    <x-input-error :messages="$errors->get('ETA')" class="mt-2" />
                                @else
                                    <x-text-input id="ETA" name="ETA" type="date" class="mt-1 block w-full"
                                                  :value="old('ETA')" />
                                    <x-input-error :messages="$errors->get('ETA')" class="mt-2" />
                                @endif
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
