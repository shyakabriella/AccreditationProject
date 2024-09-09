@extends('backend.layouts.app')

@section('content')
<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
    <div class="container mx-auto">
        <div class="flex items-center justify-between mb-4">
            <h3>Create Training Program</h3>
        </div>
        <div class="card adaptable-card">
            <div class="card-body">
                <form action="{{ route('storeTrainingProgram') }}" method="POST">
                    @csrf
                    <div class="form-container vertical">
                        <div>
                            <h5>Training Program Information</h5>
                            <p>Fill out the details below to create a new training program.</p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4 py-4 items-center">
                            <div class="font-semibold">Training Program Name</div>
                            <div class="col-span-2">
                                <div class="flex">
                                    <input class="input pl-8" type="text" name="name" autocomplete="off" placeholder="Program Name" value="{{ old('name') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4 py-4 items-center">
                            <div class="font-semibold">Source of Competency</div>
                            <div class="col-span-2">
                                <div class="flex">
                                    <input class="input pl-8" type="text" name="source_of_competency" autocomplete="off" placeholder="Source of Competency" value="{{ old('source_of_competency') }}">
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4 py-4 items-center">
                            <div class="font-semibold">Module Duration (hours)</div>
                            <div class="col-span-2">
                                <div class="flex">
                                    <input class="input pl-8" type="number" name="module_duration" autocomplete="off" placeholder="Module Duration (hours)" value="{{ old('module_duration') }}">
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4 py-4 items-center">
                            <div class="font-semibold">Number of Trainees</div>
                            <div class="col-span-2">
                                <div class="flex">
                                    <input class="input pl-8" type="number" name="number_of_trainees" autocomplete="off" placeholder="Number of Trainees" value="{{ old('number_of_trainees') }}">
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4 py-4 items-center">
                            <div class="font-semibold">Training Duration</div>
                            <div class="col-span-2">
                                <div class="flex">
                                    <input class="input pl-8" type="number" name="training_duration" autocomplete="off" placeholder="Training Duration (hours)" value="{{ old('training_duration') }}">
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4 py-4 items-center">
                            <div class="font-semibold">Training Entry Requirements</div>
                            <div class="col-span-2">
                                <div class="flex">
                                    <input class="input pl-8" type="text" name="entry_requirements" autocomplete="off" placeholder="Entry Requirements" value="{{ old('entry_requirements') }}">
                                </div>
                            </div>
                        </div>

                        <div class="flex mt-4 ltr:justify-end gap-2">
                            <button class="btn btn-default" type="reset">Reset</button>
                            <button class="btn btn-solid" type="submit">Create Program</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
