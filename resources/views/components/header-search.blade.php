@push('styles')

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
@endpush

<header class="header bg-white shadow-md py-4 fixed top-0 z-50 w-full">

    <!-- Mobile menu toggle button -->
    <button id="mobileMenuToggle" aria-expanded="false" aria-controls="mobileMenu" class="lg:hidden">
        <!-- Add your burger icon or similar icon here -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>

    <!-- Mobile menu -->
    <nav id="mobileMenu" class="hidden lg:hidden" aria-hidden="true">
        <div class="container mx-auto px-4 py-2">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/brands">Brands</a></li>
                <li><a href="/media/blogs">Blog</a></li>
                <li><a href="/media/events">Press</a></li>
                <li><a href="/contact-us">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <div class="hidden lg:flex justify-between items-center container mx-auto px-4 py-2">

        <div class="logo ml-12">
            <a href="/">
                <img src="{{ asset('images/logo-new.png') }}" alt="logo" class="w-28 h-30" />
            </a>
        </div>

        <form method="GET" action="{{ route('product.search') }}" id="search-form" class="w-1/2 mx-auto relative border-black border-2">

            <input type="text" name="search" placeholder="Search for a product …" class="w-full px-4 py-3 text-xl border-black rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 h-24">

            <button type="submit" class="absolute right-3 top-0 flex items-center justify-center h-24">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l4.56 4.56a1.5 1.5 0 01-2.12 2.12L13 17"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5a6 6 0 100 12 6 6 0 000-12z"></path>
                </svg>
            </button>

        </form>

        <x-shopping-cart />

    </div>

    <nav class="hidden lg:flex justify-center items-center container mx-auto px-4 py-6 text-lg font-semibold">

        {{ menu('head', 'components.menu-dropdown') }}

        <ul class="flex">
            <li class="list-none mx-10 hover:text-blue"><a href="/">Home</a></li>
            <li class="list-none mx-10 hover:underline-offset-2"><a href="/about-us">About Us</a></li>
            <li class="list-none mx-10"><a href="/brands">Brands</a></li>
            <li class="list-none mx-10"><a href="/media/blogs">Blog</a></li>
            <li class="list-none mx-10"><a href="/media/events">Press</a></li>
            <li class="list-none mx-10"><a href="/contact-us">Contact Us</a></li>
        </ul>
    </nav>



</header>

@push('scripts')
    <!-- Include Alpine.js libary -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <script>
        // Function to toggle mobile menu visibility
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
            const ariaExpanded = mobileMenu.getAttribute('aria-expanded') === 'true' ? 'false' : 'true';
            mobileMenu.setAttribute('aria-expanded', ariaExpanded);
            mobileMenu.setAttribute('aria-hidden', ariaExpanded === 'true' ? 'false' : 'true');
        }

        // Add event listener to the mobile menu toggle button
        document.getElementById('mobileMenuToggle').addEventListener('click', toggleMobileMenu);
    </script>

@endpush
