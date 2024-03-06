<div x-data="{ isOpen: false }" class="relative dropdown cart-dropdown cart-offcanvas mr-12 mr-lg-12">
    <!-- Blackout background when cart is open -->
    <div class="fixed inset-0 bg-black opacity-50" x-show="isOpen" @click="isOpen = false"></div>
    <!-- Shopping cart toggle button -->
    <a @click="isOpen = !isOpen" href="#" class="cart-toggle label-down link">
        <span class="inline-block relative">
            <!-- Shopping cart icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 fill-current mt-2" viewBox="0 0 24 24">
                <path id="Path_5" data-name="Path 5" d="M181.7,837h-6.454a2.283,2.283,0,0,1-2.273-2.292V825h2.977v-.667a2.506,2.506,0,0,1,2.492-2.323v.032a2.478,2.478,0,0,1,2.491,2.291V825h3.04v9.708A2.283,2.283,0,0,1,181.7,837Zm-6.392-1.01h6.3a1.369,1.369,0,0,0,1.363-1.375V828h-9.025v6.615A1.368,1.368,0,0,0,175.309,835.99Zm4.653-11.657a1.511,1.511,0,0,0-1.52-1.375,1.482,1.482,0,0,0-1.489,1.375V825h3.009Zm-6.017,1.677V827h9.025v-.99Z" transform="translate(-172.974 -822.01)" fill="#444"/>
            </svg>
            <!-- Shopping cart count badge -->
            <span class="absolute top-0 right-3 bg-blue rounded-full text-xs text-white px-2 py-1">{{ Cart::instance('product')->count() }}</span>
            <span class="cart-label">Cart</span>
        </span>
    </a>
    <!-- Shopping cart modal -->
    <div x-show.transition.opacity.duration.300ms.transform="isOpen" class="fixed inset-y-0 right-0 z-50 w-300 bg-white shadow-lg p-4">
        <!-- Cart header -->
        <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold">Shopping Cart</h2>
            <!-- Close button -->
            <a @click="isOpen = false" href="#" class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </a>
        </div>
        <!-- Cart products -->
        <div class="mt-4">
            <!-- Shopping cart products go here -->
            <p>Heads up! You haven't added anything to your cart.</p>
            <p> Start adding products to receive a free quote</p>
        </div>
    </div>
    <!-- End of Shopping cart modal -->
</div>
