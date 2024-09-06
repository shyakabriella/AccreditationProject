<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Accreditation - Sign Up</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	</head>
	<body>
		<div id="root">
			<div class="app-layout-blank flex flex-auto flex-col h-[100vh]">
                <div class="flex flex-col justify-between flex-auto h-full">
                    <main class="h-full">
                        <div class="relative flex flex-col flex-auto h-full page-container">
                            <div class="grid h-full lg:grid-cols-3">
                                <div class="flex-col justify-between hidden col-span-2 px-16 py-6 bg-[#4f46e5] bg-no-repeat bg-cover dark:bg-gray-800 lg:flex" style="background-image: url({{ asset('img/auth/register.jpg') }});">
                                    <div class="logo">
                                        <h2 class="text-white">ACCREDITATION</h2>
                                    </div>
                                    <div>
                                        <h3 class="mb-4 text-white">Welcome</h3>
                                        <p class="text-lg text-white opacity-80 max-w-[700px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto soluta eum commodi non temporibus saepe! Dicta error culpa alias, maxime dolores fugit accusamus beatae recusandae dolor, quod voluptates perferendis quaerat?</p>
                                    </div>
                                    <span class="text-white">
                                        Copyright © 2024
                                        <span class="font-semibold">Accredition</span>
                                    </span>
                                </div>
                                <div class="flex flex-col items-center justify-center bg-white dark:bg-gray-800">
                                    <div class="xl:min-w-[450px] px-8">
                                        <div class="mb-8">
                                            <h3 class="mb-1">Sign Up</h3>
                                            <p>And lets get started with your free trial</p>
                                        </div>
                                        <div>
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-container vertical">
                                                    <div class="form-item vertical">
                                                        <label class="mb-2 form-label">Name</label>
                                                        <div>
                                                            <input
                                                                class="input"
                                                                type="text"
                                                                name="name"
                                                                autocomplete="off"
                                                                placeholder="Name"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="form-item vertical">
                                                        <label class="mb-2 form-label">Email</label>
                                                        <div>
                                                            <input
                                                                class="input"
                                                                type="text"
                                                                name="email"
                                                                autocomplete="off"
                                                                placeholder="Email"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="form-item vertical">
                                                        <label class="mb-2 form-label">Password</label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <input
                                                                    class="pr-8 input"
                                                                    type="password"
                                                                    name="password"
                                                                    autocomplete="off"
                                                                    placeholder="Password"
                                                                    value=""
                                                                >
                                                                <div class="input-suffix-end">
                                                                    <span class="text-xl cursor-pointer">
                                                                        <svg
                                                                            stroke="currentColor"
                                                                            fill="none"
                                                                            stroke-width="2"
                                                                            viewBox="0 0 24 24"
                                                                            aria-hidden="true"
                                                                            height="1em"
                                                                            width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                        >
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-item vertical">
                                                        <label class="mb-2 form-label">Confirm Password</label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <input
                                                                    class="pr-8 input"
                                                                    type="password"
                                                                    name="password_confirmation"
                                                                    autocomplete="off"
                                                                    placeholder="Confirm Password"
                                                                    value=""
                                                                >
                                                                <div class="input-suffix-end">
                                                                    <span class="text-xl cursor-pointer">
                                                                        <svg
                                                                            stroke="currentColor"
                                                                            fill="none"
                                                                            stroke-width="2"
                                                                            viewBox="0 0 24 24"
                                                                            aria-hidden="true"
                                                                            height="1em"
                                                                            width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                        >
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <button class="w-full btn btn-solid" type="submit">Sign Up</button>
                                                    <div class="mt-4 text-center">
                                                        <span>Already have an account?</span>
                                                        <a class="text-primary-600 hover:underline" href="{{ url('login') }}">Sign In</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
			</div>
		</div>
		<script src="{{ asset('js/vendors.min.js') }}"></script>
		<script src="{{ asset('js/app.min.js') }}"></script>
	</body>
</html>
