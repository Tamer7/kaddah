<x-layout title="Contact-Us">
  <x-panel>
    <x-slot name="title">
    Our Contact Details
    </x-slot>
    <x-slot name="content">
    Get in touch with us if you have any questions or feedback, or if you are interested in our cleaning solutions.
    </x-slot>
  </x-panel>
  
  <div class="lg:container p-8">
    <div class="">
      <div class="text-center text-[theme(colors.blue)] text-2xl">Message Us</div>
      <form class="contact-us-form mt-6" action="{{ route('contact.store') }}" method="post">
        @csrf
        <div class="relative mb-6" data-te-input-wrapper-init>
          <input
            type="text"
            name="name"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            id="InputName"
            placeholder="Your Name" />
          <label
            for="InputName"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
            >Your Name</label
          >
        </div>
    
        <div class="relative mb-6" data-te-input-wrapper-init>
          <input
            type="text"
            name="mobile"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            id="InputMobile"
            placeholder="Enter Phone Number" />
          <label
            for="InputMobile"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
            >Phone Number</label
          >
        </div>
    
        <div class="relative mb-6" data-te-input-wrapper-init>
          <input
            type="email"
            name="email"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            id="InputEmail"
            placeholder="Enter email" />
          <label
            for="InputEmail"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
            >Email Address</label
          >
        </div>
    
        <div class="relative mb-6" data-te-input-wrapper-init>
          <textarea
            name="message"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            id="InputMessage"
            rows="3"
            placeholder="Enter Message"></textarea>
          <label
            for="InputMessage"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
            >Message</label
          >
        </div>

        <div class="g-recaptcha mt-4" data-sitekey="{{ config('services.recaptcha.key') }}" data-validate="{required:true}"></div>
    
        <button
          type="submit"
          class="inline-block rounded-full px-8 py-4 bg-gray-800 text-white font-medium leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
          data-te-ripple-init
          data-te-ripple-color="light">
          Apply
        </button>
      </form>
    </div>

    <div class="mt-16 rounded-2xl bg-[#e5f8ff] lg:p-[60px] p-8">
      <div class="font-semibold text-[34px] text-center">FAQs</div>
      <div class="mt-8">
        <div id="accordionFlushExample" class="grid grid-row-4 gap-16">
          <div class="rounded-2xl bg-white">
            <h2 class="mb-0" id="flush-headingOne">
              <button class="rounded-2xl group relative flex w-full items-center bg-white p-8 font-medium text-[22px] text-left text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white"
                type="button"
                data-te-collapse-init
                data-te-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne">
                What areas do you cover for shipping?
                <span
                  class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
                </span>
              </button>
            </h2>
            <div
              id="flush-collapseOne"
              class="!visible border-0 text-neutral-400"
              data-te-collapse-item
              data-te-collapse-show
              aria-labelledby="flush-headingOne"
              data-te-parent="#accordionFlushExample">
              <div class="p-8 pt-0">
                We provide shipping across the entire United Arab Emirates and offer export services to countries within the GCC, the Middle East, and Africa.
              </div>
            </div>
          </div>

          <div class="rounded-2xl bg-white">
            <h2 class="mb-0" id="flush-headingTwo">
              <button class="rounded-2xl group relative flex w-full items-center border-0 bg-white p-8 font-medium text-[22px] text-left text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white"
                type="button"
                data-te-collapse-init
                data-te-collapse-collapsed
                data-te-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo">
                Do you provide rental cleaning equipment?
                <span
                  class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
                </span>
              </button>
            </h2>
            <div
              id="flush-collapseTwo"
              class="!visible hidden text-neutral-400"
              data-te-collapse-item
              aria-labelledby="flush-headingTwo"
              data-te-parent="#accordionFlushExample">
              <div class="p-8 pt-0">
                At the minute, we do not rent out any of the cleaning equipment in our catalogs. We do have plans however to operate a rent-out scheme in the distant future.
              </div>
            </div>
          </div>

          <div class="rounded-2xl bg-white">
            <h2 class="mb-0" id="flush-headingThree">
              <button class="rounded-2xl group relative flex w-full items-center border-0 bg-white p-8 font-medium text-[22px] text-left text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white"
                type="button"
                data-te-collapse-init
                data-te-collapse-collapsed
                data-te-target="#flush-collapseThree"
                aria-expanded="false"
                aria-controls="flush-collapseThree">
                How can I obtain a quotation for the products I need?
                <span
                  class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
                </span>
              </button>
            </h2>
            <div
              id="flush-collapseThree"
              class="!visible hidden text-neutral-400"
              data-te-collapse-item
              aria-labelledby="flush-headingThree"
              data-te-parent="#accordionFlushExample">
              <div class="p-8 pt-0">
                You may request a quotation by adding the desired products to your cart and providing your contact details. Once you submit your request for quotation, our sales team will respond with an official quote within 24 hours.
              </div>
            </div>
          </div>

          <div class="rounded-2xl bg-white">
            <h2 class="mb-0" id="flush-headingFour">
              <button class="rounded-2xl group relative flex w-full items-center border-0 bg-white p-8 font-medium text-[22px] text-left text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white"
                type="button"
                data-te-collapse-init
                data-te-collapse-collapsed
                data-te-target="#flush-collapseFour"
                aria-expanded="false"
                aria-controls="flush-collapseFour">
                Do you offer demonstrations, training, or assembly for specific products?
                <span
                  class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
                </span>
              </button>
            </h2>
            <div
              id="flush-collapseFour"
              class="!visible hidden text-neutral-400"
              data-te-collapse-item
              aria-labelledby="flush-headingFour"
              data-te-parent="#accordionFlushExample">
              <div class="p-8 pt-0">
                We are committed to ensuring your satisfaction and offer demonstrations, live training, and
                product assembly as needed. Our knowledgeable sales team is available to assist with these
                services.
              </div>
            </div>
          </div>
          
          <div class="rounded-2xl bg-white">
            <h2 class="mb-0" id="flush-headingFive">
              <button class="rounded-2xl group relative flex w-full items-center border-0 bg-white p-8 font-medium text-[22px] text-left text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white"
                type="button"
                data-te-collapse-init
                data-te-collapse-collapsed
                data-te-target="#flush-collapseFive"
                aria-expanded="false"
                aria-controls="flush-collapseFive">
                What support is available through your after-sales customer service?
                <span
                  class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
                </span>
              </button>
            </h2>
            <div
              id="flush-collapseFive"
              class="!visible hidden text-neutral-400"
              data-te-collapse-item
              aria-labelledby="flush-headingFive"
              data-te-parent="#accordionFlushExample">
              <div class="p-8 pt-0">
                Our after-sales support team is readily available to assist with additional requests, training
                instructions, maintenance, and more. For urgent inquiries, please contact our main service
                landline at <span><a href="tel:+97142384774">+971 4 238 4774.</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="relative lg:px-[0] sm:px-16 px-8 lg:py-[160px] py-8 grid lg:grid-cols-2 gap-10">
      <div class="mx-auto lg:mx-0">
      <div id="map" style="height:500px;width:100%;"></div>
      </div>
      <div class="lg:px-[80px] px-8">
        <h3 class="text-3xl font-semibold py-5">Our Branches</h3>
        <div class="mt-5">
          <h5 class="text-xl"><i class="fa-solid fa-location-dot text-neutral-400 mr-4"></i> Dubai</h5>
          <p class="text-neutral-400 mt-2 flex items-center">
            Speedex Center - Salah Al Din St - Al Khabaisi - Dubai - United Arab Emirates
        </div>
        <div class="mt-5">
          <h5 class="text-xl"><i class="fa-solid fa-location-dot text-neutral-400 mr-4"></i> Abu Dahbi</h5>
          <p class="text-neutral-400 mt-2 flex items-center">
          6th Street - Musaffah - Musaffah Industrial - Abu Dhabi - United Arab Emirates
          </p>
        </div>
      </div>
    </div>
  </div>

  @push('styles')
    <style>
      .contact-us-form .group:not([data-te-input-focused]) div {
        border-radius: 0;
        border-width: 0;
        border-bottom-width: 1px;
      }
      #g-recaptcha-response {
        display: block !important;
        position: absolute;
        margin: -78px 0 0 0 !important;
        width: 302px !important;
        height: 76px !important;
        z-index: -999999;
        opacity: 0;
        min-height: auto;
      }
    </style>
  @endpush

  @push('scripts')
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
  @endpush
</x-layout>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaV86P6D9lLsq4_GrMp2fwn9_UK0MjO6E&callback=initMap">
</script>
<script>
function initMap() {
    var options = {
        zoom: 8,
        center: {lat: 25.272029663148057, lng: 55.295821490572585}
    }

    var map = new google.maps.Map(document.getElementById('map'), options);

    var markers = [
        {
            coords: {lat: 25.272029663148057, lng: 55.295821490572585},
            content: '<h3>Kaddah Cleaning Equipment - AKC</h3>'
        },
        {
            coords: {lat: 25.274795548770626, lng: 55.330384323875855},
            content: '<h3>Kaddah Cleaning Equipment - AKC</h3>'
        },
        {
            coords: {lat: 24.989615464291038, lng: 55.18191408193595},
            content: '<h3>Kaddah Building Cleaning Equipment ( AKC )</h3>'
        },
        {
            coords: {lat: 24.42309689421993, lng: 54.54413013157494},
            content: '<h3>Kaddah Cleaning Equipment - AKC</h3>'
        }
    ];

    var bounds = new google.maps.LatLngBounds();

    for(var i = 0; i < markers.length; i++){
        addMarker(markers[i]);
        bounds.extend(new google.maps.LatLng(markers[i].coords.lat, markers[i].coords.lng));
    }

    map.fitBounds(bounds);

    function addMarker(props){
        var marker = new google.maps.Marker({
            position:props.coords,
            map:map,
        });

        if(props.iconImage){
            marker.setIcon(props.iconImage);
        }

        if(props.content){
            var infoWindow = new google.maps.InfoWindow({
                content:props.content
            });

            marker.addListener('click', function(){
                infoWindow.open(map, marker);
            });
        }
    }
}
</script>

