<x-app-layout>
    <x-slot name="header">
        <h2>
            Editer {{ $post->title }}
        </h2>
    </x-slot>

    <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">

    <div class="my-5">
            @foreach($errors->all() as $error)
                <span class="block text-red-500">{{ $error }}</span>
            @endforeach
        </div>
        @method('put')
    @csrf
        <label for="title">Titre du post</label>
        <input id="title" name="title" value="{{ $post->title }}" />

        <label for="content">Contenu du post</label>
        <textarea id="content" name="content"  value="{{ $post->content }}" ></textarea>

        <label for="image">Image du post</label>
        <input id="image" type="file" name="image" />

        <label for="category">Categorie du post</label>

        <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $post->category_id === $category->id ?  'selected' : ''}}>{{ $category->name }}</option>
            @endforeach
        </select>


        <button type="submit" class="inline-flex justify-center rounded-md">Modifier</button>

    </form>


</x-app-layout>