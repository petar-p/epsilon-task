@extends('layouts.app')

@section('title')
  <title>CloudLX services | Epsilon task </title>
@endsection

@section('content')

<header class="py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl leading-9 font-bold text-white">
      CloudLX services
    </h1>            
  </div>
</header>
<div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">          
  <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6">            
    <div class="rounded-lg">
      <div class="flex flex-col">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
          <div class="align-middle inline-block min-w-full overflow-hidden sm:rounded border-b border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-300">
                <tr>
                  <th class="px-6 py-3 bg-gray-50 text-left font-bold text-sm leading-4 text-gray-800 tracking-wider">
                    Name
                  </th>
                  <th class="px-6 py-3 bg-gray-50 text-left font-bold text-sm leading-4 text-gray-800 tracking-wider">
                    Type
                  </th>
                  <th class="px-6 py-3 bg-gray-50 text-left font-bold text-sm leading-4 text-gray-800 tracking-wider">
                    Speed
                  </th>
                  <th class="px-6 py-3 bg-gray-50 text-left font-bold text-sm leading-4 text-gray-800 tracking-wider">
                    Expires
                  </th>
                  <th class="px-6 py-3 bg-gray-50 text-center font-bold text-sm leading-4 text-gray-800 tracking-wider">
                    Status
                  </th>
                  <th class="px-6 py-3 bg-gray-50 text-center font-bold text-sm leading-4 text-gray-800 tracking-wider">
                    View
                  </th>                          
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @foreach($services['services'] as $service)
                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-indigo-700">
                    {{ $service['name'] }}
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-600">
                    {{ $service['type'] }}
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-600">
                    {{ $service['bandwidth'] }}
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-600">
                    {{ \Carbon\Carbon::parse($service['expires'])->toDayDateTimeString() }}
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-center text-sm leading-5 text-gray-600">
                    <span class="text-green-500">{{ $service['status'] }}</span>
                  </td>
                  <td class="px-6 py-2 whitespace-no-wrap text-center text-sm leading-5 font-medium">
                    <form action="{{ route('cloud.service.details') }}" method="post">
                      @csrf
                      <input type="hidden" name="service_id" value="{{ $service['id'] }}">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-indigo-600 hover:text-white bg-indigo-100 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        View
                      </button>
                    </form>                
                  </td>
                </tr>
                @endforeach            
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection