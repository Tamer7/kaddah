@php
  // parents are pushed to stack from top parent.
  $hasParent = isset($parents[0]);
  $breadcrumbs = array_reduce($parents ?? [], function ($carry, $parent) {
    $carry[$parent['title']] = $parent['url'];
    return $carry;
  }, []);
  $title = isset($category) ? $category['title'] : 'All Categories';
  $products = $products ?? [];
@endphp

<x-layout title="{{ $title }}">
  <x-panel :breadcrumbs="$breadcrumbs">
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="lg:tw-container tw-py-8 tw-grid lg:tw-grid-cols-3 lg:tw-gap-3 sm:tw-grid-cols-2">
      @foreach ($categories as $category)
        @php
          $item = [
            'url' => $category->children->count() === 0
              ? route('products.index', ['category_id' => $category->id])
              : route('categories.sub', $category->id),
            'img' => asset('storage/' . $category->image),
            'title' => $category->name,
            'description' => $category->title,
          ]
        @endphp
        <x-items.category :category="$item" />
      @endforeach
    </div>
  </x-panel>
</x-layout>