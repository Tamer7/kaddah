@php
@endphp

<x-panel>
  <x-slot name="title">{{ htmlspecialchars_decode($attributes['title']) }}</x-slot>

  <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
    @foreach ($categories as $category)
      @php
        $item = [
          'url' => $category->children->count() === 0 ? 'javascript:;' : route('categories.sub', $category->id),
          'img' => asset('storage/' . $category->image),
          'title' => $category->name,
          'description' => $category->title,
        ]
      @endphp
      <x-items.category :category="$item" />
    @endforeach
  </div>
</x-panel>
