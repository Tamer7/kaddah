{{-- type of date must carbon --}}

<div class="block relative rounded-xl bg-white border border-neutral-500">
  <a href="{{ $blog->slug ? route('blog.show', $blog->slug) : 'javascript:;' }}">
    <img class="rounded-xl w-full h-auto h-[177px]"
      src="{{ asset('storage/'.$blog->image) }}"
      alt="" />

    <div class="p-6">
      <div class="flex items-center">
        <div class="w-[40px] h-[40px]">
          <img src="" alt="" class="rounded-full">
        </div>
        <div class="ml-2">
          <div class="font-bold">Kristin Watson</div>
          <div class="text-neutral-400">Marketing Coordinator</div>
        </div>
      </div>

      <h5 class="mb-2 mt-4 font-bold text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
        {{ $blog->title }}
      </h5>
      <p class="mb-4 mt-4 text-base text-neutral-600 dark:text-neutral-200 max-h-[150px] overflow-auto">
        {{ $blog->excerpt }}
      </p>
    </div>
  </a>
</div>