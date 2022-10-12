<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('notes.store') }}" method="POST">

                    {{-- every form needs this to prevent attacks --}}
                    @csrf
                    <x-text-input type="text" name="title" class="w-full " placeholder="Title"></x-text-input>
                    <x-textarea name="text" rows="10" class="w-full mt-6" placeholder="Start typing here..."></x-textarea>
                    <x-primary-button class="mt-6">Save Note</x-primary-button>
                </form>
                
            </div>
        </div>
    </div>
</x-app-layout>