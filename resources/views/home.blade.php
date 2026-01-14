<x-layout>
  <x-slot:title> {{ $title }}</x-slot:title>
  <h1 class="text-lg">Welcome to My HomePage {{ $name }}</h1>
  <p>this time is {{ time() }}</p>
</x-layout>