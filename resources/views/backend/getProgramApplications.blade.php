@extends('backend.layouts.app')

@section('content')
<div class="relative flex flex-col flex-auto h-full px-4 py-4 page-container sm:px-6 md:px-8 sm:py-6">
    <div class="container mx-auto">
        <div class="card adaptable-card">
            <div class="card-body">
                <div class="flex items-center justify-between mb-4">
                    <h3>Training Programs</h3>
                </div>
                <div class="overflow-x-auto">
                    <table id="training-program-list-data-table" class="table-default table-hover data-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Source of Competency</th>
                                <th>Module Duration</th>
                                <th>Number of Trainees</th>
                                <th>Training Duration</th>
                                <th>Entry Requirements</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $program)
                                <tr>
                                    <td>{{ $program->name }}</td>
                                    <td>{{ $program->source_of_competency }}</td>
                                    <td>{{ $program->module_duration }}</td>
                                    <td>{{ $program->number_of_trainees }}</td>
                                    <td>{{ $program->training_duration }}</td>
                                    <td>{{ $program->entry_requirements }}</td>
                                    <td class="flex px-3">
                                        <form action="{{ route('approveProgram', $program->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <textarea name="admin_comments" placeholder="Approval Comments"></textarea>
                                            <button type="submit" class="text-green-600 bg-green-100 border-0 rounded tag">Approve</button>
                                        </form>
                                        <form action="{{ route('rejectProgram', $program->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <textarea name="admin_comments" placeholder="Rejection Comments"></textarea>
                                            <button type="submit" class="text-red-600 bg-red-100 border-0 rounded tag">Reject</button>
                                        </form>
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
