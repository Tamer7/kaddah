<x-layout title="About">
  <x-panel>
    <x-slot name="title">
      Your Partners in Cleaning
    </x-slot>
    <x-slot name="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
    </x-slot>
  </x-panel>

  <div class="tw-py-5 lg:tw-px-20 tw-px-8 tw-relative">
    <div class="lg:tw-p-16 lg:tw-pt-12 tw-p-8 tw-rounded-[40px] tw-bg-[#E5F8FF] our-story">
      <div class="tw-text-center tw-text-2xl">Our Story</div>
      <div class="tw-grid lg:tw-grid-cols-8 lg:tw-h-[480px] tw-mt-3">

        @php $data = ["1980s", "1990s", "2000s", "2010s", "2022s"] @endphp
        
        <div class="tw-sr-only" data-te-nav-ref role="tablist">
          @foreach ($data as $item)
            <div id="our_story_{{ $loop->index }}_image_pill" {{ $loop->first ? 'data-te-nav-active' : '' }} role="tab" aria-selected="true" data-te-target="#our_story_{{ $loop->index }}_image"></div>
          @endforeach
        </div>

        <div class="lg:tw-col-span-3 lg:tw-order-first tw-order-1 tw-flex tw-justify-center">
          @foreach ($data as $item)
            <div
              id="our_story_{{ $loop->index }}_image"
              {{ $loop->first ? 'data-te-tab-active' : '' }}
              class="tw-hidden tw-opacity-100 tw-transition-opacity tw-duration-150 tw-ease-linear data-[te-tab-active]:tw-block"
              role="tabpanel"
              aria-labelledby="our_story_{{ $loop->index }}-tab"
              >
              <img
                src="{{ asset('images/about/Group 47.png') }}"
                class="tw-block tw-rounded-lg"
                alt="Wild Landscape" />
            </div>
          @endforeach
        </div>

        <div class="tw-col-span-1 lg:tw-text-right tw-py-4 tw-overflow-auto tw-flex lg:tw-justify-end"
          data-te-nav-ref
          role="tablist">
          <div
            data-te-perfect-scrollbar-init
            role="presentation"
            class="tw-overflow-hidden tw-flex tw-flex-row lg:tw-flex-col tw-my-auto tw-relative"
          >
            @foreach ($data as $item)
              <a
                type="button"
                data-te-target="#our_story_{{ $loop->index }}"
                {{ $loop->first ? 'data-te-nav-active' : '' }}
                data-te-toggle="pill"
                role="tab"
                class="tw-history tw-cursor-pointer tw-font-medium tw-y-2 tw-block tw-border-0 lg:tw-border-b-0 lg:tw-border-r tw-border-black tw-pr-4 lg:tw-py-2 lg:tw-pr-5 lg:tw-text-3xl tw-text-2xl tw-font-medium tw-leading-tight tw-text-gray-500 hover:tw-text-sky-300 hover:tw-isolate focus:tw-isolate focus:tw-border-transparent data-[te-nav-active]:tw-border-[theme(colors.blue)] lg:data-[te-nav-active]:tw-border-r-4 data-[te-nav-active]:tw-text-[theme(colors.blue)] dark:tw-text-neutral-400 dark:hover:tw-bg-transparent dark:data-[te-nav-active]:tw-border-[theme(colors.blue)]-400 dark:data-[te-nav-active]:tw-text-[theme(colors.blue)]-400"
                aria-controls="our_story_{{ $loop->index }}"
                aria-selected="true">{{ $item }}</a>
            @endforeach
          </div>
        </div>

        <div class="lg:tw-col-start-5 lg:tw-col-span-4 tw-order-2 tw-flex lg:tw-text-left tw-text-center">
          @foreach ($data as $item)
            <div
              id="our_story_{{ $loop->index }}"
              {{ $loop->first ? 'data-te-tab-active' : 'data-te-tab' }}
              class="tw-hidden tw-opacity-100 tw-transition-opacity tw-duration-150 tw-p-3 lg:tw-pl-24 lg:tw-pr-4 tw-ease-linear data-[te-tab-active]:tw-block"
              role="tabpanel"
              aria-labelledby="our_story_{{ $loop->index }}-tab"
              >
                <div class="tw-flex tw-items-center tw-h-full">
                  <div>
                    <h5 class="tw-text-4xl tw-font-semibold tw-mb-4 lg:tw-leading-[60px] tw-leading-10 tw-text-gray-700">We proudly call ourselves the cleaning pioneers.</h5>
                    <p class="tw-text-neutral-400 tw-text-lg">
                      Emerging from a modest warehouse in the emirate of Sharjah back in the 1980s, we have become deeply embedded in the cleaning industry with a reputation that represents a trusted and well-known name in the region.
                    </p>
                  </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="tw-py-12">
      <div class="tw-grid lg:tw-grid-cols-2 tw-gap-12">
        <div class="tw-flex tw-flex-col tw-text-center lg:tw-px-[70px] sm:tw-px-16 tw-px-8">
          <div class="tw-flex tw-justify-center">
            <img
              class="tw-max-h-[320px] tw-mt-3 tw-mb-5"
              src="{{ asset('images/pages/aboutus/mission_vector.svg') }}" alt="">
          </div>
          <p class="tw-text-lg">Our Mission</p>
          <h2 class="tw-font-semibold tw-text-4xl py-5">Inspire, Innovate, Share</h2>
          <p class="tw-text-neutral-400">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>

        <div class="tw-flex tw-flex-col tw-text-center lg:tw-px-[70px] sm:tw-px-16 tw-px-8">
          <div class="tw-flex tw-justify-center">
            <img
              class="tw-max-h-[320px] tw-mt-3 tw-mb-5"
              src="{{ asset('images/pages/aboutus/vision_vector.svg') }}" alt="">
          </div>
          <p class="tw-text-lg">Our Vision</p>
          <h2 class="tw-font-semibold tw-text-4xl tw-py-5">Inspire, Innovate, Share</h2>
          <p class="tw-text-neutral-400">
            With our growth-oriented philosophy, accompanied by our clients’ backing and trust, we are ambitious to become a leading name in the regions in which operate and thrive to ensure that our clients are always at ease knowing they are partnered with a cleaning solutions provider whom they can trust.
          </p>
        </div>
      </div>
    </div>

    <div class="tw-py-12">
      <div class="tw-relative tw-isolate tw-overflow-hidden tw-bg-[theme(colors.blue)] tw-px-6 tw-pt-16 sm:tw-rounded-3xl tw-rounded-xl lg:tw-px-24 lg:tw-pt-0 sm:tw-px-12 md:tw-pt-24 tw-px-8 lg:tw-flex lg:tw-gap-x-20">
        <div class="tw-mx-auto tw-max-w-lg tw-text-center lg:tw-mx-0 lg:tw-flex-auto lg:tw-py-32 lg:tw-text-left">
          <h2 class="tw-text-3xl tw-font-semibold tw-tracking-tight tw-text-white">Download Our Company profile</h2>
          <p class="tw-mt-6 tw-text-lg tw-leading-8 tw-text-white">Break the Figma limits and explore the endless possibilities with Anima.</p>
          <div class="tw-mt-10 tw-flex tw-items-center tw-justify-center tw-gap-x-6 lg:tw-justify-start">
            <a href="#" class="tw-rounded-[20px] tw-bg-white tw-px-12 tw-py-3 tw-text-sm tw-font-semibold tw-text-gray-900 hover:tw-bg-gray-100 focus-visible:tw-outline focus-visible:tw-outline-2 focus-visible:tw-outline-offset-2 focus-visible:tw-outline-white">Get started <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="tw-relative tw-mt-16 tw-h-80 lg:tw-mt-8 tw-flex">
          <img class="lg:tw-absolute lg:tw-left-0 lg:tw-top-0 lg:tw-w-[584px] sm:tw-w-auto tw-w-full sm:tw-h-full tw-mx-auto tw-max-w-none" src="{{ asset('images/about/Mockup.png') }}" alt="App screenshot">
        </div>
      </div>
    </div>
  </div>

  <div class="tw-bg-[#E5F8FF] lg:tw-px-[168px] sm:tw-px-24 tw-px-8 lg:tw-py-[90px] tw-py-8" style="background-image: url('images/about/back_1.svg')">
    <h3 class="tw-text-3xl tw-font-semibold">Industries we serve</h3>
    <div class="tw-mt-[50px] tw-grid lg:tw-grid-cols-3 sm:tw-grid-cols-2 tw-gap-8">
      <div class="tw-rounded-[30px] tw-p-8 tw-h-[320px] tw-flex tw-justify-center tw-bg-white group">
        <div class="tw-overflow-hidden tw-flex tw-flex-col tw-items-center tw-justify-center tw-text-center group-hover:tw-text-left group-hover:tw-items-start group-hover:tw-justify-center">
          <img class="tw-transition tw-ease-in-out tw-delay-1500 tw-w-20 group-hover:tw-w-8" src="{{ asset('images/about/icons/Janitor.svg') }}" alt="">
          <h3 class="tw-transition tw-ease-in-out tw-delay-1500 tw-text-3xl tw-font-bold tw-pt-8 tw-pb-6 group-hover:tw-pt-6 group-hover:tw-pb-4 group-hover:tw-text-xl">Commercial cleaning</h3>
          <p class="tw-transition tw-ease-in-out tw-delay-1500 tw-duration-300 tw-hidden group-hover:tw-block tw-max-h-[150px] tw-overflow-auto tw-text-neutral-400">Commercial cleaning providers understand the need for versatile and durable machinery suitable for various settings, including offices, retail spaces, and hospitality venues.</p>
        </div>
      </div>
      <div class="tw-rounded-[30px] tw-p-8 tw-h-[320px] tw-flex tw-justify-center tw-bg-white group">
        <div class="tw-overflow-hidden tw-flex tw-flex-col tw-items-center tw-justify-center tw-text-center group-hover:tw-text-left group-hover:tw-items-start group-hover:tw-justify-center">
          <img class="tw-transition tw-ease-in-out tw-delay-1500 tw-w-20 group-hover:tw-w-8" src="{{ asset('images/about/icons/Out Patient Department.svg') }}" alt="">
          <h3 class="tw-transition tw-ease-in-out tw-delay-1500 tw-text-3xl tw-font-bold tw-pt-8 tw-pb-6 group-hover:tw-pt-6 group-hover:tw-pb-4 group-hover:tw-text-xl">Healthcare</h3>
          <p class="tw-transition tw-ease-in-out tw-delay-1500 tw-duration-300 tw-hidden group-hover:tw-block tw-max-h-[150px] tw-overflow-auto tw-text-neutral-400">Our clients in the healthcare sector face stringent hygiene and infection control requirements.</p>
        </div>
      </div>
      <div class="tw-rounded-[30px] tw-p-8 tw-h-[320px] tw-flex tw-justify-center tw-bg-white group">
        <div class="tw-overflow-hidden tw-flex tw-flex-col tw-items-center tw-justify-center tw-text-center group-hover:tw-text-left group-hover:tw-items-start group-hover:tw-justify-center">
          <img class="tw-transition tw-ease-in-out tw-delay-1500 tw-w-20 group-hover:tw-w-8" src="{{ asset('images/about/icons/Factory.svg') }}" alt="">
          <h3 class="tw-transition tw-ease-in-out tw-delay-1500 tw-text-3xl tw-font-bold tw-pt-8 tw-pb-6 group-hover:tw-pt-6 group-hover:tw-pb-4 group-hover:tw-text-xl">Industrial</h3>
          <p class="tw-transition tw-ease-in-out tw-delay-1500 tw-duration-300 tw-hidden group-hover:tw-block tw-max-h-[150px] tw-overflow-auto tw-text-neutral-400">Industries and manufacturing sites regularly face difficult cleaning requirements with heavy-duty machinery, grease, and industrial residues.</p>
        </div>
      </div>
      <div class="tw-rounded-[30px] tw-p-8 tw-h-[320px] tw-flex tw-justify-center tw-bg-white group">
        <div class="tw-overflow-hidden tw-flex tw-flex-col tw-items-center tw-justify-center tw-text-center group-hover:tw-text-left group-hover:tw-items-start group-hover:tw-justify-center">
          <img class="tw-transition tw-ease-in-out tw-delay-1500 tw-w-20 group-hover:tw-w-8" src="{{ asset('images/about/icons/Student Center.svg') }}" alt="">
          <h3 class="tw-transition tw-ease-in-out tw-delay-1500 tw-text-3xl tw-font-bold tw-tw-pt-8 tw-pb-6 group-hover:tw-pt-6 group-hover:tw-pb-4 group-hover:tw-text-xl">Education</h3>
          <p class="tw-transition tw-ease-in-out tw-delay-1500 tw-duration-300 tw-hidden group-hover:tw-block tw-max-h-[150px] tw-overflow-auto tw-text-neutral-400">Educational institutes require user-friendly, reliable cleaning equipment that offer minimal disruption to the education setting.</p>
        </div>
      </div>
      <div class="tw-rounded-[30px] tw-p-8 tw-h-[320px] tw-flex tw-justify-center tw-bg-white group">
        <div class="tw-overflow-hidden tw-flex tw-flex-col tw-items-center tw-justify-center tw-text-center group-hover:tw-text-left group-hover:tw-items-start group-hover:tw-justify-center">
          <img class="tw-transition tw-ease-in-out tw-delay-1500 tw-w-20 group-hover:tw-w-8" src="{{ asset('images/about/icons/Service Bell.svg') }}" alt="">
          <h3 class="tw-transition tw-ease-in-out tw-delay-1500 tw-text-3xl tw-font-bold tw-pt-8 tw-pb-6 group-hover:tw-pt-6 group-hover:tw-pb-4 group-hover:tw-text-xl">Hospitality</h3>
          <p class="tw-transition tw-ease-in-out tw-delay-1500 tw-duration-300 tw-hidden group-hover:tw-block tw-max-h-[150px] tw-overflow-auto tw-text-neutral-400">Hotels, resorts, cruise ships, and others in the hospitality sector require efficient, fast, and reliable solutions that can clean guest rooms, lobbies, dining spaces, and other areas in accordance with the industry's high cleanliness standards.</p>
        </div>
      </div>
      <div class="tw-rounded-[30px] tw-p-8 tw-h-[320px] tw-flex tw-justify-center tw-bg-white tw-group">
        <div class="tw-overflow-hidden tw-flex tw-flex-col tw-items-center tw-justify-center tw-text-center group-hover:tw-text-left group-hover:tw-items-start group-hover:tw-justify-center">
          <img class="tw-transition tw-ease-in-out tw-delay-1500 tw-w-20 group-hover:tw-w-8" src="{{ asset('images/about/icons/Pizza.svg') }}" alt="">
          <h3 class="tw-transition tw-ease-in-out tw-delay-1500 tw-text-3xl tw-font-bold tw-pt-8 tw-pb-6 group-hover:tw-pt-6 group-hover:tw-pb-4 group-hover:tw-text-xl">Food service</h3>
          <p class="tw-transition tw-ease-in-out tw-delay-1500 tw-duration-300 tw-hidden group-hover:tw-block tw-max-h-[150px] tw-overflow-auto tw-text-neutral-400">Kitchens, restaurants, food processing plants, and others in the food service sector require chemicals and cleaning equipment that can simultaneously cover their intensive cleaning requirements and match the strict regulations and standards of sanitization required in the food service sector.</p>
        </div>
      </div>
    </div>
  </div>

  <x-subpanel title="They Satisfied With Our Service" more="View All Brands">
    <div class="tw-flex tw-justify-center"><img src="{{ asset('images/about/image 34.png') }}" alt=""></div>
    <div class="tw-flex tw-justify-center"><img src="{{ asset('images/about/image 35.png') }}" alt=""></div>
    <div class="tw-flex tw-justify-center"><img src="{{ asset('images/about/image 36.png') }}" alt=""></div>
  </x-subpanel>

  <div class="lg:tw-px-[210px] sm:tw-px-16 tw-px-8 lg:tw-py-[100px] tw-py-8 tw-grid lg:tw-grid-cols-2 tw-gap-10">
    <div class="tw-mx-auto lg:tw-mx-0">
      <img class="lg:tw-absolute lg:-translate-y-1/4" src="{{ asset('images/about/image 54.png')}}" alt="">
    </div>
    <div class="lg:tw-px-[80px] tw-px-8">
      <h3 class="tw-text-3xl tw-font-semibold tw-py-5">Our Branches</h3>
      <div class="tw-mt-5">
        <h5 class="tw-text-xl">Dubai</h5>
        <p class="tw-text-neutral-400 tw-mt-2">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
      </div>
      <div class="tw-mt-5">
        <h5 class="tw-text-xl">Abu Dahbi</h5>
        <p class="tw-text-neutral-400 tw-mt-2">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
      </div>
    </div>
  </div>
</x-layout>