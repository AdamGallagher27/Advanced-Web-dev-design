<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>working?</h1>

        {{-- <h1>{{ $notes }}</h1> --}}

    @forelse ($notes as $note)
        <h3>{{ $note->title }}</h3>
        <p>{{ $note->text }}</p>
    @empty
        
    @endforelse
    
</body>
</html>