@extends('frontend.layouts.app')
@section('content')

<section class="relative lg:mt-24 mt-[74px] pb-16">
    <div class="lg:container container-fluid">
        <div class="relative text-transparent profile-banner">
            <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
            <div class="relative shrink-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/KCC_Wallpaper_by_Mudahunga.jpg" class="object-cover w-full h-64 shadow lg:rounded-xl dark:shadow-gray-700" id="profile-banner" alt="">
                <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
            </div>
        </div>

        <div class="mx-4 -mt-12 md:flex">
            <div class="md:w-full">
                <div class="relative flex items-end">
                    <div class="text-center profile-pic">
                        <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                        <div>
                            <div class="relative size-28 max-w-[112px] max-h-[112px] mx-auto">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg" class="rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                            </div>
                        </div>
                    </div>
                    <div class="ms-4">
                        <h5 class="text-lg font-semibold">Mr. Calvin carlo</h5>
                        <p class="text-slate-400">Web Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-16">
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-12">
                <div class="p-6 bg-white rounded-md shadow dark:shadow-gray-800 dark:bg-slate-900">
                    <h5 class="mb-4 text-lg font-semibold">Personal Detail :</h5>
                    <form>
                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 md:grid-cols-2">
                            <div class="lg:col-span-6">
                                <label class="font-medium form-label">First Name : <span class="text-red-600">*</span></label>
                                <input type="text" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="First Name:" id="firstname" name="name" required="">
                            </div>

                            <div class="lg:col-span-6">
                                <label class="font-medium form-label">Last Name : <span class="text-red-600">*</span></label>
                                <input type="text" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="Last Name:" id="lastname" name="name" required="">
                            </div>

                            <div class="lg:col-span-6">
                                <label class="font-medium form-label">Your Email : <span class="text-red-600">*</span></label>
                                <input type="email" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="Email" name="email" required="">
                            </div>

                            <div class="lg:col-span-6">
                                <label class="font-medium form-label" for="birthday">Date of Birth :</label>
                                <input type="date" id="birthday" name="birthday" class="mt-2 border form-input border-slate-100 dark:border-slate-800">
                            </div>

                            <div class="lg:col-span-4">
                                <label class="font-medium form-label">Your Address :</label>
                                <input type="address" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="Address" name="address" required="">
                            </div>

                            <div class="lg:col-span-3">
                                <label class="font-medium form-label">State :</label>
                                <select class="block w-full mt-2 border form-select form-input border-slate-100 dark:border-slate-800">
                                    <option value="NY">New York</option>
                                    <option value="MC">North Carolina</option>
                                    <option value="SC">South Carolina</option>
                                </select>
                            </div>

                            <div class="lg:col-span-3">
                                <label class="font-medium form-label">Country :</label>
                                <select class="block w-full mt-2 border form-select form-input border-slate-100 dark:border-slate-800">
                                    <option value="NY">USA</option>
                                    <option value="MC">UK</option>
                                    <option value="SC">India</option>
                                </select>
                            </div>

                            <div class="lg:col-span-2">
                                <label class="font-medium form-label">Postal Code :</label>
                                <input type="number" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="Postal Code" name="number" required="">
                            </div>

                            <div class="lg:col-span-6">
                                <label class="font-medium form-label">Mobile No. :</label>
                                <input type="number" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="Mobile No." name="number" required="">
                            </div>
                        </div>

                        <input type="submit" id="submit" name="send" class="mt-5 text-white rounded-md btn bg-emerald-600 hover:bg-emerald-700" value="Save Changes">
                    </form><!--end form-->
                </div>
            </div>

            <div class="lg:col-span-12">
                <div class="p-6 bg-white rounded-md shadow dark:shadow-gray-800 dark:bg-slate-900">
                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                        <div>
                            <h5 class="mb-4 text-lg font-semibold">Contact Info :</h5>

                            <form>
                                <div class="grid grid-cols-1 gap-4">
                                    <div>
                                        <label class="font-medium form-label">Phone No. :</label>
                                        <input name="number" id="number" type="number" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="Phone :">
                                    </div>

                                    <div>
                                        <label class="font-medium form-label">Website :</label>
                                        <input name="url" id="url" type="url" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="Url :">
                                    </div>
                                </div><!--end grid-->

                                <button class="mt-5 text-white rounded-md btn bg-emerald-600 hover:bg-emerald-700">Add</button>
                            </form>
                        </div><!--end col-->

                        <div>
                            <h5 class="mb-4 text-lg font-semibold">Change password :</h5>
                            <form>
                                <div class="grid grid-cols-1 gap-4">
                                    <div>
                                        <label class="font-medium form-label">Old password :</label>
                                        <input type="password" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="Old password" required="">
                                    </div>

                                    <div>
                                        <label class="font-medium form-label">New password :</label>
                                        <input type="password" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="New password" required="">
                                    </div>

                                    <div>
                                        <label class="font-medium form-label">Re-type New password :</label>
                                        <input type="password" class="mt-2 border form-input border-slate-100 dark:border-slate-800" placeholder="Re-type New password" required="">
                                    </div>
                                </div><!--end grid-->

                                <button class="mt-5 text-white rounded-md btn bg-emerald-600 hover:bg-emerald-700">Save password</button>
                            </form>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
