@extends('frontend.layouts.app')
@section('content')
    <section class="relative lg:mt-24 mt-[74px]">
        <div class="lg:container container-fluid">
            <div class="relative shrink-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/KCC_Wallpaper_by_Mudahunga.jpg" class="object-cover w-full h-64 shadow lg:rounded-xl dark:shadow-gray-700" alt="">
            </div>

            <div class="mx-4 -mt-12 md:flex">
                <div class="md:w-full">
                    <div class="relative flex items-end justify-between">
                        <div class="relative flex items-end">
                            <img src="https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg" class="rounded-full shadow size-28 dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800" alt="">
                            <div class="ms-4">
                                <h5 class="text-lg font-semibold">{{ $user->name }}</h5>
                                <p class="text-slate-400">Trainner</p>
                            </div>
                        </div>

                        <div class="">
                            <a href="{{ route('editTraineeProfile') }}" class="rounded-full btn btn-icon bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white">
                                <i data-feather="settings" class="size-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative pb-16 mt-12 md:pb-24">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-7">
                    <h4 class="mt-6 text-xl font-semibold">Applications :</h4>

                    @foreach ($applications as $application)
                        <div class="flex mt-6">
                            <div class="ms-4">
                                <h5 class="mb-0 text-lg font-medium">{{ optional($application->trainingProgram)->name ?? 'Unknown' }}</h5>
                                <span class="text-slate-400 company-university">{{ optional($application->institution)->name ?? 'Unknown' }}</span>
                                <p class="mt-2 mb-0 text-slate-400">Application Date: {{ $application->application_date ?? 'Unknown' }}</p>
                                <p class="mt-2 mb-0 text-slate-400">Status: {{ $application->status ?? 'Unknown' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="lg:col-span-4 md:col-span-5">
                    <div class="sticky p-6 rounded-md shadow bg-slate-50 dark:bg-slate-800 dark:shadow-gray-700 top-20">
                        <h5 class="text-lg font-semibold">Personal Detail:</h5>
                        <ul class="mt-4 list-none">
                            <li class="flex items-center justify-between mt-3 font-medium">
                                <span><i data-feather="mail" class="inline size-4 text-slate-400 me-3"></i><span class="text-slate-400 me-3">Email :</span></span>
                                <span>{{ $user->email }}</span>
                            </li>
                            <li class="flex items-center justify-between mt-3 font-medium">
                                <span><i data-feather="gift" class="inline size-4 text-slate-400 me-3"></i><span class="text-slate-400 me-3">D.O.B. :</span></span>
                                <span>{{ optional($trainee)->date_of_birth ?? 'Unknown' }}</span>
                            </li>
                            <li class="flex items-center justify-between mt-3 font-medium">
                                <span><i data-feather="home" class="inline size-4 text-slate-400 me-3"></i><span class="text-slate-400 me-3">Address :</span></span>
                                <span>{{ optional($trainee)->address ?? 'Unknown' }}</span>
                            </li>
                            <li class="flex items-center justify-between mt-3 font-medium">
                                <span><i data-feather="phone" class="inline size-4 text-slate-400 me-3"></i><span class="text-slate-400 me-3">Mobile :</span></span>
                                <span>{{ optional($trainee)->phone ?? 'Unknown' }}</span>
                            </li>
                            <li class="flex items-center justify-between mt-3 font-medium">
                                <span><i data-feather="book" class="inline size-4 text-slate-400 me-3"></i><span class="text-slate-400 me-3">Education Level :</span></span>
                                <span>{{ optional($trainee)->education_level ?? 'Unknown' }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
