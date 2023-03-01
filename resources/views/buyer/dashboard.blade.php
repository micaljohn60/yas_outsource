@extends('layouts.sidebar')

@section('dashboard_content')
    <div class="p-4 sm:ml-64 px-16 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 h-screen">

        <div class="flex gap-2 text-gray-700">
                    
            <div class="bg-secondary-300 p-6 rounded-lg shadow-sm w-3/12 sm:w-5/12 h-3/5">
                <div class="flex flex-col justify-center items-center">
                    <div class="">
                        <i class="fa-regular fa-folder-closed"></i>
                    </div>
                    <div>
                        <p class="font-bold text-xl">Find Bizs</p>
                    </div>
                    
                </div>
            </div>

            
        

    </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
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
                            Proposal Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Go To Proposal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bit Price
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($myBizProposals as $key => $myBizProposal)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $key + 1 }}
                            </th>
                            <td class="px-6 py-4 text-gray-900 font-medium">
                                {{ $myBizProposal->biz->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $myBizProposal->proposal->title ?? 'File' }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="
                            {{ empty($myBizProposal->proposal_id)
                                ? url('/') . '/storage/' . $myBizProposal->proposal_file_path
                                : route('proposal.show', $myBizProposal->proposal->id ?? '') }}"
                                    {{ empty($myBizProposal->proposal_id) ? 'download' : '' }}>
                                    {{ empty($myBizProposal->proposal_id) ? 'download' : 'Go to Proposal' }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                 100000
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
            {{-- <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                        class="font-semibold text-gray-900 dark:text-white">1-{!! $bizs->count() !!}</span> of <span
                        class="font-semibold text-gray-900 dark:text-white">{!! $bizs->total() !!}</span></span>
                <ul class="inline-flex items-center -space-x-px">

                    {!! $myBizProposals->links() !!}

                </ul>
            </nav> --}}
        </div>

        
@endsection
