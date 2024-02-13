@extends('master')

@section('title', 'About Us')

@section('content')

<!-- Start of Main -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header" style="position: absolute; background-color: transparent;">
        <div class="container">
            <h1 class="page-title mb-0">About US</h1>
        </div>
    </div>
    <br />
    <!-- End of Page Header -->

    <!-- Start of PageContent -->
    <div class="page-content about-us">
        <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-100"
            style="background-image: url({{asset('/images/pages/aboutus/banner-aboutus.jpg')}}); background-color: var(--primary-color);">
            <div class="container">
                <div class="banner-text d-flex flex-column col-lg-6">
                    <span class="banner-upper">Your Partners In</span>
                    <span class="banner-heading">Cleaning Solutions</span>
                </div>
            </div>
        </div>

        <div class="container">

          <div class="about-us mb-10 d-flex justify-content-between">
             <div class="sliding col-lg-6 accordion accordion-bg accordion-gutter-md accordion-border mb-10">
                <div class="text-content card ">
                  <header class="card-header">
                      <a href="#heading1" class="expaned"><strong class="heading-color1">Over 3 decades of continuous progress</strong></a>
                  </header>
                  <div id="heading1" class="card-body expanded">
                      <p>
                          Emerging from a modest warehouse in the emirate of Sharjah back in the 1980s, we have become deeply
                          embedded in the cleaning industry with a reputation that represents a trusted and well-known name in the region. Our
                          main field of operations revolves around the
                          wholesale distribution and retail merchandising of several different categories of products within the cleaning industry.
                      </p>
                  </div>
              </div>
                <div class="text-content card ">
                  <header class="card-header">
                      <a href="#heading2" class="expand"><strong class="heading-color1">The region's biggest selection of cleaning solutions</strong></a>
                  </header>
                  <div id="heading2" class="card-body collapsed">
                      <p>
                          Our product range features 2,000+ products that span across 50+ categories of cleaning solutions.
                          From cleaning equipment, machinery, chemicals, tools, supplies, and much more, our customers are always assured
                          we are able to meet their cleaning requirements no matter the industry they operate in.

                      </p>
                  </div>
              </div>
                <div class="text-content card ">
                  <header class="card-header">
                      <a href="#heading3" class="expand"><strong class="heading-color1">Big enough to serve you, small enough to care</strong></a>
                  </header>
                  <div id="heading3" class="card-body collapsed">
                      <p>
                          We’re a family-run business at the core. That means by partnering with us, you’ll be getting personalized
                          care and commitment that differentiates us from the competition. While others aim to sell you, we are here to listen,
                          understand, and provide only the right solutions to meet your requirements and budget.

                      </p>
                  </div>
              </div>
             </div>
              <div class="hero mb-10">
                  <img src="{{asset('/images/pages/aboutus/hero-image.png')}}" alt="hero image">
              </div>

          </div>

            <section class="services mb-10">
                <div class="mission two-columns mb-10 d-flex">
                    <div class="img mb-10">
                        <img src="{{asset('/images/pages/aboutus/mission_vector.svg')}}" alt="mission">
                    </div>
                    <div class="text-content mb-10">
                        <h6 class="heading heading-color">Mission</h6>
                        <p>
                        To endorse our clients, suppliers, and every stakeholder and participant in the cleaning industry with a
                        growth-oriented philosophy that propels them to always seek better when it comes to efficiency and effectiveness in cleaning
                        solutions. With innovation as our main drive, and professional growth as our motive, we’re consistently
                        aspiring to tailor-fit cleaning solutions that match the requirements of every diverse industry.
                        </p>
                    </div>
                </div>
                <div class="vision two-columns mb-10">
                    <div class="text-content mb-10">
                        <h6 class="heading heading-color">Vision</h6>
                        <p>
                            With our growth-oriented philosophy, accompanied by our clients’ backing and trust, we are ambitious to become
                            a leading name in the regions in which operate and thrive to ensure
                            that our clients are always at ease knowing they are partnered with a cleaning solutions provider whom they can trust.
                        </p>
                    </div>
                    <div class="img mb-10">
                        <img src="{{asset('/images/pages/aboutus/vision_vector.svg')}}" alt="vision">
                    </div>
                </div>
            </section>

            <section class="partners-section mb-10">
                <div class="partners">
                    <h6 class="heading-color heading">Our partners</h6>
                    <p class="text-content">
                        We are the authorized reseller and distributor for over 25 renowned international brands. With a selection of
                        reputable brands sourced from 4 continents, we're always ensuring our
                        portfolio of products is on par with the diverse requirements and budgets of today's cleaning industry.
                    </p>
                    <div class="slider-container" style="width:80%; overflow: hidden;">
                        <div class="slider">
                            <div class="logos">
                                <img src="{{asset('/images/pages/aboutus/partners/partner1.png')}}" alt="logo">

                                <img src="{{asset('/images/pages/aboutus/partners/partner2.png')}}" alt="logo">

                                <img src="{{asset('/images/pages/aboutus/partners/partner3.png')}}" alt="logo">

                                <img src="{{asset('/images/pages/aboutus/partners/partner4.png')}}" alt="logo">

                                <img src="{{asset('/images/pages/aboutus/partners/partner5.png')}}" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brands">
                        <h6 class="heading heading-color">Our brands</h6>
                    <p class="text-content">
                        By working directly with hand-picked international manufacturers and plants, we are always adding
                        to our very own set of brands that we distribute regionally and internationally. Our exclusive branded products
                        include dispensers, cleaning supplies, machinery, and more.

                    </p>
                    <div class="slider-container" style="width:80%; overflow: hidden;">
                        <div class="slider">
                            <div class="logos">
                                <img src="{{asset('/images/pages/aboutus/partners/partner1.png')}}" alt="logo">

                                <img src="{{asset('/images/pages/aboutus/partners/partner2.png')}}" alt="logo">

                                <img src="{{asset('/images/pages/aboutus/partners/partner3.png')}}" alt="logo">

                                <img src="{{asset('/images/pages/aboutus/partners/partner4.png')}}" alt="logo">

                                <img src="{{asset('/images/pages/aboutus/partners/partner5.png')}}" alt="logo">
                            </div>
                        </div>
                    </div>


                    <style>
                        .container .slider {
                            animation: slidein 30s linear infinite;
                            white-space: nowrap;
                        }
                        .container .slider .logos {
                            width: 100%;
                            display: inline-block;
                            margin: 0px 0;
                        }
                        .container .slider .logos .fab {
                            width: calc(100% / 5);
                            animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;
                        }

                        @keyframes slidein {
                            from {
                                transform: translate3d(0, 0, 0);
                            }
                            to {
                                transform: translate3d(-100%, 0, 0);
                            }
                        }
                        @keyframes fade-in {
                            0% {
                                opacity: 0;
                            }
                            100% {
                                opacity: 1;
                            }
                        }
                    </style>

                </div>
            </section> <!-- end of partners -->
        </div>
<section class="industries ">
    <header class="mb-10"><img src="{{asset('/images/pages/aboutus/middle-banner.jpg')}}" alt="middle banner"></header>
    <div class="outter-div">
        <div class="blue-block"></div>
    </div>
    <div class="container">
        <header class="industries-header d-flex align-items-center justify-content-center mb-lg-10">
            <h3 class="heading-color">Industries we serve</h3>
        </header>
        <div class="content-body">
            <div class="body-row d-flex pl-lg-10">
                <div class="card d-flex col-lg-6 mt-lg-10 mb-lg-10">
                    <div class="img-col pr-4">
                        <img src="{{asset('/images/pages/aboutus/icons/commercial_cleaning.svg')}}" alt="icon">
                    </div>
                    <div class="text col-9">
                        <h6 class="heading-color">Commercial cleaning</h6>
                        <p class="details">
                            Commercial cleaning providers understand the need for versatile and durable
                            machinery suitable for various settings, including offices, retail spaces, and hospitality venues.
                        </p>
                    </div>
                </div>
                <div class="vr mr-5 ml-5"></div>
                <div class="card d-flex col-lg-6 mt-lg-10 mb-lg-10">
                    <div class="img-col pr-4">
                        <img src="{{asset('/images/pages/aboutus/icons/health_care.svg')}}" alt="icon">
                    </div>
                    <div class="text col-9">
                        <h6 class="heading-color">Healthcare</h6>
                        <p class="details">
                            Our clients in the healthcare sector face stringent hygiene and infection control requirements.
                        </p>
                    </div>
                </div>
            </div>
            <div class="hr mr-5 pl-lg-10 pr-lg-10"></div>
            <div class="body-row d-flex pl-lg-10">
                <div class="card d-flex col-lg-6 mt-lg-10 mb-lg-10">
                    <div class="img-col pr-4">
                        <img src="{{asset('/images/pages/aboutus/icons/industrial.svg')}}" alt="icon">
                    </div>
                    <div class="text col-9">
                        <h6 class="heading-color">Industrial</h6>
                        <p class="details">
                            Industries and manufacturing sites regularly face difficult cleaning
                            requirements with heavy-duty machinery, grease, and industrial residues.
                        </p>
                    </div>
                </div>
                <div class="vr  mr-5 ml-5"></div>
                <div class="card d-flex col-lg-6 mt-lg-10 mb-lg-10">
                    <div class="img-col pr-4">
                        <img src="{{asset('/images/pages/aboutus/icons/education.svg')}}" alt="icon">
                    </div>
                    <div class="text col-9">
                        <h6 class="heading-color">Education</h6>
                        <p class="details">
                            Educational institutes require user-friendly, reliable cleaning equipment
                            that offer minimal disruption to the education setting.
                        </p>
                    </div>
                </div>
            </div>
            <div class="hr mr-5 pl-lg-10 pr-lg-10"></div>
            <div class="body-row d-flex pl-lg-10">
                <div class="card d-flex col-lg-6 mt-lg-10 mb-lg-10">
                    <div class="img-col pr-4">
                        <img src="{{asset('/images/pages/aboutus/icons/hospitality.svg')}}" alt="icon">
                    </div>
                    <div class="text col-9">
                        <h6 class="heading-color">Hospitality</h6>
                        <p class="details">
                            Hotels, resorts, cruise ships, and others in the hospitality sector require efficient,
                            fast, and reliable solutions that can clean guest rooms,
                            lobbies, dining spaces, and other areas in accordance with the industry's high cleanliness standards.
                        </p>
                    </div>
                </div>
                <div class="vr  mr-5 ml-5"></div>
                <div class="card d-flex col-lg-6 mt-lg-10 mb-lg-10">
                    <div class="img-col pr-4">
                        <img src="{{asset('/images/pages/aboutus/icons/food_service.svg')}}" alt="icon">
                    </div>
                    <div class="text col-9">
                        <h6 class="heading-color">Food service</h6>
                        <p class="details">
                            Kitchens, restaurants, food processing plants, and others in the food service sector require chemicals
                            and cleaning equipment that can simultaneously cover their intensive cleaning requirements and
                            match the strict regulations and standards of sanitization required in the food service sector.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> <!-- end of industries -->
        <style>

        </style>
<div class="container">
<section class="clients">
    <h6 class="heading-color heading">Our clients</h6>
    <div class="clients-logo">

        <div class="client-row">
            <img src="{{asset('/images/pages/aboutus/clients/ag-facilities.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/dulsco.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/farnek.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/serco.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/al-naboodah.svg ')}}" alt="Clients">
        </div>
        <div class="client-row">
            <img src="{{asset('/images/pages/aboutus/clients/efs-facilities.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/gems-education.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/sharjah-international-airport.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/al-rawabi.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/ejadah.svg ')}}" alt="Clients">
        </div>
        <div class="client-row">
            <img src="{{asset('/images/pages/aboutus/clients/royal-catering.svg ')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/khidmah.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/ethihad-intl-hospital.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/emrill.svg ')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/emaar.svg  ')}}" alt="Clients">
        </div>
        <div class="client-row">
            <img src="{{asset('/images/pages/aboutus/clients/hospitality-catering.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/spinneys.svg ')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/aloft-hotels.svg  ')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/tanzifco.svg ')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/idama.svg    ')}}" alt="Clients">
        </div>
        <div class="client-row">
            <img src="{{asset('/images/pages/aboutus/clients/cleanco.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/berkeley.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/union-coop.svg')}}" alt="Clients">
            <img src="{{asset('/images/pages/aboutus/clients/transguard-group.svg')}}" alt="Clients">
        </div>
    </div>

</section>
     <section class="requirements">
         <h6 class="heading-color heading">Let us help you navigate your cleaning requirements</h6>

         <div class="requirements-block">
             <div class="item">
                 <header class="item-header">
                     <img src="{{asset('/images/pages/aboutus/chat_man.svg')}}" alt="customer support">
                     <div class="sub-img">
                         <img src="{{asset('/images/pages/aboutus/side_line.svg')}}" alt="">
                     </div>
                 </header>
                 <div class="body">
                     <strong class="heading-color">Customer Support</strong>
                     <p>
                         Our customer support and after-sales team is always on stand-by to assist our customers with
                         service, training, and any other
                         after-sales inquiries.
                     </p>
                 </div>
             </div>
             <div class="item">
                 <header class="item-header">
                     <img src="{{asset('/images/pages/aboutus/dollar_chat.svg')}}" alt="chat icon">
                     <div class="sub-img middle">
                         <img src="{{asset('/images/pages/aboutus/side_line.svg')}}" alt="">
                     </div>
                 </header>
                 <div class="body">
                     <strong class="heading-color">Sales Support</strong>
                     <p>
                         From live product demonstrations, training, and more, our sales department is consistently
                         working to figure out a solution that meets your specific needs and budget.
                     </p>
                 </div>
             </div>
             <div class="item">
                 <header class="item-header">
                     <img src="{{asset('/images/pages/aboutus/chat.svg')}}" alt="chat">
                     <div class="sub-img">
                         <img src="{{asset('/images/pages/aboutus/side_line.svg')}}" alt="">
                     </div>
                 </header>
                 <div class="body">
                     <strong class="heading-color">Logistical Support</strong>
                     <p>
                         Our rapid response to queries, along with our streamlined logistical support allows us to deliver a
                         seamless experience from query to delivery,
                         reflecting our commitment to enhancing productivity and reducing downtime.
                     </p>
                 </div>
             </div>
         </div>
     </section>

            <section class="branches">
                <h6 class="heading-color heading">Branch locator</h6>
                <div class="locations">
                    <div class="dubai overlay-zoom">
                        <div class="base">
                            <img src="{{asset('/images/pages/aboutus/location_dubai.svg')}}" alt="dubai branch">
                        </div>

{{--                        <div class="overlay">--}}
{{--                            <div class="section">--}}
{{--                                <div class="img"><img src="" alt="imgae"></div>--}}
{{--                                <div class="info">--}}
{{--                                    some info here--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="section">--}}
{{--                                <div class="img"><img src="" alt="imgae"></div>--}}
{{--                                <div class="info">--}}
{{--                                    some info here--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                    <div class="abu-dhabi overlay-zoom">

                            <img src="{{asset('/images/pages/aboutus/location_abu_dhabi.svg')}}" alt="abu dhabi">

                    </div>
                </div>
            </section>
{{--            <hr class="divider mb-10 pb-1">--}}
            <!-- End of Contact Section -->
        </div>
    </div>
    <!-- End of PageContent -->
</main>
<!-- End of Main -->
<style>
    .banner-text .banner-upper{
        color: #FFF;
        font-family: Poppins;
        font-size: 42px;
        font-style: normal;
        font-weight: 300;
        line-height: 127%; /* 53.34px */
    }
    .banner-text .banner-heading{
        color: #FFF;
        font-family: Poppins;
        font-size: 59px;
        font-style: normal;
        font-weight: 700;
        line-height: 127%;
    }
    .heading-color{
        color: #00ACE8;
    }
    .heading{
        color: #00ACE8;
        font-family: Poppins;
        font-size: 33px;
        font-style: normal;
        font-weight: 700;
        line-height: 19.5px; /* 59.091% */
        margin-bottom: 70px;
    }
    .two-columns{
        display:flex;
        justify-content: space-between;
        margin-bottom: 100px;
    }
    .vision .img{
        margin-left: 10px;
    }
    .mission .img{
        margin-right: 10px;
    }
    .two-columns .text-content{
        max-width: 50%;
    }

    .partners, .brands{
        display: flex;
        /*justify-content: ;*/
        align-items: center;
        flex-direction: column;
    }
    .partners .heading, .brands .heading{
        color: #00ACE8;
        font-family: Poppins;
        font-size: 33px;
        font-style: normal;
        font-weight: 700;
        line-height: 19.5px; /* 59.091% */
    }
    .partners-section .text-content{
        width: 60%;
        color: #000;
        text-align: center;

        /* Body Text */
        font-family: Poppins;
        font-size: 17px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }
    .partners-section .partners{
        margin-bottom: 60px;
    }

    .branches .heading{
        color: #00ACE8;
        font-family: Poppins;
        font-size: 33px;
        font-style: normal;
        font-weight: 700;
        line-height: 19.5px; /* 59.091% */
        text-align: center;
    }
    .branches .locations{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: row;
    }
    .requirements .heading{
        color: #00ACE8;
        font-family: Poppins;
        font-size: 33px;
        font-style: normal;
        font-weight: 700;
        line-height: 19.5px; /* 59.091% */
        text-align: center;
        margin-bottom: 80px;
    }
    .requirements{
        margin-bottom: 120px;
    }
    .industries{
        margin-bottom: 100px;
    }
    .clients{
        margin-bottom: 100px;
    }
    .clients .heading{
        text-align: center;
        color: #00ACE8;
        font-family: Poppins;
        font-size: 33px;
        font-style: normal;
        font-weight: 700;
        line-height: 19.5px; /* 59.091% */
    }
    .body > strong.heading-color{
        color: #00ACE8;
        /* Sub heading */
        font-family: Poppins;
        font-size: 23px;
        font-style: normal;
        font-weight: 600;
        line-height: 19.5px; /* 84.783% */
    }
    .requirements-block{
        display: flex;
        justify-content: space-between;
        flex-direction: row;

    }
    .requirements-block .item header{
        background: url('images/pages/aboutus/small_bg.svg') no-repeat;
    }
    .requirements-block .item{
        width: 25%;
    }
    .requirements-block .item .body strong{
        margin-bottom: 20px;
        display: inline-block;
    }
    .requirements-block .item header{
        margin-bottom: 60px;
    }

    .client-row{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        margin-bottom: 30px;
    }
    .client-row img{
        max-width: 200px;
    }
.blue-block{
    width: 230px;
    height: 1000px;
    flex-shrink: 0;
    background: #00ACE8;
    position: relative;
    top: -110px;
}
    .outter-div{
        display: inline-block;
        float: left;
    }
    .item .item-header{
        height: 90px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding-left: 50px;
    }
    .sub-img{
        position: relative;
    }
    .sub-img img{
        position: relative;
        height: 277px;
        width: 93px;
        left: -147px;
        top: 69px;
        z-index: -10;
    }
    .sub-img.middle img{
        left: -154px;
    }
    .card .heading-color{
        color: #00ACE8;
        /* Sub heading */
        font-family: Poppins;
        font-size: 23px;
        font-style: normal;
        font-weight: 600;
        line-height: 19.5px; /* 84.783% */
    }
    .industries .card .details{
        color: var(--gray-600, #52525B);

        /* Body Text */
        font-family: Poppins;
        font-size: 17px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }
    .mb-100{
        margin-bottom: 120px;
    }
    .text-content.card{
        border-bottom: 1px solid #BDBDBD;;
    }
    /*.expanded::after, .collapse::after{*/
    /*    display: none;*/
    /*}*/
    .vr{
        border: 1px solid #D2D2D2;;
    }
    .hr{
        border: 1px solid #D2D2D2;;
    }

    @media screen and (max-width: 425px) {
        .two-columns {
            position: relative;
            flex-wrap: wrap;
        }
        .two-columns.vision{
            flex-direction: column-reverse;
        }
        .two-columns h6.heading{
            position: absolute;
            text-align: center;
            top: -35px;
            width: 100%;

            color: #00ACE8;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 19.5px; /* 121.875% */
        }
        .two-columns .text-content{
            max-width: 100%;
        }
        .partners-section .text-content{
            width: 100%;
            color: #000;
            text-align: center;
            font-family: Poppins;
            font-size: 12px;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
        }
        .brands .heading{
            color: #00ACE8;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 19.5px; /* 121.875% */
            margin-bottom: 15px;
        }
        .partners .heading{
            color: #00ACE8;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 19.5px; /* 121.875% */
            margin-bottom: 15px;
        }

        .hr, .vr{
            display: none;
        }
        .blue-block {
            width: 30px;
            height: 100px;
        }
        .branches .locations{
            flex-direction: column;
        }
        .dubai{
            margin-bottom: 20px;
        }
        .banner-text .banner-upper{
            font-size: 14px;
        }
        .banner-text .banner-heading{
            font-size: 16px;
        }
        .industries .body-row{
            flex-direction: column;
            flex-wrap: wrap;
        }
        .card .heading-color{
            font-size: 14px;
        }
        .industries .card .details{
            font-size: 12px;
        }
        .body > strong.heading-color{
            font-size: 14px;
        }
        .requirements-block{
            flex-flow: wrap;
        }
        .requirements-block .item{
            width: 44%;
        }

        .item .body p{
            font-size: 12px;
        }
        .sub-img img{
            left: -111px;
            top: 58px;
        }
        .sub-img.middle img{
            left: -115px;
            top: 81px;
        }
        .branches .heading{
            color: #00ACE8;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 19.5px; /* 121.875% */
        }

        .requirements .heading{
            color: #00ACE8;
            text-align: center;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 19.5px; /* 121.875% */
        }
        .clients .heading{
            color: #00ACE8;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 19.5px; /* 121.875% */
        }
        .industries-header h3.heading-color{
            color: #00ACE8;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 19.5px; /* 121.875% */
        }
        .client-row img{
            max-width: 70px;
        }
        .about-us{
            flex-wrap: wrap;
            flex-direction: column-reverse;
        }
        .industries .content-body{
            display: flex;
            flex-direction: column;
        }
    }
</style>

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
