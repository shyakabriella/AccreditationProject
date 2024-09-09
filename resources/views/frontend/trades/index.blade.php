@extends('frontend.layouts.app')
@section('content')

    <section class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.jpg')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-emerald-900/90"></div>
        <div class="container">
            <div class="grid grid-cols-1 mt-10 text-center">
                <h3 class="text-2xl font-medium leading-snug tracking-wide text-white md:text-3xl md:leading-snug">Job Vacancies</h3>
            </div>
        </div>
    </section>

    <div class="relative">
        <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <section class="relative -mt-[42px] md:pb-24 pb-16">
        @include('frontend.inc.search')

        <div class="container mt-10">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-[30px]">
                <div class="relative overflow-hidden transition-all duration-500 bg-white rounded-md shadow group dark:bg-slate-900 hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 hover:-mt-2 h-fit">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="size-14 min-w-[56px] flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                <img src="assets/images/company/facebook-logo.png" class="size-8" alt="">
                            </div>
                            <div class="ms-3">
                                <a href="{{ route('getTradeDetails') }}" class="inline-block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500 me-1">Web Designer</a>
                                <span class="inline-block text-sm text-slate-400">2 days ago</span>
                                <div>
                                    <span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Full Time</span>
                                    <span class="inline-block text-sm font-medium me-1">
                                        Est. time: <span class="text-slate-400">1 to 3 months</span>
                                    </span>
                                    <span class="inline-block text-sm font-medium me-1">
                                        Hourly: <span class="text-slate-400">$16 - $20</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="py-3 text-slate-400">Looking for an experienced Web Designer for an our company.</p>
                        <div>
                            <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">HTML</span>
                            <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">CSS</span>
                            <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SASS</span>
                            <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">SCSS</span>
                            <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Photoshop</span>
                            <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Graphics</span>
                            <span class="bg-slate-100 dark:bg-slate-800 inline-block text-slate-900 dark:text-slate-300 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Bootstrap</span>
                        </div>
                    </div>
                    <div class="items-center justify-between px-6 py-2 bg-slate-50 dark:bg-slate-800 lg:flex">
                        <div class="flex justify-between lg:inline-block">
                            <span class="inline-block font-semibold me-1">
                                <i class="text-blue-500 mdi mdi-check-decagram mdi-18px me-1"></i>
                                Verified
                            </span>
                            <ul class="list-none inline-block me-1 text-yellow-400 space-x-0.5">
                                <li class="inline">
                                    <i class="text-lg mdi mdi-star"></i>
                                </li>
                                <li class="inline">
                                    <i class="text-lg mdi mdi-star"></i>
                                </li>
                                <li class="inline">
                                    <i class="text-lg mdi mdi-star"></i>
                                </li>
                                <li class="inline">
                                    <i class="text-lg mdi mdi-star"></i>
                                </li>
                                <li class="inline">
                                    <i class="text-lg mdi mdi-star"></i>
                                </li>
                                <li class="inline font-semibold text-slate-400">4.8</li>
                            </ul>
                            <span class="inline-block me-1 text-slate-400">
                                <i class="uil uil-map-marker text-[18px] text-slate-900 dark:text-white me-1"></i>
                                Australia
                            </span>
                        </div>
                        <a href="{{ route('getTradeDetails') }}" class="w-full mt-4 text-white rounded-md btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 md:ms-2 lg:w-auto lg:mt-0">Apply Now</a>
                    </div>
                    <a href="" class="absolute top-0 m-3 rounded-full btn btn-icon bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white end-0">
                        <i data-feather="bookmark" class="size-4"></i>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-8 md:grid-cols-12">
                <div class="text-center md:col-span-12">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">
                                    <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">1</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 size-[40px] inline-flex justify-center items-center text-white bg-emerald-600 border border-emerald-600">3</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">4</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">5</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">
                                    <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--end col-->
            </div>
        </div>
    </section>

@endsection
