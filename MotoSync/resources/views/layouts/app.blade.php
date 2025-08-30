@props(['title' => '', 'footerLinks' => ''])

<x-base-layout :$title>
    <x-layouts.header>

    </x-layouts.header>
    {{ $slot }}
    <footer>
        {{ $footerLinks }}
            <a href="">Link 1</a>
            <a href="">Link 2</a>
    </footer>
</x-base-layout>


