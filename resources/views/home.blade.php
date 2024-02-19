@php
  // test
  $categoryList = [
    [
      'id' => 1,
      'img' => '/images/test/image 19.png',
      'title' => 'Machinery',
      'description' => 'Make your product more eye-catching with a touch of illustration'
    ],
    [
      'id' => 2,
      'img' => '/images/test/image 22.png',
      'title' => 'Cleaning Trolley',
      'description' => 'Make your product more eye-catching with a touch of illustration'
    ],
    [
      'id' => 3,
      'img' => '/images/test/image 32.png',
      'title' => 'Cleaning tools & Equipment',
      'description' => 'Make your product more eye-catching with a touch of illustration'
    ]
  ];
@endphp

<x-layout noDecorator>
  <div class="px-24 relative lg:h-[600px] py-[106px]">
    <div><i class="fa-regular fa-circle-check"></i> Representing Since 1989</div>
    <h1 class="font-semibold text-[52px] text-[theme(colors.blue)] py-2 lg:w-[63%]">The region's biggest selection of cleaning solutions</h1>
    <p class="lg:w-[500px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>

    <div class="flex mt-6">
      <a href="/products" class="bg-[theme(colors.blue)] rounded-[28px] px-12 py-6 text-sm font-semibold text-white hover:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
        Our Products
      </a>
      <a href="/about-us" class="bg-gray-800 rounded-[28px] ml-4 px-12 py-6 text-sm font-semibold text-white hover:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
        About Us
      </a>
    </div>

    <div class="flex">
      <img src="/images/home/Mask group.png" alt="" class="absolute bottom-0 right-0">
    </div>
  </div>

  <div class="pt-16 bg-[#E5F8FF]">
    <div class="pl-32 py-24 flex">
      <img src="/images/home/Group 59.png" alt="" class="py-4">
      <div class="pl-20">
        <h2 class="font-bold text-[46px] lg:max-w-[500px] leading-[52px]">Your Trusted Cleaning Supplies & Equipment Provider.</h2>
        <ul class="list-image-[url(/images/checkmark.png)] mt-8">
          <li class="py-3 pl-6 -ml-6 ist-inside lg:max-w-[500px] flex flex-col">
            <h3 class="text-medium text-lg">Market Leaders</h3>
            <p class="text-neutral-400">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
          </li>
          <li class="py-3 pl-6 -ml-6 ist-inside lg:max-w-[500px] flex flex-col">
            <h3 class="text-medium text-lg">We are Committed</h3>
            <p class="text-neutral-400">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
          </li>
          <li class="py-3 pl-6 -ml-6 ist-inside lg:max-w-[500px] flex flex-col">
            <h3 class="text-medium text-lg">Trusted Professionals</h3>
            <p class="text-neutral-400">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <x-subpanel title="The Cleaning Pioneers" more="View All Categories">
    <x-slot name="header">
      <div class="font-semibold text-2xl text-[theme(colors.blue)]">Main Categories</div>
    </x-slot>

    <x-slot name="description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
    </x-slot>

    <div class="-mx-[64px] py-4">
      <div id="carouselPanel"
        class="relative"
        data-te-carousel-init
        data-te-ride="carousel">
        <!--Carousel items-->
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']"
          role="tablist"
          data-te-nav-ref
        >
          @foreach ($categoryList as $category)
            <div class="carousel-item relative {{ $loop->first ? '' : 'hidden' }} float-left -mr-[100%] w-full transition-transform duration-[1200ms] ease-in-out motion-reduce:transition-none"
              data-te-carousel-item
              data-te-interval="8000"
              {{ $loop->first ? 'data-te-carousel-active' : ''}}
            >
              <div class="grid grid-cols-4 gap-14 bg-white" role="presentation">
                <div class="category rounded-[30px] hover:border-2 hover:border-[theme(colors.blue)]"
                  data-te-toggle="pill"
                  data-te-target="#category_{{ $category['id'] }}"
                  role="tab"
                  aria-controls="tabs-messages"
                  aria-selected="false"
                >
                  <x-items.category :category="$category" />
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <!--Carousel controls - prev item-->
        <button
          class="absolute left-0 top-2/4 z-[1] flex h-16 w-16 -translate-y-2/4 items-center justify-center border-0 p-0 text-center text-[theme(colors.blue)] duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:bg-[theme(colors.blue)] focus:text-white focus:no-underline"
          type="button"
          data-te-target="#carouselPanel"
          data-te-slide="prev">
          <i class="fa-solid fa-chevron-left"></i>
        </button>
        <!--Carousel controls - next item-->
        <button
          class="absolute right-0 top-2/4 z-[1] flex w-16 h-16 -translate-y-2/4 items-center justify-center border-0 p-0 text-center text-[theme(colors.blue)] duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:bg-[theme(colors.blue)] focus:text-white focus:no-underline"
          type="button"
          data-te-target="#carouselPanel"
          data-te-slide="next">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
      </div>

      <div class="mb-6">
        @foreach ($categoryList as $category)
          <div
            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="category_{{ $category['id'] }}"
            role="tabpanel"
            aria-labelledby="tabs-category_{{ $category['id'] }}-tab">
            {{ $category['title'] }}
          </div>
        @endforeach
      </div>
    </div>
  </x-subpanel>

  @push('styles')
    <style>
      [data-te-carousel-active][data-te-carousel-item-end],
      [data-te-carousel-item-next] {
        transform: translateX(25%);
      }
      [data-te-carousel-active][data-te-carousel-item-start],
      [data-te-carousel-item-prev] {
        transform: translateX(-25%);
      }
      [data-te-carousel-item-start],
      [data-te-carousel-item-end] {
        transform: translateX(0);
      }
    </style>
  @endpush

  @push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
  @endpush
</x-layout>