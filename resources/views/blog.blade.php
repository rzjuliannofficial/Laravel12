<x-layout>
    
    <x-slot:title> {{ $title }}</x-slot:title>

    <h1 class="text-lg">Welcome to My Blog</h1>
    <p>this time is {{ time() }}</p>
    <article class="py-4">
        <h3>Judul 1</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.</p>
    </article>
    <article>
        <h3>Judul 2</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.</p>
    </article>
</x-layout>