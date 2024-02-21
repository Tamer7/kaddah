<!-- attributes: product => [img, category.title, url(optional), title, type1, type2] -->

<div class="px-4 py-2 lg:text-left text-center">
  <img class="mx-auto sm:max-h-[320px] max-h-[200px] min-h-[200px]" src="{{ $product['img'] }}" alt="">
  <div class="pt-5">{{ $product['category']['title'] }}</div>
  <a href="{{ $product['url'] ?? 'javascript:;' }}" class="underline">
    <div class="overflow-hidden text-ellipsis font-semibold text-lg whitespace-nowrap py-2">{{ $product['title'] }}</div>
  </a>
  <div class="overflow-hidden text-clip whitespace-nowrap">
    {{ $product['type1'] }} | <span class="font-bold">{{ $product['type2'] }}</span>
  </div>
</div>