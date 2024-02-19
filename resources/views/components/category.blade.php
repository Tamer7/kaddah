<x-panel>
  <x-slot name="title">{{ $attributes['title'] }}</x-slot>

  <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
    @foreach ($categories as $category)
      <x-items.category :category="$category" />
    @endforeach
  </div>
</x-panel>
