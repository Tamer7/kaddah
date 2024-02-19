<div class="lg:px-[116px] sm:px-16 px-8 lg:py-[70px] py-8">
  @if (isset($header))
    {{ $header }}
  @endif

  <div class="flex justify-between items-center">
    @if (isset($customTitle))
      {{ $customTitle }}
    @elseif (isset($title))
      <h3 class="text-4xl font-semibold">{{ $title }}</h3>
    @endif

    @if (isset($description))
      <div class="max-w-[460px] text-lg">{{ $description }}</div>
    @endif

    <a href="{{ $url ?? '#' }}" class="font-bold text-[theme(colors.blue)]">
      <span class="lg:inline-block hidden">{{ $more }}</span>
      <i class="lg:hidden fa-solid fa-arrow-right"></i>
    </a>
  </div>
  <div class="mt-[62px]">
    {{ $slot }}
  </div>
</div>
