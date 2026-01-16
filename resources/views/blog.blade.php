<x-layout>

    <x-slot:title> {{ $title }}</x-slot:title>

    
    <article class="py-4 max-w-screen-md border-b border-gray-300">
        <h3 class="text-3xl font-bold tracking-tight">{{ $blog['title'] }}</h3>
        <div class="text-base text-gray-500">
            <a href="">{{ $blog['author'] }}</a> | {{ $blog['date'] }}
        </div>
        <p class="my-4 font-light">{{ $blog['body'] }}</p>
        <a href="/blogs" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blogs </a>
    </article>
    
    
</x-layout>