@extends('layouts.sidebar')

@section('dashboard_content')
    <div class="p-4 sm:ml-64 px-16 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 h-screen">
        <div class="bg-white border-gray-300 rounded-lg p-3">
            <form action="{{ route('biz.update',$biz->id) }}" method="post" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <input type="hidden" name="status" value="pending" />
                <input type="hidden" name="biz_id" value={{$biz->id}} />
                <div class="flex justify-between items-center mb-10 mt-5">
                    <h1 class="text-4xl font-bold text-gray-700">You are updating {{ $biz->name }}</h1>
                    <input
                        class="bg-main p-3 text-white font-bold rounded-md hover:cursor-pointer checked:bg-secondary-400 hover:bg-secondary-200"
                        type="submit" value="Submit" />
                </div>


                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                            Name</label>
                        <input type="text" id=" "
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Company Name*" name="name" value={{ $biz->name }}>

                        @error('name')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year
                            Establishemnt</label>
                        <input type="text" id=" "
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Year Establishment*" name="years_est" value={{ $biz->years_est ?? "2022"}}>
                        @error('year_est')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                            Document</label>
                        <input type="file" id="" value={{ $biz->file_path }}
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:  block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus: ring-main"
                            placeholder="Company Document*" name="file_path">
                        @error('file_path')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wish
                                List
                                Sale : Start Date</label>
                            <input type="date" id="" value={{ $biz->start_date }}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus: ring-main"
                                placeholder="Company Document*" name="start_date">
                            @error('start_date')
                                <span class="invalid-feedback text-red-500" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wish
                                List
                                Sale : End Date</label>
                            <input type="date" id="" value={{ $biz->end_date }}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus: block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus: ring-main"
                                placeholder="Company Document*" name="end_date">
                            @error('end_date')
                                <span class="invalid-feedback text-red-500" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                            Information</label>
                        <textarea id="message" placeholder="Companny Information" name="biz_detail" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $biz->biz_detail }}</textarea>
                        @error('biz_detail')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reason
                            Sale</label>
                        <textarea id="message" placeholder="Reason Sale" name="reason_sale" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $biz->reason_sale }}</textarea>

                        @error('reason_sale')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position
                                of Owners</label>
                            <input type="text" id="" placeholder="Position of Owner *" name="position_of_owner"
                                value={{ $biz->position_of_owner }}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('position_of_owner')
                                <span class="invalid-feedback text-red-500" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of
                                Shareholders</label>
                            <input type="text" id="" placeholder="Number of Shareholders*" name="share_holder"
                                value={{ $biz->share_holder }}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>

                    <div class="grid gap-6  md:grid-cols-2">
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Whish
                                Sale Price </label>
                            <input type="text" id="" placeholder="Wish Slae Price *" name="wish_sale_price"
                                value={{ $biz->wish_sale_price }}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            @error('wish_sale_price')
                                <span class="invalid-feedback text-red-500" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Actual
                                Sale Price</label>
                            <input type="text" id="" placeholder="Actual Sale Price *"
                                name="actual_sale_price"
                                value={{$biz->actual_sale_price ?? "00000"}}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            @error('actual_sale_price')
                                <span class="invalid-feedback text-red-500" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input type="text" id="" placeholder="Address *" name="address" value={{$biz->address}}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                            <input type="text" id="" placeholder="Country *" name="country" value={{$biz->country}}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>

                    <div class="grid gap-6  md:grid-cols-2">
                        <div>
                            <label for=""
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preferred
                                Language</label>
                            <select name="language"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="US">United States</option>
                                <option value="JP">Japan</option>
                            </select>
                        </div>
                        <div>
                            <label for=""
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preferred
                                Currency</label>
                            <select id="" name="currency"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-mainblock w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="USD">USD</option>
                                <option value="JP">Yen</option>
                                <option value="EU">EUR</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="grid gap-6  md:grid-cols-2">
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                Number</label>
                            <input type="text" id="" placeholder="Phone Number *" name="phone"
                                value={{ $biz->phone }}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Register
                                Number</label>
                            <input type="text" id="" placeholder="Register Number *" name="register_number"
                                value={{ $biz->register_number }}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>


                    <div>
                        <div class="w-full">
                            <label
                                class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                                <span class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <span class="font-medium text-gray-600">
                                        Drop files to Attach, or
                                        <span class="text-blue-600 underline">browse</span>
                                    </span>
                                </span>
                                <input type="file" name="biz_img" class="hidden">
                            </label>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        
    </div>


    <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
@endsection
