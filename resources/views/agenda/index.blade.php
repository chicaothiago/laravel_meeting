@extends('layouts.app')

@section('content')
  <div class="flex flex-col h-full mb-16 md:mt-0 w-full max-w-full">
    <div class="mt-16 pl-16">
      <p class="text-4xl text-gray-700">Agenda de Reuniões</p>
    </div>

    @include('layouts.components.errors')
    @include('layouts.components.status')

    <div class="mt-16 pl-16 flex flex-col w-full max-w-full">
      <agenda-index
        class="w-full"
        :actions="{{ $actions->toJson() }}"
      ></agenda-index>
    </div>
  </div>
@endsection
