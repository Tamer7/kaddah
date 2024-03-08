@php
$breadcrumbs = ["Brands" => "/brands"];
@endphp

<x-layout title="{{ $brand->name ?? '' }}">
    <x-panel :breadcrumbs="$breadcrumbs">
        <x-slot name="title">{{ $brand->name ?? 'Products' }}</x-slot>


    <!-- <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
    <form action="{{ route('brands.show', $brand->id ?? '') }}" method="GET" class="col-start-1">
    <select name="sort" id="sort" onchange="this.form.submit()" class="block bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 text-base leading-6 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm sm:leading-5">
      <option value="">Default sorting</option>
      <option value="old" {{ request()->sort == 'old' ? 'selected' : '' }}>Sort by Oldest</option>
      <option value="ASC" {{ request()->sort == 'ASC' ? 'selected' : '' }}>Sort by Code: A to Z</option>
      <option value="DESC" {{ request()->sort == 'DESC' ? 'selected' : '' }}>Sort by Code: Z to A</option>
    </select>

    </form>

    <form action="{{ route('brands.show', $brand->id ?? '') }}" method="GET" class="lg:col-start-3 sm:col-start-3 justify-self-center">
    <select name="show" id="show" onchange="this.form.submit()" class="block bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 text-base leading-6 text-gray-700 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm sm:leading-5">
        <option value="12" {{ request()->show == '12' ? 'selected' : '' }}>Show 12</option>
        <option value="20" {{ request()->show == '20' || !request()->has('show') ? 'selected' : '' }}>Show 20</option>
        <option value="40" {{ request()->show == '40' ? 'selected' : '' }}>Show 40</option>
        <option value="70" {{ request()->show == '70' ? 'selected' : '' }}>Show 70</option>
      </select>
    </form>
    </div> -->

    @if($products->count() > 0)
      <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
        @foreach ($products as $product)
          <x-items.brand :product="$product" :brand="$brand" />
        @endforeach
      </div>
    @elseif(request()->has('search'))
      <div class="text-center py-8">
        <h3 class="wishlist-title text-[20px]">Your search query for <span class="text-primary font-bold underline">{{ request()->query('search') }}</span> showed {{ $products->total() }} {{ $products->total() == 1 ? 'result' : 'results' }}</h3>
      </div>
    @endif

  </x-panel>
</x-layout>
