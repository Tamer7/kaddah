<x-layout title="About">
  <div class="lg:py-16 sm:py-8 py-4 px-8">
    <h1 class="font-semibold text-center text-[42px] text-[theme(colors.blue)]">Your Partners in Cleaning</h1>
    <p class="flex justify-center mt-6">
      <span class="max-w-[543px] text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span>
    </p>
  </div>

  <div class="py-5 lg:px-20 px-8 relative">
    <div class="lg:p-16 lg:pt-12 p-8 rounded-[40px] bg-[#E5F8FF] our-story">
      <div class="text-center text-2xl">Our Story</div>
      <div class="grid lg:grid-cols-8 lg:max-h-[480px] lg:min-h-[200px] mt-3">
        
        <div class="sr-only" data-te-nav-ref role="tablist">
          <div id="our_story_1_image_pill" data-te-nav-active role="tab" aria-selected="true" data-te-target="#our_story_1_image"></div>
          <div id="our_story_2_image_pill" data-te-nav role="tab" aria-selected="false" data-te-target="#our_story_2_image"></div>
          <div id="our_story_3_image_pill" data-te-nav role="tab" aria-selected="false" data-te-target="#our_story_3_image"></div>
        </div>

        <div class="lg:col-span-3 lg:order-first order-1 flex">
          <div
            id="our_story_1_image"
            data-te-tab-active
            class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            role="tabpanel"
            aria-labelledby="our_story_1-tab"
            >
            <img
              src="{{ asset('images/about/Group 47.png') }}"
              class="block rounded-lg"
              alt="Wild Landscape" />
          </div>
          <div
            id="our_story_2_image"
            data-te-tab
            class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            role="tabpanel"
            aria-labelledby="our_story_2-tab"
            >
            <img
              src="{{ asset('images/about/Group 47.png') }}"
              class="block rounded-lg"
              alt="Wild Landscape" />
          </div>
          <div
            id="our_story_3_image"
            data-te-tab
            class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            role="tabpanel"
            aria-labelledby="our_story_3-tab"
            >
            <img
              src="{{ asset('images/about/Group 47.png') }}"
              class="block rounded-lg"
              alt="Wild Landscape" />
          </div>
        </div>

        <div class="col-span-1 lg:text-right p-4 lg:flex items-center"
          data-te-nav-ref
          role="tablist">
          <div
            data-te-perfect-scrollbar-init
            data-te-suppress-scroll-x="true"
            role="presentation"
            class="overflow-hidden lg:min-h-[300px] flex flex-row gap-8 lg:gap-4 lg:flex-col lg:p-5 relative lg:after:content-[''] lg:after:absolute lg:after:right-0 lg:after:top-0 lg:after:bottom-0 lg:after:w-[1px] lg:after:bg-gray-500"
          >
            <div
              type="button"
              data-te-target="#our_story_1"
              data-te-nav-active
              data-te-toggle="pill"
              role="tab"
              class="history text-3xl text-gray-700 hover:text-[theme(colors.blue)] active:text-[theme(colors.blue)] cursor-pointer"
              aria-controls="our_story_1"
              aria-selected="true">1980s</div>
            <div
              type="button"
              data-te-target="#our_story_2"
              data-te-toggle="pill"
              role="tab"
              class="history text-3xl text-gray-700 hover:text-[theme(colors.blue)] active:text-[theme(colors.blue)] cursor-pointer"
              aria-controls="our_story_2"
              aria-selected="false">1981s</div>
            <div
              type="button"
              data-te-target="#our_story_3"
              data-te-toggle="pill"
              role="tab"
              class="history text-3xl text-gray-700 hover:text-[theme(colors.blue)] active:text-[theme(colors.blue)] cursor-pointer"
              aria-controls="our_story_3"
              aria-selected="false">1982s</div>
          </div>
        </div>

        <div class="lg:col-start-5 lg:col-span-4 order-2 flex lg:text-left text-center">
          <div
            id="our_story_1"
            data-te-tab-active
            class="hidden opacity-100 transition-opacity durelativeration-150 p-3 lg:pl-16 ease-linear data-[te-tab-active]:block"
            role="tabpanel"
            aria-labelledby="our_story_1-tab"
            >
              <div class="flex items-center h-full">
                <div>
                  <h5 class="text-3xl font-semibold mb-4 leading-[60px] text-gray-700">We proudly call ourselves the cleaning pioneers.</h5>
                  <p class="text-neutral-400">
                    Emerging from a modest warehouse in the emirate of Sharjah back in the 1980s, we have become deeply embedded in the cleaning industry with a reputation that represents a trusted and well-known name in the region.
                  </p>
                </div>
              </div>
          </div>
          <div
            id="our_story_2"
            data-te-tab
            class="hidden opacity-100 transition-opacity duration-150 p-3 lg:pl-16 ease-linear data-[te-tab-active]:block"
            role="tabpanel"
            aria-labelledby="our_story_2-tab"
            >
              <div class="flex items-center h-full">
                <div>
                  <h5 class="text-3xl font-semibold mb-4 leading-[60px] text-gray-700">We proudly call ourselves the cleaning pioneers.</h5>
                  <p class="text-neutral-400">
                    Emerging from a modest warehouse in the emirate of Sharjah back in the 1980s, we have become deeply embedded in the cleaning industry with a reputation that represents a trusted and well-known name in the region.
                  </p>
                </div>
              </div>
          </div>
          <div
            id="our_story_3"
            data-te-tab
            class="hidden opacity-100 transition-opacity duration-150 p-3 lg:pl-16 ease-linear data-[te-tab-active]:block"
            role="tabpanel"
            aria-labelledby="our_story_3-tab"
            >
              <div class="flex items-center h-full">
                <div>
                  <h5 class="text-3xl font-semibold mb-4 leading-[60px] text-gray-700">We proudly call ourselves the cleaning pioneers.</h5>
                  <p class="text-neutral-400">
                    Emerging from a modest warehouse in the emirate of Sharjah back in the 1980s, we have become deeply embedded in the cleaning industry with a reputation that represents a trusted and well-known name in the region.
                  </p>
                </div>
              </div>
          </div>
        </div>
      </div>

    </div>

    <div class="py-12">
      <div class="grid lg:grid-cols-2 gap-12">
        <div class="flex flex-col text-center lg:px-[70px] sm:px-16 px-8">
          <div class="flex justify-center">
            <img
              class="max-h-[320px] mt-3 mb-5"
              src="{{ asset('images/pages/aboutus/mission_vector.svg') }}" alt="">
          </div>
          <p class="text-lg">Our Mission</p>
          <h2 class="font-semibold text-4xl py-5">Inspire, Innovate, Share</h2>
          <p class="text-neutral-400">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>

        <div class="flex flex-col text-center px-[70px] sm:px-16 px-8">
          <div class="flex justify-center">
            <img
              class="max-h-[320px] mt-3 mb-5"
              src="{{ asset('images/pages/aboutus/vision_vector.svg') }}" alt="">
          </div>
          <p class="text-lg">Our Vision</p>
          <h2 class="font-semibold text-4xl py-5">Inspire, Innovate, Share</h2>
          <p class="text-neutral-400">
            With our growth-oriented philosophy, accompanied by our clients’ backing and trust, we are ambitious to become a leading name in the regions in which operate and thrive to ensure that our clients are always at ease knowing they are partnered with a cleaning solutions provider whom they can trust.
          </p>
        </div>
      </div>
    </div>

    <div class="py-12">
      <div class="relative isolate overflow-hidden bg-[theme(colors.blue)] px-6 pt-16 sm:rounded-3xl rounded-xl lg:px-24 lg:pt-0 sm:px-12 md:pt-24 px-8 lg:flex lg:gap-x-20">
        <div class="mx-auto max-w-lg text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
          <h2 class="text-3xl font-semibold tracking-tight text-white">Download Our Company profile</h2>
          <p class="mt-6 text-lg leading-8 text-white">Break the Figma limits and explore the endless possibilities with Anima.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
            <a href="#" class="rounded-[20px] bg-white px-12 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="relative mt-16 h-80 lg:mt-8 flex">
          <img class="lg:absolute lg:left-0 lg:top-0 lg:w-[584px] sm:w-auto w-full sm:h-full mx-auto max-w-none" src="{{ asset('images/about/Mockup.png') }}" alt="App screenshot">
        </div>
      </div>
    </div>
  </div>

  <div class="bg-[#E5F8FF] lg:px-[168px] sm:px-24 px-8 lg:py-[90px] py-8" style="background-image: url('images/about/back_1.svg')">
    <h3 class="text-3xl font-semibold">Industries we serve</h3>
    <div class="mt-[50px] grid lg:grid-cols-3 sm:grid-cols-2 gap-8">
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-start">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Janitor.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Commercial cleaning</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Commercial cleaning providers understand the need for versatile and durable machinery suitable for various settings, including offices, retail spaces, and hospitality venues.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-start">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Out Patient Department.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Healthcare</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Our clients in the healthcare sector face stringent hygiene and infection control requirements.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-start">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Factory.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Industrial</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Industries and manufacturing sites regularly face difficult cleaning requirements with heavy-duty machinery, grease, and industrial residues.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-start">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Student Center.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Education</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Educational institutes require user-friendly, reliable cleaning equipment that offer minimal disruption to the education setting.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-start">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Service Bell.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Hospitality</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Hotels, resorts, cruise ships, and others in the hospitality sector require efficient, fast, and reliable solutions that can clean guest rooms, lobbies, dining spaces, and other areas in accordance with the industry's high cleanliness standards.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-start">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Pizza.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Food service</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Kitchens, restaurants, food processing plants, and others in the food service sector require chemicals and cleaning equipment that can simultaneously cover their intensive cleaning requirements and match the strict regulations and standards of sanitization required in the food service sector.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="lg:px-[110px] sm:px-16 px-8 lg:py-[70px] py-8">
    <div class="flex justify-between">
      <h3 class="text-3xl font-semibold">They Satisfied With Our Service</h3>
      <a href="#" class="font-bold my-auto text-[theme(colors.blue)]">
        <span class="lg:inline-block hidden">View All Brands</span>
        <i class="lg:hidden fa-solid fa-arrow-right"></i>
      </a>
    </div>
    <div class="mt-[62px]">
      <div class="flex justify-center"><img src="{{ asset('images/about/image 34.png') }}" alt=""></div>
      <div class="flex justify-center"><img src="{{ asset('images/about/image 35.png') }}" alt=""></div>
      <div class="flex justify-center"><img src="{{ asset('images/about/image 36.png') }}" alt=""></div>
    </div>
  </div>

  <div class="lg:px-[210px] sm:px-16 px-8 lg:py-[100px] py-8 grid lg:grid-cols-2 gap-10">
    <div>
      <img class="lg:absolute lg:-translate-y-1/4" src="{{ asset('images/about/image 54.png')}}" alt="">
    </div>
    <div class="lg:px-[80px] px-8">
      <h3 class="text-3xl font-semibold py-5">Our Branches</h3>
      <div class="mt-5">
        <h5 class="text-xl">Dubai</h5>
        <p class="text-neutral-400 mt-2">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
      </div>
      <div class="mt-5">
        <h5 class="text-xl">Abu Dahbi</h5>
        <p class="text-neutral-400 mt-2">Lorem ipsum dolor sit amet, consectetur dipiscing elit eiusmod tempor incididunt</p>
      </div>
    </div>
  </div>
</x-layout>