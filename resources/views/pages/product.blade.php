<x-layout title="{{ $product->name }}" noDecorator>
  <div class="lg:py-[20px] lg:px-[80px] p-8 grid lg:grid-cols-9 gap-4">
    <div class="col-span-1 grid lg:grid-rows-4 lg:grid-cols-1 grid-cols-4 gap-1" role="tablist" data-te-nav-ref>
      <div class="flex">
        <img src="{{ asset("storage/{$product->image}") }}" class="max-h-[122px] m-auto hover:cursor-pointer hover:border hover:border-[theme(colors.blue)] hover:rounded-lg data-[te-nav-active]:rounded-lg data-[te-nav-active]:border data-[te-nav-active]:border-[theme(colors.blue)] data-[te-nav-active]:rounded-lg" data-te-toggle="pill" data-te-target="#tabs-image-0" role="tab" aria-controls="tabs-image" aria-selected="true" data-te-nav-active />
      </div>
      @if ($product->images)
      @foreach (json_decode($product->images) as $index => $image)
      <div class="flex">
        <img src="{{ asset("storage/$image") }}" class="max-h-[122px] m-auto hover:cursor-pointer hover:border hover:border-[theme(colors.blue)] hover:rounded-lg data-[te-nav-active]:rounded-lg data-[te-nav-active]:border data-[te-nav-active]:border-[theme(colors.blue)] data-[te-nav-active]:rounded-lg" data-te-toggle="pill" data-te-target="#tabs-image-{{ $index + 1 }}" role="tab" aria-controls="tabs-image" aria-selected="true" />
      </div>
      @endforeach
      @endif
    </div>

    <div class="col-span-4">
      <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block blend-multiply" id="tabs-image-0" role="tabpanel" aria-labelledby="tabs-home-tab" data-te-tab-active>
        <img src="{{ asset("storage/{$product->image}") }}" alt="" class="mx-auto max-h-[800px]">
      </div>
      @if ($product->images)
      @foreach (json_decode($product->images) as $index => $image)
      <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block blend-multiply" id="tabs-image-{{ $index + 1 }}" role="tabpanel" aria-labelledby="tabs-image-tab">
        <img src="{{ asset("storage/$image") }}" alt="" class="mx-auto max-h-[800px]">
      </div>
      @endforeach
      @endif
    </div>
    <div class='col-span-4'>
      <div class="relative before:-z-10 before:absolute before:-top-[10px] before:-bottom-[10px] lg:before:-left-[400px] before:-left-8 lg:before:-right-[80px] before:-right-8 before:content-[''] before:bg-[#27AEE5] before:opacity-5 lg:before:rounded-l-full">
        <div class="font-bold text-[21px]">{{ $product->name }}</div>
        <div class="flex items-center py-8">
          <img src="{{ asset('storage/'.$product->brand->image) }}" alt="" class="w-[108px] h-[60px]">
          <div class="ml-4">
            {{ $categoryNames->join(' < ') }}
          </div>
        </div>
        <div class="">
          <ins class="new-price">{{ $product->details }}
        </div>
        <div class="grid grid-rows-3 divide-y pt-6 w-[80%] text-[#282938] pb-2 border-b">
          <div class="py-2">Item Code: {{ $product->code }}</div>
          <div class="py-2">Brand Name: {{$product->brand->name}}</div>
          <div class="py-2">Warranty: {{$product->warranty}}</div>
          <div class="py-2">Origin: {{$product->origin}}</div>
        </div>

        <form action="javascript:void(0)" method="POST" class="py-4 add-to-cart cart-form" id="{{ $product->id }}">
          @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="px-8 py-4 bg-gray-700 rounded-full text-white" id="loading-alert-{{ $product->id }}">
            Add to Cart
          </button>
        </form>
      </div>
      <div class="mt-12">
        <video src="" class="w-[500px] h-[147px]"></video>
      </div>
    </div>
  </div>

  <div class="py-8 lg:px-[100px] px-8">
    <div class="rounded-3xl bg-[#e5f8ff] lg:py-8 lg:px-16 p-4">
      <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
        <li role="presentation">
          <a href="#tabs-description" class="my-2 block border-x-0 border-2 border-t-0 border-transparent px-2 pb-3.5 pt-4 text-[20px] leading-tight hover:isolate hover:border-transparent focus:isolate focus:border-transparent dark:text-neutral-400 dark:hover:bg-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 data-[te-nav-active]:font-bold" data-te-toggle="pill" data-te-target="#tabs-description" data-te-nav-active role="tab" aria-controls="tabs-description" aria-selected="true">Description</a>
        </li>
        <li role="presentation">
          <a href="#tabs-tech_specification" class="my-2 block border-x-0 border-2 border-t-0 lg:ml-16 border-transparent px-2 pb-3.5 pt-4 text-[20px] leading-tight hover:isolate hover:border-transparent focus:isolate focus:border-transparent dark:text-neutral-400 dark:hover:bg-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 data-[te-nav-active]:font-bold" data-te-toggle="pill" data-te-target="#tabs-tech_specification" role="tab" aria-controls="tabs-tech_specification" aria-selected="false">Technical Specification</a>
        </li>
        <li role="presentation">
          <a href="#tabs-downloads" class="my-2 block border-x-0 border-2 border-t-0 lg:ml-16 border-transparent px-2 pb-3.5 pt-4 text-[20px] text-[theme(colors.blue)] leading-tight hover:isolate hover:border-transparent focus:isolate focus:border-transparent dark:text-neutral-400 dark:hover:bg-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 data-[te-nav-active]:font-bold" data-te-toggle="pill" data-te-target="#tabs-downloads" role="tab" aria-controls="tabs-downloads" aria-selected="false">Downloads</a>
        </li>
      </ul>

      <!--Tabs content-->
      <div class="mb-6">
        <div class="product-description hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block blend-multiply" id="tabs-description" role="tabpanel" aria-labelledby="tabs-home-tab" data-te-tab-active>
          {!! $product->description !!}
        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block blend-multiply" id="tabs-tech_specification" role="tabpanel" aria-labelledby="tabs-profile-tab">
          <table class="min-w-full divide-y divide-gray-200 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Feature
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Value
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach($features as $feature)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  {{$feature->name}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$feature->value}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block blend-multiply" id="tabs-downloads" role="tabpanel" aria-labelledby="tabs-profile-tab">
        <div class="bg-blue-50 p-4">
        <div class="border rounded-lg shadow-sm p-6 bg-white">
          <table class="w-full">
            @if(!empty($product->file) && !empty($product->file[0]->download_link))
              <tr>
                <td class="text-sm font-medium text-gray-900">
                  Product Brochure
                </td>
                <td class="flex justify-end items-center">
                  <a href="/storage/{{$product->file[0]->download_link}}" class="inline-flex items-center text-white bg-black hover:bg-blue-600 font-medium rounded-lg text-sm px-4 py-2">
                    <i class="fas fa-download mr-2"></i> Download
                  </a>
                </td>
              </tr>
            @else
              <tr>
                <td class="text-sm font-medium text-gray-900">
                  No Product Brochure found to download
                </td>
              </tr>
            @endif
          </table>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="py-[40px] px-[100px]">
    <h2 class="text-3xl font-bold">Related Products</h2>
    <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
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
      })" class="relative w-10/12 mx-auto flex flex-row pt-4">
      <div class="absolute inset-y-0 left-0 z-10 flex items-center">
        <button @click="swiper.slidePrev()" class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
          <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <div class="swiper-container" x-ref="container">
        <div class="swiper-wrapper">
          @foreach($related as $item)
            <div class="swiper-slide p-4">
              <figure class="group relative">
                <a href="{{ route('products.product', $item->slug) }}" class="flex justify-center">
                  <img src="{{asset('storage/'.$item->image)}}" alt="Product" class="h-[232px]" />
                  @if($item->images)
                    @foreach(json_decode($item->images) as $image)
                      @if($loop->last)
                        <img src="{{asset('storage/'.$image)}}" alt="Product" class="absolute opacity-0 group-hover:opacity-100 top-0 left-0 right-0 left-0 h-[232px] transition-opacity duration-300" />
                      @endif
                    @endforeach
                  @endif
                </a>
                <div class="product-action-vertical group-hover:opacity-100 group-hover:visible">
                  <a href="javascript:void(0)" onclick="$('.cart-submit-{{$item->id}}').submit();"
                    class="btn-product-icon btn-cart-design w-icon-cart loader-alert-{{$item->id}}"></a>
                    <form action="javascript:void(0)" method="POST" class="add-to-cart cart-form cart-submit-{{$item->id}}" id="{{$item->id}}">
                      @csrf
                      <input type="hidden" name="id" value="{{$item->id}}">
                    </form>
                </div>
                <div class="product-action absolute opacity-0 group-hover:opacity-100 group-hover:visible right-0 left-0 bottom-0 bg-gray-900 text-white font-semibold flex justify-center transition-opacity duration-300">
                  <a href="javascript:void(0);" class="show-modal py-4 text-center"
                    title="Quick View" id="{{$item->slug}}">Quick View</a>
                  <a href="javascript:void(0);" class="d-none btn-quickview" id="quickview-{{$item->id}}"></a>
                </div>
              </figure>
              <div class="pt-8">
                <h4 class="font-medium whitespace-nowrap overflow-hidden text-ellipsis"><a href="{{route('products.product', $item->id)}}">{{$item->name}}</a>
                </h4>
                <div class="ratings-container text-neutral-400 text-sm">
                  <a href="{{ route('brands.show', $item->brand->slug) }}" class="rating-reviews">{{$item->brand->name}}</a>
                </div>
                <div class="font-semibold text-lg whitespace-nowrap overflow-hidden text-ellipsis">
                  <div class="product-price">{{$item->code}}</div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="absolute inset-y-0 right-0 z-10 flex items-center">
        <button @click="swiper.slideNext()" class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
          <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
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


<style>
  .product-description h1 {
    font-size: 2.25rem;
    /* 36px */
    margin-top: 1rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #333;
  }

  .product-description h2 {
    font-size: 1.75rem;
    /* 28px */
    margin-top: 1rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #444;
  }

  .product-description h3 {
    font-size: 1.5rem;
    /* 24px */
    margin-top: 1rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #555;
  }

  .product-description h4 {
    font-size: 1.25rem;
    /* 20px */
    margin-top: 1rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #666;
  }

  .product-description h5 {
    font-size: 1rem;
    /* 16px */
    margin-top: 1rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #777;
  }

  .product-description h6 {
    font-size: 0.875rem;
    /* 14px */
    margin-top: 1rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #888;
  }

  .product-description p {
    font-size: 1rem;
    /* 16px */
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    color: #666;
    line-height: 1.6;
  }
</style>