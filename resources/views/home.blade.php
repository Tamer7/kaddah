<x-layout noDecorator>
  <div class="lg:tw-px-24 tw-px-8 tw-relative lg:tw-h-[600px] tw-py-[106px]">
    <div class="sm:tw-pt-2 tw-pt-60"><i class="fa-regular fa-circle-check"></i> Representing Since 1989</div>
    <h1 class="tw-font-semibold lg:tw-text-[52px] tw-text-[40px] sm:tw-text-left tw-text-center tw-text-[theme(colors.blue)] tw-py-2 lg:tw-w-8/12 xl:tw-w-full">
      The region's biggest selection of cleaning solutions
    </h1>
    <p class="lg:tw-w-8/12 xl:tw-w-full sm:tw-text-left tw-text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>

    <div class="tw-flex tw-mt-6 tw-justify-center sm:tw-justify-start">
      <a href="/products" class="tw-bg-[theme(colors.blue)] tw-rounded-[28px] tw-px-12 tw-py-6 tw-text-sm tw-font-semibold tw-text-white hover:tw-opacity-80 focus-visible:tw-outline focus-visible:tw-outline-2 focus-visible:tw-outline-offset-2 focus-visible:tw-outline-white">
        Our Products
      </a>
      <a href="/about-us" class="tw-bg-gray-800 tw-rounded-[28px] tw-ml-4 tw-px-12 tw-py-6 tw-text-sm tw-font-semibold tw-text-white hover:tw-opacity-80 focus-visible:tw-outline focus-visible:tw-outline-2 focus-visible:tw-outline-offset-2 focus-visible:tw-outline-white">
        About Us
      </a>
    </div>

    <div class="flex">
      <img src="/images/home/Mask group.png" alt="" class="tw-absolute sm:tw-max-w-3/4 -tw-top-[96px] tw-right-0 tw-opacity-50">
    </div>
  </div>

  <div class="sm:pt-16 pt-8 bg-[#E5F8FF]">
    <div class="lg:tw-pl-32 lg:tw-py-24 tw-p-8 tw-flex sm:tw-flex-row tw-flex-col">
      <img src="/images/home/Group 59.png" alt="" class="tw-py-4">
      <div class="lg:tw-pl-20 tw-pl-12 sm:tw-pt-0 tw-pt-4">
        <h2 class="tw-font-bold sm:tw-text-[46px] sm:tw-ml-0 -tw-ml-8 tw-text-[36px] lg:tw-max-w-[500px] sm:tw-leading-[52px] tw-leading-[40px]">Your Trusted Cleaning Supplies & Equipment Provider.</h2>
        <ul class="tw-list-image-[url(/images/checkmark.png)] marker:tw-mt-4 tw-mt-8">
          <li class="tw-py-3 tw-pl-6 -tw-ml-6 lg:tw-max-w-[500px]">
            <h3 class="tw-text-medium tw-text-lg">Market Leaders</h3>
            <p class="tw-text-neutral-400">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
          </li>
          <li class="tw-py-3 tw-pl-6 -tw-ml-6 lg:tw-max-w-[500px]">
            <h3 class="tw-text-medium tw-text-lg">We are Committed</h3>
            <p class="tw-text-neutral-400">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
          </li>
          <li class="tw-py-3 tw-pl-6 -tw-ml-6 lg:tw-max-w-[500px]">
            <h3 class="tw-text-medium tw-text-lg">Trusted Professionals</h3>
            <p class="tw-text-neutral-400">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <x-subpanel title="The Cleaning Pioneers" more="View All Categories">
    <x-slot name="header">
      <div class="tw-font-semibold tw-text-2xl tw-text-[theme(colors.blue)]">Main Categories</div>
    </x-slot>

    <x-slot name="description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
    </x-slot>

    <div class="lg:-tw-mx-[64px] sm:-tw-mx-4 tw-py-4">
      <div id="carouselPanel"
        class="tw-relative"
        data-te-carousel-init
        data-te-ride="carousel">
        <!--Carousel items-->
        <div class="tw-relative tw-w-full tw-overflow-hidden after:tw-clear-both after:tw-block after:tw-content-['']"
          role="tablist"
          data-te-nav-ref
        >
          @foreach ($categories as $category)
            @php
              $item = [
                // 'img' => asset('storage/'.$category->image),
                'img' => 'https://images.unsplash.com/photo-1598951092651-653c21f5d0b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80',
                'title' => $category->name
              ]
            @endphp

            <div class="carousel-item tw-relative {{ $loop->first ? '' : 'tw-hidden' }} tw-float-left -tw-mr-[100%] tw-w-full tw-transition-transform tw-duration-[1200ms] tw-ease-in-out motion-reduce:tw-transition-none"
              data-te-carousel-item
              data-te-interval="8000"
              {{ $loop->first ? 'data-te-carousel-active' : ''}}
            >
              <div class="tw-grid lg:tw-grid-cols-4 sm:tw-grid-cols-2 tw-gap-14 tw-bg-white" role="presentation">
                <div class="category tw-rounded-[30px] hover:tw-border tw-border-[theme(colors.blue)]"
                  data-te-toggle="pill"
                  data-te-target="#category_{{ $category['id'] }}"
                  role="tab"
                  aria-controls="tabs-messages"
                  aria-selected="false"
                >
                  <x-items.category :category="$item" />
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <!--Carousel controls - prev item-->
        <button
          class="tw-absolute tw-left-0 tw-top-2/4 tw-z-[1] tw-flex tw-h-16 tw-w-16 -tw-translate-y-2/4 tw-items-center tw-justify-center tw-border-0 tw-p-0 tw-text-center tw-text-[theme(colors.blue)] tw-duration-150 tw-ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:tw-text-white hover:tw-bg-[theme(colors.blue)] focus:tw-text-white focus:tw-no-underline"
          type="button"
          data-te-target="#carouselPanel"
          data-te-slide="prev">
          <i class="fa-solid fa-chevron-left"></i>
        </button>
        <!--Carousel controls - next item-->
        <button
          class="tw-absolute tw-right-0 tw-top-2/4 tw-z-[1] tw-flex tw-w-16 tw-h-16 -tw-translate-y-2/4 tw-items-center tw-justify-center tw-border-0 tw-p-0 tw-text-center tw-text-[theme(colors.blue)] tw-duration-150 tw-ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:tw-text-white hover:tw-bg-[theme(colors.blue)] focus:tw-text-white focus:tw-no-underline"
          type="button"
          data-te-target="#carouselPanel"
          data-te-slide="next">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
      </div>

      @foreach ($categories as $category)
        <div class="tw-hidden tw-relative tw-pt-6 -tw-mx-6 tw-transition-opacity tw-opacity-0 tw-duration-700 tw-ease-linear data-[te-tab-active]:tw-block"
          id="category_{{ $category['id'] }}"
          role="tabpanel"
          aria-labelledby="tabs-category_{{ $category['id'] }}-tab">
          <div class="tw-relative tw-border tw-rounded-[30px] tw-border-[theme(colors.blue)]">
            <div class="triangle tw-border tw-border-[theme(colors.blue)]"></div>
            <div class="tw-grid lg:tw-grid-cols-5 md:tw-grid-cols-3 sm:tw-grid-cols-2 tw-gap-8 tw-py-6">
              @foreach ($category->children as $subcategory)
                @if ($loop->index > 4) @break @endif
                @php
                  $item = [
                    'img' => asset('storage/' . $subcategory->image),
                    'title' => $subcategory->name,
                    'url' => route('products.index', ['category_id' => $subcategory['id']])
                  ]
                @endphp
                <x-items.category :category="$item" />
              @endforeach
            </div>
            <div class="tw-font-semibold tw-text-[22px] tw-text-center tw-py-3 tw-text-[theme(colors.blue)]">
              <a href="{{ route('categories.sub', ['category' => $category['id']]) }}">View More Products <i class="fa-solid fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </x-subpanel>

  <x-subpanel title="They Satisfied With Our Service" more="View All Brands" class="tw-bg-[#E5F8FF]">
    <div class="tw-grid lg:tw-grid-cols-3 tw-gap-8 tw-pt-6 tw-px-4">
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
          <div class="tw-block tw-rounded-[32px] tw-p-6 tw-bg-white tw-shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:tw-bg-neutral-700">
            <a href="#!">
              <img
                class="tw-rounded-t-lg"
                src="{{ $item['img'] }}"
                alt="" />
            </a>
            <div class="tw-pt-6">
              <h5 class="tw-mb-2 tw-text-xl tw-font-medium tw-leading-tight tw-text-neutral-800 dark:tw-text-neutral-50">
                {{ $item['title'] }}
              </h5>
              <p class="tw-mb-4 tw-text-base tw-text-neutral-600 dark:tw-text-neutral-200">
                {{ $item['description']}}
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </x-subpanel>

  <x-subpanel title="Read our latest events" more="View All Events">
    <div id="carouselEventPanel"
      class="tw-relative"
      data-te-carousel-init
      data-te-ride="carousel">
      <!--Carousel items-->
      <div class="tw-relative tw-w-full tw-overflow-hidden after:tw-clear-both after:tw-block after:tw-content-['']"
        role="tablist"
        data-te-nav-ref
      >
        @foreach ($events as $event)
          @php
            $item = [
              'img' => asset('storage/'.$category->image),
              'title' => $category->name
            ]
          @endphp

          <div class="carousel-item tw-relative {{ $loop->first ? '' : 'tw-hidden' }} tw-float-left -tw-mr-[100%] tw-w-full tw-transition-transform tw-duration-[1200ms] tw-ease-in-out motion-reduce:tw-transition-none"
            data-te-carousel-item
            data-te-interval="8000"
            {{ $loop->first ? 'data-te-carousel-active' : ''}}
          >
            <div class="tw-grid lg:tw-grid-cols-4 sm:tw-grid-cols-2 tw-gap-14 tw-bg-white" role="presentation">
              <x-items.event :event="$event" />
            </div>
          </div>
        @endforeach
      </div>

      <!--Carousel controls - prev item-->
      <button
        class="tw-absolute tw-left-0 tw-top-2/4 tw-z-[1] tw-flex tw-h-16 tw-w-16 -tw-translate-y-2/4 tw-items-center tw-justify-center tw-border-0 tw-p-0 tw-text-center tw-text-[theme(colors.blue)] tw-duration-150 tw-ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:tw-text-white hover:tw-bg-[theme(colors.blue)] focus:tw-text-white focus:tw-no-underline"
        type="button"
        data-te-target="#carouselEventPanel"
        data-te-slide="prev">
        <i class="fa-solid fa-chevron-left"></i>
      </button>
      <!--Carousel controls - next item-->
      <button
        class="tw-absolute tw-right-0 tw-top-2/4 tw-z-[1] tw-flex tw-w-16 tw-h-16 -tw-translate-y-2/4 tw-items-center tw-justify-center tw-border-0 tw-p-0 tw-text-center tw-text-[theme(colors.blue)] tw-duration-150 tw-ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:tw-text-white hover:tw-bg-[theme(colors.blue)] focus:tw-text-white focus:tw-no-underline"
        type="button"
        data-te-target="#carouselEventPanel"
        data-te-slide="next">
          <i class="fa-solid fa-chevron-right"></i>
      </button>
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