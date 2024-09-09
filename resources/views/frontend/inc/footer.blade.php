<footer class="relative bg-slate-900 dark:bg-slate-800">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="relative py-12">
                <div class="relative w-full">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="md:col-span-3">
                            <a href="#" class="flex justify-center md:justify-start focus:outline-none">
                                {{-- <img src="assets/images/logo-light.png" class="" alt=""> --}}
                                Accreditation App
                            </a>
                        </div>
                        <div class="md:col-span-9">
                            <ul class="space-x-3 text-center list-disc footer-list md:text-end">
                                <li class="inline-block">
                                    <a href="{{ url('home') }}" class="font-medium text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        Home
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
        <div class="container text-center">
            <div class="grid items-center gap-6 md:grid-cols-2">
                <div class="text-center md:text-start">
                    <p class="mb-0 font-medium text-gray-300">© <script>document.write(new Date().getFullYear())</script></p>
                </div>
            </div>
        </div>
    </div>
</footer>
