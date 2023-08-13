<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $article->title }}
        </h2>
    </x-slot>


<section class="">
    <div class="">
      
        <img src="{{ asset('/storage/' . $article->image) }}" alt="">

        <div>
            {{ $article->content }}
        </div>

        <div>
            {{ $article->price }} €
        </div>

      
    </div>

    
</section>


</x-app-layout>
@include('layouts.footer')