{{-- Navigation Bar Mobile --}}
<nav x-data="{
    openNavbar: false
}"
    class="absolute z-50 top-0 md:left-6 px-2 w-full py-4 grid md:grid lg:hidden grid-cols-2 items-center max-w-full md:max-w-3xl lg:max-w-5xl mx-auto">
    <div class="col-span-1">
        <a href="/">
            <img src="{{ asset('images/bhr-logo-white.png') }}" class="w-52 md:w-52" alt="BVR Bali Holiday Rentals">
        </a>
    </div>
    <div class="col-span-1 flex w-full justify-end">
        <button @click="openNavbar =! openNavbar">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-gray-200">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

    </div>
    <div class="col-span-2 bg-white mt-2 text-sm font-medium z-50" x-transition x-show="openNavbar">
        <a href="/" class="block border-b-[1px] px-4 py-3">Home</a>
        <a href="/properties" class="block border-b-[1px] px-4 py-3">Bali Rentals</a>
        <a href="/activities" class="block border-b-[1px] px-4 py-3">Bali Attractives</a>
        <a href="/areas" class="block border-b-[1px] px-4 py-3">Top Destinations</a>
        <a href="/blogpost" class="block border-b-[1px] px-4 py-3">Blogpost</a>
        <div class="px-4 py-3 space-y-[8px]">
            <div>
                Social
            </div>
            <div class="flex items-center space-x-[8px] text-gray-600 py-3">
                <svg width="12px" height="12px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>Whatsapp-color</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Color-" transform="translate(-700.000000, -360.000000)" fill="#67C15E">
                                <path
                                    d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z"
                                    id="Whatsapp"> </path>
                            </g>
                        </g>
                    </g>
                </svg>
                <div>
                    Whatsapp
                </div>
            </div>
            <div class="flex items-center space-x-[8px] py-3 text-gray-600">
                <svg width="12px" height="12px" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <rect x="2" y="2" width="28" height="28" rx="6"
                            fill="url(#paint0_radial_87_7153)"></rect>
                        <rect x="2" y="2" width="28" height="28" rx="6"
                            fill="url(#paint1_radial_87_7153)"></rect>
                        <rect x="2" y="2" width="28" height="28" rx="6"
                            fill="url(#paint2_radial_87_7153)"></rect>
                        <path
                            d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z"
                            fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z"
                            fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z"
                            fill="white"></path>
                        <defs>
                            <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)">
                                <stop stop-color="#B13589"></stop>
                                <stop offset="0.79309" stop-color="#C62F94"></stop>
                                <stop offset="1" stop-color="#8A3AC8"></stop>
                            </radialGradient>
                            <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)">
                                <stop stop-color="#E0E8B7"></stop>
                                <stop offset="0.444662" stop-color="#FB8A2E"></stop>
                                <stop offset="0.71474" stop-color="#E2425C"></stop>
                                <stop offset="1" stop-color="#E2425C" stop-opacity="0"></stop>
                            </radialGradient>
                            <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)">
                                <stop offset="0.156701" stop-color="#406ADC"></stop>
                                <stop offset="0.467799" stop-color="#6A45BE"></stop>
                                <stop offset="1" stop-color="#6A45BE" stop-opacity="0"></stop>
                            </radialGradient>
                        </defs>
                    </g>
                </svg>
                <div>
                    Instagram
                </div>
            </div>
        </div>
    </div>
</nav>

{{-- Navigation Bar Desktop --}}
<nav class="hidden md:hidden lg:block">
    <div class="py-4 bg-white w-full">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <div>
                <img src="{{asset('images/bhr-logo.png')}}" class="w-64" alt="BVR Bali Holiday">
            </div>
            <div class="text-sm font-medium text-gray-900 flex space-x-[16px]">
                <div>
                    <a href="https://wa.me/6285738930043" class="text-blue-600">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3 bg-gray-50 w-full">
        <div class="max-w-5xl mx-auto">

            <ul class="flex space-x-[32px] text-sm font-medium text-neutral-800">
                <li>
                    <a href="/" class="hover:text-gray-900 transition">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/properties" class="hover:text-gray-900 transition">
                        Bali Rentals
                    </a>
                </li>
                <li>
                    <a href="/activities" class="hover:text-gray-900 transition">
                        Bali Attractives
                    </a>
                </li>
                <li>
                    <a href="/areas" class="hover:text-gray-900 transition">
                        Areas
                    </a>
                </li>
                <li>
                    <a href="/blogpost" class="hover:text-gray-900 transition">
                        Blogpost
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
