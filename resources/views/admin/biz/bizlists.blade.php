@extends('layouts.admin_sidebar')

@section('admin_content')
    <div class="p-4 sm:ml-64 px-16 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 h-screen">
        <h1 class="text-3xl font-bold mt-3 py-4 text-gray-600">{{$status == "pending" ? "Incoming Pending Biz" : "Accepted Bizs"}}</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Index
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Biz Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Register Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($bizs as $key => $biz)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $key + 1 }}
                            </th>
                            <td class="px-6 py-4 text-gray-900 font-medium">
                                {{ $biz->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $biz->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $biz->register_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $biz->created_at }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">

                                
                                    @if($status == "pending")
                                    <form action={{route("biz.published",$biz->id)}} method="POST">
                                    @csrf
                                    <input value="Approve" data-modal-target="popup-modal" data-modal-toggle="popup-modal-1" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" />
                                    
                                    </form>
                                    @else
                                    <form >
                                        @csrf
                                        <input value="Remove" data-modal-target="popup-modal" data-modal-toggle="popup-modal-1" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" />
                                        
                                    </form>
                                    @endif
                                
                            </td>
                            
                        </tr>
                    @endforeach


                </tbody>
            </table>
            {{-- <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                        class="font-semibold text-gray-900 dark:text-white">1-{!! $bizs->count() !!}</span> of
                    <span class="font-semibold text-gray-900 dark:text-white">{!! $bizs->total() !!}</span></span>
                <ul class="inline-flex items-center -space-x-px">

                    {!! $bizs->links() !!}

                </ul>
            </nav> --}}
        </div>

    </div>


    {{-- <h3 class="font-weight-bold mt-3">{{$status == "pending" ? "Incoming Pending Biz" : "Accepted Bizs"}}</h3>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Status</th>
            <th>Register Number</th>
            <th>Biz Detail</th>
            <th>Created at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bizs as $key => $biz)
            <tr>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$biz->name}}
                </td>
                <td>
                    {{$biz->status}}
                </td>
                <td>
                    {{$biz->register_number}}
                </td>
                <td class="text-truncate" style="max-width: 150px;">
                    {{$biz->biz_detail}}
                </td>
                <td>
                    <p><small id="time"> {{$biz->created_at}}</small></p>
                </td>
                
                <td>
                    @if($status == "pending")
                    <form action="{{ route('biz.published', $biz->id) }}" method="POST" id="biz-{{$biz->id}}">
                        @method('post')
                        @csrf
                        <button type="submit" class="btn btn-link text-decoration-none">
                            <i class="fa-solid fa-upload"></i>
                        </button>
                    </form>
                    @else
                    <form action="{{ route('biz.published', $biz->id) }}" method="POST" id="biz-{{$biz->id}}">
                        remove
                    </form>
                    @endif
                </td>
            </tr>
        @endforeach

        </tbody>

    </table> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
@endsection
