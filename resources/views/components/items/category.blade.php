<div class="text-center px-10 py-7">
  <a href="{{ $category['url'] ?? '' }}">
    <img class="mx-auto sm:h-[176px] h-[200px]" src="{{ $category['img'] }}" alt="">
    <div class="font-semibold text-xl py-4">{{ $category['title'] }}</div>
    <div class="text-neutral-400 max-h-20 overflow-auto">{{ $category['description'] }}</div>
  </a>
</div>
