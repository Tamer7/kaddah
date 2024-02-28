@php
  $breadcrumbs = $parents->reduce(function ($carry, $parent) {
    $carry[$parent['title']] = $parent['url'];
    return $carry;
  }, []);
@endphp

<x-layout title="{{ $category['title'] ?? 'Products' }}">
  <x-panel :breadcrumbs="$breadcrumbs">
    <x-slot name="title">{{ $category['title'] ?? 'Products' }}</x-slot>
  
    <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
      @foreach ($products as $product)
        <x-items.product :product="$product" :category="$category" />
      @endforeach
    </div>
  </x-panel>
</x-layout>