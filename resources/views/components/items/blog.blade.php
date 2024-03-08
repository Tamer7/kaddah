{{-- type of date must carbon --}}

<style>
  /* For Webkit browsers */
.event-excerpt::-webkit-scrollbar {
  width: 1px;
}

.event-excerpt::-webkit-scrollbar-track {
  background: transparent;
}

.event-excerpt::-webkit-scrollbar-thumb {
  background-color: #27aee4;
  border-radius: 1px;
  border: none;
}

/* For Firefox */
.event-excerpt {
  scrollbar-width: thin;
  scrollbar-color: #27aee4 transparent;
}
</style>

<div class="block relative rounded-xl rounded-b-none bg-white border border-neutral-200">
  <a href="{{ $blog->slug ? route('blog.show', $blog->slug) : 'javascript:;' }}">
    <img class="rounded-xl rounded-b-none w-full h-auto h-[177px]"
      src="{{ asset('storage/'.$blog->image) }}"
      alt="" />

    <div class="p-6">
      <div class="flex items-center">
        <div class="w-[40px] h-[40px]">
          <img src="" alt="" class="rounded-full">
        </div>
        <!-- <div class="ml-2">
          <div class="font-bold">Kristin Watson</div>
          <div class="text-neutral-400">Marketing Coordinator</div>
        </div> -->
      </div>

      <h5 class="mb-2 mt-2 font-bold text-xl leading-tight text-neutral-800 dark:text-neutral-50">
        {{ $blog->title }}
      </h5>
      <p class="mb-4 mt-4 text-base text-neutral-600 dark:text-neutral-200 max-h-[150px] overflow-auto event-excerpt">
        {{ $blog->excerpt }}
      </p>
    </div>
  </a>
</div>