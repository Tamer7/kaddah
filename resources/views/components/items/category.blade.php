<div class="tw-text-center">
  <a href="{{ $category['url'] ?? 'javascript:;' }}">
    <img class="tw-mx-auto sm:tw-h-[176px] tw-h-[200px]" src="{{ $category['img'] }}" alt="">
    <div class="tw-font-semibold tw-text-xl tw-py-4">{{ $category['title'] }}</div>
    @isset($category['description'])
      <div class="tw-text-neutral-400 tw-max-h-24 tw-overflow-auto tw-w-10/12 tw-mx-auto">{{ $category['description'] }}</div>
    @endisset
  </a>
</div>
