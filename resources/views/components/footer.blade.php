<footer class="pt-[72px] pb-[42px] bg-[#e5f8ff]">
    <div class="lg:w-[985px] lg:px-0 px-8 mx-auto">
      <div class="divide-y">
        <div class="flex flex-col lg:flex-row items-center pb-[40px] text-gray-600">
          <img src="{{ asset('images/about/image 37.png') }}" alt="" class="lg:pr-20 lg:pb-0 pb-8">
          <div class="flex justify-between items-center w-full">
            <a href="/categories" {{ request()->segment(1) == "categories" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Products</a>
            <a href="/brands" {{ request()->segment(1) === "brands" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Brands</a>
            <a href="/about-us" {{ request()->segment(1) === "about-us" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">About</a>
            <a href="/blogs" {{ request()->segment(1) === "blogs" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Blog</a>
            <a href="/events" {{ request()->segment(1) === "events" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Events</a>
            <a href="/contact-us" {{ request()->segment(1) === "contact-us" ? 'data-te-nav-active' : '' }} class="text-lg leading-6 hover:text-sky-300 data-[te-nav-active]:text-[theme(colors.blue)]">Contact</a>
          </div>
        </div>
        <div class="flex flex-col lg:flex-row text-center justify-between items-center pt-[44px] text-neutral-400">
          <div class="flex lg:gap-10 gap-3">
            <span>© <?php echo date("Y"); ?> Kaddah </span>
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
