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
            blog
        </div>
    </div>
<!-- Breadcrumb end -->

<!-- ====== Blog Section Start -->
<section class="pb-10 lg:pb-20">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 md:w-1/2 lg:w-1/3 ">
          <div class="mx-auto mb-10 max-w-[370px] border border-neutral-900 rounded">
            <div class="overflow-hidden rounded">
              <img
                src="https://cdn.tailgrids.com/2.0/image/application/images/blogs/blog-01/image-01.jpg"
                alt="image"
                class="w-full"
              />
            </div>
            <div class="p-5 bg-gray-100">
              <span
                class="bg-primary mb-5 inline-block rounded py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
              >
                Dec 22, 2023
              </span>
              <h3>
                <a
                  href="javascript:void(0)"
                  class="text-dark hover:text-primary mb-4 inline-block text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  Meet AutoManage, the best AI management tools
                </a>
              </h3>
              <p class="text-body-color text-base">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3 ">
          <div class="mx-auto mb-10 max-w-[370px] border border-neutral-900 rounded">
            <div class="overflow-hidden rounded">
              <img
                src="https://cdn.tailgrids.com/2.0/image/application/images/blogs/blog-01/image-01.jpg"
                alt="image"
                class="w-full"
              />
            </div>
            <div class="p-5 bg-gray-100">
              <span
                class="bg-primary mb-5 inline-block rounded py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
              >
                Dec 22, 2023
              </span>
              <h3>
                <a
                  href="javascript:void(0)"
                  class="text-dark hover:text-primary mb-4 inline-block text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  Meet AutoManage, the best AI management tools
                </a>
              </h3>
              <p class="text-body-color text-base">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3 ">
          <div class="mx-auto mb-10 max-w-[370px] border border-neutral-900 rounded">
            <div class="overflow-hidden rounded">
              <img
                src="https://cdn.tailgrids.com/2.0/image/application/images/blogs/blog-01/image-01.jpg"
                alt="image"
                class="w-full"
              />
            </div>
            <div class="p-5 bg-gray-100">
              <span
                class="bg-primary mb-5 inline-block rounded py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
              >
                Dec 22, 2023
              </span>
              <h3>
                <a
                  href="javascript:void(0)"
                  class="text-dark hover:text-primary mb-4 inline-block text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  Meet AutoManage, the best AI management tools
                </a>
              </h3>
              <p class="text-body-color text-base">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Blog Section End -->

@endsection
