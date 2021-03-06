@extends('layouts.app')

@section('content')
  @if (session('status'))
    <div
      class="alert alert-success"
      role="alert"
    >
      {{ session('status') }}
    </div>
  @endif

  <div class="flex flex-col w-full md:w-4/6 sm:h-auto mb-16 md:mt-0">
    <div class="mt-16 ml-16">
      <p class="text-4xl text-gray-700">Próximas reuniões</p>
    </div>
    <div class="mt-16 mx-16 ">
      <card-meeting :actions="['{{route('agenda.all.next')}}']"/>
    </div>
  </div>
  <div class="flex flex-col w-full h-full min-h-screen md:w-2/6 bg-gray-900 items-center">
    <div class="mx-16 md:mx-10 flex flex-col items-center w-full h-full">
      <right-sidebar :actions="['{{route('agenda.all')}}']"></right-sidebar>
    </div>
  </div>
@endsection
