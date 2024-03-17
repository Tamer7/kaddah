<x-layout title="Brands">
  <x-panel>
    <x-slot name="title">
      Our Brands & Partners
    </x-slot>
    <x-slot name="content">
      At Kaddah Cleaning, we offer an extensive array of cleaning products and services for all your hygienic needs. Discover the best options that match your requirements.
    </x-slot>
  </x-panel>

  <div>
    <h2 class="text-3xl text-center pt-24 pb-16 font-bold">Global Partners</h2>
    <div class="rounded-xl bg-[#e5f8ff] px-[168px] py-[50px] grid lg:grid-cols-3 gap-4">
      @foreach ($mainBrands as $brand)
        @php
          if ($loop->index >= 6) break;
          $productsCount = $brand->products->count();
        @endphp
        <a href="{{ route('brands.show', $brand->slug) }}" class="bg-white rounded-3xl flex justify-center items-center group relative h-[316px]">
          <img src="{{ asset('storage/'.$brand->image) }}" alt="">
          @if ($productsCount > 0)
            @php
              $product = $brand->products[rand(0, $productsCount-1)];
            @endphp
            <div class="group-hover:opacity-100 p-4 opacity-0 absolute top-0 right-0 bottom-0 left-0 flex transition-opacity duration-300 items-center justify-center">
              <div class="flex justify-center items-center w-full h-full">
                <img src="{{ asset("storage/".$product['image']) }}" alt="" class="max-w-full max-h-full">
              </div>
            </div>
          @endif
        </a>
      @endforeach
    </div>

    <div class="px-[124px] py-[51px]">
      <div class="p-[50px] grid lg:grid-cols-5 gap-2">
        @foreach ($globalBrands as $brand)
          <a href="{{ route('brands.show', $brand->slug) }}">
            <img src="{{ asset('storage/'.$brand->image) }}" alt="">
          </a>
        @endforeach
      </div>
      <div class="text-center font-semibold text-[34px]">
        Local Brands
      </div>
      <div class="p-[50px] grid lg:grid-cols-5 gap-2">
        @foreach ($localBrands as $brand)
          <a href="{{ route('brands.show', $brand->slug) }}">
            <img src="{{ asset('storage/'.$brand->image) }}" alt="">
          </a>
        @endforeach
      </div>
    </div>
  </div>
</x-layout>