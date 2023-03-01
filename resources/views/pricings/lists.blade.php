@extends('layouts.app')

@section('content')

    <section class="bg-white">

       <div class="py-8 px-4 mx-auto max-w-screen-xl lg-py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Are you a Seller?</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam itaque, aliquid molestiae consequatur ratione voluptatibus reprehenderit distinctio,</p>
        </div>
        <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                <h3 class="mb-4 text-2xl font-semibold">Free</h3>
                <p class="font-light text-gray-500 sm:text-lg ">Best option for direct sell.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">$0.00</span>
                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                </div>
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 :text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Sell Unlimited Biz</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Stay Anonymous</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>View/Reply Message from 1 Premium Buyer</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Avaliable for Direct Seller</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>---------------------</span>
                    </li>
                </ul>
                <a href="#" class="text-white bg-main hover:bg-gray-600 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Get started</a>
            </div>

            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                <h3 class="mb-4 text-2xl font-semibold">Pro</h3>
                <p class="font-light text-gray-500 sm:text-lg ">Direct Sells with Pro.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">$9.99</span>
                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                </div>
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 :text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Sell Unlimited Biz</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Stay Anonymous</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>View/Reply Message from Unlimited Premium Buyer</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Avaliable for Direct Seller</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>---------------------</span>
                    </li>
                </ul>
                <a href="#" class="text-white bg-main hover:bg-gray-600 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Get started</a>
            </div>

            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                <h3 class="mb-4 text-2xl font-semibold">Premium</h3>
                <p class="font-light text-gray-500 sm:text-lg ">Huge biz for Huge sale</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">$99.99</span>
                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                </div>
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 :text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Sell Unlimited Biz</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Stay Anonymous</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>View/Reply Message from Unlimited Premium Buyer</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Avaliable for All Seling Opitions</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>---------------------</span>
                    </li>
                </ul>
                <a href="#" class="text-white bg-main hover:bg-gray-600 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Get started</a>
            </div>
        </div>
       </div>

    </section>


    <section class="bg-white">

        <div class="py-8 px-4 mx-auto max-w-screen-xl lg-py-16 lg:px-6">
         <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
             <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Are you a Buyer?</h2>
             <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam itaque, aliquid molestiae consequatur ratione voluptatibus reprehenderit distinctio,</p>
         </div>
         <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
             <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                 <h3 class="mb-4 text-2xl font-semibold">Free</h3>
                 <p class="font-light text-gray-500 sm:text-lg ">Best option for direct sell.</p>
                 <div class="flex justify-center items-baseline my-8">
                     <span class="mr-2 text-5xl font-extrabold">$0.00</span>
                     <span class="text-gray-500 dark:text-gray-400">/month</span>
                 </div>
                 <ul role="list" class="mb-8 space-y-4 text-left">
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 :text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>List all the Biz</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Stay Anonymous</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span> Post your whishlish</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Avaliable for Direct Buyer Opition</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-red-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Can't Send message to Seller</span>
                     </li>
                 </ul>
                 <a href="#" class="text-white bg-main hover:bg-gray-600 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Get started</a>
             </div>
 
             <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                 <h3 class="mb-4 text-2xl font-semibold">Pro</h3>
                 <p class="font-light text-gray-500 sm:text-lg ">Direct Sells with Pro.</p>
                 <div class="flex justify-center items-baseline my-8">
                     <span class="mr-2 text-5xl font-extrabold">$9.99</span>
                     <span class="text-gray-500 dark:text-gray-400">/month</span>
                 </div>
                 <ul role="list" class="mb-8 space-y-4 text-left">
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 :text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>List all the Biz</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Stay Anonymous</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Post you whishlist</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text--500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Sent Message to Unlimited Seller</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Avaliable for Direct Buyer Opition</span>
                     </li>
                 </ul>
                 <a href="#" class="text-white bg-main hover:bg-green-600 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Get started</a>
             </div>
 
             <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                 <h3 class="mb-4 text-2xl font-semibold">Premium</h3>
                 <p class="font-light text-gray-500 sm:text-lg ">Huge biz for Huge sale</p>
                 <div class="flex justify-center items-baseline my-8">
                     <span class="mr-2 text-5xl font-extrabold">$99.99</span>
                     <span class="text-gray-500 dark:text-gray-400">/month</span>
                 </div>
                 <ul role="list" class="mb-8 space-y-4 text-left">
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 :text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Sell Unlimited Biz</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Stay Anonymous</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Post your whishlist</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Sent Message from Unlimited Premium Buyer </span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Avaliable for All Selling Opitions </span>
                     </li>
                 </ul>
                 <a href="#" class="text-white bg-main hover:bg-gray-600 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Get started</a>
             </div>
         </div>
        </div>
 
     </section>

     <section class="bg-white">

        <div class="py-8 px-4 mx-auto max-w-screen-xl lg-py-16 lg:px-6">
         <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
             <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Are you a Experts?</h2>
             <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam itaque, aliquid molestiae consequatur ratione voluptatibus reprehenderit distinctio,</p>
         </div>
         <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
             <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                 <h3 class="mb-4 text-2xl font-semibold">Free</h3>
                 <p class="font-light text-gray-500 sm:text-lg ">Best option for direct sell.</p>
                 <div class="flex justify-center items-baseline my-8">
                     <span class="mr-2 text-5xl font-extrabold">$0.00</span>
                     <span class="text-gray-500 dark:text-gray-400">/month</span>
                 </div>
                 <ul role="list" class="mb-8 space-y-4 text-left">
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 :text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Sell Unlimited Biz</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Stay Anonymous</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>View/Reply Message from 1 Premium Buyer</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Avaliable for Direct Seller</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>---------------------</span>
                     </li>
                 </ul>
                 <a href="#" class="text-white bg-main hover:bg-gray-600 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Get started</a>
             </div>
 
             <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                 <h3 class="mb-4 text-2xl font-semibold">Pro</h3>
                 <p class="font-light text-gray-500 sm:text-lg ">Direct Sells with Pro.</p>
                 <div class="flex justify-center items-baseline my-8">
                     <span class="mr-2 text-5xl font-extrabold">$9.99</span>
                     <span class="text-gray-500 dark:text-gray-400">/month</span>
                 </div>
                 <ul role="list" class="mb-8 space-y-4 text-left">
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 :text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Sell Unlimited Biz</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Stay Anonymous</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>View/Reply Message from Unlimited Premium Buyer</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Avaliable for Direct Seller</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>---------------------</span>
                     </li>
                 </ul>
                 <a href="#" class="text-white bg-main hover:bg-gray-600 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Get started</a>
             </div>
 
             <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                 <h3 class="mb-4 text-2xl font-semibold">Premium</h3>
                 <p class="font-light text-gray-500 sm:text-lg ">Huge biz for Huge sale</p>
                 <div class="flex justify-center items-baseline my-8">
                     <span class="mr-2 text-5xl font-extrabold">$99.99</span>
                     <span class="text-gray-500 dark:text-gray-400">/month</span>
                 </div>
                 <ul role="list" class="mb-8 space-y-4 text-left">
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 :text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Sell Unlimited Biz</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Stay Anonymous</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>View/Reply Message from Unlimited Premium Buyer</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>Avaliable for All Seling Opitions</span>
                     </li>
                     <li class="flex items-center space-x-3">
                         <!-- Icon -->
                         <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                         <span>---------------------</span>
                     </li>
                 </ul>
                 <a href="#" class="text-white bg-main hover:bg-gray-600 focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Get started</a>
             </div>
         </div>
        </div>
 
     </section>


@endsection