<x-layout title="About">

  @section('canonical')
    <link rel="canonical" href="{{ url('/about-us') }}" />
  @endsection

  <x-panel>
    <x-slot name="title">
      Your Partners in Cleaning
    </x-slot>
    <x-slot name="content">
      We KADDAH Group of company transformed the face of the cleaning industry in the region with 30 years of excellence, all while retaining a reputation as a reliable, well-known firm in the area.
    </x-slot>
  </x-panel>

  <div class="py-5 lg:px-20 px-8 relative">
    <div class="lg:p-16 lg:pt-12 p-8 rounded-[40px] bg-[#E5F8FF] our-story">
      <div class="text-center text-2xl">Our Story</div>
      <div class="grid lg:grid-cols-8 lg:h-[480px] mt-3">

        @php $data = ["1980s", "1990s", "2000s", "2010s", "2022s"] @endphp
        
        <div class="sr-only" data-te-nav-ref role="tablist">
          @foreach ($data as $item)
            <div id="our_story_{{ $loop->index }}_image_pill" {{ $loop->first ? 'data-te-nav-active' : '' }} role="tab" aria-selected="true" data-te-target="#our_story_{{ $loop->index }}_image"></div>
          @endforeach
        </div>

        <div class="lg:col-span-3 lg:order-first order-1 flex justify-center">
          @foreach ($data as $item)
            <div
              id="our_story_{{ $loop->index }}_image"
              {{ $loop->first ? 'data-te-tab-active' : '' }}
              class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
              role="tabpanel"
              aria-labelledby="our_story_{{ $loop->index }}-tab"
              >
              <img
                src="{{ asset('images/about/Group 47.png') }}"
                class="block rounded-lg"
                alt="Wild Landscape" />
            </div>
          @endforeach
        </div>

        <div class="col-span-1 lg:text-right py-4 overflow-auto flex lg:justify-end"
          data-te-nav-ref
          role="tablist">
          <div
            data-te-perfect-scrollbar-init
            role="presentation"
            class="overflow-hidden flex flex-row lg:flex-col my-auto relative"
          >
            @foreach ($data as $item)
              <a
                type="button"
                data-te-target="#our_story_{{ $loop->index }}"
                {{ $loop->first ? 'data-te-nav-active' : '' }}
                data-te-toggle="pill"
                role="tab"
                class="history cursor-pointer font-medium y-2 block border-0 lg:border-b-0 lg:border-r border-black pr-4 lg:py-2 lg:pr-5 lg:text-3xl text-2xl font-medium leading-tight text-gray-500 hover:text-sky-300 hover:isolate focus:isolate focus:border-transparent data-[te-nav-active]:border-[theme(colors.blue)] lg:data-[te-nav-active]:border-r-4 data-[te-nav-active]:text-[theme(colors.blue)] dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-[theme(colors.blue)]-400 dark:data-[te-nav-active]:text-[theme(colors.blue)]-400"
                aria-controls="our_story_{{ $loop->index }}"
                aria-selected="true">{{ $item }}</a>
            @endforeach
          </div>
        </div>

        <div class="lg:col-start-5 lg:col-span-4 order-2 flex lg:text-left text-center">
          @foreach ($data as $item)
            <div
              id="our_story_{{ $loop->index }}"
              {{ $loop->first ? 'data-te-tab-active' : 'data-te-tab' }}
              class="hidden opacity-100 transition-opacity duration-150 p-3 lg:pl-24 lg:pr-4 ease-linear data-[te-tab-active]:block"
              role="tabpanel"
              aria-labelledby="our_story_{{ $loop->index }}-tab"
            >
              <div class="flex items-center h-full">
                <div>
                  @if($item == "1980s")
                    <h5 class="text-4xl font-semibold mb-4 lg:leading-[60px] leading-10 text-gray-700">
                      Marking the inception of a solution-oriented journey
                    </h5>
                    <p class="text-neutral-400 text-lg">
                      Led by Mr. Abdulhalim Kaddah, a visionary chemical engineer. While pursuing his studies abroad, he noticed an obvious absence of fundamental cleaning equipment in
                      his hometown. Motivated to bridge this gap, he initiated local manufacturing in Syria, catering to domestic needs.
                    </p>
                  @elseif($item == "1990s")
                    <h5 class="text-4xl font-semibold mb-4 lg:leading-[60px] leading-10 text-gray-700">
                      Sharing Expertise and Knowledge
                    </h5>
                    <p class="text-neutral-400 text-lg">
                    AKC Cleaning Equipments had expanded its reach, exporting products from Syria to prominent GCC countries such as the UAE, KSA, Oman, Qatar, and Bahrain. 
                    This strategic expansion underlined the company's commitment to sharing expertise and knowledge across the region.
                    </p>
                  @elseif($item == "2000s")
                    <h5 class="text-4xl font-semibold mb-4 lg:leading-[60px] leading-10 text-gray-700">
                      Taking A Risk
                    </h5>
                    <p class="text-neutral-400 text-lg">
                      AKC Cleaning Equipments took a bold step by establishing its first branch and warehouse in Sharjah Industrial Area.
                      This crucial move triggered rapid growth and marked the onset of a flourishing movement.
                    </p>
                  @elseif($item == "2010s")
                    <h5 class="text-4xl font-semibold mb-4 lg:leading-[60px] leading-10 text-gray-700">
                      Taking a step towards expansion
                    </h5>
                    <p class="text-neutral-400 text-lg">
                      The company had further solidified its presence by inaugurating three branches in Dubai, along with additional branches in Oman and Bahrain.
                      This expansion underscored AKC's commitment to meeting the escalating demand for quality cleaning solutions across diverse markets.
                    </p>
                  @elseif($item == "2022s")
                    <h5 class="text-4xl font-semibold mb-4 lg:leading-[60px] leading-10 text-gray-700">
                      Looking forward to a brighter more successful future
                    </h5>
                    <p class="text-neutral-400 text-lg">
                      The culmination of decades of dedication and innovation led to the relocation of AKC Cleaning Equipments to its state-of-the-art headquarters in Dubai Industrial Park.
                      Here, the next generation, embodied by Mr. Kaddah's sons, proudly carries forward their father's enduring legacy, aimed to continue the company's trajectory of excellence and growth.
                    </p>
                  @else
                  <h5 class="text-4xl font-semibold mb-4 lg:leading-[60px] leading-10 text-gray-700">
                      Marking the inception of a solution-oriented journey
                    </h5>
                    <p class="text-neutral-400 text-lg">
                      Led by Mr. Abdulhalim Kaddah, a visionary chemical engineer. While pursuing his studies abroad, he noticed an obvious absence of fundamental cleaning equipment in
                      his hometown. Motivated to bridge this gap, he initiated local manufacturing in Syria, catering to domestic needs.
                    </p>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
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
            To endorse our clients, suppliers, and every stakeholder and participant in the cleaning industry with a growth-oriented philosophy that propels them to always seek better when it comes to efficiency and effectiveness in cleaning solutions.
            With innovation as our main drive, and professional growth as our motive, we’re consistently aspiring to tailor-fit cleaning solutions that match the requirements of every diverse industry.
          </p>
        </div>

        <div class="flex flex-col text-center lg:px-[70px] sm:px-16 px-8">
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
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-center">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Janitor.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Commercial cleaning</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Commercial cleaning providers understand the need for versatile and durable machinery suitable for various settings, including offices, retail spaces, and hospitality venues.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-center">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Out Patient Department.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Healthcare</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Our clients in the healthcare sector face stringent hygiene and infection control requirements.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-center">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Factory.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Industrial</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Industries and manufacturing sites regularly face difficult cleaning requirements with heavy-duty machinery, grease, and industrial residues.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-center">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Student Center.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Education</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Educational institutes require user-friendly, reliable cleaning equipment that offer minimal disruption to the education setting.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-center">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Service Bell.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Hospitality</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Hotels, resorts, cruise ships, and others in the hospitality sector require efficient, fast, and reliable solutions that can clean guest rooms, lobbies, dining spaces, and other areas in accordance with the industry's high cleanliness standards.</p>
        </div>
      </div>
      <div class="rounded-[30px] p-8 h-[320px] flex justify-center bg-white group">
        <div class="overflow-hidden flex flex-col items-center justify-center text-center group-hover:text-left group-hover:items-start group-hover:justify-center">
          <img class="transition ease-in-out delay-1500 w-20 group-hover:w-8" src="{{ asset('images/about/icons/Pizza.svg') }}" alt="">
          <h3 class="transition ease-in-out delay-1500 text-3xl font-bold pt-8 pb-6 group-hover:pt-6 group-hover:pb-4 group-hover:text-xl">Food service</h3>
          <p class="transition ease-in-out delay-1500 duration-300 hidden group-hover:block max-h-[150px] overflow-auto text-neutral-400">Kitchens, restaurants, food processing plants, and others in the food service sector require chemicals and cleaning equipment that can simultaneously cover their intensive cleaning requirements and match the strict regulations and standards of sanitization required in the food service sector.</p>
        </div>
      </div>
    </div>
  </div>

  <x-subpanel title="They Satisfied With Our Service" more="View All Brands">
    <div class="flex justify-center"><img src="{{ asset('images/about/image 34.png') }}" alt=""></div>
    <div class="flex justify-center"><img src="{{ asset('images/about/image 35.png') }}" alt=""></div>
    <div class="flex justify-center"><img src="{{ asset('images/about/image 36.png') }}" alt=""></div>
  </x-subpanel>

  <div class="lg:px-[210px] sm:px-16 px-8 lg:py-[100px] py-8 grid lg:grid-cols-2 gap-10">
    <div class="mx-auto lg:mx-0">
    <div id="map" style="height:500px;width:100%;"></div>
    </div>
    <div class="lg:px-[80px] px-8">
      <h3 class="text-3xl font-semibold py-5">Our Branches</h3>
      <div class="mt-5">
        <h5 class="text-xl">Dubai</h5>
        <p class="text-neutral-400 mt-2">Speedex Center - Salah Al Din St - Al Khabaisi - Dubai - United Arab Emirates</p>
      </div>
      <div class="mt-5">
        <h5 class="text-xl">Abu Dahbi</h5>
        <p class="text-neutral-400 mt-2">6th Street - Musaffah - Musaffah Industrial - Abu Dhabi - United Arab Emirates</p>
      </div>
    </div>
  </div>
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