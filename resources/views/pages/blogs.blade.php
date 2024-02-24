<x-layout title="Articles">
  <x-panel>
    <x-slot name="title">
      Latest Blogs and Updates
    </x-slot>
    <x-slot name="content">
      Stay up-to-date with the latest news and updates on Kaddah Cleaning through our informative and insightful blogs. Get tips, tricks, and expert advice.
    </x-slot>
  </x-panel>

  <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
    @foreach ($blogs as $blog)
      <x-items.blog :blog="$blog" />
    @endforeach
  </div>
</x-layout>