<!-- Start of Image Gallery -->
@if($images && is_array($images) && count($images))
    <div class="image-gallery mb-8">
        <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Images Gallery</h4>
        <!-- Swiper -->
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                @foreach($images as $image)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/'.$image) }}" alt="Gallery Image" class="img-fluid">
                    </div>
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="swiper-container gallery-thumbs mt-4">
            <div class="swiper-wrapper">
                @foreach($images as $image)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/'.$image) }}" alt="Thumbnail" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
<!-- End of Image Gallery -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 10,
                slidesPerView: 4,
                loop: true,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
            });
            var galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 10,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: galleryThumbs,
                },
            });
        });
    </script>

