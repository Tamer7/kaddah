<x-layout title="{{ $product->name }}" noDecorator>
  <div class="lg:tw-py-[20px] lg:tw-px-[80px] tw-p-8 tw-grid lg:tw-grid-cols-9 tw-gap-4">
    <div class="tw-col-span-1 tw-grid lg:tw-grid-rows-4 lg:tw-grid-cols-1 tw-grid-cols-4 tw-gap-1"
      role="tablist"
      data-te-nav-ref
    >
      <div class="tw-flex">
        <img src="{{ asset("storage/{$product->image}") }}"
          class="tw-max-h-[122px] tw-m-auto hover:tw-cursor-pointer hover:tw-border hover:tw-border-[theme(colors.blue)] hover:tw-rounded-lg data-[te-nav-active]:tw-rounded-lg data-[te-nav-active]:tw-border data-[te-nav-active]:tw-border-[theme(colors.blue)] data-[te-nav-active]:tw-rounded-lg"
          data-te-toggle="pill"
          data-te-target="#tabs-image-0"
          role="tab"
          aria-controls="tabs-image"
          aria-selected="true"
          data-te-nav-active
          />
      </div>
      @if ($product->images)
        @foreach (json_decode($product->images) as $index => $image)
          <div class="tw-flex">
            <img src="{{ asset("storage/$image") }}"
              class="tw-max-h-[122px] tw-m-auto hover:tw-cursor-pointer hover:tw-border hover:tw-border-[theme(colors.blue)] hover:tw-rounded-lg data-[te-nav-active]:tw-rounded-lg data-[te-nav-active]:tw-border data-[te-nav-active]:tw-border-[theme(colors.blue)] data-[te-nav-active]:tw-rounded-lg"
              data-te-toggle="pill"
              data-te-target="#tabs-image-{{ $index + 1 }}"
              role="tab"
              aria-controls="tabs-image"
              aria-selected="true"
              />
          </div>
        @endforeach
      @endif
    </div>

    <div class="tw-col-span-4">
      <div
        class="tw-hidden tw-opacity-100 tw-transition-opacity tw-duration-150 tw-ease-linear data-[te-tab-active]:tw-block"
        id="tabs-image-0"
        role="tabpanel"
        aria-labelledby="tabs-home-tab"
        data-te-tab-active>
        <img src="{{ asset("storage/{$product->image}") }}" alt="" class="tw-mx-auto tw-max-h-[800px]">
      </div>
      @if ($product->images)
        @foreach (json_decode($product->images) as $index => $image)
          <div
            class="tw-hidden tw-opacity-0 tw-transition-opacity tw-duration-150 tw-ease-linear data-[te-tab-active]:tw-block"
            id="tabs-image-{{ $index + 1 }}"
            role="tabpanel"
            aria-labelledby="tabs-image-tab">
            <img src="{{ asset("storage/$image") }}" alt="" class="tw-mx-auto tw-max-h-[800px]">
          </div>
        @endforeach
      @endif
    </div>
    <div class='tw-col-span-4'>
      <div class="tw-relative before:-tw-z-10 before:tw-absolute before:-tw-top-[10px] before:-tw-bottom-[10px] lg:before:-tw-left-[400px] before:-tw-left-8 lg:before:-tw-right-[80px] before:-tw-right-8 before:tw-content-[''] before:tw-bg-[#27AEE5] before:tw-opacity-5 lg:before:tw-rounded-l-full">
        <div class="tw-font-bold tw-text-[21px]">Green Machine With Single Phase / 2 Hp</div>
        <div class="tw-flex tw-items-center tw-py-8">
          <img src="{{ asset('storage/'.$product->brand->image) }}" alt="" class="w-[108px] h-[60px]">
          <div class="tw-ml-4">
            {{ $categoryNames->join(' < ') }}
          </div>
        </div>
        <div class="">
          <ins class="new-price">{{ $product->code }}</ins> - {{ $product->details }}
        </div>
        <div class="tw-grid tw-grid-rows-3 tw-divide-y tw-pt-6 tw-w-[80%] tw-text-[#282938]">
          <div class="tw-py-2">Brand Name: {{$product->brand->name}}</div>
          <div class="tw-py-2">Warranty: {{$product->warranty}}</div>
          <div class="tw-py-2">Origin: {{$product->origin}}</div>
        </div>
        <form action="javascript:void(0)" method="POST" class="tw-py-4 add-to-cart cart-form" id="{{ $product->id }}">
          @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="tw-px-8 tw-py-4 tw-bg-gray-700 tw-rounded-full tw-text-white" id="loading-alert-{{ $product->id }}">
            Add to Cart
          </button>
        </form>
      </div>
      <div class="tw-mt-12">
        <video src="" class="tw-w-[500px] tw-h-[147px]"></video>
      </div>
    </div>
  </div>

  <div class="tw-py-8 lg:tw-px-[100px] tw-px-8">
    <div class="tw-rounded-3xl tw-bg-[#e5f8ff] lg:tw-py-8 lg:tw-px-16 tw-p-4">
      <ul
        class="tw-mb-5 tw-flex tw-list-none tw-flex-row tw-flex-wrap tw-border-b-0 tw-pl-0"
        role="tablist"
        data-te-nav-ref>
        <li role="presentation">
          <a href="#tabs-description"
            class="tw-my-2 tw-block tw-border-x-0 tw-border-2 tw-border-t-0 tw-border-transparent tw-px-2 tw-pb-3.5 tw-pt-4 tw-text-[20px] tw-leading-tight hover:tw-isolate hover:border-transparent focus:tw-isolate focus:tw-border-transparent dark:tw-text-neutral-400 dark:hover:tw-bg-transparent data-[te-nav-active]:tw-border-gray-800 data-[te-nav-active]:tw-text-gray-800 data-[te-nav-active]:tw-font-bold"
            data-te-toggle="pill"
            data-te-target="#tabs-description"
            data-te-nav-active
            role="tab"
            aria-controls="tabs-description"
            aria-selected="true"
            >Description</a
          >
        </li>
        <li role="presentation">
          <a
            href="#tabs-tech_specification"
            class="tw-my-2 tw-block tw-border-x-0 tw-border-2 tw-border-t-0 lg:tw-ml-16 tw-border-transparent tw-px-2 tw-pb-3.5 tw-pt-4 tw-text-[20px] leading-tight hover:tw-isolate hover:border-transparent focus:tw-isolate focus:border-transparent dark:tw-text-neutral-400 dark:hover:tw-bg-transparent data-[te-nav-active]:tw-border-gray-800 data-[te-nav-active]:tw-text-gray-800 data-[te-nav-active]:tw-font-bold"
            data-te-toggle="pill"
            data-te-target="#tabs-tech_specification"
            role="tab"
            aria-controls="tabs-tech_specification"
            aria-selected="false"
            >Technical Specification</a
          >
        </li>
        <li role="presentation">
          <a
            href="#tabs-downloads"
            class="tw-my-2 tw-block tw-border-x-0 tw-border-2 tw-border-t-0 lg:tw-ml-16 tw-border-transparent tw-px-2 tw-pb-3.5 tw-pt-4 tw-text-[20px] tw-text-[theme(colors.blue)] tw-leading-tight hover:tw-isolate hover:tw-border-transparent focus:tw-isolate focus:tw-border-transparent dark:tw-text-neutral-400 dark:hover:tw-bg-transparent data-[te-nav-active]:tw-border-gray-800 data-[te-nav-active]:tw-text-gray-800 data-[te-nav-active]:tw-font-bold"
            data-te-toggle="pill"
            data-te-target="#tabs-downloads"
            role="tab"
            aria-controls="tabs-downloads"
            aria-selected="false"
            >Downloads</a
          >
        </li>
      </ul>

      <!--Tabs content-->
      <div class="tw-mb-6">
        <div
          class="tw-hidden tw-opacity-100 tw-transition-opacity tw-duration-150 tw-ease-linear data-[te-tab-active]:tw-block"
          id="tabs-description"
          role="tabpanel"
          aria-labelledby="tabs-home-tab"
          data-te-tab-active>
          {!! $product->description !!}
        </div>
        <div
          class="tw-hidden tw-opacity-0 tw-transition-opacity tw-duration-150 tw-ease-linear data-[te-tab-active]:tw-block"
          id="tabs-tech_specification"
          role="tabpanel"
          aria-labelledby="tabs-profile-tab">
          <table class="shop-table">
              @foreach($features as $feature)
              <tr>
                  <td>{{$feature->name}}</td>
                  <td>{{$feature->value}}</td>
              </tr>
              @endforeach
          </table>
        </div>
        <div
          class="tw-hidden tw-opacity-0 tw-transition-opacity tw-duration-150 tw-ease-linear data-[te-tab-active]:tw-block"
          id="tabs-downloads"
          role="tabpanel"
          aria-labelledby="tabs-profile-tab">
          <table class="shop-table">
            @if(!empty($product->file) && !empty($product->file[0]->download_link))
              <tr>
                <td>Product Brochure</th>
                <td><a href="/storage/{{$product->file[0]->download_link}}" class="btn btn-primary">Download</a></td>
              </tr>
            @endif
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="tw-py-[40px] tw-px-[100px]">
    <h2 class="tw-text-3xl tw-font-bold">Related Products</h2>
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
        },
      })"
      class="tw-relative tw-w-10/12 tw-mx-auto tw-flex tw-flex-row tw-pt-4"
    >
      <div class="tw-absolute tw-inset-y-0 tw-left-0 tw-z-10 tw-flex tw-items-center">
        <button @click="swiper.slidePrev()" 
            class="tw-bg-white -tw-ml-2 lg:-tw-ml-4 tw-flex tw-justify-center tw-items-center tw-w-10 tw-h-10 tw-rounded-full tw-shadow focus:tw-outline-none">
          <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        </button>
      </div>

      <div class="swiper-container" x-ref="container">
        <div class="swiper-wrapper">
          @foreach($related as $item)
            <div class="swiper-slide tw-p-4">
              <figure class="tw-group tw-relative">
                <a href="{{ route('products.product', $item->id) }}" class="tw-flex tw-justify-center">
                  {{-- <img src="{{asset('storage/'.$item->image)}}" alt="Product" class="tw-h-[232px]" /> --}}
                  <img src="https://images.unsplash.com/photo-1598951092651-653c21f5d0b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="Product" class="tw-h-[232px]" />
                  @if($item->images)
                    @foreach(json_decode($item->images) as $image)
                      @if($loop->last)
                        {{-- <img src="{{asset('storage/'.$image)}}" alt="Product" class="tw-absolute tw-opacity-0 group-hover:tw-opacity-100 tw-top-0 tw-left-0 tw-right-0 tw-left-0 tw-h-[232px] tw-transition-opacity tw-duration-300" /> --}}
                        <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="Product" class="tw-absolute tw-opacity-0 group-hover:tw-opacity-100 tw-top-0 tw-left-0 tw-right-0 tw-left-0 tw-h-[232px] tw-transition-opacity tw-duration-300" />
                      @endif
                    @endforeach
                  @endif
                </a>
                <div class="product-action-vertical group-hover:tw-opacity-100 group-hover:tw-visible">
                  <a href="javascript:void(0)" onclick="$('.cart-submit-{{$item->id}}').submit();"
                    class="btn-product-icon btn-cart-design w-icon-cart loader-alert-{{$item->id}}"></a>
                    <form action="javascript:void(0)" method="POST" class="add-to-cart cart-form cart-submit-{{$item->id}}" id="{{$item->id}}">
                      @csrf
                      <input type="hidden" name="id" value="{{$item->id}}">
                    </form>
                  <button class="hidden btn-cart" id="cart-response-{{$item->id}}"></button>
                </div>
                <div class="product-action tw-absolute tw-opacity-0 group-hover:tw-opacity-100 group-hover:tw-visible tw-right-0 tw-left-0 tw-bottom-0 tw-bg-gray-900 tw-text-white tw-font-semibold tw-flex tw-justify-center tw-transition-opacity tw-duration-300">
                  <a href="javascript:void(0);" class="show-modal tw-py-4 tw-text-center"
                    title="Quick View" id="{{$item->slug}}">Quick View</a>
                  <a href="javascript:void(0);" class="d-none btn-quickview" id="quickview-{{$item->id}}"></a>
                </div>
              </figure>
              <div class="pt-8">
                <h4 class="tw-font-medium tw-whitespace-nowrap tw-overflow-hidden tw-text-ellipsis"><a href="{{route('products.product', $item->id)}}">{{$item->name}}</a>
                </h4>
                <div class="ratings-container tw-text-neutral-400 tw-text-sm">
                  <a href="{{ route('brands.show', $item->brand->slug) }}" class="rating-reviews">{{$item->brand->name}}</a>
                </div>
                <div class="tw-font-semibold tw-text-lg tw-whitespace-nowrap tw-overflow-hidden tw-text-ellipsis">
                  <div class="product-price">{{$item->code}}</div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="tw-absolute tw-inset-y-0 tw-right-0 tw-z-10 tw-flex tw-items-center">
        <button @click="swiper.slideNext()" 
                class="tw-bg-white -tw-mr-2 lg:-tw-mr-4 tw-flex tw-justify-center tw-items-center tw-w-10 tw-h-10 tw-rounded-full tw-shadow focus:tw-outline-none">
          <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
    </div>
  </div>

  @push('scripts')
    <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="{{asset('vendor/photoswipe/photoswipe.js')}}"></script>
    <script src="{{asset('vendor/photoswipe/photoswipe-ui-default.js')}}"></script>
  @endpush
</x-layout>