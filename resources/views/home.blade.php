@php
  // test
  $categoryList = [
    [
      'id' => 1,
      'img' => '/images/test/image 19.png',
      'title' => 'Machinery',
      'description' => 'Make your product more eye-catching with a touch of illustration',
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

  $prouductList = [
    [
      'id' => 1,
      'img' => '/images/test/Team5.png',
      'title' => 'Mop Head with Plastalsgkerlksd',
      'type1' => 'AKC',
      'type2' => 'CM34-SET',
    ],
    [
      'id' => 2,
      'img' => '/images/test/Team5.png',
      'title' => 'Mop Head with Plastalsgkerlksd',
      'type1' => 'AKC',
      'type2' => 'CM34-SET',
    ],
    [
      'id' => 3,
      'img' => '/images/test/Team5.png',
      'title' => 'Mop Head with Plastalsgkerlksd',
      'type1' => 'AKC',
      'type2' => 'CM34-SET',
    ],
    [
      'id' => 4,
      'img' => '/images/test/Team5.png',
      'title' => 'Mop Head with Plastalsgkerlksd',
      'type1' => 'AKC',
      'type2' => 'CM34-SET',
    ],
    [
      'id' => 5,
      'img' => '/images/test/Team5.png',
      'title' => 'Mop Head with Plastalsgkerlksd',
      'type1' => 'AKC',
      'type2' => 'CM34-SET',
    ],
  ];
@endphp

<x-layout noDecorator>
  <div class="lg:px-24 px-8 relative lg:h-[600px] py-[106px]">
    <div class="sm:pt-2 pt-60"><i class="fa-regular fa-circle-check"></i> Representing Since 1989</div>
    <h1 class="font-semibold lg:text-[52px] text-[40px] sm:text-left text-center text-[theme(colors.blue)] py-2 lg:w-[63%] sm:w-[50%]">
      The region's biggest selection of cleaning solutions
    </h1>
    <p class="sm:w-[500px] sm:text-left text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>

    <div class="flex mt-6 justify-center sm:justify-start">
      <a href="/products" class="bg-[theme(colors.blue)] rounded-[28px] px-12 py-6 text-sm font-semibold text-white hover:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
        Our Products
      </a>
      <a href="/about-us" class="bg-gray-800 rounded-[28px] ml-4 px-12 py-6 text-sm font-semibold text-white hover:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
        About Us
      </a>
    </div>

    <div class="flex">
      <img src="/images/home/Mask group.png" alt="" class="absolute sm:max-w-3/4 -top-[96px] right-0">
    </div>
  </div>

  <div class="sm:pt-16 pt-8 bg-[#E5F8FF]">
    <div class="lg:pl-32 lg:py-24 p-8 flex sm:flex-row flex-col">
      <img src="/images/home/Group 59.png" alt="" class="py-4">
      <div class="lg:pl-20 pl-12 sm:pt-0 pt-4">
        <h2 class="font-bold sm:text-[46px] sm:ml-0 -ml-8 text-[36px] lg:max-w-[500px] sm:leading-[52px] leading-[40px]">Your Trusted Cleaning Supplies & Equipment Provider.</h2>
        <ul class="list-image-[url(/images/checkmark.png)] marker:mt-4 mt-8">
          <li class="py-3 pl-6 -ml-6 lg:max-w-[500px]">
            <h3 class="text-medium text-lg">Market Leaders</h3>
            <p class="text-neutral-400">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
          </li>
          <li class="py-3 pl-6 -ml-6 lg:max-w-[500px]">
            <h3 class="text-medium text-lg">We are Committed</h3>
            <p class="text-neutral-400">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
          </li>
          <li class="py-3 pl-6 -ml-6 lg:max-w-[500px]">
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

    <div class="lg:-mx-[64px] sm:-mx-4 py-4">
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
              <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-14 bg-white" role="presentation">
                <div class="category rounded-[30px] hover:border border-[theme(colors.blue)]"
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

      @foreach ($categoryList as $category)
        @if ($loop->index > 4) @break @endif

        <div class="hidden relative pt-6 -mx-6 transition-opacity opacity-0 duration-700 ease-linear data-[te-tab-active]:block"
          id="category_{{ $category['id'] }}"
          role="tabpanel"
          aria-labelledby="tabs-category_{{ $category['id'] }}-tab">
          <div class="relative border rounded-[30px] border-[theme(colors.blue)]">
            <div class="triangle border border-[theme(colors.blue)]"></div>
            <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-8 py-6">
              @foreach ($prouductList as $product)
                @php $product['category'] = $category; @endphp
                <x-items.product :product="$product" />
              @endforeach
            </div>
            <div class="font-semibold text-[22px] text-center py-3 text-[theme(colors.blue)]">
              <a href="#">View More Products <i class="fa-solid fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </x-subpanel>

  <x-subpanel title="They Satisfied With Our Service" more="View All Brands" class="bg-[#E5F8FF]">
    <div class="grid lg:grid-cols-3 gap-8 pt-6 px-4">
      @php
        $data = [
          [
            'img' => '/images/test/LOGO 2.png',
            'title' => 'Bridfestone',
            'description' => 'As a business engaged in the field of digital artists and content creators, we are greatly helpedAs a business engaged in the '
          ],
          [
            'img' => '/images/test/LOGO 3.png',
            'title' => 'GIANT',
            'description' => 'As a business engaged in the field of digital artists and content creators, we are greatly helpedAs a business engaged in the '
          ],
          [
            'img' => '/images/test/LOGO 3.png',
            'title' => 'GIANT',
            'description' => 'As a business engaged in the field of digital artists and content creators, we are greatly helpedAs a business engaged in the '
          ]
        ];
      @endphp

      @foreach ($data as $item)
        <div class="{{ $loop->index ===1 ? 'lg:pt-6' : '' }}">
          <div class="block rounded-[32px] p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <a href="#!">
              <img
                class="rounded-t-lg"
                src="{{ $item['img'] }}"
                alt="" />
            </a>
            <div class="pt-6">
              <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                {{ $item['title'] }}
              </h5>
              <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                {{ $item['description']}}
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </x-subpanel>

  <x-subpanel title="Read our latest events" more="View All Events">
    <div class="lg:-mx-8 grid lg:grid-cols-4 sm:grid-cols-2 gap-4">
      @php
        $events = [
          [
            'img' => '/images/test/Rectangle 46.png',
            'title' => 'HIGH CLASS CLEANING',
            'description' => 'Amet minim mollit non deserunt ullamcosit aliqua dolor.',
            'date' => \Carbon\Carbon::now()
          ],
          [
            'img' => '/images/test/Rectangle 49.png',
            'title' => 'QUICK WORKER FINDING',
            'description' => 'Amet minim mollit non deserunt ullamcosit aliqua dolor.',
            'date' => \Carbon\Carbon::now()
          ],
          [
            'img' => '/images/test/Rectangle 52.png',
            'title' => 'CUSTOMIZED SERVICE',
            'description' => 'Amet minim mollit non deserunt ullamcosit aliqua dolor.',
            'date' => \Carbon\Carbon::now()
          ],
          [
            'img' => '/images/test/Rectangle 55.png',
            'title' => 'TRAINED WORKERS',
            'description' => 'Amet minim mollit non deserunt ullamcosit aliqua dolor.',
            'date' => \Carbon\Carbon::now()
          ]
        ]
      @endphp

      @foreach ($events as $event)
        <x-items.event :event="$event" />
      @endforeach
    </div>
  </x-subpanel>

  @push('styles')
    <style>
      [data-te-carousel-active][data-te-carousel-item-end],
      [data-te-carousel-item-next] {
        transform: translateX(100%);
      }
      [data-te-carousel-active][data-te-carousel-item-start],
      [data-te-carousel-item-prev] {
        transform: translateX(-100%);
      }
      @media (min-width: 640px) {
        [data-te-carousel-active][data-te-carousel-item-end],
        [data-te-carousel-item-next] {
          transform: translateX(50%);
        }
        [data-te-carousel-active][data-te-carousel-item-start],
        [data-te-carousel-item-prev] {
          transform: translateX(-50%);
        }
      }
      @media (min-width: 1024px) {
        [data-te-carousel-active][data-te-carousel-item-end],
        [data-te-carousel-item-next] {
          transform: translateX(25%);
        }
        [data-te-carousel-active][data-te-carousel-item-start],
        [data-te-carousel-item-prev] {
          transform: translateX(-25%);
        }
      }
      [data-te-carousel-item-start],
      [data-te-carousel-item-end] {
        transform: translateX(0);
      }
      [data-te-nav-active] {
        border-width: 1px;
      }

      .triangle {
        content: "";
        position: absolute;
        z-index: 2;
        top: -20px;
        left: 60px;
        margin: auto 0;
        width: 42px;
        height: 42px;
        transform: rotate(-135deg);
        background: white;
        clip-path: polygon(
          100% 100%,
          2% 100%,
          100% 2%
        );
        border-radius: 0 0 20px 0;
      }
    </style>
  @endpush

  @push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
  @endpush
</x-layout>