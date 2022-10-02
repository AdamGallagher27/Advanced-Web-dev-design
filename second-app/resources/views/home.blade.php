{{-- blade layout inheritence syntax --}}

{{-- @extends('layouts/base')  

@section('content')
    <p>This was sent from home</p>
@endsection

@section('name', 'Adam') --}}


{{-- blade compenent syntax --}}

<x-base>

   <x-slot name="name">
        Adam
   </x-slot>

   <x-slot name="content">
        <p>This was sent from home</p>
   </x-slot>

</x-base>
