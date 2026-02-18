@extends('admin.layout.app')
@section('content')
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-white py-14 sm:py-22">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base/7 text-gray-600">Post within 24 hours</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">44</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base/7 text-gray-600">Monthly Posts in total</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">119</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base/7 text-gray-600">Annually Posts in total</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">46,000
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

        </div>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-white py-14 sm:py-22">
                <ul role="list" class="divide-y divide-gray-100 max-w-7xl px-6 lg:px-8">
                    
                    <div class="lg:flex lg:items-center lg:justify-between mb-5">
                        <div class="min-w-0 flex-1">
                            <h2 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">All User Posts</h2>
                        </div>
                        <div class="flex lg:mt-0 lg:ml-4">


                            <span class="sm:ml-3">
                                <button type="button"
                                    class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">

                                    Add New Post
                                </button>
                            </span>

                            <!-- Dropdown -->
                            <el-dropdown class="relative ml-3 sm:hidden">
                                <button
                                    class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50">
                                    More
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                        class="-mr-1 ml-1.5 size-5 text-gray-400">
                                        <path
                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                </button>

                                <el-menu anchor="bottom start" popover
                                    class="-mr-1 w-24 origin-top-right rounded-md bg-white py-1 shadow-lg outline outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Edit</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">View</a>
                                </el-menu>
                            </el-dropdown>
                        </div>
                    </div>

                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" class="size-12 flex-none rounded-full bg-gray-50" />
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm/6 font-semibold text-gray-900">Leslie Alexander</p>
                                <p class="mt-1 truncate text-xs/5 text-gray-500">leslie.alexander@example.com</p>
                            </div>
                        </div>
                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm/6 text-gray-900">Co-Founder / CEO</p>
                            <p class="mt-1 text-xs/5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h
                                    ago</time>
                            </p>
                        </div>
                    </li>
                </ul>


            </div>

        </div>
    </main>
@endsection
