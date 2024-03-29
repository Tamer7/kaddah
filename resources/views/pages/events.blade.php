<x-layout title="Events">

  @section('canonical')
    <link rel="canonical" href="{{ url('/events') }}" />
  @endsection

  <x-panel>
    <x-slot name="title">
      Latest Events
    </x-slot>
    <x-slot name="content">
      Get updated on the latest events happening at Kaddah Cleaning! Stay informed about our upcoming activities, promotions, and special offers.
    </x-slot>
  </x-panel>

  <div class="lg:container py-8 grid lg:grid-cols-3 lg:gap-6 sm:grid-cols-2 grid-cols-1 gap-4 px-8">
    @foreach ($events as $event)
      <x-items.event :event="$event" />
    @endforeach
  </div>
</x-layout>