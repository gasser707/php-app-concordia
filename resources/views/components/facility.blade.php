@props(['facility' => $facility])

<tr class="whitespace-nowrap">
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->facilityName }}
            <div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->facilityType }}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->capacity }}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->webAddress }}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->phoneNumber }}</div>
    </td>

    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->facilityAddress }}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->city }}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->province }}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->postalCode }}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->manager }}</div>
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        <div class="text-sm leading-5 text-gray-500">{{ $facility->isRequiredAppointment }}</div>
    </td>

    <td class="px-6 py-4">
        <a href="{{ route('facility.edit', $facility->id) }}"
            class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
    </td>

    <td class="px-6 py-4">
        <form action="{{ route('facility.delete', $facility->id) }}" method="post">
            @csrf
            <button type="submit">
                <a href="" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</a>
            </button>
        </form>
    </td>

</tr>
