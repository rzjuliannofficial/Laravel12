<x-layout>

    <x-slot:title> {{ $title }}</x-slot:title>

    @foreach ($blogs as $blog)
        <article class="py-4 max-w-screen-md border-b border-gray-300">
        <h3 class="text-3xl font-bold tracking-tight">{{ $blog['title'] }}</h3>
        <div class="text-base text-gray-500">
            <a href="">{{ $blog['author'] }}</a> | {{ $blog['date'] }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($blog['body'], 100) }}</p>
        <a href="/blogs/{{ $blog['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach
    
</x-layout>