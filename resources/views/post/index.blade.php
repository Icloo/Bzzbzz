<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Blog') }}
        </h2>
    </x-slot>

    @foreach ($posts as $post)
        <h2>aeoifjzfoij</h2>
        <button><a href="{{ route('posts.show', $post) }}">Voir plus</a></button>
    @endforeach


</x-app-layout>