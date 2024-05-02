@php
  $category = $product->categories[0];
  $prodSlug = $product->slug;
  $subCateSlug = $category->slug;
  $cateSlug = $category->parent->slug ?? "empty";
@endphp

<div class="px-4 py-2 lg:text-left text-center">
  <a href="{{ route('products.productSpec', compact('prodSlug', 'subCateSlug', 'cateSlug')) }}" class="underline">
    <img class="mx-auto sm:max-h-[320px] max-h-[200px] min-h-[200px]" src="{{ asset('storage/' . $product->image) }}" alt="">
    <div class="pt-5">{{ $product->name ?? 'Products' }}</div>
    <div class="overflow-hidden text-ellipsis font-semibold text-lg whitespace-nowrap py-2">{{ $product->name }}</div>
    <div class="overflow-hidden text-clip whitespace-nowrap">
      {{ $product->price }} | <span class="font-bold">{{ $product->origin }}</span>
    </div>
  </a>
</div>