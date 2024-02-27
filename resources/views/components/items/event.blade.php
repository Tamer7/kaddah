{{-- type of date must carbon --}}

<div class="block relative rounded-xl bg-white border border-neutral-500">
  <a href="{{ isset($event['slug']) ? route('event.show', $event['slug']) : 'javascript:;' }}">
    <div class="absolute top-4 left-4 w-[50px] h-[50px] rounded-lg bg-[theme(colors.blue)] font-medium text-lg leading-6 text-white text-center flex flex-col">
      <div>{{ \Carbon\Carbon::parse($event['created_at'])->day }}</div>
      <div>{{ \Carbon\Carbon::parse($event['created_at'])->shortMonthName }}</div>
    </div>
    <img class="rounded-xl w-full h-[177px]"
      {{-- src="{{ asset('storage/'.$event['image']) }}" --}}
      src="{{ asset('images/test/Rectangle 46.png') }}"
      alt="" />
    <div class="p-6">
      <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-ellipsis overflow-hidden whitespace-nowrap">
        {{ $event['title'] }}
      </h5>
      <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200 h-[100px] overflow-auto">
        {{ $event['excerpt'] }}
      </p>
    </div>
  </a>
</div>