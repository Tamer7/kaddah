<div class="block rounded-xl bg-white border border-neutral-500">
  <a href="#!">
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