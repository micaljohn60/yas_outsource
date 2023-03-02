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
                                <a href="#" class="font-medium text-main dark:text-main hover:underline"><i
                                        class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                <a href="#"
                                data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline"><i
                                        class="fa-solid fa-circle-minus fa-lg"></i></a>
                            </td>
                            <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-md md:h-auto">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-6 text-center">
                                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this biz?</h3>
                                            <form action="{{route('biz.delete',$biz->id)}}" medhod="DELETE">
                                                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                    Yes, I'm sure {{$biz->id}}
                                                </button>
                                            </form>
                                            <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@endsection
