@extends('backend.layouts.app')

@section('content')
<div class="relative flex flex-col flex-auto h-full px-4 py-4 page-container sm:px-6 md:px-8 sm:py-6">
    <div class="container mx-auto">
        <div class="card adaptable-card">
            <div class="card-body">
                <div class="flex items-center justify-between mb-4">
                    <h3>Training Programs</h3>
                    <a href="{{ route('createTrainingProgram') }}" class="btn btn-solid">Create New Program</a>
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
                            @foreach ($trainingPrograms as $program)
                                <tr>
                                    <td>{{ $program->name }}</td>
                                    <td>{{ $program->source_of_competency }}</td>
                                    <td>{{ $program->module_duration }}</td>
                                    <td>{{ $program->number_of_trainees }}</td>
                                    <td>{{ $program->training_duration }}</td>
                                    <td>{{ $program->entry_requirements }}</td>
                                    <td>
                                        <a href="{{ route('editTrainingProgram', $program->id) }}" class="border-0 rounded text-amber-600 bg-amber-100 tag dark:bg-amber-500/20 dark:text-amber-100">
                                            Edit
                                        </a>
                                        <form action="{{ route('deleteTrainingProgram', $program->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 bg-red-100 border-0 rounded tag dark:text-red-100 dark:bg-red-500/20">Delete</button>
                                        </form>
                                        <span class="text-blue-600 bg-blue-100 border-0 rounded tag dark:bg-blue-500/20 dark:text-blue-100">
                                            Send Application
                                        </sp>
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
