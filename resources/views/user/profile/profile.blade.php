@extends('layouts.sidebar')

@section('dashboard_content')
    <div class="p-4 sm:ml-64 px-16 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 h-full">

        <div class="bg-white border-gray-300 rounded-lg p-3 ">

            <div class="flex justify-between">
                <h1 class="text-3xl text-gray-500">Personal Information</h1>
                <h1 class="text-3xl text-gray-500">ID - </h1>
            </div>

            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

            <div
                class="flex justify-between max-w-full p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                <div class="flex">
                    <img class="rounded-full w-20 h-20 ml-5"
                         src="https://flowbite.com/docs/images/examples/image-4@2x.jpg"
                         alt="image description">
                    <div class="flex flex-col px-10">
                        <h3 class="text-3xl">{{auth()->user()->first_name}}</h3>
                        <h3 class="text-xl">Account Expire At : </h3>
                    </div>


                </div>
                <h3 class="text-3xl">{{auth()->user()->type->value}}</h3>

            </div>

            <div class="bg-white border-gray-300 rounded-lg p-3">
                <form action="{{ route('biz.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                Name</label>
                            <input type="text" id=" "
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Company Name*" name="name">
                        </div>
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                Name</label>
                            <input type="text" id=" "
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Year Establishment*" name="year_est">
                        </div>
                    </div>

                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for=" "
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" id=" "
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Company Name*" name="name">
                        </div>
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                Number</label>
                            <input type="text" id=" "
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Year Establishment*" name="year_est">
                        </div>
                    </div>

                </form>


            </div>

            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

            <div class="flex justify-between items-center mb-5 mt-10">
                <h1 class="text-xl font-bold text-gray-700">Your Business Info Session</h1>
                <input
                    class="bg-main p-3 text-white font-bold rounded-md hover:cursor-pointer checked:bg-secondary-400 hover:bg-secondary-200"
                    type="submit" value="Submit"/>
            </div>

            <div class="bg-white border-gray-300 rounded-lg p-3">
                <form action="{{ route('biz.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                Business Info</label>
                            <textarea id="message" placeholder="Companny Information" name="biz_detail" rows="4"
                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <form action="{{ route('profile.save') }}" method="POST">
                @csrf
                <input type="hidden" name="anonymous" value={{auth()->user()->anonymous}} id="unknown">

                <div class="flex justify-between items-center mb-5 mt-10">

                    <h1 class="text-xl font-bold text-gray-700">Anomyous Setting</h1>
                    <input
                        class="bg-main p-3 text-white font-bold rounded-md hover:cursor-pointer checked:bg-secondary-400 hover:bg-secondary-200"
                        type="submit" value="Submit"/>
                </div>

                <div class="bg-white border-gray-300 rounded-lg p-3">

                    <div class="flex justify-start items-center my-6"><span
                            class="mr-3 text-sm font-medium text-gray-900 dark:text-gray-300">Privacy Off</span><label
                            class="relative inline-flex items-center cursor-pointer">

                            <input id="toggle" type="checkbox" class="sr-only peer"
                                   {{auth()->user()->anonymous === "on" ? "checked" : ""}}
                                   value={{auth()->user()->anonymous}} onclick="toggleSwtich()">
                            <div
                                class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-teal-600">
                            </div>
                        </label><span
                            class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Privacy On</span>
                    </div>

                    {{-- <h2>Anonymous</h2>
                    <input type="radio" id="off" name="anonymous" value="on">
                    <label for="off">Privacy OFF</label><br>
                    <input type="radio" id="on" name="anonymous" value="off">
                    <label for="on">Privacy ON</label><br>

                    <button type="submit">Save Changes</button> --}}
                </div>
            </form>
        </div>


        {{--
        <h1>profile page</h1>

<form action="{{route('profile.save')}}" method="POST">
    @csrf
    <h2>Anonymous</h2>
    <input type="radio" id="off" name="anonymous" value="on">
    <label for="off">Privacy OFF</label><br>
    <input type="radio" id="on" name="anonymous" value="off">
    <label for="on">Privacy ON</label><br>

    <button type="submit">Save Changes</button>
</form>

    </div>
</div> --}}

        <script>
            function toggleSwtich() {
                let checkBox = document.getElementById("toggle");
                let unknown = document.getElementById("unknown");

                if (checkBox.value === 'on')
                {
                    unknown.value = 'off'
                    checkBox.value = 'off'
                }
                else{
                    unknown.value = 'on'
                    checkBox.value = 'on'
                }
            }
        </script>
@endsection
