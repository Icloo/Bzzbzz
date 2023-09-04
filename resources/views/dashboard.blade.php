<x-app-layout>




    <div class="dashboard">

        <div class="espaceur"></div>
        <div class="espaceur"></div>

        <h2 class="centrer">DASHBOARD</h2>

        <div class="espaceur"></div>
        <div class="espaceur"></div>

        <div class="">

            @if(session('success'))
            {{session('success')}}
            @endif


            @if (auth()->user()->isAdmin == 'oui')


            <h2 class="centrer">FICHES PRODUITS</h2>
            <div class="qsn_famille_liste">
                @foreach ($articles as $article)

                <div class="max-w-sm p-6 bg-black border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white-900 dark:text-white">{{ $article->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-white-700 dark:text-white-400">{{ $article->content }}</p>
                    <a href="{{ route('articles.edit', $article) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Editer
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                        <form action="{{ route('articles.destroy',$article)}}" method="post" id="destroy-article-form">
                            @csrf
                            @method('delete')
                            <button type="submit">Supprimer</button>
                        </form>
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

                @endforeach
            </div>

            <div class="espaceur"></div>



            <h2 class="centrer">ACTUALITES</h2>
            <div class="qsn_famille_liste">
                @foreach ($posts as $post)

                <div class="max-w-sm p-6 bg-black border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white-900 dark:text-white">{{ $post->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-white-700 dark:text-gray-400">{{ $post->content }}</p>
                    <a href="{{ route('posts.edit', $post) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Editer
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                        <form action="{{ route('posts.destroy',$post)}}" method="post" id="destroy-post-form">
                            @csrf
                            @method('delete')
                            <button type="submit">Supprimer</button>
                        </form>
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>


                @endforeach
            </div>

            @endif

        </div>

        <div class="espaceur"></div>
        <div class="espaceur"></div>

    </div>
</x-app-layout>
@include('layouts.footer')