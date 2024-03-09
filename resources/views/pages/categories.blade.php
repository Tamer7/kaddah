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

  @section('canonical')
    <link rel="canonical" href="{{ url('/categories') }}" />
  @endsection

  <x-panel :breadcrumbs="$breadcrumbs">
    <x-slot name="title">{{ $title }}</x-slot>

    <style>
      .category-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: inline-block;
        cursor: pointer;
        border-radius: 1rem;
        overflow: hidden;
      }
      .category-item:hover {
        transform: scale(1.05);
        box-shadow: 0 0 15px #27aee4;
      }
    </style>

    <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
      @foreach ($categories as $category)
        @php
        $parentSlug = optional($category->parent)->slug;
          $item = [
            'url' => $category->children->count() === 0
              ? route('products.indexSpec', ['cateSlug' => $parentSlug ?? 'default-slug', 'subCateSlug' => $category['slug']])
              : route('categories.sub', $category->slug),
            'img' => asset('storage/' . $category->image),
            'title' => $category->name,
            'description' => $category->title,
          ];
        @endphp
        <div class="category-item transform transition duration-300 ease-in-out">
          <x-items.category :category="$item" />
        </div>
      @endforeach
    </div>
  </x-panel>
</x-layout>
