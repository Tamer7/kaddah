<x-layout title="Articles">
  <x-panel>
    <x-slot name="title">
      Latest Blogs and Updates
    </x-slot>
    <x-slot name="content">
      Stay up-to-date with the latest news and updates on Kaddah Cleaning through our informative and insightful blogs. Get tips, tricks, and expert advice.
    </x-slot>
  </x-panel>

  <div class="lg:tw-container tw-py-8 tw-grid lg:tw-grid-cols-3 lg:tw-gap-3 sm:tw-grid-cols-2 tw-gap-4 tw-px-8">
    @foreach ($blogs as $blog)
      <x-items.blog :blog="$blog" />
    @endforeach
  </div>
</x-layout>