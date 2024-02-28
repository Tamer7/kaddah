{{-- type of date must carbon --}}

<div class="tw-block tw-relative tw-rounded-xl tw-bg-white tw-border tw-border-neutral-500">
  <a href="{{ isset($event['slug']) ? route('event.show', $event['slug']) : 'javascript:;' }}">
    <div class="tw-absolute tw-top-4 tw-left-4 tw-w-[50px] tw-h-[50px] tw-rounded-lg tw-bg-[theme(colors.blue)] tw-font-medium tw-text-lg tw-leading-6 tw-text-white tw-text-center tw-flex tw-flex-col">
      <div>{{ \Carbon\Carbon::parse($event['created_at'])->day }}</div>
      <div>{{ \Carbon\Carbon::parse($event['created_at'])->shortMonthName }}</div>
    </div>
    <img class="tw-rounded-xl tw-w-full tw-h-[177px]"
      {{-- src="{{ asset('storage/'.$event['image']) }}" --}}
      src="{{ asset('images/test/Rectangle 46.png') }}"
      alt="" />
    <div class="tw-p-6">
      <h5 class="tw-mb-2 tw-text-xl tw-font-medium tw-leading-tight tw-text-neutral-800 dark:tw-text-neutral-50 tw-text-ellipsis tw-overflow-hidden tw-whitespace-nowrap">
        {{ $event['title'] }}
      </h5>
      <p class="tw-mb-4 tw-text-base tw-text-neutral-600 dark:tw-text-neutral-200 tw-h-[100px] tw-overflow-auto">
        {{ $event['excerpt'] }}
      </p>
    </div>
  </a>
</div>