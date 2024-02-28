<div {{ $attributes->class(['lg:tw-px-[116px]', 'sm:tw-px-16', 'tw-px-8', 'lg:tw-py-[70px]', 'tw-py-8']) }}>
  @if (isset($header))
    {{ $header }}
  @endif

  <div class="tw-flex tw-justify-between tw-items-center">
    <div class="lg:tw-flex">
      @if (isset($customTitle))
        {{ $customTitle }}
      @elseif (isset($title))
        <h3 class="tw-text-4xl tw-font-semibold">{{ $title }}</h3>
      @endif

      @if (isset($description))
        <div class="tw-max-w-[460px] tw-text-lg lg:tw-ml-16">{{ $description }}</div>
      @endif
    </div>

    <a href="{{ $url ?? '#' }}" class="tw-font-bold text-tw-[theme(colors.blue)]">
      <span class="lg:tw-inline-block tw-hidden">{{ $more }}</span>
      <i class="lg:tw-hidden fa-solid fa-arrow-right"></i>
    </a>
  </div>
  <div class="tw-mt-[62px]">
    {{ $slot }}
  </div>
</div>
