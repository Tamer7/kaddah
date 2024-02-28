@php
  $breadcrumbs = $parents->reduce(function ($carry, $parent) {
    $carry[$parent['title']] = $parent['url'];
    return $carry;
  }, []);
@endphp

<x-layout title="{{ $category['title'] ?? 'Products' }}">
  <x-panel :breadcrumbs="$breadcrumbs">
    <x-slot name="title">{{ $category['title'] ?? 'Products' }}</x-slot>
  
    <div class="lg:tw-container tw-py-8 tw-grid lg:tw-grid-cols-3 lg:tw-gap-3 sm:tw-grid-cols-2">
      @foreach ($products as $product)
        <x-items.product :product="$product" :category="$category" />
      @endforeach
    </div>
  </x-panel>
</x-layout>