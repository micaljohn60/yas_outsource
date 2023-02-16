@extends('layouts.sidebar')

@section('dashboard_content')
    <div class="px-16 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 ">
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
                    
                        <div class="bg-secondary-300 p-6 rounded-lg shadow-lg w-3/12 sm:w-5/12">
                            <div class="flex flex-col justify-center items-center">
                                <div class="">
                                    <i class="fa-regular fa-folder-closed"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-xl">Total Bizs</p>
                                </div>
                                <div>
                                    <p class="text-lg font-bold">{{count($bizs)}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-secondary-400 p-6 rounded-lg shadow-lg w-3/12 sm:w-5/12">
                            <div class="flex flex-col justify-center items-center">
                                <div class="">
                                    <i class="fa-regular fa-folder-closed"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-xl">Total Proposals</p>
                                </div>
                                <div>
                                    <p class="text-lg font-bold">{{count($proposalsToMyBizs)}}</p>
                                </div>
                            </div>
                        </div>
                    

                </div>

                <h1 class="text-2xl font-bold mt-3 py-4">My Bizs</h1>

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
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $key + 1 }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $biz->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $biz->status }}
                                </td> 
                                <td class="px-6 py-4">
                                    {{ $biz->register_number }}
                                </td>
                                <td class="px-6 py-4">
                                    {{  $biz->created_at }}
                                </td>
                                <td class="px-6 py-4 flex gap-2">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                    <a href="#" class="font-medium text-red-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-circle-minus fa-lg"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                    <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                            </li>
                            <li>
                                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
    {{-- <table id="example" class="table table-striped" style="width:100%">
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
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $biz->name }}
                    </td>
                    <td>
                        {{ $biz->status }}
                    </td>
                    <td>
                        {{ $biz->register_number }}
                    </td>
                    <td class="text-truncate" style="max-width: 150px;">
                        {{ $biz->biz_detail }}
                    </td>
                    <td>
                        <p><small id="time"> {{ $biz->created_at }}</small></p>
                    </td>
                    <td>

                        <a href="{{ route('biz.edit', $biz->id) }}">
                            <button type="button" class="btn btn-link text-decoration-none">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </a>

                        <form action="{{ route('biz.delete', $biz->id) }}" method="POST" id="biz-{{ $biz->id }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-link text-decoration-none">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table> --}}

    <h3 class="font-weight-bold mt-5">Proposals</h3>
    <table id="proposal" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Biz ID</th>
                <th>Biz Name</th>
                <th>Proposal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proposalsToMyBizs as $key => $proposalsToMyBiz)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $proposalsToMyBiz->biz->id }}
                    </td>
                    <td>
                        {{ $proposalsToMyBiz->biz->name }}
                    </td>
                    <td>
                        <a
                            href="">{{ empty($proposalsToMyBiz->proposal_id) ? 'Download Proposal' : 'Go To Proposal' }}</a>
                    </td>

                    <td class="d-flex ">
                        @if (isset($proposalsToMyBiz->status) && $proposalsToMyBiz->status !== 'accept')
                            <form method="POST"
                                action={{ route('proposal.biz.accept', ['proposal' => $proposalsToMyBiz->proposal_id, 'biz_id' => $proposalsToMyBiz->biz->id]) }}>
                                @csrf
                                <input type="submit" class="btn btn-outline-primary m-1" value="Accept">
                            </form>
                            <form method="POST"
                                action={{ route('proposal.biz.decline', ['proposal' => $proposalsToMyBiz->proposal_id, 'biz_id' => $proposalsToMyBiz->biz->id]) }}>
                                @csrf
                                <input type="submit" class="btn btn-outline-primary m-1" value="Decline">
                            </form>
                        @else
                            <p>{{ $proposalsToMyBiz->status }}</p>
                        @endif

                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
            </div>

        </div>

    </div>
   
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('#proposal').DataTable();
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

@endsection
