@extends('layout.app')

@section('content')
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
            event
        </div>
    </div>
<!-- Breadcrumb end -->
<div class="w-[80%] h-max  mx-auto ">
    <div class="mt-5 md:mt-0 ">
      <form action="#" class="py-4 px-5 " method="POST">
        <div class="py-4 px-5 shadow bg-white sm:rounded-md  ">
          <h1 class="mb-2 text-blue-400 text-3xl text-center mx-auto">
            Event Create Form
          </h1>
          <hr />
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div>
              <label
                for="about"
                class="block text-md font-medium text-gray-700"
              >
                Event Title
              </label>
              <div class="mt-1">
                <input
                  name=""
                  class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                  placeholder="Event Title..."
                />
              </div>
            </div>

            <div>
              <label
                for="about"
                class="block text-md font-medium text-gray-700"
              >
                Event Description
              </label>
              <div class="mt-1">
                <textarea
                  id="about"
                  name="about"
                  rows="3"
                  class="py-2 px-4 outline-none border shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                  placeholder="Event Description...."
                ></textarea>
              </div>
            </div>
            <div class="flex justify-between items-center">
                <div class="w-[45%]">
                <label
                    for="about"
                    class="block text-md font-medium text-gray-700"
                >
                    Event Instructor
                </label>
                <div class="mt-1">
                    <input
                    name=""
                    class="py-2 px-4 border outline-none shadow-sm focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                    placeholder="Event Instructor..."
                    />
                </div>
                </div>
                <div class="w-[45%]">
                <label
                    for="countries"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Event Category</label
                >
                <select
                    id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                    <option>United States</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                </select>
                </div>
            </div>
            <div class="flex justify-between items-center">
                    <div  class="w-[45%]">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >Start Date</label
                    >
                    <div class="relative max-w-sm">
                        <div
                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                        >
                        <svg
                            aria-hidden="true"
                            class="w-5 h-5 text-gray-500 dark:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"
                            ></path>
                        </svg>
                        </div>
                        <input
                        datepicker
                        type="date"
                        class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date"
                        />
                    </div>
                    </div>
                    <div  class="w-[45%]">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >End Date</label
                    >
                    <div class="relative max-w-sm">
                        <div
                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                        >
                        <svg
                            aria-hidden="true"
                            class="w-5 h-5 text-gray-500 dark:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"
                            ></path>
                        </svg>
                        </div>
                        <input
                        datepicker
                        type="date"
                        class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date"
                        />
                    </div>
                    </div>
             </div>
              <div class="flex justify-between items-center">
            <div  class="w-[45%]">
              <label
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Start Time</label
              >

              <div class="relative max-w-sm">
                <div
                  class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                  <svg
                    aria-hidden="true"
                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                  datepicker
                  type="time"
                  class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Select time"
                />
              </div>
            </div>

            <div  class="w-[45%]">
              <label
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >End Time</label
              >
              <div class="relative max-w-sm">
                <div
                  class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                  <svg
                    aria-hidden="true"
                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                  datepicker
                  type="time"
                  class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-400 focus:border-blue-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Select time"
                />
              </div>
            </div>
            </div>
             <div class="col-span-3 sm:col-span-2">
            <label for="company-website" class="block text-md font-medium text-gray-700">Registration Link</label>
            <div class="mt-1 flex rounded-md shadow-sm">
              <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span>
              <input type="text" name="company-website" id="company-website" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="www.example.com">
            </div>
          </div>


          <div class="px-4 py-3 text-right sm:px-6">
            <button
              type="submit"
              class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
</div>

@endsection
