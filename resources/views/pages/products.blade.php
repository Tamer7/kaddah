@php
  // parents are pushed to stack from top parent.
  $hasParent = isset($parents[0]);
  $breadcrumbs = array_reduce($parents ?? [], function ($carry, $parent) {
    $carry[$parent['title']] = $parent['url'];
    return $carry;
  }, []);

  // test
  $categoryList = [
    [
      'img' => '/images/test/image 19.png',
      'title' => 'Machinery',
      'url' => '/products/Machinery',
      'description' => 'Make your product more eye-catching with a touch of illustration'
    ],
    [
      'img' => '/images/test/image 22.png',
      'title' => 'Cleaning Trolley',
      'url' => '/products/Cleaning Trolley',
      'description' => 'Make your product more eye-catching with a touch of illustration'
    ],
    [
      'img' => '/images/test/image 32.png',
      'title' => 'Cleaning tools & Equipment',
      'url' => '/products/Cleaning tools & Equipment',
      'description' => 'Make your product more eye-catching with a touch of illustration'
    ]
  ];
  for ($var = 0; $var < 12; $var++) {
    $categoryList[] = $categoryList[rand(0, 2)];
  }
@endphp

<x-layout title="{{ $title ?? 'All Categories' }}">
  <x-category title="{{ $title ?? 'All Categories' }}" :categories="$categoryList" :breadcrumbs="$breadcrumbs">
  </x-category>
</x-layout>