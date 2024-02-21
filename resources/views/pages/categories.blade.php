@php
  // parents are pushed to stack from top parent.
  $hasParent = isset($parents[0]);
  $breadcrumbs = array_reduce($parents ?? [], function ($carry, $parent) {
    $carry[$parent['title']] = $parent['url'];
    return $carry;
  }, []);
  $products = $products ?? [];
@endphp

<x-layout title="{{ isset($category) ? $category['title'] : 'All Categories' }}">
  <x-category
    title="{{ isset($category) ? $category['title'] : 'All Categories' }}"
    :breadcrumbs="$breadcrumbs"
    :categories="$categories"
    :products="$products" />
</x-layout>