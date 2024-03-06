<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between py-4 px-9" aria-label="Global">
      <div class="flex lg:flex-1 p-21">
        <a href="/" class="-m-1.5 p-1.5">
          <h1 class="sr-only">Kaddah</h1>
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
        <a href="/categories" {{ request()->segment(1) == "categories" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Products</a>
        <a href="/brands" {{ request()->segment(1) === "brands" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Brands</a>
        <a href="/about-us" {{ request()->segment(1) === "about-us" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">About</a>
        <a href="/blogs" {{ request()->segment(1) === "blogs" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Blog</a>
        <a href="/events" {{ request()->segment(1) === "events" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Events</a>
        <a href="/contact-us" {{ request()->segment(1) === "contact-us" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Contact</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-start">
        <form class="group relative mb-0 flex flex-wrap items-stretch ml-16" method="GET" action="{{ route('products.index') }}">
          <div class="rounded-full text-sm bg-[theme(colors.blue)] text-white px-2 py-1 group-hover:hidden">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
          <input id="te-search-input" name="search" autocomplete="off" type="search" class="hidden group-hover:block focus:shadow-te-blue relative m-0 inline-block w-[1%] min-w-[225px] flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1 text-base font-normal text-gray-700 outline-none transition duration-300 ease-in-out focus:text-gray-700"
            placeholder="Search products"
            value="{{ Request::get('search') }}"
          >
        </form>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden invisible" id="mobile_menu" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on `lide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white py-4 px-9 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Kaddah</span>
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
              <a href="/categories" {{ request()->segment(1) == "categories" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Products</a>
              <a href="/brands" {{ request()->segment(1) === "brands" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Brands</a>
              <a href="/about-us" {{ request()->segment(1) === "about-us" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">About</a>
              <a href="/blogs" {{ request()->segment(1) === "blogs" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Blog</a>
              <a href="/events" {{ request()->segment(1) === "events" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Events</a>
              <a href="/contact-us" {{ request()->segment(1) === "contact-us" ? 'data-te-nav-active' : '' }} class="-mx-3 block rounded-lg px-3 py-2 text-base leading-7 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
