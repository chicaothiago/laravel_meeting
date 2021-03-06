@extends('layouts.app')

@section('content')
  <div class="flex flex-col h-full mb-16 md:mt-0 w-full">
    <div class="mt-16 ml-16">
      <p class="text-4xl text-gray-700">Contatos</p>
    </div>

    @include('layouts.components.errors')
    @include('layouts.components.status')

    <div class="mt-16 flex flex-col  w-full">
      <contact-index :actions="[ '{{route('contact.store')}}', '{{ route('contact.update') }}', '{{ route('contact.destroy') }}' ]"></contact-index>
    </div>
  </div>
@endsection
