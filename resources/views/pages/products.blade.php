@php
  $categoryList = [
    [
      'img' => '/images/test/image 19.png',
      'title' => 'Machinery',
      'description' => 'Make your product more eye-catching with a touch of illustration'
    ],
    [
      'img' => '/images/test/image 22.png',
      'title' => 'Cleaning Trolley',
      'description' => 'Make your product more eye-catching with a touch of illustration'
    ],
    [
      'img' => '/images/test/image 32.png',
      'title' => 'Cleaning tools & Equipment',
      'description' => 'Make your product more eye-catching with a touch of illustration'
    ]
  ];
  for ($var = 0; $var < 12; $var++) {
    $categoryList[] = $categoryList[rand(0, 2)];
  }
@endphp

<x-layout title="Products">
  <x-panel>
    <x-slot name="title">
      All Categories
    </x-slot>

    <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
      @foreach ($categoryList as $category)
        <x-items.category :category="$category" />
      @endforeach
    </div>
  </x-panel>
</x-layout>