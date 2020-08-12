@extends('layouts.app')

@section('title')
  <title>CloudLX services | Epsilon task </title>
@endsection

@section('content')

<header class="py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div>
      <span class="inline-block"><a href="{{ route('cloud.services') }}" class="text-gray-500 hover:text-gray-300 text-base underline cursor-pointer">Services</a></span>
      <span class="inline-block mx-1 text-gray-500 text-base">/</span>
      <span class="inline-block text-gray-300 text-base">View Service</span>
    </div> 
    <div class="flex item-center justify-between mt-8">
      <h1 class="text-3xl leading-9 font-bold text-white">
        {{ $service['name'] }}
      </h1>
      <span class="inline-block bg-green-400 text-base text-white rounded-lg px-4 py-2">{{ $service['status'] }}</span>
    </div>        
  </div>
</header>
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">          
  <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6">            
    <div class="rounded-lg">
      <div class="flex flex-col">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
          <div class="align-middle inline-block min-w-full overflow-hidden sm:rounded">
            <div class="flex items-center justify-between">
              <div class="text-center p-4">
                <div>
                  <img src="{{ config('cloud_api.url') }}{{ $service['port']['datacentre_logo'] }}" alt="" class="inline-block h-24 w-auto">
                </div>
                <div class="my-4"><span class="inline-block bg-green-400 text-sm text-white rounded-lg px-4 py-1">{{ $service['port']['status'] }}</span></div>
                <div class="text-lg text-gray-700 font-bold">{{ $service['port']['name'] }}</div>
                <div>
                  <span class="inline-block text-sm text-gray-700 font-medium mr-1">Datacenter:</span>
                  <span class="inline-block text-sm text-gray-500 font-medium">{{ $service['port']['datacentre_datacentre_name'] }}, {{ $service['port']['datacentre_city'] }}</span>
                </div>
                <div>
                  <span class="inline-block text-sm text-gray-700 font-medium mr-1">Speed:</span>
                  <span class="inline-block text-sm text-gray-500 font-medium">{{ $service['port']['speed'] }}</span>
                </div>
              </div>

              @if(isset($service['b_port']))
              <div class="px-8">
                <div class="py-4 dots">&nbsp;</div>
              <div class="text-sm text-gray-500 font-medium">C-VLANs {{ $service['vlan'] }}</div>
              </div>
              @endif

              @if(isset($service['b_port']))
              <div class="text-center p-4">
                <div>
                  <img src="{{ config('cloud_api.url') }}{{ $service['b_port']['datacentre_logo'] }}" alt="" class="inline-block h-24 w-auto">
                </div>
                <div class="my-4"><span class="inline-block bg-green-400 text-sm text-white rounded-lg px-4 py-1">{{ $service['b_port']['status'] }}</span></div>
                <div class="text-lg text-gray-700 font-bold">{{ $service['b_port']['name'] }}</div>
                <div>
                  <span class="inline-block text-sm text-gray-700 font-medium mr-1">Datacenter:</span>
                  <span class="inline-block text-sm text-gray-500 font-medium">{{ $service['b_port']['datacentre_datacentre_name'] }}, {{ $service['b_port']['datacentre_city'] }}</span>
                </div>
                <div>
                  <span class="inline-block text-sm text-gray-700 font-medium mr-1">Speed:</span>
                  <span class="inline-block text-sm text-gray-500 font-medium">{{ $service['b_port']['speed'] }}</span>
                </div>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div>    
    <div class="mt-8 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6 h-24 flex items-center">          
          <div class="mx-auto text-center text-lg leading-8 font-semibold text-gray-700">
            {{ $service['type'] }}
          </div>
        </div>
        <div class="bg-gray-200 px-4 py-4 sm:px-6">
          <div class="text-sm leading-5 text-center">
            <span class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
              Service type
            </span>
          </div>
        </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6 h-24 flex items-center">          
          <div class="mx-auto text-center text-lg leading-8 font-semibold text-gray-700">
            <div>{{ $service['port']['datacentre_city'] }}</div>
            @if(isset($service['b_port']))
              <div>{{ $service['b_port']['datacentre_city'] }}</div>
            @endif
          </div>
        </div>
        <div class="bg-gray-200 px-4 py-4 sm:px-6">
          <div class="text-sm leading-5 text-center">
            <span class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
              Location
            </span>
          </div>
        </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6 h-24 flex items-center">          
          <div class="mx-auto text-center text-lg leading-8 font-semibold text-gray-700">
            {{ $service['bandwidth'] }}
          </div>
        </div>
        <div class="bg-gray-200 px-4 py-4 sm:px-6">
          <div class="text-sm leading-5 text-center">
            <span class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
              Speed
            </span>
          </div>
        </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6 h-24 flex items-center">          
          <div class="mx-auto text-center text-lg leading-8 font-semibold text-gray-700">
            {{ $service['protected'] }}
          </div>           
        </div>
        <div class="bg-gray-200 px-4 py-4 sm:px-6">
          <div class="text-sm leading-5 text-center">
            <span class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
              Network protection
            </span>
          </div>
        </div>
      </div>
      
      
    </div>
  </div>
  
</div>
@endsection