<header class="border-b border-gray-200 header dark:border-gray-700">
    <div class="h-16 header-wrapper">
        <!-- Header Nav Start start-->
        <div class="header-action header-action-start">
            <div id="side-nav-toggle" class="side-nav-toggle header-action-item header-action-item-hoverable">
                <div class="text-2xl">
                    <svg class="side-nav-toggle-icon-expand" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>
                    <svg class="hidden side-nav-toggle-icon-collapsed" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </div>
            </div>
            <div class="side-nav-toggle-mobile header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#mobile-nav-drawer">
                <div class="text-2xl">
                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>
                </div>
            </div>
            <div class="text-2xl header-search header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#dialog-search">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>
        <!-- Header Nav Start end-->
        <!-- Header Nav End start -->
        <div class="header-action header-action-end">
            <!-- Language Selector-->
            <div class="dropdown">
                <div class="dropdown-toggle" id="nav-lang-dropdown" data-bs-toggle="dropdown">
                    <div class="flex items-center header-action-item header-action-item-hoverable">
                        <span class="avatar avatar-circle" data-avatar-size="24">
                            <img class="avatar-img avatar-circle" src="img/countries/us.png"
                                loading="lazy" alt="">
                        </span>
                    </div>
                </div>
                <ul class="dropdown-menu bottom-end">
                    <li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
                        <span class="flex items-center">
                            <span class="avatar avatar-circle" data-avatar-size="18">
                                <img class="avatar-img avatar-circle" src="img/countries/us.png"
                                    loading="lazy" alt="">
                            </span>
                            <span class="ltr:ml-2 rtl:mr-2">English</span>
                        </span>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" class="text-lg text-emerald-500" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </li>
                    <li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
                        <span class="flex items-center">
                            <span class="avatar avatar-circle" data-avatar-size="18">
                                <img class="avatar-img avatar-circle" src="img/countries/cn.png" loading="lazy" alt="">
                            </span>
                            <span class="ltr:ml-2 rtl:mr-2">
                                Chinese
                            </span>
                        </span>
                    </li>
                    <li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
                        <span class="flex items-center">
                            <span class="avatar avatar-circle" data-avatar-size="18">
                                <img class="avatar-img avatar-circle" src="img/countries/sp.png" loading="lazy" alt="">
                            </span>
                            <span class="ltr:ml-2 rtl:mr-2">
                                Espanol
                            </span>
                        </span>
                    </li>
                    <li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
                        <span class="flex items-center">
                            <span class="avatar avatar-circle" data-avatar-size="18">
                                <img class="avatar-img avatar-circle" src="img/countries/ar.png" loading="lazy" alt="">
                            </span>
                            <span class="ltr:ml-2 rtl:mr-2">
                                Arabic
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
            <!-- Notification-->
            <div class="dropdown">
                <div class="dropdown-toggle" id="nav-notification-dropdown" data-bs-toggle="dropdown">
                    <div class="text-2xl header-action-item header-action-item-hoverable">
                        <span class="badge-wrapper">
                            <span class="badge-dot badge-inner" style="top: 3px; right: 6px;"></span>
                            <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <ul class="dropdown-menu p-0 min-w-[280px] md:min-w-[340px]">
                    <li class="menu-item-header">
                        <div class="flex items-center justify-between px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                            <h6>Notifications</h6>
                            <span class="tooltip-wrapper">
                                <button class="inline-flex items-center justify-center text-lg text-gray-600 bg-transparent border border-transparent button hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 dark:text-gray-100 radius-circle h-9 w-9">
                                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"></path>
                                    </svg>
                                </button>
                            </span>
                        </div>
                    </li>
                    <li class="relative">
                        <div class="max-h-[288px] overflow-y-auto relative notification-scroll">
                            <div class="relative flex px-4 py-4 border-b border-gray-200 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20 dark:border-gray-600">
                                <div>
                                    <span class="avatar avatar-circle avatar-md">
                                        <img class="avatar-img avatar-circle" src="img/avatars/thumb-8.jpg" loading="lazy" alt="">
                                    </span>
                                </div>
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <div>
                                        <span class="font-semibold heading-text">Jean Bowman </span>
                                        <span>invited you to new project.</span>
                                    </div>
                                    <span class="text-xs">4 minutes ago</span>
                                </div>
                                <span class="badge-dot bg-primary-600  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
                            </div>
                            <div class="relative flex px-4 py-4 border-b border-gray-200 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20 dark:border-gray-600">
                                <div>
                                    <span class="avatar avatar-circle avatar-md bg-primary-600 dark:bg-primary-600">
                                        <span class="avatar-string avatar-inner-md">VK</span>
                                    </span>
                                </div>
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <div>
                                        <span class="font-semibold heading-text">Vickie Kim </span>
                                        <span>comment in your ticket.</span>
                                    </div>
                                    <span class="text-xs">20 minutes ago</span>
                                </div>
                                <span class="badge-dot bg-primary-600  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
                            </div>
                            <div class="relative flex px-4 py-4 border-b border-gray-200 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20 dark:border-gray-600">
                                <div>
                                    <span class="text-blue-600 bg-blue-100 avatar avatar-circle avatar-md dark:bg-blue-500/20 dark:text-blue-100">
                                        <span class="avatar-icon avatar-icon-md">
                                            <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <div>
                                        <span>Please submit your daily report.</span>
                                    </div>
                                    <span class="text-xs">1 hour ago</span>
                                </div>
                                <span class="badge-dot bg-primary-600  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
                            </div>
                            <div class="relative flex px-4 py-4 border-b border-gray-200 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20 dark:border-gray-600">
                                <div>
                                    <span class="text-red-600 bg-red-100 avatar avatar-circle avatar-md dark:bg-red-500/20 dark:text-red-100">
                                        <span class="avatar-icon avatar-icon-md">
                                            <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <div>
                                        <span>Your request was rejected</span>
                                    </div>
                                    <span class="text-xs">2 days ago</span>
                                </div>
                                <span class="badge-dot bg-gray-300  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
                            </div>
                            <div class="relative flex px-4 py-4 border-b border-gray-200 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20 dark:border-gray-600">
                                <div>
                                    <span class="avatar avatar-circle avatar-md">
                                        <img class="avatar-img avatar-circle" src="img/avatars/thumb-4.jpg" loading="lazy" alt="">
                                    </span>
                                </div>
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <div>
                                        <span class="font-semibold heading-text">Jennifer Ruiz </span>
                                        <span>mentioned your in comment.</span>
                                    </div>
                                    <span class="text-xs">2 days ago</span>
                                </div>
                                <span class="badge-dot bg-gray-300  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
                            </div>
                            <div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20">
                                <div>
                                    <span class="avatar avatar-circle avatar-md bg-emerald-100 text-emerald-600 dark:bg-emerald-500/20 dark:text-emerald-100">
                                        <span class="avatar-icon avatar-icon-md">
                                            <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    </div>
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <div>
                                        <span>Your request has been approved.</span>
                                    </div>
                                    <span class="text-xs">4 minutes ago</span>
                                </div>
                                <span class="badge-dot bg-gray-300  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-header">
                        <div class="flex justify-center px-4 py-2 border-t border-gray-200 dark:border-gray-600">
                            <a class="p-2 px-3 font-semibold text-gray-600 cursor-pointer hover:text-gray-900 dark:text-gray-200 dark:hover:text-white" href="modern-activity-log.html">
                                View All Activity
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Config-->
            <div class="text-2xl header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#nav-config">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
            <!-- User Dropdown-->
            <div class="dropdown">
                <div class="dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown">
                    <div class="flex items-center gap-2 header-action-item">
                        <span class="avatar avatar-circle" data-avatar-size="32" style="width: 32px">
                        <img class="avatar-img avatar-circle" src="img/avatars/thumb-1.jpg" loading="lazy" alt=""></span>
                        <div class="hidden md:block">
                            <div class="text-xs capitalize">admin</div>
                            <div class="font-bold">Carolyn Perkins</div>
                        </div>
                    </div>
                </div>
                <ul class="dropdown-menu bottom-end min-w-[240px]">
                    <li class="menu-item-header">
                        <div class="flex items-center gap-2 px-3 py-2">
                            <span class="avatar avatar-circle avatar-md">
                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-1.jpg" loading="lazy" alt="">
                            </span>
                            <div>
                                <div class="font-bold text-gray-900 dark:text-gray-100">Carolyn Perkins</div>
                                <div class="text-xs">carolyn.p@elstar.com</div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-divider"></li>
                    <li class="menu-item menu-item-hoverable mb-1 h-[35px]">
                        <a class="flex items-center gap-2" href="modern-settings.html">
                            <span class="text-xl opacity-50">
                                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-hoverable mb-1 h-[35px]">
                        <a class="flex items-center gap-2" href="modern-settings.html">
                            <span class="text-xl opacity-50">
                                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span>
                            <span>Account Setting</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-hoverable mb-1 h-[35px]">
                        <a class="flex items-center gap-2" href="modern-activity-log.html">
                            <span class="text-xl opacity-50">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </span>
                            <span>Activity Log</span>
                        </a>
                    </li>
                    <li id="menu-item-29-2VewETdxAb" class="menu-item-divider"></li>
                    <li class="menu-item menu-item-hoverable gap-2 h-[35px]">
                        <span class="text-xl opacity-50">
                            <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                        </span>
                        <span>Sign Out</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header Nav End end -->
    </div>
</header>
