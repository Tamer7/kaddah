@php
  $breadcrumbs = $parents->reduce(function ($carry, $parent) {
    $carry[$parent['title']] = $parent['url'];
    return $carry;
  }, []);
@endphp

<x-layout title="{{ $category['title'] }}">
  <x-panel :breadcrumbs="$breadcrumbs">
    <x-slot name="title">{{ $category['title'] }}</x-slot>
  
    <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
      @foreach ($products as $product)
        @php
          $item = [
            'url' => route('products.product', $product->id),
            'img' => asset('storage/' . $product->image),
            'category' => $category,
            'title' => $product->name,
            'type1' => $product->price,
            'type2' => $product->origin
          ]
        @endphp
        <x-items.product :product="$item" />
      @endforeach
    </div>
  </x-panel>
</x-layout>