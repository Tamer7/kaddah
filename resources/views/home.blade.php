<x-layout noDecorator>

  @section('canonical')
    <link rel="canonical" href="{{ url('/') }}" />
  @endsection

  <div class="lg:pl-24 pl-8 relative lg:h-[600px] py-[106px] flex">
    <div>
      <div class="sm:pt-2 pt-60"><i class="fa-regular fa-circle-check"></i> Representing Since 1989</div>
      <h1 id="main-heading" class="font-semibold lg:text-[52px] text-[40px] sm:text-left text-left text-[theme(colors.blue)] py-2 pr-5">
      The region's biggest selection of <br>cleaning solutions
    </h1>

      <!-- <p class="lg:w-8/12 xl:w-full sm:text-left text-left pr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p> -->

      <div class="flex mt-6 justify-center sm:justify-start pr-5">
        <a href="/products" class="bg-[theme(colors.blue)] rounded-[28px] px-12 py-6 text-sm font-semibold text-white hover:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
          Our Products
        </a>
        <a href="/about-us" class="bg-gray-800 rounded-[28px] ml-4 px-12 py-6 text-sm font-semibold text-white hover:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
          About Us
        </a>
      </div>
    </div>

    <div class="flex image-moving">
      <img src="/images/home/Mask group.png" alt="" id="dynamic-image" class="absolute sm:max-w-3/4 -top-[96px] right-0">
    </div>
  </div>

  <div class="sm:pt-16 pt-8 bg-[#E5F8FF]">
    <div class="lg:pl-32 lg:py-24 p-8 flex sm:flex-row flex-col">
      <img src="/images/home/Group 59.png" alt="" class="py-4 floating-animation">
      <div class="lg:pl-20 pl-12 sm:pt-0 pt-4">
        <h2 class="font-bold sm:text-[46px] sm:ml-0 -ml-8 text-[36px] lg:max-w-[500px] sm:leading-[52px] leading-[40px]">Your Trusted Cleaning Supplies & Equipment Provider.</h2>
        <ul class="list-image-[url(/images/checkmark.png)] marker:mt-4 mt-8">
          <li class="py-3 pl-6 -ml-6 lg:max-w-[500px]">
            <h3 class="text-medium text-lg">Expertise and Knowledge</h3>
            <p class="text-neutral-400">With over 30 years of experience, the company employs a team of experts who posses extensive knowledge about cleaning equipment and solutions.</p>
          </li>
          <li class="py-3 pl-6 -ml-6 lg:max-w-[500px]">
            <h3 class="text-medium text-lg">Adaptability to Technology</h3>
            <p class="text-neutral-400">The company has been through different market demands and technological advancements, we aim to continuously update our product offering and integrate new innovative technologies in the market.</p>
          </li>
          <li class="py-3 pl-6 -ml-6 lg:max-w-[500px]">
            <h3 class="text-medium text-lg">Comprehensive Selection</h3>
            <p class="text-neutral-400">A wide range of cleaning equipment covering from the basics of cleaning to the most advanced cleaning technologies and techniques.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <x-subpanel title="The Cleaning Pioneers" more="View All Categories" class="clickViewAllCategories">
    <x-slot name="header">
      <div class="font-semibold text-2xl text-[theme(colors.blue)]">Main Categories</div>
    </x-slot>

    <x-slot name="description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
    </x-slot>

    <div class="lg:-mx-[64px] sm:-mx-4 py-4" id="productOverview">
      <div x-data="{swiper: null}"
        x-init="swiper = new Swiper($refs.container, {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 0,
      
          breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 0,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 0,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 0,
            },
            1280: {
              slidesPerView: 4,
              spaceBetween: 0,
            },
          },
        })"
        class="relative mx-auto flex flex-row pt-4"
      >
        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
          <button @click="swiper.slidePrev()" 
              class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
  
        <div class="swiper-container" x-ref="container">
          <div class="swiper-wrapper" data-te-nav-ref>
            @foreach($categories as $category)
              @php
                $item = [
                  'img' => asset('storage/'.$category->image),
                  'title' => $category->name,
                  'description' => $category->title,
                ]
              @endphp
              <div class="swiper-slide p-2 category-panel group"
                data-te-toggle="pill"
                data-te-target="#category_{{ $category['id'] }}"
                role="tab"
                aria-controls="tabs-messages"
                aria-selected="false"
              >
                <div class="py-4 px-2 rounded-[30px] border-[theme(colors.blue)]">
                  <x-items.category :category="$item" />
                </div>
              </div>
            @endforeach
          </div>
        </div>
  
        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
          <button @click="swiper.slideNext()" 
                  class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
      </div>

      @foreach ($categories as $category)
        <div class="tab-panel opacity-100 transition-opacity duration-150 relative pt-6 -mx-6 ease-linear data-[te-tab-active]:block"
          id="category_{{ $category['id'] }}"
          role="tabpanel"
          aria-labelledby="tabs-category_{{ $category['id'] }}-tab">
          <div class="relative border rounded-[30px] border-[theme(colors.blue)] ">
            <div class="triangle border border-[theme(colors.blue)]"></div>
            <div class="absolute -top-3 right-8 font-bold text-2xl hover:cursor-pointer tab-close-btn mt-2"><i class="fa-solid fa-xmark"></i></div>
            <div class="p-6" x-data="{swiper: null}"
              x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
            
                breakpoints: {
                  640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                  },
                  768: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                  },
                  1024: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                  },
                  1280: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                  },
                },
              })"
              class="relative mx-auto flex flex-row pt-4"
            >
              <div class="absolute inset-y-0 left-0 z-10 flex items-center">
                <button @click="swiper.slidePrev()" 
                    class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                  <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                </button>
              </div>

              <div class="swiper-container" x-ref="container">
                <div class="swiper-wrapper" data-te-nav-ref>
                  @foreach ($category->children as $subcategory)
                    @php
                      $item = [
                        'img' => asset('storage/' . $subcategory->image),
                        'title' => $subcategory->name,
                        'description' => $subcategory->title,
                        'url' => route('products.indexSpec', ['cateSlug' => $category->slug, 'subCateSlug' => $subcategory['slug']])
                      ]
                    @endphp
                    <div class="swiper-slide p-2">
                      <x-items.category :category="$item" />
                    </div>
                  @endforeach
                </div>
              </div>

              <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                <button @click="swiper.slideNext()" 
                        class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
                  <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </button>
              </div>
            </div>

            <div class="font-semibold text-[22px] text-center py-3 text-[theme(colors.blue)]">
              <a href="{{ route('categories.sub', $category['slug']) }}">View More Products <i class="fa-solid fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  
  </x-subpanel>

  <x-subpanel title="They Satisfied With Our Service" more="View All Brands" class="clickViewBrand bg-[#E5F8FF]">
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
          <div class="block rounded-[32px] p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
            <a href="#!">
              <img
                class="rounded-t-lg"
                src="{{ $item['img'] }}"
                alt="" />
            </a>
            <div class="pt-6">
              <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">
                {{ $item['title'] }}
              </h5>
              <p class="mb-4 text-base text-neutral-600">
                {{ $item['description']}}
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </x-subpanel>

  <x-subpanel title="Read our latest events" more="View All Events" class="clickViewEvents">
    <div x-data="{swiper: null}"
      x-init="swiper = new Swiper($refs.container, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
    
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 0,
          },
          1280: {
            slidesPerView: 4,
            spaceBetween: 0,
          },
        },
      })"
      class="relative mx-auto flex flex-row pt-4"
    >
      <div class="absolute inset-y-0 left-0 z-10 flex items-center">
        <button @click="swiper.slidePrev()" 
            class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
          <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        </button>
      </div>

      <div class="swiper-container" x-ref="container">
        <div class="swiper-wrapper" data-te-nav-ref>
          @foreach($events as $event)
            <div class="swiper-slide p-2">
              <x-items.event :event="$event" />
            </div>
          @endforeach
        </div>
      </div>

      <div class="absolute inset-y-0 right-0 z-10 flex items-center">
        <button @click="swiper.slideNext()" 
                class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
          <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
    </div>
  </x-subpanel>

  @push('styles')
    <style>
      [data-te-nav-active] > div {
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
    <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
  @endpush
</x-layout>

<style>
.img-animate {
  transition: transform 0.5s ease;
}

.fade-out {
  animation: fadeOut 1s forwards;
}

.fade-in {
  animation: fadeIn 1s forwards;
}

@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes float {
    0%, 100% {
        transform: translate(0, 0);
    }
    25% {
        transform: translate(-5px, -5px);
    }
    50% {
        transform: translate(0, -10px);
    }
    75% {
        transform: translate(5px, -5px);
    }
}

.floating {
    animation: float 4s ease-in-out infinite;
}



</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const img = document.querySelector('.image-moving img');
  img.classList.add('img-animate');
  let lastScrollTop = window.pageYOffset || document.documentElement.scrollTop;
  window.addEventListener('scroll', () => handleScrollEffect(img, lastScrollTop));

  const texts = [
    'The region\'s biggest selection of <br>cleaning solutions',
    '35+ years of excellence in <br> cleaning solutions',
    'Leading supplier in GCC',
    '10,000+ products from <br> 30+ brands',
  ];
  cycleContent('main-heading', texts, 6000);

  const images = [
    '/images/home/Mask group.png',
    '/images/home/secondimage.png',
  ];
  cycleContent('dynamic-image', images, 6000, true);
});

function handleScrollEffect(element, lastScrollTop) {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    element.style.transform = 'translateY(-100px)';
  } else {
    element.style.transform = scrollTop < 50 ? 'translateY(0)' : 'translateY(50px)';
  }
  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
}

function cycleContent(elementId, contentArray, interval, isImage = false) {
  const element = document.getElementById(elementId);
  let currentIndex = 0;

  setInterval(() => {
    element.classList.add('fade-out');

    setTimeout(() => {
      currentIndex = (currentIndex + 1) % contentArray.length;
      if (isImage) {
        element.src = contentArray[currentIndex];
      } else {
        element.innerHTML = contentArray[currentIndex];
      }

      element.classList.remove('fade-out');
      element.classList.add('fade-in');

      setTimeout(() => element.classList.remove('fade-in'), 1000);
    }, 1000);
  }, interval);
}
</script>