@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white shadow rounded-lg p-6">



            <form action="{{ route('vaxfacility') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4">
                    {{-- <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                        placeholder="Post something!"></textarea> --}}

                    {{-- @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror --}}
                </div>
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

                </div>
                <div class="border-t mt-6 pt-3">
                    <button
                        class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                        Get Facility/ies
                    </button>
                </div>

                {{-- <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                </div> --}}
            </form>





            @if ($facilities->count())
                @foreach ($facilities as $facility)
                    {{-- <x-post :post="$post" /> --}}
                    {{ $facility }}
                @endforeach

                {{-- {{ $facilities->links() }} --}}
            @else
                <p>There are no facilities</p>
            @endif

        </div>
    </div>
@endsection
