@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white shadow rounded-lg p-6">
            <div class="grid lg:grid-cols-2 gap-6">
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="fname" class="bg-white text-gray-600 px-1">Facility Name *</label>
                        </p>
                    </div>
                    <p>
                        <input id="fname" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="ftype" class="bg-white text-gray-600 px-1">Facility Type *</label>
                        </p>
                    </div>
                    <p>
                        <input id="ftype" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="fcap" class="bg-white text-gray-600 px-1">capacity *</label>
                        </p>
                    </div>
                    <p>
                        <input id="fcap" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="website" class="bg-white text-gray-600 px-1">Website *</label>
                        </p>
                    </div>
                    <p>
                        <input id="website" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="phone" class="bg-white text-gray-600 px-1">Phone *</label>
                        </p>
                    </div>
                    <p>
                        <input id="phone" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="address" class="bg-white text-gray-600 px-1">Address *</label>
                        </p>
                    </div>
                    <p>
                        <input id="address" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="province" class="bg-white text-gray-600 px-1">Province *</label>
                        </p>
                    </div>
                    <p>
                        <input id="province" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="city" class="bg-white text-gray-600 px-1">City *</label>
                        </p>
                    </div>
                    <p>
                        <input id="city" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="postal" class="bg-white text-gray-600 px-1">Postal Code *</label>
                        </p>
                    </div>
                    <p>
                        <input id="postal" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="manager" class="bg-white text-gray-600 px-1">Manager *</label>
                        </p>
                    </div>
                    <p>
                        <input id="manager" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div
                    class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="ira" class="bg-white text-gray-600 px-1">isRequiredAppointment *</label>
                        </p>
                    </div>
                    <p>
                        <input id="ira" autocomplete="false" tabindex="0" type="text"
                            class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>

            </div>
            <div class="border-t mt-6 pt-3">
                <button
                    class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                    Save
                </button>
            </div>



            @if ($facilities)
                @foreach ($facilities as $facility)
                    <x-table :facility="$facility" />

                @endforeach

                {{-- {{ $facilities->links() }} --}}
            @else
                <p>There are no facilities</p>
            @endif

        </div>
    </div>
@endsection
