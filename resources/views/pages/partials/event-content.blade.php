<div class="post post-grid post-single">
    <figure class="post-media br-sm justify-items-center">
        <img src="{{ asset('storage/' . $event->image) }}" alt="event" width="100%" height="500" />
    </figure>
    <div class="post-details">
        <div class="post-meta mt-12 ml-4">
            <a href="#" class="post-date text-sm">{{ dateFormat($event->created_at, 'l j F Y') }}</a>
        </div>
        <h2 class="post-title"><a href="#">{{ $event->name }}</a></h2>
        <div class="post-content text-neutral-600 font-semibold">
            <p>{{ $event->excerpt }}</p>
        </div>
        <blockquote class="text-center my-6 text-2xl bg-neutral-100 text-neutral-800 py-6 px-4">
            <i class="fas fa-quote-left"></i>
            <p class="  font-semibold text-dark mt-1 mb-2">{{ $event->description }}</p>
        </blockquote>

        <div class="blog-content">
            {!! $event->body !!}
        </div>
    </div>
</div>
