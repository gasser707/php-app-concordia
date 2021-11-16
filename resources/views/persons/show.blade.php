@extends('layouts.app')

@section('content')
<div class="container flex mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            First Name</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Last Name</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            age</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            citizenship</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            date of birth</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            phone number</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            address</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            city</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            postal code</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            province</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            email</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            is registerd</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            med or passport num</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            id created</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            id expired</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Edit</th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Delete</th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                @foreach ($person as $p)
                    <x-person :person="$p" />
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection




