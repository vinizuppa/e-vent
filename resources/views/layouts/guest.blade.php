<x-base-layout>
    <x-navbar />
    <main class="container-fluid mt-3">
        {{ $slot }}
    </main>
    <x-slot name="js">
        <!-- Google AdSense -->
        <script data-ad-client="ca-pub-8771460495164377" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </x-slot>
</x-base-layout>
