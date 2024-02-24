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

<div class="px-8 py-4 lg:px-32 lg:py-{{ $paddingY }}">
	<div class="relative flex items-center">
		<div class="absolute font-bold text-lg flex items-center">
			@foreach ($breadcrumbs as $name => $url)
				@if (!$loop->first) <i class="fa-solid fa-chevron-left mx-2 text-xs"></i>@endif <a href="{{ $url }}" class="underline max-w-[130px] whitespace-nowrap overflow-hidden text-ellipsis">{{ $name }}</a>
			@endforeach
		</div>
		@if ($title)
			<h1 class="mx-auto font-semibold text-center text-[42px] text-[theme(colors.blue)]">{{ $title }}</h1>
		@endif
	</div>
	@if ($hasContent)
		<p class="flex justify-center mt-6">
			<span class="max-w-[543px] text-center text-lg">{{ $content }}</span>
		</p>
	@endif
</div>

{{ $slot }}
