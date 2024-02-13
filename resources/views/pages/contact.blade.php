@extends('master')

@section('title', 'Contact Us')

@section('content')

<!-- Start of Main -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title mb-0">
                CONTACT US
            </h1>
        </div>
    </div>
    <br />
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <!-- <nav class="breadcrumb-nav mb-10 pb-1">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </nav> -->
    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="page-content contact-us">
        <div class="container">
            <section class="content-title-section mb-10">
                <h3 class="title title-center mb-3">
                    Our Contact Details
                </h3>
                <p class="text-center">
                    Get in touch with us if you have any questions or feedback, or if you are interested in our
                    cleaning solutions.
                </p>
            </section>
            <!-- End of Contact Title Section -->

            <section class="contact-information-section mb-10">
                <div class="row cols-xl-4 cols-md-4 cols-sm-12" style="justify-content:space-evenly">
                    <div class="icon-box text-center icon-box-primary mb-5">
                        <span class="icon-box-icon icon-email">
                            <i class="w-icon-envelop-closed"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">E-mail Address</h4>
                            <p><a href="mailto:info@kicuae.com">info@kicuae.com</a></p>
                        </div>
                    </div>
                    <div class="icon-box text-center icon-box-primary mb-5">
                        <span class="icon-box-icon icon-headphone">
                            <i class="w-icon-headphone"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Phone Number</h4>
                            <p><a href="tel:+97142384774">+971 4 238 4774</a></p>
                        </div>
                    </div>
                    <div class="icon-box text-center icon-box-primary mb-5">
                        <span class="icon-box-icon icon-map-marker">
                            <i class="w-icon-map-marker"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Address</h4>
                            <p>Gate 1, Area 598, Building 1767,</p>
                            <p>Street 40, DIP 1, Dubai, United Arab Emirates</p>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End of Contact Information section -->

            <hr class="divider mb-10 pb-1">

            <section class="contact-section">
                <div class="row gutter-lg pb-3">
                    <div class="col-lg-6 mb-8">
                        <h4 class="title mb-3">FAQs</h4>
                        <div class="accordion accordion-bg accordion-gutter-md accordion-border">
                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse1" class="collapse">What areas do you cover for shipping?</a>
                                </div>
                                <div id="collapse1" class="card-body expanded">
                                    <p class="mb-0">
                                        We provide shipping across the entire United Arab Emirates and offer export services to
                                        countries within the GCC, the Middle East, and Africa.
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse2" class="expand">Do you provide rental cleaning equipment?</a>
                                </div>
                                <div id="collapse2" class="card-body collapsed">
                                    <p class="mb-0">
                                    At the minute, we do not rent out any of the cleaning equipment in our
                                    catalogs. We do have plans however to operate a rent-out scheme in the distant future.
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse3" class="expand">How can I obtain a quotation for the products I need?</a>
                                </div>
                                <div id="collapse3" class="card-body collapsed">
                                    <p class="mb-0">
                                    You may request a quotation by adding the desired products to your cart
                                    and providing your contact details. Once you submit your request for quotation, our sales team
                                    will respond with an official quote within 24 hours.
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse4" class="expand">Do you offer demonstrations, training, or assembly for specific products?</a>
                                </div>
                                <div id="collapse4" class="card-body collapsed">
                                    <p class="mb-0">
                                        We are committed to ensuring your satisfaction and offer demonstrations, live training, and
                                        product assembly as needed. Our knowledgeable sales team is available to assist with these
                                        services.
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse5" class="expand">What support is available through your after-sales customer service?</a>
                                </div>
                                <div id="collapse5" class="card-body collapsed">
                                    <p class="mb-0">
                                        Our after-sales support team is readily available to assist with additional requests, training
                                        instructions, maintenance, and more. For urgent inquiries, please contact our main service
                                        landline at <span><a href="tel:+97142384774">+971 4 238 4774.</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-8">
                        <h4 class="title mb-3">Send Us a Message</h4>
                        <form class="form contact-us-form" action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username">Full Name *</label>
                                <input type="text" name="name"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email_1">Contact Number *</label>
                                <input type="text" name="mobile"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email_1">Email Address *</label>
                                <input type="email" name="email"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea name="message" cols="30" rows="5"
                                    class="form-control" required></textarea>
                            </div>
                            <!-- Google Recaptcha -->
                            <div class="g-recaptcha mt-4" data-sitekey="{{config('services.recaptcha.key')}}" data-validate="{required:true}"></div>
                            <button type="submit" class="btn btn-dark btn-rounded">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End of Contact Section -->
            
           <section>

    <div class="base-header">
        <h2>Showroom Locations</h2>
    </div>


    <div class="row contact_pg_address_row">
        <div class="col-md-4 col-sm-6" style="flex: 1;">
            <div class="contact_pg_address">
                <div class="single_con_add">
                    <i class="fa fa-home"></i>
                    <span style="font-weight: bold;">Address:</span>
                    <br>
                    <span>Al Khabaisi | Speedex Center <br> Dubai - UAE </span>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12" style="flex: 4;">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=AKC%20Cleaning%20Equipments%20speedex%20center&t=&z=17&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="row contact_pg_address_row" >
        <div class="col-md-4 col-sm-6" style="flex: 1;">
            <!-- profile 4-->
            <div class="contact_pg_address">
                <div class="single_con_add">
                    <i class="fa fa-home"></i>
                    <span style="font-weight: bold;">Address:</span>
                    <br>
                    <span>Al Ras | Deira <br> Dubai - UAE</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12" style="flex: 4;">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=AKC%20Cleaning%20Equipments%20Al%20Khor%20Street&t=&z=17&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="row contact_pg_address_row">
        <div class="col-md-4 col-sm-6" style="flex: 1;">
            <div class="contact_pg_address">
                <div class="single_con_add">
                    <i class="fa fa-home"></i>
                    <span style="font-weight: bold;">Address:</span>
                    <br>
                    <span>Mussafah Industrial Area
                    <br> 
                    Abu Dhabi - UAE</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12" style="flex: 4;">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29068.369012362575!2d54.470257!3d24.3970877!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e413e585a181f%3A0xd4d497fac88a266e!2sAKC%20Cleaning%20Equipments!5e0!3m2!1sen!2sae!4v1643358712844!5m2!1sen!2sae"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="row contact_pg_address_row">
        <div class="col-md-4 col-sm-6" style="flex: 1;">
            <div class="contact_pg_address">
                <div class="single_con_add">
                    <i class="fa fa-home"></i>
                    <span style="font-weight: bold;">Address:</span>
                    <br>
                    <span>Head Office</span><br> 
                    <span>Dubai Investment Park 1</span>
                    <br>
                    <span> Dubai - UAE</span>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12" style="flex: 4;">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3616.6287906257867!2d55.1510816!3d24.9787413!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f73f1f7e6099f%3A0xfb33a0920d800dc5!2sKaddah%20Building%20Cleaning%20Equipment%20(%20AKC%20)!5e0!3m2!1sen!2sae!4v1695666473064!5m2!1sen!2sae"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
    </div>
    <!-- End of PageContent -->
</main>
<!-- End of Main -->

@endsection

@section('js')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>

$(document).ready(function() {
    setTimeout(() => {
        const $recaptcha = document.querySelector('#g-recaptcha-response');
        if ($recaptcha) {
            $recaptcha.setAttribute('required', 'required');
        }
    }, 5000);
});

</script>
@endsection