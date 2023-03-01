@extends('layouts.sidebar')

@section('dashboard_content')
    <div class="p-4 sm:ml-64 px-16 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 h-screen">
        <div class="flex justify-center md:justify-end">
            <div class="lg:container xl:container">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    {{-- <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div> --}}
                @endif
                <div class="flex gap-2 text-gray-700">

                    <div class="bg-secondary-300 p-6 rounded-lg shadow-sm w-3/12 sm:w-5/12">
                        <div class="flex flex-col justify-center items-center">
                            <div class="">
                                <i class="fa-regular fa-folder-closed"></i>
                            </div>
                            <div>
                                <p class="font-bold text-xl">Total Bizs</p>
                            </div>
                            <div>
                                <p class="text-lg font-bold">{{ count($bizs) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-secondary-400 p-6 rounded-lg shadow-sm w-3/12 sm:w-5/12">
                        <div class="flex flex-col justify-center items-center">
                            <div class="">
                                <i class="fa-regular fa-folder-closed"></i>
                            </div>
                            <div>
                                <p class="font-bold text-xl">Total Proposals</p>
                            </div>
                            <div>
                                <p class="text-lg font-bold">{{ count($proposalsToMyBizs) }}</p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-bold mt-3 py-4 text-gray-600">My Bizs</h1>
                    <form class="w-4/6">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search My Bizs" required>
                            <button type="submit"
                            
                                class="text-white absolute right-2.5 bottom-2.5 bg-main hover:bg-secondary-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>

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
                    <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                                class="font-semibold text-gray-900 dark:text-white">1-{!! $bizs->count() !!}</span> of
                            <span class="font-semibold text-gray-900 dark:text-white">{!! $bizs->total() !!}</span></span>
                        <ul class="inline-flex items-center -space-x-px">

                            {!! $bizs->links() !!}

                        </ul>
                    </nav>
                </div>




                <div class="flex justify-between items-center">
                    <h1 class="text-3xl font-bold mt-3 py-4 text-gray-600">Proposals</h1>

                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Index
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Biz ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Biz Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Proposal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proposalsToMyBizs as $key => $proposalsToMyBiz)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $key + 1 }}
                                    </th>
                                    <td class="px-6 py-4 text-gray-900 font-medium">
                                        {{ $proposalsToMyBiz->biz->id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $proposalsToMyBiz->biz->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ empty($proposalsToMyBiz->proposal_id) ? 'Download Proposal' : 'Go To Proposal' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $biz->created_at }}
                                    </td>
                                    <td class="px-6 py-4 flex gap-2">
                                        @if (isset($proposalsToMyBiz->status) && $proposalsToMyBiz->status !== 'accept')
                                            <form method="POST"
                                                action={{ route('proposal.biz.accept', ['proposal' => $proposalsToMyBiz->proposal_id, 'biz_id' => $proposalsToMyBiz->biz->id]) }}>
                                                @csrf
                                                <input type="submit" class="btn btn-outline-primary m-1" value="Accept">
                                            </form>
                                            <form method="POST"
                                                action={{ route('proposal.biz.decline', ['proposal' => $proposalsToMyBiz->proposal_id, 'biz_id' => $proposalsToMyBiz->biz->id]) }}>
                                                @csrf
                                                <input type="submit" class="btn btn-outline-primary m-1"
                                                    value="Decline">
                                            </form>
                                        @else
                                            <p>{{ $proposalsToMyBiz->status }}</p>
                                        @endif
                                        <a href="#" class="font-medium text-main dark:text-main hover:underline"><i
                                                class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                        <a href="#"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline"><i
                                                class="fa-solid fa-circle-minus fa-lg"></i></a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                                class="font-semibold text-gray-900 dark:text-white">1-{!! $bizs->count() !!}</span> of
                            <span class="font-semibold text-gray-900 dark:text-white">{!! $bizs->total() !!}</span></span>
                        <ul class="inline-flex items-center -space-x-px">

                            {!! $bizs->links() !!}

                        </ul>
                    </nav>
                </div>

            </div>

        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
@endsection
