<div class="text-center px-4 py-2">
  <a href="{{ $category['url'] ?? 'javascript:;' }}">
    <img class="mx-auto sm:h-[176px] h-[200px]" src="{{ $category['img'] }}" alt="">
    <div class="font-semibold text-xl py-4">{{ $category['title'] }}</div>
    <div class="text-neutral-400 max-h-20 overflow-auto w-10/12 mx-auto">{{ $category['description'] }}</div>
  </a>
</div>
