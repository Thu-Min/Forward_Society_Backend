<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="../dist/output.css" />
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="flex">
        <!-- SideBar start -->
        <aside class="w-0 md:w-2/5 lg:w-[400px] h-screen bg-gray-900 flex flex-col">
            <div class="p-5">
                <img src="{{ asset('album/logo.png') }}" alt="" class="w-28" />
            </div>

            <!-- Navigation start -->
            <ul class="flex flex-col items-center space-y-3 mt-5 mx-3 flex-1">
                <!-- Active State: {bg-primary} -->
                <li
                    class="w-[95%] flex items-center gap-3 cursor-pointer rounded-md py-2 pl-5 text-white bg-primary hover:bg-gray-700">
                    <!-- Home icon -->
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                    </svg>
                    <p class="text-lg font-semibold tracking-wider">Dashboard</p>
                </li>
                <li
                    class="w-[95%] flex items-center gap-3 cursor-pointer rounded-md py-2 pl-5 text-white hover:bg-gray-700">
                    <!-- Team Icon -->
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                    </svg>
                    <p class="text-lg font-bold tracking-wider">Team</p>
                </li>
            </ul>
            <!-- Navigation end -->

            <!-- Profile Detail start-->
            <div
            class="py-3 px-5 m-5 bg-slate-700 rounded-lg cursor-pointer transition duration-200 transform hover:shadow-md hover:shadow-slate-700 hover:bg-slate-800 hover:-translate-y-1">
                <div class="flex items-center gap-3">
                    <div class="w-14 h-14 rounded-full bg-slate-300"></div>
                    <div class="">
                        <h1 class="font-bold text-slate-100">User Name</h1>
                        <p class="text-slate-300 text-sm">View Profile</p>
                    </div>
                </div>
            </div>
            <!-- Profile Detail end -->
        </aside>
        <!-- SideBar end -->

        <!-- Workspace start -->
        <div class="w-full h-screen bg-slate-200">
            <!-- Nav start -->
            <div
            class="bg-slate-100 py-4 flex justify-between items-center shadow-md">
                <div class="py-4"></div>
                <!-- just spacer -->
                <!-- Search input start -->
                <div
                    class="w-96 px-3 flex items-center border border-gray-400 rounded shadow-md">
                    <!-- Search icon -->
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                    </svg>
                    <input
                    type="text"
                    placeholder="Search..."
                    class="outline-none border-transparent bg-transparent w-full py-2 text-black font-semibold tracking-wide placeholder:text-gray-800 placeholder:font-medium focus:border-transparent focus:ring-0"/>
                </div>
                <!-- Search input end -->

                <div class="text-2xl flex items-center gap-5 mr-5">
                    <!-- Notification icon -->
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                    </svg>
                    <!-- Calendar icon -->
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"/>
                    </svg>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"
                        class="py-1 px-3 text-base font-semibold rounded border-2 border-primary transition hover:bg-primary hover:text-slate-100">
                        Sign out
                        </button>
                    </form>
                </div>
            </div>
            <!-- Nav end -->

            <!-- Breadcrumb start -->
            <div class="flex items-center p-2 m-2">
            <!--
                Prev nav: {text-slate-800, hover:text-primary} ,
                Active nav: {text-gray-500 bg-slate-300 p-2 px-3 rounded-full}
            -->
                <div
                    class="capitalize font-semibold text-slate-800 flex items-center hover:text-primary">
                    <!-- Home icon -->
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 mr-2">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                    </svg>
                    dashboard
                </div>
                <!-- ChevronForward icon -->
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 mx-3">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                </svg>
                <div
                    class="capitalize font-semibold text-gray-500 bg-slate-300 p-2 px-3 rounded-full">
                    team
                </div>
            </div>
            <!-- Breadcrumb end -->
        </div>
        <!-- Workspace end -->
        </div>
    </body>
</html>
