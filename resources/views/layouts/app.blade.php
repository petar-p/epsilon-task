<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    @yield('title')

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <body class="antialiased font-inter bg-gray-100">
    <div>
      <div class="bg-gray-800 pb-64">
        <nav class="bg-gray-800">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="border-b border-gray-700">
              <div class="flex items-center justify-between h-16 px-4 sm:px-0">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <img class="h-8 w-auto" src="{{ config('app.url') }}/images/epsilon-logo.png" alt="Epsilon logo">
                  </div>
                  <div class="hidden md:block">
                    <div class="ml-2 flex items-baseline">
                    <a href="{{ route('cloud.services') }}" class="px-3 py-2 rounded-md text-lg font-medium text-white bg-transparent focus:outline-none focus:text-white">Epsilon task</a>                      
                    </div>
                  </div>
                </div>
                
                <div class="-mr-2 flex md:hidden">
                  <!-- Mobile menu button -->
                  <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
    
          <!--
            Mobile menu, toggle classes based on menu state.
    
            Open: "block", closed: "hidden"
          -->
          <div class="hidden border-b border-gray-700 md:hidden">
            <div class="px-2 py-3 sm:px-3">
            <a href="{{ route('cloud.services') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-transparent focus:outline-none focus:text-white">Epsilon task</a>              
            </div>            
          </div>
        </nav>        
      </div>    
      <main class="-mt-64">        
        @yield('content')
      </main>
    </div>      
  </body>
</html>
