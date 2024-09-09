@extends('backend.layouts.app')

@section('content')
<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
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
                                        <a href="{{ route('editTrainingProgram', $program->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('deleteTrainingProgram', $program->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
