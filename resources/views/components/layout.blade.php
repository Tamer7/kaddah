<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="cleaning materials, cleaning products, cleaning supplies, cleaning equipment" />
  <meta name="description" content="">
  <meta name="author" content="D-THEMES">

  <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @csrf

  <title>{{ $title }}</title>
</head>
<body>
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between py-4 px-9" aria-label="Global">
      <div class="flex lg:flex-1 p-21">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Cleany</span>
          <img src="{{ asset('images/about/image 37.png') }}" alt="" class="lg:pl-20 md:pl-6">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" id="open_mobile_menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-28">
        <a href="/products" {{ $segment_1 == null ? 'data-te-nav-active' : '' }} class="text-sm leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Products</a>
        <a href="/brands" {{ $segment_1 === "brands" ? 'data-te-nav-active' : '' }} class="text-sm leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Brands</a>
        <a href="/about-us" {{ $segment_1 === "about-us" ? 'data-te-nav-active' : '' }} class="text-sm leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">About</a>
        <a href="/blogs" {{ $segment_1 === "blogs" ? 'data-te-nav-active' : '' }} class="text-sm leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Blog</a>
        <a href="/events" {{ $segment_1 === "events" ? 'data-te-nav-active' : '' }} class="text-sm leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Events</a>
        <a href="/contact-us" {{ $segment_1 === "contact-us" ? 'data-te-nav-active' : '' }} class="text-sm leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Contact</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden invisible" id="mobile_menu" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on `lide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white py-4 px-9 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Cleany</span>
            <img src="{{ asset('images/about/image 37.png') }}" alt="">
          </a>
          <button type="button" id="close_mobile_menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="/products" {{ $segment_1 == null ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Products</a>
              <a href="/brands" {{ $segment_1 === "brands" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Brands</a>
              <a href="/about-us" {{ $segment_1 === "about-us" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">About</a>
              <a href="/blogs" {{ $segment_1 === "blogs" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Blog</a>
              <a href="/events" {{ $segment_1 === "events" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Events</a>
              <a href="/contact-us" {{ $segment_1 === "contact-us" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="relative isolate pt-24">
    <div class="absolute top-0 left-0 -translate-x-1/4 -translate-y-16 scale-50 md:translate-x-0 md:translate-y-0 md:scale-100">
      <img src="{{ asset('images/about/Vector-left.png') }}" alt="">
    </div>

    {{ $slot }}

    <div class="absolute top-[17px] right-0 translate-x-1/4 -translate-y-16 scale-50 md:translate-x-0 md:translate-y-0 md:scale-100">
      <img src="{{ asset('images/about/Vector-right.png') }}" alt="">
    </div>
  </main>

  <footer class="pt-[72px] pb-[42px] bg-[#e5f8ff]">
    <div class="lg:w-[985px] lg:px-0 px-8 mx-auto">
      <div class="divide-y">
        <div class="flex flex-col lg:flex-row items-center pb-[40px] text-gray-600">
          <img src="{{ asset('images/about/image 37.png') }}" alt="" class="lg:pr-20 lg:pb-0 pb-8">
          <div class="flex justify-between items-center w-full">
            <span>Products</span>
            <span>Brands</span>
            <span>About</span>
            <span>Blog</span>
            <span>Events</span>
            <span>Contract</span>
          </div>
        </div>
        <div class="flex flex-col lg:flex-row text-center justify-between items-center pt-[44px] text-neutral-400">
          <div class="flex lg:gap-10 gap-3">
            <span>© 2024 Kaddah </span>
            <span>Privacy Policy</span>
            <span>Cookies Policy</span>
            <span>Terms of Service</span>
          </div>
          <div class="flex gap-8 pt-10 lg:pt-0">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-square-instagram"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    const mobileMenu = document.getElementById('mobile_menu');
    document.getElementById('open_mobile_menu').addEventListener('click', () => {
      mobileMenu.classList.remove('invisible')
    })
    document.getElementById('close_mobile_menu').addEventListener('click', () => {
      mobileMenu.classList.add('invisible');
    })
  </script>
  @stack('scripts')
  
</body>
</html>