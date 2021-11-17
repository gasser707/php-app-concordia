@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('facility.edit', $facility->id) }}" method="post">
                @csrf
                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">facilityName</p>
                    <label for="facilityName" class="sr-only">facilityName</label>
                    <input type="text" name="facilityName" id="facilityName" placeholder="facility name"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="">
                </div>

                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">facility type</p>

                    <label for="facilityType" class="sr-only">facility type</label>
                    <input type="text" name="facilityType" id="facilityType" placeholder="facilityType"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('facilityType') border-red-500 @enderror"
                        value="">

                </div>

                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">capacity</p>
                    <label for="capacity" class="sr-only">capacity</label>
                    <input type="text" name="capacity" id="capacity" placeholder="enter capacity"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                        value="">

                </div>

                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">web address</p>
                    <label for="webAddress" class="sr-only">web address</label>
                    <input type="text" name="webAddress" id="webAddress" placeholder="enter website"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('age') border-red-500 @enderror" value="">

                </div>


                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">phone number</p>

                    <label for="phoneNumber" class="sr-only">phone number</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="enter phone number"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('phoneNumber') border-red-500 @enderror"
                        value="">

                </div>

                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">facility address</p>

                    <label for="facilityAddress" class="sr-only">facility address</label>
                    <input type="text" name="facilityAddress" id="facilityAddress" placeholder="enter facility address"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('dateOfBirth') border-red-500 @enderror"
                        value="">

                </div>

                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">city</p>

                    <label for="city" class="sr-only">city</label>
                    <input type="text" name="city" id="city" placeholder="Choose a city"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('phoneNumber') border-red-500 @enderror"
                        value="">

                </div>
                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">province</p>

                    <label for="province" class="sr-only">province</label>
                    <input type="text" name="province" id="province" placeholder="Choose a province"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('address') border-red-500 @enderror"
                        value="">

                </div>

                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">postalCode</p>

                    <label for="postalCode" class="sr-only">postalCode</label>
                    <input type="text" name="postalCode" id="postalCode" placeholder="Choose a postalCode"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('city') border-red-500 @enderror" value="">

                </div>
                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">manager</p>

                    <label for="manager" class="sr-only">manager</label>
                    <input type="text" name="manager" id="manager" placeholder="enter manager name"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('postalCode') border-red-500 @enderror"
                        value="">

                </div>
                <div class="mb-4">
                    <p class="px-6 py-2 text-xs text-gray-500">isRequiredAppointment</p>

                    <label for="isRequiredAppointment" class="sr-only">isRequiredAppointment</label>
                    <input type="text" name="isRequiredAppointment" id="isRequiredAppointment" placeholder="Enter 0 or 1"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('province') border-red-500 @enderror"
                        value="">
                </div>


                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
