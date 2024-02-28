<x-layout title="Events">
  <x-panel>
    <x-slot name="title">
      Latest Events
    </x-slot>
    <x-slot name="content">
      Get updated on the latest events happening at Kaddah Cleaning! Stay informed about our upcoming activities, promotions, and special offers.
    </x-slot>
  </x-panel>

  <div class="lg:tw-container tw-py-8 tw-grid lg:tw-grid-cols-3 lg:tw-gap-6 sm:tw-grid-cols-2 tw-gap-4 tw-px-8">
    @foreach ($events as $event)
      <x-items.event :event="$event" />
    @endforeach
  </div>
</x-layout>