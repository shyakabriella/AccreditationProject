@extends('backend.layouts.app')

@section('content')
<div class="relative flex flex-col flex-auto h-full px-4 py-4 page-container sm:px-6 md:px-8 sm:py-6">
    <div class="container mx-auto">
        <div class="card adaptable-card">
            <div class="card-body">
                <div class="flex items-center justify-between mb-4">
                    <h3>Program Applications</h3>
                </div>
                <div class="overflow-x-auto">
                    <table id="training-program-list-data-table" class="table-default table-hover data-table">
                        <thead>
                            <tr>
                                <th>Program</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Education Level</th>
                                <th>Update Status</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $application)
                                <tr>
                                    <td>{{ $application->trainingProgram->name }}</td>
                                    <td>{{ $application->trainee->user->name }}</td>
                                    <td>{{ $application->trainee->date_of_birth }}</td>
                                    <td>{{ $application->trainee->phone }}</td>
                                    <td>{{ $application->trainee->address }}</td>
                                    <td>{{ $application->trainee->education_level }}</td>
                                    <td>
                                        <button class="w-60 btn btn-solid" type="submit">
                                            Update Status
                                        </button>
                                    </td>
                                    <td>
                                        @if ($application->status == 'Pending')
                                        <span class="w-full text-white rounded-md bg-red border-red btn hover:bg-red hover:border-red md:ms-2 md:w-auto" style="background: orange;">Pending</span>
                                        @elseif ($application->status == 'Rejected')
                                            <span class="w-full text-white bg-red-500 border-red-500 rounded-md btn hover:bg-red-600 hover:border-red-600 md:ms-2 md:w-auto" style="background: red;">Rejected</span>
                                        @elseif ($application->status == 'Approved')
                                            <span class="w-full text-white bg-green-500 border-green-500 rounded-md btn hover:bg-green-600 hover:border-green-600 md:ms-2 md:w-auto" style="background: green;">Approved</span>
                                        @else
                                            <span class="w-full text-white bg-gray-500 border-gray-500 rounded-md btn hover:bg-gray-600 hover:border-gray-600 md:ms-2 md:w-auto" style="background: gray;">Unknown</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
