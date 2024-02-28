<!-- attributes: product => [img, category.title, url(optional), title, type1, type2] -->

<div class="tw-px-4 tw-py-2 lg:tw-text-left tw-text-center">
  <a href="{{ route('products.product', ['product' => $product->id, 'category_id' => $category['id'] ?? '']) }}" class="tw-underline">
    <img class="tw-mx-auto sm:tw-max-h-[320px] tw-max-h-[200px] tw-min-h-[200px]" src="{{ asset('storage/' . $product->image) }}" alt="">
    <div class="tw-pt-5">{{ $category['title'] ?? 'Products' }}</div>
    <div class="tw-overflow-hidden tw-text-ellipsis tw-font-semibold tw-text-lg tw-whitespace-nowrap tw-py-2">{{ $product->name }}</div>
    <div class="tw-overflow-hidden tw-text-clip tw-whitespace-nowrap">
      {{ $product->price }} | <span class="tw-font-bold">{{ $product->origin }}</span>
    </div>
  </a>
</div>