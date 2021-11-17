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
                                    Facility Name</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Facility Type</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Capacity</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Website</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Phone Number</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Facility Address</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    City</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Province</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Postal Code</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Manager</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    isRequiredAppointment</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit</th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @if ($facility)
                                @foreach ($facility as $f)
                                    <x-facility :facility="$f" />
                                @endforeach
                            @endif



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
