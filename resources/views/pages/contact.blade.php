<x-layout title="Contact-Us">
  <x-panel>
    <x-slot name="title">
    Our Contact Details
    </x-slot>
    <x-slot name="content">
    Get in touch with us if you have any questions or feedback, or if you are interested in our cleaning solutions.
    </x-slot>
  </x-panel>
  
  <div class="lg:tw-container tw-p-8">
    <div class="">
      <div class="tw-text-center tw-text-[theme(colors.blue)] tw-text-2xl">Message Us</div>
      <form class="contact-us-form tw-mt-6" action="{{ route('contact.store') }}" method="post">
        <div class="tw-relative tw-mb-6" data-te-input-wrapper-init>
          <input
            type="text"
            name="name"
            class="tw-peer tw-block tw-min-h-[auto] tw-w-full tw-rounded tw-border-0 tw-bg-transparent tw-px-3 tw-py-[0.32rem] tw-leading-[1.6] tw-outline-none tw-transition-all tw-duration-200 tw-ease-linear focus:placeholder:tw-opacity-100 data-[te-input-state-active]:placeholder:tw-opacity-100 motion-reduce:tw-transition-none dark:tw-text-neutral-200 dark:placeholder:tw-text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:tw-opacity-0"
            id="InputName"
            placeholder="Your Name" />
          <label
            for="InputName"
            class="tw-pointer-events-none tw-absolute tw-left-3 tw-top-0 tw-mb-0 tw-max-w-[90%] tw-origin-[0_0] truncate tw-pt-[0.37rem] tw-leading-[1.6] tw-text-neutral-500 tw-transition-all tw-duration-200 tw-ease-out peer-focus:-tw-translate-y-[0.9rem] peer-focus:tw-scale-[0.8] peer-focus:tw-text-primary peer-data-[te-input-state-active]:-tw-translate-y-[0.9rem] peer-data-[te-input-state-active]:tw-scale-[0.8] motion-reduce:tw-transition-none dark:tw-text-neutral-200 dark:peer-focus:tw-text-primary"
            >Your Name</label
          >
        </div>
    
        <div class="tw-relative tw-mb-6" data-te-input-wrapper-init>
          <input
            type="text"
            name="mobile"
            class="tw-peer tw-block tw-min-h-[auto] tw-w-full tw-rounded tw-border-0 tw-bg-transparent tw-px-3 tw-py-[0.32rem] tw-leading-[1.6] tw-outline-none tw-transition-all tw-duration-200 tw-ease-linear focus:placeholder:tw-opacity-100 data-[te-input-state-active]:placeholder:tw-opacity-100 motion-reduce:tw-transition-none dark:tw-text-neutral-200 dark:placeholder:tw-text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:tw-opacity-0"
            id="InputMobile"
            placeholder="Enter Phone Number" />
          <label
            for="InputMobile"
            class="tw-pointer-events-none tw-absolute tw-left-3 tw-top-0 tw-mb-0 tw-max-w-[90%] tw-origin-[0_0] truncate tw-pt-[0.37rem] tw-leading-[1.6] tw-text-neutral-500 tw-transition-all tw-duration-200 tw-ease-out peer-focus:-tw-translate-y-[0.9rem] peer-focus:tw-scale-[0.8] peer-focus:tw-text-primary peer-data-[te-input-state-active]:-tw-translate-y-[0.9rem] peer-data-[te-input-state-active]:tw-scale-[0.8] motion-reduce:tw-transition-none dark:tw-text-neutral-200 dark:peer-focus:tw-text-primary"
            >Phone Number</label
          >
        </div>
    
        <div class="tw-relative tw-mb-6" data-te-input-wrapper-init>
          <input
            type="email"
            class="tw-peer tw-block tw-min-h-[auto] tw-w-full tw-rounded tw-border-0 tw-bg-transparent tw-px-3 tw-py-[0.32rem] tw-leading-[1.6] tw-outline-none tw-transition-all tw-duration-200 tw-ease-linear focus:placeholder:tw-opacity-100 data-[te-input-state-active]:placeholder:tw-opacity-100 motion-reduce:tw-transition-none dark:tw-text-neutral-200 dark:placeholder:tw-text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:tw-opacity-0"
            id="InputEmail"
            placeholder="Enter email" />
          <label
            for="InputEmail"
            class="tw-pointer-events-none tw-absolute tw-left-3 tw-top-0 tw-mb-0 tw-max-w-[90%] tw-origin-[0_0] tw-truncate tw-pt-[0.37rem] tw-leading-[1.6] tw-text-neutral-500 tw-transition-all tw-duration-200 tw-ease-out peer-focus:-tw-translate-y-[0.9rem] peer-focus:tw-scale-[0.8] peer-focus:tw-text-primary peer-data-[te-input-state-active]:-tw-translate-y-[0.9rem] peer-data-[te-input-state-active]:tw-scale-[0.8] motion-reduce:tw-transition-none dark:tw-text-neutral-200 dark:peer-focus:tw-text-primary"
            >Email Address</label
          >
        </div>
    
        <div class="tw-relative tw-mb-6" data-te-input-wrapper-init>
          <textarea
            name="message"
            class="tw-peer block tw-min-h-[auto] tw-w-full tw-rounded tw-border-0 tw-bg-transparent tw-px-3 tw-py-[0.32rem] tw-leading-[1.6] tw-outline-none tw-transition-all tw-duration-200 tw-ease-linear focus:placeholder:tw-opacity-100 data-[te-input-state-active]:placeholder:tw-opacity-100 motion-reduce:tw-transition-none dark:tw-text-neutral-200 dark:placeholder:tw-text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:tw-opacity-0"
            id="InputMessage"
            rows="3"
            placeholder="Enter Message"></textarea>
          <label
            for="InputMessage"
            class="tw-pointer-events-none tw-absolute tw-left-3 tw-top-0 tw-mb-0 tw-max-w-[90%] tw-origin-[0_0] tw-truncate tw-pt-[0.37rem] tw-leading-[1.6] tw-text-neutral-500 tw-transition-all tw-duration-200 tw-ease-out peer-focus:-tw-translate-y-[0.9rem] peer-focus:tw-scale-[0.8] peer-focus:tw-text-primary peer-data-[te-input-state-active]:-tw-translate-y-[0.9rem] peer-data-[te-input-state-active]:tw-scale-[0.8] motion-reduce:tw-transition-none dark:tw-text-neutral-200 dark:peer-focus:tw-text-primary"
            >Message</label
          >
        </div>

        <div class="g-recaptcha tw-mt-4" data-sitekey="{{ config('services.recaptcha.key') }}" data-validate="{required:true}"></div>
    
        <button
          type="submit"
          class="tw-inline-block tw-rounded-full tw-px-8 tw-py-4 tw-bg-gray-800 tw-text-white tw-font-medium tw-leading-normal text-white tw-shadow-[0_4px_9px_-4px_#3b71ca] tw-transition tw-duration-150 tw-ease-in-out hover:bg-primary-600 hover:tw-shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:tw-bg-primary-600 focus:tw-shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:tw-outline-none focus:tw-ring-0 active:tw-bg-primary-700 active:tw-shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:tw-shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:tw-shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:tw-shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:tw-shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
          data-te-ripple-init
          data-te-ripple-color="light">
          Apply
        </button>
      </form>
    </div>

    <div class="tw-mt-16 tw-rounded-2xl tw-bg-[#e5f8ff] lg:tw-p-[60px] tw-p-8">
      <div class="tw-font-semibold tw-text-[34px] tw-text-center">FAQs</div>
      <div class="tw-mt-8">
        <div id="accordionFlushExample" class="tw-grid tw-grid-row-4 tw-gap-16">
          <div class="tw-rounded-2xl tw-bg-white">
            <h2 class="tw-mb-0" id="flush-headingOne">
              <button class="tw-rounded-2xl tw-group tw-relative tw-flex tw-w-full tw-items-center tw-bg-white tw-p-8 tw-font-medium tw-text-[22px] tw-text-left tw-text-neutral-800 tw-transition [overflow-anchor:none] hover:tw-z-[2] focus:tw-z-[3] focus:tw-outline-none dark:tw-bg-neutral-800 dark:tw-text-white [&:not([data-te-collapse-collapsed])]:tw-bg-white dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:tw-text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:tw-inset_0_-1px_0_rgba(75,85,99)]"
                type="button"
                data-te-collapse-init
                data-te-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne">
                What areas do you cover for shipping?
                <span
                  class="-tw-mr-1 tw-ml-auto tw-h-5 tw-w-5 tw-shrink-0 tw-rotate-[-180deg] tw-fill-[#336dec] tw-transition-transform duration-200 tw-ease-in-out group-[[data-te-collapse-collapsed]]:tw-mr-0 group-[[data-te-collapse-collapsed]]:tw-rotate-0 group-[[data-te-collapse-collapsed]]:tw-fill-[#212529] motion-reduce:tw-transition-none dark:tw-fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:tw-fill-white">
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
              class="!tw-visible tw-border-0 tw-text-neutral-400"
              data-te-collapse-item
              data-te-collapse-show
              aria-labelledby="flush-headingOne"
              data-te-parent="#accordionFlushExample">
              <div class="tw-p-8 tw-pt-0">
                We provide shipping across the entire United Arab Emirates and offer export services to countries within the GCC, the Middle East, and Africa.
              </div>
            </div>
          </div>

          <div class="tw-rounded-2xl tw-bg-white">
            <h2 class="tw-mb-0" id="flush-headingTwo">
              <button class="tw-rounded-2xl tw-group tw-relative tw-flex tw-w-full tw-items-center tw-border-0 tw-bg-white tw-p-8 tw-font-medium tw-text-[22px] tw-text-left tw-text-neutral-800 tw-transition [overflow-anchor:tw-none] hover:tw-z-[2] focus:tw-z-[3] focus:tw-outline-none dark:tw-bg-neutral-800 dark:tw-text-white [&:not([data-te-collapse-collapsed])]:tw-bg-white dark:[&:not([data-te-collapse-collapsed])]:tw-bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:tw-text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:tw-inset_0_-1px_0_rgba(75,85,99)]"
                type="button"
                data-te-collapse-init
                data-te-collapse-collapsed
                data-te-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo">
                Do you provide rental cleaning equipment?
                <span
                  class="-tw-mr-1 tw-ml-auto tw-h-5 tw-w-5 tw-shrink-0 tw-rotate-[-180deg] tw-fill-[#336dec] tw-transition-transform tw-duration-200 tw-ease-in-out group-[[data-te-collapse-collapsed]]:tw-mr-0 group-[[data-te-collapse-collapsed]]:tw-rotate-0 group-[[data-te-collapse-collapsed]]:tw-fill-[#212529] motion-reduce:tw-transition-none dark:tw-fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:tw-fill-white">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="tw-h-6 tw-w-6">
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
              class="!tw-visible tw-hidden tw-text-neutral-400"
              data-te-collapse-item
              aria-labelledby="flush-headingTwo"
              data-te-parent="#accordionFlushExample">
              <div class="p-8 pt-0">
                At the minute, we do not rent out any of the cleaning equipment in our catalogs. We do have plans however to operate a rent-out scheme in the distant future.
              </div>
            </div>
          </div>

          <div class="tw-rounded-2xl tw-bg-white">
            <h2 class="mb-0" id="flush-headingThree">
              <button class="tw-rounded-2xl tw-group tw-relative tw-flex tw-w-full tw-items-center tw-border-0 tw-bg-white tw-p-8 tw-font-medium tw-text-[22px] tw-text-left tw-text-neutral-800 tw-transition [overflow-anchor:tw-none] hover:tw-z-[2] focus:tw-z-[3] focus:tw-outline-none dark:tw-bg-neutral-800 dark:tw-text-white [&:not([data-te-collapse-collapsed])]:tw-bg-white dark:[&:not([data-te-collapse-collapsed])]:tw-bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:tw-text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:tw-inset_0_-1px_0_rgba(75,85,99)]"
                type="button"
                data-te-collapse-init
                data-te-collapse-collapsed
                data-te-target="#flush-collapseThree"
                aria-expanded="false"
                aria-controls="flush-collapseThree">
                How can I obtain a quotation for the products I need?
                <span
                  class="-tw-mr-1 tw-ml-auto tw-h-5 tw-w-5 tw-shrink-0 tw-rotate-[-180deg] tw-fill-[#336dec] tw-transition-transform tw-duration-200 tw-ease-in-out group-[[data-te-collapse-collapsed]]:tw-mr-0 group-[[data-te-collapse-collapsed]]:tw-rotate-0 group-[[data-te-collapse-collapsed]]:tw-fill-[#212529] motion-reduce:tw-transition-none dark:tw-fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:tw-fill-white">
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
              class="!tw-visible tw-hidden tw-text-neutral-400"
              data-te-collapse-item
              aria-labelledby="flush-headingThree"
              data-te-parent="#accordionFlushExample">
              <div class="p-8 pt-0">
                You may request a quotation by adding the desired products to your cart and providing your contact details. Once you submit your request for quotation, our sales team will respond with an official quote within 24 hours.
              </div>
            </div>
          </div>

          <div class="tw-rounded-2xl tw-bg-white">
            <h2 class="tw-mb-0" id="flush-headingFour">
              <button class="tw-rounded-2xl tw-group tw-relative tw-flex tw-w-full tw-items-center tw-border-0 tw-bg-white tw-p-8 tw-font-medium tw-text-[22px] tw-text-left tw-text-neutral-800 tw-transition [overflow-anchor:tw-none] hover:tw-z-[2] focus:tw-z-[3] focus:tw-outline-none dark:tw-bg-neutral-800 dark:tw-text-white [&:not([data-te-collapse-collapsed])]:tw-bg-white dark:[&:not([data-te-collapse-collapsed])]:tw-bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:tw-text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:tw-inset_0_-1px_0_rgba(75,85,99)]"
                type="button"
                data-te-collapse-init
                data-te-collapse-collapsed
                data-te-target="#flush-collapseFour"
                aria-expanded="false"
                aria-controls="flush-collapseFour">
                Do you offer demonstrations, training, or assembly for specific products?
                <span
                  class="-tw-mr-1 tw-ml-auto tw-h-5 tw-w-5 tw-shrink-0 tw-rotate-[-180deg] tw-fill-[#336dec] tw-transition-transform tw-duration-200 tw-ease-in-out group-[[data-te-collapse-collapsed]]:tw-mr-0 group-[[data-te-collapse-collapsed]]:tw-rotate-0 group-[[data-te-collapse-collapsed]]:tw-fill-[#212529] motion-reduce:tw-transition-none dark:tw-fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:tw-fill-white">
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
              class="!tw-visible tw-hidden tw-text-neutral-400"
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
          
          <div class="tw-rounded-2xl tw-bg-white">
            <h2 class="tw-mb-0" id="flush-headingFive">
              <button class="tw-rounded-2xl group tw-relative tw-flex tw-w-full tw-items-center tw-border-0 tw-bg-white tw-p-8 tw-font-medium tw-text-[22px] tw-text-left tw-text-neutral-800 tw-transition [overflow-anchor:tw-none] hover:tw-z-[2] focus:tw-z-[3] focus:tw-outline-none dark:tw-bg-neutral-800 dark:tw-text-white [&:not([data-te-collapse-collapsed])]:tw-bg-white dark:[&:not([data-te-collapse-collapsed])]:tw-bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:tw-text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:tw-inset_0_-1px_0_rgba(75,85,99)]"
                type="button"
                data-te-collapse-init
                data-te-collapse-collapsed
                data-te-target="#flush-collapseFive"
                aria-expanded="false"
                aria-controls="flush-collapseFive">
                What support is available through your after-sales customer service?
                <span
                  class="-tw-mr-1 tw-ml-auto tw-h-5 tw-w-5 tw-shrink-0 tw-rotate-[-180deg] tw-fill-[#336dec] tw-transition-transform tw-duration-200 tw-ease-in-out group-[[data-te-collapse-collapsed]]:tw-mr-0 group-[[data-te-collapse-collapsed]]:tw-rotate-0 group-[[data-te-collapse-collapsed]]:tw-fill-[#212529] motion-reduce:tw-transition-none dark:tw-fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:tw-fill-white">
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
              class="!tw-visible tw-hidden tw-text-neutral-400"
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

    <div class="tw-relative lg:tw-px-[0] sm:tw-px-16 tw-px-8 lg:tw-py-[160px] tw-py-8 tw-grid lg:tw-grid-cols-2 tw-gap-10">
      <div class="tw-mx-auto lg:tw-mx-0">
        <img class="lg:tw-absolute lg:-tw-translate-y-1/4" src="{{ asset('images/about/image 54.png')}}" alt="">
      </div>
      <div class="lg:tw-px-[80px] tw-px-8">
        <h3 class="tw-text-3xl tw-font-semibold py-5">Our Branches</h3>
        <div class="tw-mt-5">
          <h5 class="tw-text-xl"><i class="fa-solid fa-location-dot tw-text-neutral-400 tw-mr-4"></i> Dubai</h5>
          <p class="tw-text-neutral-400 tw-mt-2 tw-flex tw-items-center">
            <i class="fa-solid fa-phone-flip tw-mr-4"></i>
            Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt
          </p>
        </div>
        <div class="tw-mt-5">
          <h5 class="tw-text-xl"><i class="fa-solid fa-location-dot tw-text-neutral-400 tw-mr-4"></i> Abu Dahbi</h5>
          <p class="tw-text-neutral-400 tw-mt-2 tw-flex tw-items-center">
            <i class="fa-solid fa-phone-flip tw-mr-4"></i>
            Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt
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
