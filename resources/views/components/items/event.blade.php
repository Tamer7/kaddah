{{-- type of date must carbon --}}

<div class="block relative rounded-xl bg-white border border-neutral-500">
  <a href="#!">
    <div class="absolute top-4 left-4 w-[50px] h-[50px] rounded-lg bg-[theme(colors.blue)] font-medium text-lg leading-6 text-white text-center flex flex-col">
      <div>{{ $event['date']->day }}</div>
      <div>{{ $event['date']->shortMonthName }}</div>
    </div>
    <img class="rounded-xl w-full h-auto max-h-[177px]"
      src="{{ $event['img'] }}"
      alt="" />
  </a>
  <div class="p-6">
    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
      {{ $event['title'] }}
    </h5>
    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
      {{ $event['description'] }}
    </p>
  </div>
</div>