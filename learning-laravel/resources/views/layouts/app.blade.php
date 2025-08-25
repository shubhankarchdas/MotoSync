@props(['title' => ''])

<x-base-layout :$title>
    @include('layouts.partials.header')
    {{ $slot }}
    <footer>
        @section('footerLinks')
            <a href="">Link 1</a>
            <a href="">Link 2</a>
        @show
    </footer>
</x-base-layout>



