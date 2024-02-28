{{-- type of date must carbon --}}

<div class="tw-block tw-relative tw-rounded-xl tw-bg-white tw-border tw-border-neutral-500">
  <a href="{{ $blog->slug ? route('blog.show', $blog->slug) : 'javascript:;' }}">
    <img class="tw-rounded-xl tw-w-full tw-h-auto tw-h-[177px]"
      src="{{ asset('storage/'.$blog->image) }}"
      alt="" />

    <div class="tw-p-6">
      <div class="tw-flex tw-items-center">
        <div class="tw-w-[40px] tw-h-[40px]">
          <img src="" alt="" class="tw-rounded-full">
        </div>
        <div class="tw-ml-2">
          <div class="tw-font-bold">Kristin Watson</div>
          <div class="tw-text-neutral-400">Marketing Coordinator</div>
        </div>
      </div>

      <h5 class="tw-mb-2 tw-mt-4 tw-font-bold tw-text-xl tw-font-medium tw-leading-tight tw-text-neutral-800 dark:tw-text-neutral-50">
        {{ $blog->title }}
      </h5>
      <p class="tw-mb-4 tw-mt-4 tw-text-base tw-text-neutral-600 dark:tw-text-neutral-200 tw-max-h-[150px] tw-overflow-auto">
        {{ $blog->excerpt }}
      </p>
    </div>
  </a>
</div>