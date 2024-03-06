<div class="main-content post-single-content">
    <figure class="post-media border rounded-sm">
        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog" class="w-full h-auto rounded-sm" />
    </figure>
    <div class="post-details">
        <div class="post-meta mt-12 ml-4">
            <a href="#" class="post-date text-sm">{{ dateFormat($blog->created_at, 'l j F Y') }}</a>
        </div>
        <h2 class="post-title"><a href="#">{{ $blog->name }}</a></h2>
        <div class="post-content text-neutral-600 font-semibold">
            <p>{{ $blog->excerpt }}</p>
        </div>
        <blockquote class="text-center my-6 text-2xl bg-neutral-100 text-neutral-800 py-6 px-4">
            <i class="fas fa-quote-left"></i>
            <p class="font-bold text-dark mt-1 mb-2">{{ $blog->description }}</p>
        </blockquote>

        <div class="blog-content">
            {!! $blog->body !!}
        </div>

    </div>
</div>
