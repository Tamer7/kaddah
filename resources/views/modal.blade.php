<script>

    function getProduct(productSlug) {
        var routeProduct = "{{route('product.single', ':slug')}}".replace(':slug', productSlug);
        $.ajax({
            type: 'GET',
            url: routeProduct,
            dataType: 'json',
            success: function(product) {
                showModal(product);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + '-' + textStatus + '-' + errorThrown);
            }
        });
    }

    function showModal(product) {
        var products = '';
        products += `
            <div class="row gutter-lg">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="product-gallery product-gallery-sticky">
                        <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                            <div class="swiper-wrapper row cols-1 gutter-no" id="modalImages">
                                <div class="swiper-slide">
                                    <figure class="product-image" id="modalImage">

                                    </figure>
                                </div>


                            </div>
                            <button class="swiper-button-next"></button>
                            <button class="swiper-button-prev"></button>
                        </div>
                        <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                            'navigation': {
                                'nextEl': '.swiper-button-next',
                                'prevEl': '.swiper-button-prev'
                            }
                        }">
                            <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm" id="modalThumbs">
                                <div class="product-thumb swiper-slide" id="modalThumb">

                                </div>

                            </div>
                            <button class="swiper-button-next"></button>
                            <button class="swiper-button-prev"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 overflow-hidden p-relative">
                    <div class="product-details scrollable pl-0">
                        <h2 class="product-title">${product.name}</h2>
                        <div class="product-bm-wrapper">
                            <figure class="brand" id="brand-image">

                            </figure>
                            <div class="product-meta">
                                <div class="product-categories">
                                    Main Category:
                                    <span class="main-category parentSlug-${product.id}"></span>
                                </div>
                                <div class="product-sku">
                                    Sub Category: <span class="product-category"></span>
                                </div>
                            </div>
                        </div>

                        <hr class="product-divider">

                        <div class="product-price">${product.code}</div>

                        <div class="ratings-container" id="product-title">

                        </div>

                        <div class="product-short-desc">
                            <ul class="list-type-check list-style-none">
                                <li> ${product.details} </li>
                                <li>Origin: ${product.origin}</li>
                                <li>Warranty: ${product.warranty}</li>
                                <li>Brand: <span id="brand_name"></span></li>
                            </ul>
                        </div>

                        <hr class="product-divider">

                        <div class="product-form">

                            <form action="javascript:void(0)" method="POST" onSubmit="AjaxCart(event)" id="${product.id}" class="cart-form">
                                @csrf
                                <input type="hidden" name="id" value="${product.id}">
                                <button type="submit" class="btn btn-primary btn-cart-design" id="loading-alert-${product.id}"
                                style="white-space: normal;"
                                >
                                    <i class="${product.inCart ? 'fas fa-check' : 'w-icon-cart'}"></i>
                                    <span>${product.inCart ? 'This Product is Already in Your Cart' : 'Add to Cart'}</span>
                                </button>
                            </form>

                            <button class="d-none btn-cart" id="cart-response-${product.id}">
                            </button>
                        </div>

                        <div class="social-links-wrapper">
                            <span class="divider d-xs-show"></span>
                            <div class="product-link-wrapper d-flex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        $('#product-modal').html(products);

        var imgElement = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + product.image)
                            .attr('data-zoom-image', "{{asset('storage/')}}" + '/' + product.image)
                            .attr('width', "800").attr('height', "900");

        $('#modalImage').append(imgElement);

        var imgThumb = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + product.image)
                            .attr('width', "103").attr('height', "116");


        $('#modalThumb').append(imgThumb);

        var imagesElement = '';
        var imagesThumb = '';

        var images = JSON.parse(product.images);
        $.each(images, function(index, imageData){
            imagesElement += `
                <div class="swiper-slide">
                    <figure class="product-image" id="img-${index}">

                    </figure>
                </div>
            `;


            imagesThumb += `
                <div class="product-thumb swiper-slide" id="thumb-${index}">

                </div>
            `;


        });

        $('#modalImages').append(imagesElement);
        $('#modalThumbs').append(imagesThumb);

        $.each(images, function(serial, allImages) {

            var imgElements = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + allImages);

            var imgThumbs = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + allImages)
                                        .attr('width', "103").attr('height', "116");

            $('#img-'+serial).append(imgElements);
            $('#thumb-'+serial).append(imgThumbs);
        });

        getBrand(product.brand_id);
        getCategories(product.id);

        var quickview = $('#quickview-'+product.id);

        quickview.click();
        //$('.show-modal').addClass('w-icon-search');
        $('.show-modal').removeClass('atlantic-spinner');
        $('.show-modal').removeClass('atlantic-spinner-black');
        $('.wishlist-modal').removeClass('w-icon-search');
    }

    function getBrand(brand_id) {
        var brandRoute = "{{route('product.brand', ':id')}}".replace(':id', brand_id);

        $.ajax({
            type: 'GET',
            url: brandRoute,
            dataType: 'json',

            success: function(brand) {
                var imgBrand = $('<img>').attr('src', "{{asset('storage/')}}" + '/' + brand.image)
                            .attr('width', "102").attr('height', "48");

                $('#brand-image').append(imgBrand);
                $('#brand_name').html(brand.name);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + '-' + textStatus + '-' + errorThrown);
            }
        });

    }

    function getCategories(product_id) {
        var categoryRoute = "{{route('product.category', ':productId')}}".replace(':productId', product_id);

        $.ajax({
            type: 'GET',
            url: categoryRoute,
            dataType: 'json',
            success: function(response) {

                var product = response.product;
                var category = response.category;
                var parent = response.parent;

                var parentGo = "{{route('category.child', ':parent')}}".replace(':parent', parent.slug);

                var parentHtml = `<a href="${parentGo}">${parent.name}</a>`;
                $('.main-category').html(parentHtml);

                var childGo = "{{route('category.products', [':parent', ':child'])}}".replace(':parent', parent.slug).replace(':child', category.slug);

                var categoryElement = `
                    <a href="${childGo}">${category.name}</a>`;

                $('.product-category').append(categoryElement);

                var productUrl = "{{route('product.show', [':parent', ':child', ':slug'])}}".replace(':parent', parent.slug).replace(':child', category.slug).replace(':slug', product.slug);
                var productHtml = `
                <a href="${productUrl}" class="rating-reviews">${product.name}</a>
                `;

                $('#product-title').html(productHtml);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + '-' + textStatus + '-' + errorThrown);
            }
        });

    }

    function AjaxCart(event) {
        var form = $(event.target);

        var formData = form.serialize();
        var productId = form.attr('id');

        var loadingAlert = $('#loading-alert-'+productId);

        $.ajax({
            url: `{{route('cartStore.ajax')}}`,
            type: 'POST',
            data: formData,
            beforeSend: function() {
                loadingAlert.html('<span class="atlantic-spinner atlantic-spinner-white"></span>');
            },
            success: function(response) {
                var product = response.product;
                var message = response.message;

                console.log(response);

                if(message && message.indexOf('added') > -1) {
                    var click = $('#cart-response-' + product.id);
                    click.html(message);
                    click.click();
                }

                cartProducts();

                loadingAlert.html('<i class="fas fa-check"></i><span>'+message+'</span>');
            },
            error: function(error) {
                console.log(error);
                loadingAlert.html('<i class="fas fa-times"></i><span>Something went wrong.</span>');
            }
        });
    }

</script>
