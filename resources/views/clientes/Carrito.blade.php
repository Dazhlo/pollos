<!-- Extiende la plantilla principal -->
@extends('/clientes/index')

@section('titulo', 'Crear')

@section('contenido')
    <style>
        .nav-for-slider .swiper-slide {
            height: auto;
            width: auto;
            cursor: pointer;
        }
        .swiper-wrapper {
            height: auto;
        }
        .nav-for-slider .swiper-slide img {
            border: 2px solid transparent;
            border-radius: 10px;
        }
        .nav-for-slider .swiper-slide-thumb-active img {
            border-color: rgb(79 70 229);
        }
    </style>  

    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Imagen del producto -->
                <div class="slider-box w-full h-full max-lg:mx-auto mx-0">
                    <div class="swiper main-slide-carousel swiper-container relative mb-6">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://pagedone.io/asset/uploads/1700472379.png" alt="Summer Travel Bag" class="max-lg:mx-auto rounded-2xl object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Detalles del producto -->
                <div class="flex justify-center items-center">
                    <div class="pro-detail w-full max-lg:max-w-[608px] lg:pl-8 xl:pl-16 max-lg:mx-auto max-lg:mt-8">
                        <div class="flex items-center justify-between gap-6 mb-6">
                            <div>
                                <h2 class="font-manrope font-bold text-3xl leading-10 text-gray-900 mb-2">Yellow Summer Travel Bag</h2>
                                <p class="font-normal text-base text-gray-500">ABS LUGGAGE</p>
                            </div>
                            <button class="group transition-all duration-500 p-0.5">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="fill-indigo-50 transition-all duration-500 group-hover:fill-indigo-100" cx="30" cy="30" r="30"/>
                                    <path class="stroke-indigo-600 transition-all duration-500 group-hover:stroke-indigo-700" d="M21.4709 31.3196L30.0282 39.7501L38.96 30.9506M30.0035 22.0789C32.4787 19.6404 36.5008 19.6404 38.976 22.0789C41.4512 24.5254 41.4512 28.4799 38.9842 30.9265M29.9956 22.0789C27.5205 19.6404 23.4983 19.6404 21.0231 22.0789C18.548 24.5174 18.548 28.4799 21.0231 30.9184M21.0231 30.9184L21.0441 30.939M21.0231 30.9184L21.4628 31.3115" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Opciones de color -->
                        <p class="font-medium text-lg text-gray-900 mb-2">Color</p>
                        <div class="grid grid-cols-3 gap-3 mb-6 max-w-sm">
                            <div class="color-box group">
                                <img src="https://pagedone.io/asset/uploads/1700472379.png" alt="Black Color" class="aspect-square border-2 border-gray-100 rounded-xl transition-all duration-500 group-hover:border-indigo-600 object-cover"/>
                                <p class="text-sm text-gray-400 text-center mt-2 group-hover:text-indigo-600">Black</p>
                            </div>
                            <div class="color-box group">
                                <img src="https://pagedone.io/asset/uploads/1700472517.png" alt="Brown Color" class="border-2 border-gray-100 rounded-xl transition-all duration-500 group-hover:border-indigo-600 object-cover"/>
                                <p class="text-sm text-gray-400 text-center mt-2 group-hover:text-indigo-600">Brown</p>
                            </div>
                            <div class="color-box group">
                                <img src="https://pagedone.io/asset/uploads/1700472529.png" alt="Beige Color" class="border-2 border-gray-100 rounded-xl transition-all duration-500 group-hover:border-indigo-600 object-cover"/>
                                <p class="text-sm text-gray-400 text-center mt-2 group-hover:text-indigo-600">Beige</p>
                            </div>
                        </div>

                        <!-- Tamaños y opciones -->
                        <p class="font-medium text-lg text-gray-900 mb-2">Size (KG)</p>
                        <div class="grid grid-cols-2 min-[400px]:grid-cols-4 gap-3 mb-3 min-[400px]:mb-8">
                            <button class="border border-gray-200 text-sm text-gray-900 py-2.5 px-5 w-full font-semibold shadow-sm transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">Full Set</button>
                            <button class="border border-gray-200 text-sm text-gray-900 py-2.5 px-5 w-full font-semibold shadow-sm transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">10 kg</button>
                            <button class="border border-gray-200 text-sm text-gray-900 py-2.5 px-5 w-full font-semibold shadow-sm transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">25 kg</button>
                            <button class="border border-gray-200 text-sm text-gray-900 py-2.5 px-5 w-full font-semibold shadow-sm transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">35 kg</button>
                        </div>

                        <button class="w-full px-5 py-4 rounded-[100px] bg-indigo-600 text-white font-semibold text-lg transition-all duration-500 hover:bg-indigo-700 hover:shadow-indigo-300">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var swiper_thumbs = new Swiper(".nav-for-slider", {
            loop: true,
            spaceBetween: 30,
            slidesPerView: 5,
        });
        var swiper = new Swiper(".main-slide-carousel", {
            slidesPerView: 1,
            thumbs: {
                swiper: swiper_thumbs,
            },
        });
    </script>
@endsection
