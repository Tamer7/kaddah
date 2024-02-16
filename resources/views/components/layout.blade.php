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
    <nav class="flex items-center justify-between p-9" aria-label="Global">
      <div class="flex lg:flex-1 p-21">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Cleany</span>
          <span class="font-semibold text-xl pl-20">Cleany</span>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-28">
        <a href="#" class="text-sm leading-6 hover:text-[theme(colors.blue)]">Product</a>
        <a href="#" class="text-sm leading-6 hover:text-[theme(colors.blue)]">Brands</a>
        <a href="#" class="text-sm leading-6 hover:text-[theme(colors.blue)]">About</a>
        <a href="#" class="text-sm leading-6 hover:text-[theme(colors.blue)]">Blog</a>
        <a href="#" class="text-sm leading-6 hover:text-[theme(colors.blue)]">Events</a>
        <a href="#" class="text-sm leading-6 hover:text-[theme(colors.blue)]">Contract</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-9 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Cleany</span>
            <span class="font-semibold text-xl">Cleany</span>
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:bg-gray-50">Products</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:bg-gray-50">Brands</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:bg-gray-50">About</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:bg-gray-50">Blog</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:bg-gray-50">Events</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:bg-gray-50">Contract</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="relative isolate pt-24">
    {{ $slot }}
  </main>

  <footer class="pt-[72px] pb-[42px] px-[220px] bg-[#e5f8ff]">
    <div class="divide-y">
      <div class="flex justify-between items-center pb-[40px] text-gray-600">
        <img src="{{ asset('images/about/image 37.png') }}" alt="">
        <span>Products</span>
        <span>Brands</span>
        <span>About</span>
        <span>Blog</span>
        <span>Events</span>
        <span>Contract</span>
      </div>
      <div class="flex justify-between items-center pt-[44px] text-neutral-400">
        <div class="flex gap-10">
          <span>© 2024 Kaddah </span>
          <span>Privacy Policy</span>
          <span>Cookies Policy</span>
          <span>Terms of Service</span>
        </div>
        <div class="flex gap-8">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-square-instagram"></i>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
  @stack('scripts')
  
</body>
</html>