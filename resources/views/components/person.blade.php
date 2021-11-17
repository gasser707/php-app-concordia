@props(['person' => $person])

<tr class="whitespace-nowrap">
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->firstName}}
            <div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->lastName}}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->age}}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->citizenship}}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->dateOfBirth}}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->phoneNumber}}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->address}}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->city}}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->postalCode}}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->province}}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->email}}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->isRegistered}}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->medCardPassportNum}}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->idDocumentCreated}}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{$person->idDocumentExpired}}</div>
    </td>

    <td class="px-6 py-4">
        <a href="{{ route('person.edit', $person->id) }}" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
    </td>

    <td class="px-6 py-4">
        <form action="{{ route('person.delete', $person->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-1 text-sm text-white bg-red-400 rounded"> Delete </button>
        </form>
    </td>

</tr>