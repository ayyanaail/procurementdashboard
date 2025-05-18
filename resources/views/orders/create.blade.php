<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow shadow-md rounded-lg bg-gradient-to-r from-rose-600 to-red-500 overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-white mb-4">Create New Order</h2>

                    <form action="{{ route('orders.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Vendor Name -->
                            <div>
                                <x-input-label for="VendorName" value="Vendor Name" />
                                <x-text-input id="VendorName" name="VendorName" type="text" class="mt-1 block w-full"
                                              :value="old('VendorName')" required />
                                <x-input-error :messages="$errors->get('VendorName')" class="mt-2" />
                            </div>

                            <!-- PQ Details -->
                            <div>
                                <x-input-label for="PQNo" value="PQ Number" />
                                <x-text-input id="PQNo" name="PQNo" type="text" class="mt-1 block w-full"
                                              :value="old('PQNo')" required />
                                <x-input-error :messages="$errors->get('PQNo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="PQDate" value="PQ Date" />
                                <x-text-input id="PQDate" name="PQDate" type="date" class="mt-1 block w-full"
                                              :value="old('PQDate')" required />
                                <x-input-error :messages="$errors->get('PQDate')" class="mt-2" />
                            </div>

                            <!-- PI Details -->
                            <div>
                                <x-input-label for="PINo" value="PI Number" />
                                <x-text-input id="PINo" name="PINo" type="text" class="mt-1 block w-full"
                                              :value="old('PINo')" />
                                <x-input-error :messages="$errors->get('PINo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="PIDate" value="PI Date" />
                                <x-text-input id="PIDate" name="PIDate" type="date" class="mt-1 block w-full"
                                              :value="old('PIDate')" />
                                <x-input-error :messages="$errors->get('PIDate')" class="mt-2" />
                            </div>

                            <!-- AP Details -->
                            <div>
                                <x-input-label for="APValue" value="AP Value" />
                                <x-text-input id="APValue" name="APValue" type="number" step="0.01" class="mt-1 block w-full"
                                              :value="old('APValue')" />
                                <x-input-error :messages="$errors->get('APValue')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="APDate" value="AP Date" />
                                <x-text-input id="APDate" name="APDate" type="date" class="mt-1 block w-full"
                                              :value="old('APDate')" />
                                <x-input-error :messages="$errors->get('APDate')" class="mt-2" />
                            </div>

                            <!-- CI Details -->
                            <div>
                                <x-input-label for="CINo" value="CI Number" />
                                <x-text-input id="CINo" name="CINo" type="text" class="mt-1 block w-full"
                                              :value="old('CINo')" />
                                <x-input-error :messages="$errors->get('CINo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="CIValue" value="CI Value" />
                                <x-text-input id="CIValue" name="CIValue" type="number" step="0.01" class="mt-1 block w-full"
                                              :value="old('CIValue')" />
                                <x-input-error :messages="$errors->get('CIValue')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="CIDate" value="CI Date" />
                                <x-text-input id="CIDate" name="CIDate" type="date" class="mt-1 block w-full"
                                              :value="old('CIDate')" />
                                <x-input-error :messages="$errors->get('CIDate')" class="mt-2" />
                            </div>

                            <!-- BL Details -->
                            <div>
                                <x-input-label for="BLNo" value="BL Number" />
                                <x-text-input id="BLNo" name="BLNo" type="text" class="mt-1 block w-full"
                                              :value="old('BLNo')" />
                                <x-input-error :messages="$errors->get('BLNo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="BLDate" value="BL Date" />
                                <x-text-input id="BLDate" name="BLDate" type="date" class="mt-1 block w-full"
                                              :value="old('BLDate')" />
                                <x-input-error :messages="$errors->get('BLDate')" class="mt-2" />
                            </div>

                            <!-- Additional Details -->
                            <div>
                                <x-input-label for="ETA" value="ETA" />
                                <x-text-input id="ETA" name="ETA" type="date" class="mt-1 block w-full"
                                              :value="old('ETA')" />
                                <x-input-error :messages="$errors->get('ETA')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="BPValue" value="BP Value" />
                                <x-text-input id="BPValue" name="BPValue" type="number" step="0.01" class="mt-1 block w-full"
                                              :value="old('BPValue')" />
                                <x-input-error :messages="$errors->get('BPValue')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="BPDate" value="BP Date" />
                                <x-text-input id="BPDate" name="BPDate" type="date" class="mt-1 block w-full"
                                              :value="old('BPDate')" />
                                <x-input-error :messages="$errors->get('BPDate')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end">
                            <x-secondary-button onclick="window.history.back()" type="button" class="mr-3">
                                Cancel
                            </x-secondary-button>
                            <x-primary-button>
                                Create Order
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
