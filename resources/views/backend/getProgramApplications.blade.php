@extends('backend.layouts.app')

@section('content')
<div class="relative flex flex-col flex-auto h-full px-4 py-4 page-container sm:px-6 md:px-8 sm:py-6">
    <div class="container mx-auto">
        <div class="card adaptable-card">
            <div class="card-body">
                <div class="flex items-center justify-between mb-4">
                    <h3>Training Program Applications</h3>
                </div>
                <div class="overflow-x-auto">
                    <table id="training-program-requests-data-table" class="table-default table-hover data-table">
                        <thead>
                            <tr>
                                <th>Program Name</th>
                                <th>Source of Competency</th>
                                <th>Module Duration</th>
                                <th>Number of Trainees</th>
                                <th>Training Duration</th>
                                <th>Entry Requirements</th>
                                <th>Applicant Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{ $request->trainingProgram->name }}</td>
                                    <td>{{ $request->trainingProgram->source_of_competency }}</td>
                                    <td>{{ $request->trainingProgram->module_duration }}</td>
                                    <td>{{ $request->trainingProgram->number_of_trainees }}</td>
                                    <td>{{ $request->trainingProgram->training_duration }}</td>
                                    <td>{{ $request->trainingProgram->entry_requirements }}</td>
                                    <td>{{ $request->user->name }}</td>
                                    <td>{{ ucfirst($request->status) }}</td>
                                    <td>
                                        @if ($request->status == 'pending')
                                            <form action="{{ route('approveProgram', $request->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="text-green-600 bg-green-100 border-0 rounded tag dark:bg-green-500/20 dark:text-green-100">Approve</button>
                                            </form>

                                            <form action="{{ route('rejectProgram', $request->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="text-red-600 bg-red-100 border-0 rounded tag dark:bg-red-500/20 dark:text-red-100">Reject</button>
                                            </form>
                                        @else
                                            <span class="text-slate-500">{{ ucfirst($request->status) }}</span>
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
