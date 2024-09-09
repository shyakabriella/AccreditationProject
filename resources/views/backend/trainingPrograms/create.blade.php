@extends('backend.layouts.app')

@section('content')
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto">
            <div class="card adaptable-card">
                <div class="card-body">
                    <h3>Create Training Program</h3>
                    <form action="{{ route('storeTrainingProgram') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-4">
                            <div class="col-span-1">
                                <label class="font-medium form-label">Institution ID:</label>
                                <input type="text" class="form-input" name="institution_id" value="{{ old('institution_id') }}" required>
                            </div>
                            <div class="col-span-1">
                                <label class="font-medium form-label">Name:</label>
                                <input type="text" class="form-input" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="col-span-1">
                                <label class="font-medium form-label">Source of Competency:</label>
                                <input type="text" class="form-input" name="source_of_competency" value="{{ old('source_of_competency') }}">
                            </div>
                            <div class="col-span-1">
                                <label class="font-medium form-label">Module Duration:</label>
                                <input type="number" class="form-input" name="module_duration" value="{{ old('module_duration') }}">
                            </div>
                            <div class="col-span-1">
                                <label class="font-medium form-label">Number of Trainees:</label>
                                <input type="number" class="form-input" name="number_of_trainees" value="{{ old('number_of_trainees') }}">
                            </div>
                            <div class="col-span-1">
                                <label class="font-medium form-label">Training Duration:</label>
                                <input type="number" class="form-input" name="training_duration" value="{{ old('training_duration') }}">
                            </div>
                            <div class="col-span-1">
                                <label class="font-medium form-label">Entry Requirements:</label>
                                <input type="text" class="form-input" name="entry_requirements" value="{{ old('entry_requirements') }}">
                            </div>
                            <div class="col-span-1 mt-4">
                                <button type="submit" class="btn btn-primary">Create Program</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
