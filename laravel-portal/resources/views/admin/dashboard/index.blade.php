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
                            <h2 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">All
                                User Posts</h2>
                        </div>
                        <div class="flex lg:mt-0 lg:ml-4">


                            <span class="sm:ml-3">
                            
                                <button command="show-modal" commandfor="dialog"
                                    class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> Add New Post</button>
                                <el-dialog>
                                    <dialog id="dialog" aria-labelledby="dialog-title"
                                        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                                        <el-dialog-backdrop
                                            class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

                                        <div tabindex="0"
                                            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                                            <el-dialog-panel
                                                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                    <div class="sm:flex sm:items-start">
                                                        <div
                                                            class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:size-10">
                                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="1.5" data-slot="icon" aria-hidden="true"
                                                                class="size-6 text-red-600">
                                                                <path
                                                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </div>
                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                            <h3 id="dialog-title"
                                                                class="text-base font-semibold text-gray-900">Deactivate
                                                                account</h3>
                                                            <div class="mt-2">
                                                                <p class="text-sm text-gray-500">Are you sure you want to
                                                                    deactivate your account? All of your data will be
                                                                    permanently removed. This action cannot be undone.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                    <button type="button" command="close" commandfor="dialog"
                                                        class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button>
                                                    <button type="button" command="close" commandfor="dialog"
                                                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                                </div>
                                            </el-dialog-panel>
                                        </div>
                                    </dialog>
                                </el-dialog>

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
