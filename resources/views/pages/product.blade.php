<x-layout title="todo" noDecorator>
  <div class="lg:py-[20px] lg:px-[80px] p-8 grid lg:grid-cols-9 gap-4">
    <div class="col-span-1 grid lg:grid-rows-4 lg:grid-cols-1 grid-cols-4 gap-1"
      role="tablist"
      data-te-nav-ref
    >
      <div class="flex">
        <img src="{{ asset("storage/{product->image}") }}"
          class="max-h-[122px] m-auto hover:cursor-pointer hover:border hover:border-[theme(colors.blue)] hover:rounded-lg data-[te-nav-active]:rounded-lg data-[te-nav-active]:border data-[te-nav-active]:border-[theme(colors.blue)] data-[te-nav-active]:rounded-lg"
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
          <div class="flex">
            <img src="{{ asset("storage/$image") }}"
              class="max-h-[122px] m-auto hover:cursor-pointer hover:border hover:border-[theme(colors.blue)] hover:rounded-lg data-[te-nav-active]:rounded-lg data-[te-nav-active]:border data-[te-nav-active]:border-[theme(colors.blue)] data-[te-nav-active]:rounded-lg"
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

    <div class="col-span-4">
      <div
        class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="tabs-image-0"
        role="tabpanel"
        aria-labelledby="tabs-home-tab"
        data-te-tab-active>
        <img src="{{ asset("storage/{$product->image}") }}" alt="" class="mx-auto max-h-[800px]">
      </div>
      @if ($product->images)
        @foreach (json_decode($product->images) as $index => $image)
          <div
            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-image-{{ $index + 1 }}"
            role="tabpanel"
            aria-labelledby="tabs-image-tab">
            <img src="{{ asset("storage/$image") }}" alt="" class="mx-auto max-h-[800px]">
          </div>
        @endforeach
      @endif
    </div>
    <div class='col-span-4'>
      <div class="relative before:-z-10 before:absolute before:-top-[10px] before:-bottom-[10px] lg:before:-left-[400px] before:-left-8 lg:before:-right-[80px] before:-right-8 before:content-[''] before:bg-[#e5f8ff] lg:before:rounded-l-full">
        <div class="font-bold text-[21px]">Green Machine With Single Phase / 2 Hp</div>
        <div class="flex items-center py-8">
          <img src="{{ asset('storage/'.$product->brand->image) }}" alt="" class="w-[108px] h-[60px]">
          <div class="ml-4">
            {{ $categoryNames->join(' < ') }}
          </div>
        </div>
        <div class="">
          <ins class="new-price">{{ $product->code }}</ins> - {{ $product->details }}
        </div>
        <div class="grid grid-rows-3 divide-y pt-6 w-[80%] text-[#282938]">
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
    <div class="rounded-3xl bg-[#e5f8ff] lg:p-8 p-4">
      <ul
        class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0"
        role="tablist"
        data-te-nav-ref>
        <li role="presentation">
          <a href="#tabs-description"
            class="my-2 block border-x-0 border border-t-0 border-transparent lg:px-7 px-2 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent focus:isolate focus:border-transparent dark:text-neutral-400 dark:hover:bg-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 data-[te-nav-active]:font-bold"
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
            class="my-2 block border-x-0 border border-t-0 border-transparent lg:px-7 px-2 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent focus:isolate focus:border-transparent dark:text-neutral-400 dark:hover:bg-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 data-[te-nav-active]:font-bold"
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
            class="my-2 block border-x-0 border border-t-0 border-transparent lg:px-7 px-2 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent focus:isolate focus:border-transparent dark:text-neutral-400 dark:hover:bg-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 data-[te-nav-active]:font-bold"
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
      <div class="mb-6">
        <div
          class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
          id="tabs-description"
          role="tabpanel"
          aria-labelledby="tabs-home-tab"
          data-te-tab-active>
          {!! $product->description !!}
        </div>
        <div
          class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
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
          class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
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

  <div class="py-[40px] px-[100px]">
    <h2 class="text-3xl font-bold">Related Products</h2>
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-8">
      <x-items.product :product="$product" :category="$product->categories->first()"/>
    </div>
  </div>
</x-layout>