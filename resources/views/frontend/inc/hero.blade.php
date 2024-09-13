<section class="relative w-full md:py-56 py-36">
    <div class="absolute inset-0 bg-emerald-600/5 dark:bg-emerald-600/10"></div>
    <div class="container z-1">
        <div class="relative grid grid-cols-1 mt-10 text-center">
            <h4 class="mb-5 text-4xl font-bold leading-normal lg:leading-normal lg:text-5xl">Join us & <span class="font-bold text-emerald-600">Explore</span> <br> <span class="font-bold text-emerald-600">Thousands</span> of Jobs</h4>
            <p class="max-w-xl mx-auto text-lg text-slate-400">Find Jobs, Employment & Career Opportunities. Some of the companies we've helped recruit excellent applicants over the years.</p>

            <div class="d-flex" id="reserve-form">
                <div class="mx-auto md:w-5/6">
                    <div class="mt-8 lg:col-span-10">
                        <div class="p-3 bg-white border-0 rounded-md shadow dark:bg-slate-900">
                            <form action="#">
                                <div class="registration-form text-dark text-start">
                                    <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2 lg:gap-0">
                                        <div class="relative filter-search-form filter-border">
                                            <i class="uil uil-briefcase-alt icons"></i>
                                            <input name="name" type="text" id="job-keyword" class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="Search your Keywords">
                                        </div>

                                        <div class="relative filter-search-form filter-border">
                                            <i class="uil uil-map-marker icons"></i>
                                            <select class="form-select" data-trigger name="choices-location" id="choices-location" aria-label="Default select example">
                                                <option value="RW">Rwanda</option>
                                            </select>
                                        </div>

                                        <div class="relative filter-search-form filter-border">
                                            <i class="uil uil-briefcase-alt icons"></i>
                                            <select class="form-select" data-trigger name="choices-type" id="choices-type" aria-label="Default select example">
                                                <option selected="" value="1">Full Time</option>
                                                <option value="2">Part Time</option>
                                                <option value="3">Freelancer</option>
                                                <option value="4">Remote Work</option>
                                            </select>
                                        </div>

                                        <a href="{{ route('getTrades') }}" style="height: 60px;" class="text-white btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 searchbtn submit-btn w-100">Search</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <span class="text-slate-400"><span class="text-dark">Popular Searches :</span> Designer, Developer, Web, IOS, PHP Senior Engineer</span>
            </div>

            <div class="absolute -translate-x-1/2 -top-20 start-1/2">
                <div class="size-10 animate-[bounce_2s_infinite] bg-white dark:bg-slate-900 flex items-center justify-center shadow dark:shadow-gray-700 rounded-md">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png" class="size-6"  alt="">
                </div>
            </div>

            <div class="absolute top-[20%] start-10">
                <div class="size-10 animate-[spin_5s_linear_infinite] bg-white dark:bg-slate-900 flex items-center justify-center shadow dark:shadow-gray-700 rounded-md">
                    <img src="https://e7.pngegg.com/pngimages/704/688/png-clipart-google-google.png" class="size-6"  alt="">
                </div>
            </div>

            <div class="absolute top-[20%] end-1">
                <div class="flex items-center justify-center bg-white rounded-md shadow size-10 dark:bg-slate-900 dark:shadow-gray-700">
                    <img src="https://w7.pngwing.com/pngs/574/270/png-transparent-android-figurine-illustration-android-application-software-android-logo-logo-mobile-app-development-android-software-development.png" class="size-6"  alt="">
                </div>
            </div>

            <div class="absolute top-3/4 start-1">
                <div class="flex items-center justify-center bg-white rounded-md shadow size-10 dark:bg-slate-900 dark:shadow-gray-700">
                    <img src="https://logodownload.org/wp-content/uploads/2019/10/adobe-photoshop-logo-0.png" class="size-6"  alt="">
                </div>
            </div>

            <div class="absolute top-3/4 end-10">
                <div class="size-10 animate-[spin_5s_linear_infinite] bg-white dark:bg-slate-900 flex items-center justify-center shadow dark:shadow-gray-700 rounded-md">
                    <img src="https://w7.pngwing.com/pngs/512/824/png-transparent-visual-studio-code-hd-logo-thumbnail.png" class="size-6"  alt="">
                </div>
            </div>
        </div>
    </div>
</section>
