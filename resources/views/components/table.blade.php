@props(['facility' => $facility])
<div>
    <table class="table-fixed">
        <thead>
            <tr>
                <th class="w-1/12">Name</th>
                <th class="w-1/12">Type</th>
                <th class="w-2/12">Address</th>
                <th class="w-1/12">City</th>
                <th class="w-1/12">Province</th>
                <th class="w-1/12">PostalCode</th>
                <th class="w-1/12">Website</th>
                <th class="w-1/12">Phone</th>
                <th class="w-1/12">Capacity</th>
                <th class="w-1/12">Manager</th>
                <th class="w-1/12">isRequiredAppointment</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-blue-200">
                <td>{{ $facility->facilityName }}</td>
                <td>{{ $facility->facilityType }}</td>
                <td>{{ $facility->facilityAddress }}</td>
                <td>{{ $facility->city }}</td>
                <td>{{ $facility->province }}</td>
                <td>{{ $facility->postalCode }}</td>
                <td>{{ $facility->webAddress }}</td>
                <td>{{ $facility->phoneNumber }}</td>
                <td>{{ $facility->capacity }}</td>
                <td>{{ $facility->manager }}</td>
                <td>{{ $facility->isRequiredAppointment }}</td>
            </tr>
        </tbody>
    </table>
    <br />
    <br />
</div>
