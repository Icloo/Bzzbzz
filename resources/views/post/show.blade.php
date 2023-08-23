<x-app-layout>

    <div class="post">

    <div class="espaceur"></div>
    <div class="espaceur"></div>

    <div class="post_ensemble testanim_service_1 animate">
    
        <h2 class="centrer"> {{ $post->title }}</h2>

        <div class="espaceur"></div>

        <img src="{{ asset('/storage/' . $post->image) }}" alt="miniature article" class="miniature_article">

        <div class="espaceur"></div>

        <div class="post_contenu">
            {{ $post->content }}
        </div>

        </div>

        <div class="espaceur"></div>
        <div class="espaceur"></div>

    </div>
</x-app-layout>