@php
  $breadcrumbs = $parents->reduce(function ($carry, $parent) {
    $carry[$parent['title']] = $parent['url'];
    return $carry;
  }, []);
@endphp

<x-layout title="{{ $category['title'] ?? 'Products' }}">
  <x-panel :breadcrumbs="$breadcrumbs">
    <x-slot name="title">{{ $category['title'] ?? 'Products' }}</x-slot>
  
    @if($products->count() > 0)
      <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
        @foreach ($products as $product)
          <x-items.product :product="$product" :category="$category" />
        @endforeach
      </div>
    @elseif(request()->has('search'))
      <div class="text-center py-8">
        <h3 class="wishlist-title text-[20px] font-bold">Your search query for <span class="text-primary font-bold underline">{{ request()->query('search') }}</span> showed {{ $products->total() }} {{ $products->total() == 1 ? 'result' : 'results' }}</h3>
      </div>
    @endif

  </x-panel>
</x-layout>

