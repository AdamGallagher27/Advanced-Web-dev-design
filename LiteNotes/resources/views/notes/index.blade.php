{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>working?</h1>

        <h3><a href="{{ route('notes.create') }}">Create Note</a></h3>
        {{-- <h1>{{ $notes }}</h1> --}}

    {{-- @forelse ($notes as $note)
        <h3>{{ $note->title }}</h3>
        <p>{{ $note->text }}</p>
    @empty
        
    @endforelse --}}
    
{{-- </body>
</html> --}}



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading tight">
            {{ __("notes") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('notes.create') }}" class="btn-link btn-lg mb-2">+ New Note</a>
            @forelse ($notes as $note)
                <div class="my-6 p-6 bg-white border-b border-gray-200 mt-6 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('notes.show', $note->id) }}">{{ $note->title }}</a>
                    </h2>
                    <p class="mt-2">
                        {{ Str::limit($note->text, 200) }}
                    </p>
                    <span class="block mt-4 text-sm opacity-70">{{ $note->updated_at->diffForHumans() }}</span>
                </div>
            @empty
            <p>You have no notes yet.</p>
            @endforelse
            {{$notes->links()}}
        </div>
    </div>
</x-app-layout>