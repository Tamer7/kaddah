{{-- <x-panel :breadcrumbs="undefined|array"></x-panel> --}}

@php
	$hasTitle = !empty($title);
	$hasContent = !empty($content);

	$paddingY = 16;
	if (!$hasContent) {
		if ($hasTitle) $paddingY = 8;
		else $paddingY = 4;
	}

	$breadcrumbs = $breadcrumbs ?? [];
@endphp

<div class="tw-px-8 tw-py-4 lg:tw-px-32 lg:tw-py-{{ $paddingY }}">
	<div class="tw-relative tw-flex tw-flex-col">
		<div class="tw-font-bold tw-text-lg tw-h-[20px]">
			@foreach ($breadcrumbs as $name => $url)
				@if (!$loop->first) <i class="fa-solid fa-chevron-left tw-mx-2 tw-text-xs"></i>@endif <a href="{{ $url }}" class="tw-underline tw-max-w-[130px]">{{ $name }}</a>
			@endforeach
		</div>
		@if ($title)
			<h1 class="tw-mx-auto tw-font-semibold tw-text-center tw-text-[42px] tw-text-[theme(colors.blue)]">{{ $title }}</h1>
		@endif
	</div>
	@if ($hasContent)
		<p class="tw-flex tw-justify-center tw-mt-6">
			<span class="tw-max-w-[543px] tw-text-center tw-text-lg">{{ $content }}</span>
		</p>
	@endif
</div>

{{ $slot }}
