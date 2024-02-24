<x-layout title="Events">
  <x-panel>
    <x-slot name="title">
      All Events
    </x-slot>
    <x-slot name="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
    </x-slot>
  </x-panel>

  <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-3 sm:grid-cols-2">
    @foreach ($events as $event)
      <x-items.event :event="$event" />
    @endforeach
  </div>
</x-layout>