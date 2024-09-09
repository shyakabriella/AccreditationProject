@extends('frontend.layouts.app')
@section('content')
    <section class="relative lg:mt-24 mt-[74px] pb-16">
        <div class="container mt-16">
            <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-12">
                    <div class="p-6 bg-white rounded-md shadow dark:shadow-gray-800 dark:bg-slate-900">
                        <h5 class="mb-4 text-lg font-semibold">Personal Detail :</h5>
                        <form action="{{ route('updateTraineeProfile') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 md:grid-cols-2">
                                <div class="lg:col-span-6">
                                    <label class="font-medium form-label">Name : <span class="text-red-600">*</span></label>
                                    <input type="text" class="mt-2 border form-input border-slate-100 dark:border-slate-800" value="{{ $user->name }}" name="name" required>
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="font-medium form-label">Email : <span class="text-red-600">*</span></label>
                                    <input type="email" class="mt-2 border form-input border-slate-100 dark:border-slate-800" value="{{ $user->email }}" name="email" required>
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="font-medium form-label">Date of Birth :</label>
                                    <input type="date" class="mt-2 border form-input border-slate-100 dark:border-slate-800" value="{{ $trainee->date_of_birth }}" name="date_of_birth">
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="font-medium form-label">Address :</label>
                                    <input type="text" class="mt-2 border form-input border-slate-100 dark:border-slate-800" value="{{ $trainee->address }}" name="address">
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="font-medium form-label">Phone :</label>
                                    <input type="text" class="mt-2 border form-input border-slate-100 dark:border-slate-800" value="{{ $trainee->phone }}" name="phone">
                                </div>

                                <div class="lg:col-span-6">
                                    <label class="font-medium form-label">Education Level :</label>
                                    <input type="text" class="mt-2 border form-input border-slate-100 dark:border-slate-800" value="{{ $trainee->education_level }}" name="education_level">
                                </div>
                            </div>

                            <button type="submit" class="mt-5 text-white rounded-md btn bg-emerald-600 hover:bg-emerald-700">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
