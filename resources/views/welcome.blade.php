<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="bg-gray-900">
    <nav class="bg-[#00003A] h-[14vh] flex">
        <img class="xl:w-[6vw]  xl:ml-20" src="{{ asset('img/logo.png') }}" alt="">
        <div class="mx-auto flex justify-between items-center xl:w-[25vw]">
            <a href="{{ route('home') }}"
                class="text-white xl:p-0 p-2 hover:text-[#FF8F05] hover:border-r-4 hover:px-1 transition-all">Home</a>
            <a href="{{ route('event.index') }}"
                class="text-white xl:p-0 p-2 hover:text-[#FF8F05] hover:border-r-4 hover:px-1 transition-all">Reserve</a>
            <a href="#" class="text-white hover:text-[#FF8F05] hover:border-r-4 hover:px-1 transition-all">Contact
                Us</a>
        </div>
        <div class="">

            <div class=" flex justify-center items-center py-4 px-8">
                <div x-data="{ open: false }" class="bg-white dark:bg-[#00003A] shadow-xl w-64  flex justify-center items-center">
                    <div @click="open = !open" class="relative border-b-4 border-transparent py-3" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                      <div class="flex justify-center items-center space-x-3 cursor-pointer">
                        <div class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                          <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="font-semibold dark:text-white text-gray-900 text-lg">
                          <div class="cursor-pointer">{{ Auth::user()->name }}</div>
                        </div>
                      </div>
                      <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5">
                        <ul class="space-y-3 dark:text-white">
                          <li class="font-medium">
                            <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                              <div class="mr-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                              </div>
                              <a href="{{ route('profile.edit') }}">Account</a>
                              
                            </a>
                          </li>
                          <li class="font-medium">
                            <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                              <div class="mr-3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                              </div>
                              Setting
                            </a>
                          </li>
                          <hr class="dark:border-gray-700">
                          <li class="font-medium">
                            <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                              <div class="mr-3 text-red-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                              </div>
                              Logout
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div>
              </div>
        </div>

    </nav>

    {{-- Hero Section --}}
    <div class="h-[80vh] mt-16">

        <div class="w-[100%] flex xl:flex-row flex-col-reverse items-center xl:justify-between">

            <div class="text w-[20%] h-[40vh] xl:ml-20">
                <h1 class="text-white mt-20 font-semibold xl:text-8xl xl:block hidden py-3 ">
                    Our <span class="text-[#FF8F05]">Updates</span>
                </h1>
                <div class="w-full xl:block hidden justify-center xl:mr-0 xl:justify-normal mr-[80px]">
                
                
                    <button class="bg-[#FF8F05] rounded-full xl:px-6 px-7 py-2 xl:py-2 xl:mt-8 xl:ml-4 hover:bg-orange-500 transition-all">
                    Reserve Now !
                </button>                  
                </div>

                <div class="w-full xl:hidden flex justify-center xl:mr-0 xl:justify-normal mr-[80px]">
                  <button class="bg-[#FF8F05] rounded-full xl:px-6 px-7 py-2 xl:py-2 xl:mt-8 xl:ml-4 hover:bg-orange-500 transition-all">
                      Reserve
                  </button>                  
                  </div>

            </div>

            <svg xmlns="http://www.w3.org/2000/svg" class="xl:w-[50vw] w-[80vw] xl:mt-20" xmlns:xlink="http://www.w3.org/1999/xlink"
                 height="350" viewBox="0 0 949.85 463.64">
                <path
                    d="m0,418.39c0,.94,1.07,1.69,2.41,1.69h945.03c1.33,0,2.41-.75,2.41-1.69s-1.07-1.69-2.41-1.69H2.41c-1.33,0-2.41.75-2.41,1.69Z"
                    fill="#2f2e43" stroke-width="0" />
                <path
                    d="m789.19,420.78H162.66V17.31c0-9.54,7.76-17.31,17.31-17.31h591.91c9.54,0,17.31,7.76,17.31,17.31v403.47Z"
                    fill="#2f2e41" stroke-width="0" />
                <path
                    d="m841.34,463.64H108.95c-2.53,0-4.6-1.57-5.29-4.01-.68-2.43.27-4.86,2.43-6.17l57.09-34.83h626.22l.18.11,54.72,34.77c2.11,1.34,3.03,3.76,2.33,6.17-.7,2.4-2.77,3.96-5.27,3.96Z"
                    fill="#dfdfdf" stroke-width="0" />
                <rect x="179.09" y="25.72" width="592.95" height="368.63" fill="#fff" stroke-width="0" />
                <polygon points="794.9 441.5 159.09 441.5 190.52 416 764.9 416 794.9 441.5" fill="#2f2e41"
                    stroke-width="0" />
                <polygon points="626.31 458.64 324.83 458.64 336.26 441.5 614.88 441.5 626.31 458.64" fill="#2f2e41"
                    stroke-width="0" />
                <path
                    d="m653.28,171.49h-31.41c-2.73,0-4.95-2.22-4.95-4.95s2.22-4.95,4.95-4.95h31.41c2.73,0,4.95,2.22,4.95,4.95s-2.22,4.95-4.95,4.95Z"
                    fill="#dfdfdf" stroke-width="0" />
                <path
                    d="m689.4,171.49h-14.66c-2.73,0-4.95-2.22-4.95-4.95s2.22-4.95,4.95-4.95h14.66c2.73,0,4.95,2.22,4.95,4.95s-2.22,4.95-4.95,4.95Z"
                    fill="#dfdfdf" stroke-width="0" />
                <path
                    d="m338.8,175.27h-95.6c-4.88,0-8.85-3.97-8.85-8.85s3.97-8.85,8.85-8.85h95.6c4.88,0,8.85,3.97,8.85,8.85s-3.97,8.85-8.85,8.85Z"
                    fill="#ff8f05" stroke-width="0" />
                <path
                    d="m286.97,198.88h-46.07c-2.97,0-5.4-2.42-5.4-5.4s2.42-5.4,5.4-5.4h46.07c2.97,0,5.4,2.42,5.4,5.4s-2.42,5.4-5.4,5.4Z"
                    fill="#dfdfdf" stroke-width="0" />
                <path
                    d="m540.95,220.19H239.74c-2.97,0-5.4-2.42-5.4-5.4s2.42-5.4,5.4-5.4h301.21c2.97,0,5.4,2.42,5.4,5.4s-2.42,5.4-5.4,5.4Z"
                    fill="#dfdfdf" stroke-width="0" />
                <path
                    d="m515.04,234.59H239.74c-2.97,0-5.4-2.42-5.4-5.4s2.42-5.4,5.4-5.4h275.29c2.97,0,5.4,2.42,5.4,5.4s-2.42,5.4-5.4,5.4Z"
                    fill="#dfdfdf" stroke-width="0" />
                <polygon points="838.74 152.18 824.02 157.02 824.02 135.82 837.38 135.82 838.74 152.18" fill="#f2a7aa"
                    stroke-width="0" />
                <circle cx="825.84" cy="127.02" r="14.67" fill="#f2a7aa" stroke-width="0" />
                <path
                    d="m829.87,125.57c-2.46-.07-4.07-2.56-5.02-4.82-.95-2.27-1.94-4.87-4.21-5.81-1.86-.77-5.15,4.4-6.62,3.03-1.53-1.43-.04-8.81,1.59-10.13s3.85-1.58,5.95-1.68c5.11-.24,10.26.18,15.27,1.22,3.1.65,6.29,1.62,8.53,3.86,2.83,2.84,3.56,7.13,3.76,11.14.21,4.1-.03,8.4-2.02,11.98-1.99,3.59-6.17,6.24-10.17,5.32-.4-2.18,0-4.41.16-6.62.15-2.21,0-4.59-1.35-6.35s-4.23-2.45-5.8-.89"
                    fill="#36344e" stroke-width="0" />
                <path
                    d="m847.92,130.65c1.47-1.08,3.22-1.97,5.03-1.75,1.95.24,3.6,1.85,4.1,3.75s-.06,4-1.27,5.55c-1.21,1.55-3,2.58-4.9,3.1-1.1.3-2.3.42-3.35-.03-1.54-.66-2.37-2.64-1.77-4.2"
                    fill="#36344e" stroke-width="0" />
                <rect x="820.09" y="388" width="13.79" height="19.56" fill="#f2a7aa" stroke-width="0" />
                <path
                    d="m806.66,419.41c-1.45,0-2.74-.04-3.71-.13-3.66-.34-7.16-3.04-8.92-4.62-.79-.71-1.04-1.84-.63-2.82h0c.29-.7.88-1.22,1.61-1.43l9.68-2.77,15.67-10.58.17.31c.07.12,1.6,2.89,2.12,4.76.2.71.14,1.31-.15,1.77-.21.32-.49.5-.73.61.28.3,1.17.9,3.91,1.34,3.99.64,4.84-3.51,4.87-3.68l.03-.14.12-.08c1.9-1.23,3.07-1.78,3.48-1.66.25.08.67.2,1.81,11.49.11.35.91,2.95.37,5.43-.59,2.7-12.39,1.77-14.75,1.56-.07,0-8.9.64-14.96.64Z"
                    fill="#36344e" stroke-width="0" />
                <rect x="865.58" y="374.8" width="13.79" height="19.56"
                    transform="translate(-71.35 519.94) rotate(-31.95)" fill="#f2a7aa" stroke-width="0" />
                <path
                    d="m857.61,416.73c-1.62,0-3.11-.19-4.17-.38-1.04-.18-1.86-1.01-2.03-2.06h0c-.12-.75.1-1.5.61-2.07l6.75-7.47,7.7-17.27.31.17c.12.06,2.89,1.6,4.32,2.92.54.5.81,1.03.8,1.58,0,.38-.15.69-.29.9.4.1,1.47.14,4.03-.94,3.73-1.57,2.25-5.54,2.19-5.71l-.05-.13.06-.13c.97-2.05,1.66-3.14,2.07-3.25.25-.07.68-.18,7.61,8.79.28.24,2.33,2.02,3.19,4.42.93,2.6-9.58,8.06-11.69,9.13-.07.05-11.06,8.04-15.57,10.31-1.79.9-3.91,1.18-5.84,1.18Z"
                    fill="#36344e" stroke-width="0" />
                <path
                    d="m844.04,224.38h-38.61l-3.5,35.92,15.33,132.71h19.71l-7.88-76.65,31.97,69.2,17.52-12.26-24.97-64.6s8.92-56.28,1.91-70.3c-7.01-14.02-11.48-14.02-11.48-14.02Z"
                    fill="#36344e" stroke-width="0" />
                <polygon points="863.24 226.57 801.92 226.57 820.32 147.3 847.03 147.3 863.24 226.57" fill="#ff8f05"
                    stroke-width="0" />
                <path id="uuid-52db3307-ec3e-496d-a5d4-9d1f33ffc652-45-45-44-44-99"
                    d="m786.69,145.73c-.98-4.82.81-9.23,4-9.84,3.19-.61,6.56,2.8,7.54,7.63.42,1.92.35,3.91-.19,5.81l3.88,20.49-10.02,1.58-2.76-20.36c-1.24-1.55-2.08-3.37-2.45-5.31h0Z"
                    fill="#f2a7aa" stroke-width="0" />
                <path
                    d="m846.38,147.3h-23.56l-15.88,31.77-5.99-23.8-13.16,1.4s3.11,46.51,16.73,44.94c13.61-1.57,45.36-43.48,41.87-54.3Z"
                    fill="#ff8f05" stroke-width="0" />
                <path id="uuid-2800d917-a06e-4fc6-b661-0f9df9cadefc-46-46-45-45-100"
                    d="m872.7,268.11c.98,4.82-.81,9.23-4,9.84-3.19.61-6.56-2.8-7.54-7.63-.42-1.92-.35-3.91.19-5.81l-3.88-20.49,10.02-1.58,2.76,20.36c1.24,1.55,2.08,3.37,2.45,5.31,0,0,0,0,0,0Z"
                    fill="#f2a7aa" stroke-width="0" />
                <path
                    d="m832.95,147.3s13.39-.57,14.08,0c3.65,2.99,25.09,110.66,25.09,110.66h-13.58s-25.6-110.66-25.6-110.66Z"
                    fill="#ff8f05" stroke-width="0" />
            </svg>

        </div>
    </div>


    {{-- Section 1 --}}

    <div class=" h-[100vh] flex flex-col justify-between">
        {{-- <div class="w-full text-white text-center">
            <h1 class=" text-4xl py-8 font-semibold">About <span class="text-orange-500">Us</span> </h1>
            <p class="text-white" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos velit iusto, earum error assumenda
                distinctio nam inventore eligendi reprehenderit recusandae.</p>
        </div> --}}


        {{-- Special login section --}}
<div class="Loginsec">
        <h1 class="text-white text-4xl text-center py-8 font-semibold"><span class="hover:border-b-4 hover:py-2 transition-all">Special  <span class="text-orange-500">Login</span> </span></h1>
      <div class="w-full flex justify-center">
        <img class="xl:w-[30vw] w-[80vw] rounded-2xl shadow-xl" src="{{ asset('img/login.png') }}" alt="">
      </div>
</div>
    </div>


  <div class="sec3 h-[60vh]">
    <h1 class="text-4xl font-bold text-center py-4 text-white"></h1>
{{-- Card 1 --}}
<div class="allcards flex xl:flex-row flex-col w-full xl:gap-0 gap-14 items-center xl:justify-around">
    <div
    class="relative group cursor-pointer overflow-hidden duration-500 w-64 h-80 bg-zinc-800 text-gray-50 p-5">
    <div class="">
      <div
        class="group-hover:scale-110 w-full h-60 bg-orange-500 duration-500">
        <img class="xl:w-[12vw]  xl:ml-6 xl:py-6" src="{{ asset('img/fans.svg') }}" alt="">
      </div>
      <div
        class="absolute w-56 left-0 p-5 -bottom-16 duration-500 group-hover:-translate-y-12">
        <div
          class="absolute -z-10 left-0 w-64 h-28 opacity-0 duration-500 group-hover:opacity-50 group-hover:bg-orange-900"></div>
        <span class="text-xl font-bold">Our Team</span>
        <p class="group-hover:opacity-100 w-56 duration-500 opacity-0">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
  </div>
  {{-- Card 2 --}}
  <div
  class="relative group cursor-pointer overflow-hidden duration-500 w-64 h-80 bg-zinc-800 text-gray-50 p-5">
  <div class="">
    <div
      class="group-hover:scale-110 w-full h-60 bg-orange-500 duration-500">
      <img class="xl:w-[14vw]  xl:ml-1 xl:py-10" src="{{ asset('img/cowork1.svg') }}" alt="">
    </div>
    <div
      class="absolute w-56 left-0 p-5 -bottom-16 duration-500 group-hover:-translate-y-12">
      <div
        class="absolute -z-10 left-0 w-64 h-28 opacity-0 duration-500 group-hover:opacity-50 group-hover:bg-orange-900"></div>
      <span class="text-xl font-bold">Co-Working</span>
      <p class="group-hover:opacity-100 w-56 duration-500 opacity-0">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
    </div>
  </div>
</div>

{{-- Card 3 --}}
<div
class="relative group cursor-pointer overflow-hidden duration-500 w-64 h-80 bg-zinc-800 text-gray-50 p-5">
<div class="">
  <div
    class="group-hover:scale-110 w-full h-60 bg-orange-500 duration-500">
    <img class="xl:w-[8vw]  xl:ml-14 xl:py-4" src="{{ asset('img/loveit.svg') }}" alt="">
</div>
  <div
    class="absolute w-56 left-0 p-5 -bottom-16 duration-500 group-hover:-translate-y-12">
    <div
      class="absolute -z-10 left-0 w-64 h-28 opacity-0 duration-500 group-hover:opacity-50 group-hover:bg-orange-900"></div>
    <span class="text-xl font-bold">Events</span>
    <p class="group-hover:opacity-100 w-56 duration-500 opacity-0">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>
  </div>
</div>
</div>



</div>
{{-- End cards --}}</div>

<section class="bg-[#00003A] h-[50vh] xl:mt-0 mt-[150vh] flex items-center">
  <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
      <nav class="flex flex-wrap justify-center -mx-5 -my-2">  
        <div class="px-5 py-2">
              <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                  About
              </a>
          </div>
          <div class="px-5 py-2">
              <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                  Blog
              </a>
          </div>
          <div class="px-5 py-2">
              <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                  Team
              </a>
          </div>
          <div class="px-5 py-2">
              <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                  Pricing
              </a>
          </div>
          <div class="px-5 py-2">
              <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                  Contact
              </a>
          </div>
          <div class="px-5 py-2">
              <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                  Terms
              </a>
          </div>
      </nav>
      <div class="flex justify-center mt-8 space-x-6">
          <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Facebook</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
              </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Instagram</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
              </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Twitter</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
              </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">GitHub</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
              </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Dribbble</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
              </svg>
          </a>
      </div>
      <p class="mt-8 text-base leading-6 text-center text-gray-400">
          © 2024 Royal Team, Inc. All rights reserved.
      </p>
  </div>
</section>




</body>

</html>
