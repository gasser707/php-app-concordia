@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{ route('person.edit', $person->id) }}" method="post">
            @csrf
            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">id</p>
                <label for="id" class="sr-only">id</label>
                <input disabled type="text" name="id" id="id" placeholder="id" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ $person->id }}">
            </div>

            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">firstName</p>
                <label for="firstName" class="sr-only">firstName</label>
                <input type="text" name="firstName" id="firstName" placeholder="firstName" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ $person->firstName }}">
            </div>

            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">lastName</p>

                <label for="lastName" class="sr-only">lastName</label>
                <input type="text" name="lastName" id="lastName" placeholder="lastName" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('lastName') border-red-500 @enderror" value="{{ $person->lastName }}">

            </div>

            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">email</p>
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ $person->email}}">

            </div>

            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">age</p>
                <label for="age" class="sr-only">age</label>
                <input type="age" name="age" id="age" placeholder="Choose a age" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('age') border-red-500 @enderror" value="{{$person->age}}">

            </div>


            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">citizenship</p>

                <label for="citizenship" class="sr-only">citizenship</label>
                <input type="citizenship" name="citizenship" id="citizenship" placeholder="Choose a citizenship" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('citizenship') border-red-500 @enderror" value="{{$person->citizenship}}">

            </div>

            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">dateOfBirth</p>

                <label for="dateOfBirth" class="sr-only">dateOfBirth</label>
                <input type="dateOfBirth" name="dateOfBirth" id="dateOfBirth" placeholder="Choose a dateOfBirth" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('dateOfBirth') border-red-500 @enderror" value="{{$person->dateOfBirth}}">

            </div>

            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">phoneNumber</p>

                <label for="phoneNumber" class="sr-only">phoneNumber</label>
                <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Choose a phoneNumber" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('phoneNumber') border-red-500 @enderror" value="{{$person->phoneNumber}}">

            </div>
            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">address</p>

                <label for="address" class="sr-only">address</label>
                <input type="address" name="address" id="address" placeholder="Choose a address" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('address') border-red-500 @enderror" value="{{$person->address}}">

            </div>

            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">city</p>

                <label for="city" class="sr-only">city</label>
                <input type="city" name="city" id="city" placeholder="Choose a city" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('city') border-red-500 @enderror" value="{{$person->city}}">

            </div>
            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">postalCode</p>

                <label for="postalCode" class="sr-only">postalCode</label>
                <input type="postalCode" name="postalCode" id="postalCode" placeholder="Choose a postalCode" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('postalCode') border-red-500 @enderror" value="{{$person->postalCode}}">

            </div>
            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">province</p>

                <label for="province" class="sr-only">province</label>
                <input type="province" name="province" id="province" placeholder="Choose a province" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('province') border-red-500 @enderror" value="{{$person->province}}">

            </div>


            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">isRegistered</p>

                <label for="isRegistered" class="sr-only">isRegistered</label>
                <input type="isRegistered" name="isRegistered" id="isRegistered" placeholder="Choose a isRegistered" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('isRegistered') border-red-500 @enderror" value="{{$person->isRegistered}}">

            </div>
            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500"> medCardPassportNum </p>
                <label for="medCardPassportNum" class="sr-only"> medCardPassportNum </label>
                <input type="idDocumentCreated" name="medCardPassportNum" id="idDocumentCreated" placeholder="medCardPassportNum" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('idDocumentCreated') border-red-500 @enderror" value="{{$person->medCardPassportNum}}">
            </div>
            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">idDocumentCreated</p>

                <label for="idDocumentCreated" class="sr-only">idDocumentCreated</label>
                <input type="idDocumentCreated" name="idDocumentCreated" id="idDocumentCreated" placeholder="Choose a idDocumentCreated" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('idDocumentCreated') border-red-500 @enderror" value="{{$person->idDocumentCreated}}">

            </div>

            <div class="mb-4">
                <p class="px-6 py-2 text-xs text-gray-500">idDocumentExpired</p>

                <label for="idDocumentExpired" class="sr-only">idDocumentExpired</label>
                <input type="idDocumentExpired" name="idDocumentExpired" id="idDocumentExpired" placeholder="Choose a idDocumentExpired" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('idDocumentExpired') border-red-500 @enderror" value="{{$person->idDocumentExpired}}">

            </div>


            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection