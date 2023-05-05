@extends('layouts.sidebar')

@section('dashboard_content')
    <div class="p-4 sm:ml-64 px-16 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 h-full">

        <div class="bg-white border-gray-300 rounded-lg p-3">
            <form action="{{ route('biz.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="status" value="pending"/>
                <div class="flex justify-between items-center mb-10 mt-5">
                    <h1 class="text-4xl font-bold text-gray-700">Please complete the following Form to sell</h1>
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
                            placeholder="Company Name*" name="name">
                    </div>
                    <div>
                        <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year
                            Establishemnt</label>
                        <input type="text" id=" "
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Year Establishment*" name="year_est">
                    </div>
                </div>
    
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                            Document</label>
                        <input type="file" id=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:  block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus: ring-main"
                            placeholder="Company Document*" name="file_path">
                    </div>
    
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wish List
                                Sale : Start Date</label>
                            <input type="date" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus: ring-main"
                                placeholder="Company Document*" name="start_date">
                        </div>
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wish List
                                Sale : End Date</label>
                            <input type="date" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus: block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus: ring-main"
                                placeholder="Company Document*" name="end_date">
                        </div>
                    </div>
    
                </div>
    
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                            Information</label>
                        <textarea id="message" placeholder="Companny Information" name="biz_detail" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
    
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reason
                            Sale</label>
                        <textarea id="message" placeholder="Reason Sale" name="reason_sale" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                </div>
    
    
                <div class="grid gap-6 mb-6 md:grid-cols-2">
    
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position
                                of Owners</label>
                            <input type="text" id="" placeholder="Position of Owner *" name="position_of_owner"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of
                                Shareholders</label>
                            <input type="text" id="" placeholder="Number of Shareholders*" name="share_holder"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
    
                    <div class="grid gap-6  md:grid-cols-2">
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Whish
                                Sale Price </label>
                            <input type="text" id="" placeholder="Wish Slae Price *" name="wish_sale_price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Actual
                                Sale Price</label>
                            <input type="text" id="" placeholder="Actual Sale Price *" name="actual_sale_price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
    
                </div>
    
                <div class="grid gap-6 mb-6 md:grid-cols-2">
    
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input type="text" id="" placeholder="Address *" name="address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                            <input type="text" id="" placeholder="Country *" name="country"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
    
                    <div class="grid gap-6  md:grid-cols-2">
                        <div>
                            <label for=""
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preferred Language</label>
                            <select name="language"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="US">United States</option>
                                <option value="JP">Japan</option>
                            </select>
                        </div>
                        <div>
                            <label for=""
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preferred Currency</label>
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
                            <label for=" " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                Number</label>
                            <input type="text" id="" placeholder="Phone Number *" name="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for=" "
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Register Number</label>
                            <input type="text" id="" placeholder="Register Number *" name="register_number"
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
    
    
        </div>
        </form>
        </div>
    </div>




    <script>
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: '{{ route('biz.store') }}', // Set the url for your upload script location
            paramName: "biz_img", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            autoProcessQueue: false,
            autoProcessQueue: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            init: function() {

                var myDropzone = this;


                $("#button").click(function(e) {
                    e.preventDefault();

                    myDropzone.processQueue();
                });

                this.on('sending', function(file, xhr, formData) {
                    var companyName = document.getElementById("companyName").value;
                    formData.append("name", companyName)
                    // Append all form inputs to the formData Dropzone will POST
                    var data = $('#frmTarget').serializeArray();
                    $.each(data, function(key, el) {
                        formData.append(el.name, el.value);
                    });
                });
            }


        });
    </script> --}}



    <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
@endsection
