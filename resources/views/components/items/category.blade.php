@props(['category'])

<div class="text-center">
  <a href="{{ $category['url'] ?? 'javascript:;' }}">
    <img {{ $attributes->class(['mx-auto', 'sm:h-[176px]', 'h-[200px]']) }} src="{{ $category['img'] }}" alt="">
    <div class="font-semibold text-xl py-4">{{ $category['title'] }}</div>
    @isset($category['description'])
      <div class="text-neutral-400 max-h-24 overflow-auto w-10/12 mx-auto">{{ $category['description'] }}</div>
    @endisset
  </a>
</div>
