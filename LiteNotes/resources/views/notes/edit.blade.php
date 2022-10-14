<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('notes.update', $note) }}" method="POST">

                    {{-- every form needs this to prevent attacks --}}
                    @method("put")
                    @csrf
                    <x-text-input type="text" name="title" class="w-full " placeholder="Title" :value="@old('title', $note->title)"></x-text-input>
                    <x-textarea name="text" rows="10" class="w-full mt-6" placeholder="Start typing here..." :value="@old('text', $note->text)"></x-textarea>
                    <x-primary-button class="mt-6">Edit Note</x-primary-button>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>