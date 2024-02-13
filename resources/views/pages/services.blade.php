@extends('master')

@section('title', 'Cleaning Machine Maintenance')
@section('pkeywords', 'Cleaning Machine Maintenance,Floor Restoration')
@section('description', 'Kaddah Cleaning specializes in floor restoration and cleaning machine maintenance services. Learn more about our services and how we can help you.')
@section('content')

<!-- Start of Main -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">
                Expert Floor Restoration and Cleaning Machine Maintenance Services
            </h1>
            <h5 style="color: transparent; position: absolute;">
                We provide cleaning machine maintenance services in Dubai. Our skilled technical team is adept at servicing a vast array of cleaning machinery. 
                From vacuum machines and ride-ons to single-disc devices, dishwashers, dosing pumps, and hand dryers, we've got the expertise to ensure optimal performance.
                We also specialise in floor restoration
            </h5>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav mb-10 pb-1">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of Page Content -->
    <div class="page-content mb-10 pb-2">
        <div class="container">

            <section class="side-tab-section">
                <h2 class="title title-center mb-5">We Provide These Services</h2>
                <div class="row">
                    <div class="tab tab-vertical tab-nav-outline3 show-code-action">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-1">Floor Restoration &amp; Polishing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-2">Cleaning Machine Maintenance</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <p>
                                    Our team is highly experienced in the treatment and total restoration of natural stone
                                    and is eloquent &amp; professional in processes that include grinding, honing, polishing &amp;
                                    chemically treating all sorts of natural stone including marble, granite, limestone, and much more.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <p>
                                    Our technical team is fully trained to maintain and service all types of cleaning
                                    machinery including but not limited to vacuum machines, scrubbing, ride-on machines,
                                    walk-through machines, single-disc machines, dish washing machines, dosing pump systems and hand dryers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <div class="page-content mb-5 mt-5 pb-2">
                <div class="container">
                    <section class="mb-7">
                        <div class="row">
                            <div class="alert alert-primary alert-simple alert-inline show-code-action">
                                <h4 class="alert-title">Heads up!</h4>
                                If you're still interested in the services we're providing, please feel free to contact us anytime.
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <section class="contact-section">
                <div class="row gutter-lg pb-3 justify-content-center">
                    
                    <div class="col-lg-8 mb-8">
                        <h4 class="title mb-3">Get A Free Estimate</h4>
                        <form class="form contact-us-form" action="#" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="username" name="name"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email_1">Email</label>
                                <input type="email" id="email_1" name="email_1"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company">Your Company Name</label>
                                <input type="text" name="company" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" cols="30" rows="5"
                                    class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark btn-rounded">Send Now</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End of Contact Section -->
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->

@endsection