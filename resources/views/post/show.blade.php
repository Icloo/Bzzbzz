<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ $post->title }}
        </h2>
    </x-slot>

    <img src="{{ asset('/storage/' . $post->image) }}">

    <div>
        {{ $post->content }}
    </div>

</x-app-layout>