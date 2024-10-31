<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet">
</head>
<body>

    <nav class="absolute top-0 border-solid border-gray-200 w-full border-b py-3 bg-white z-50 bg-inherit">
    <div class="container mx-auto">
        <div class="w-full flex flex-col lg:flex-row">
            <div class="flex justify-between lg:flex-row">
                <a href="/menu" class="flex items-center">
                    <img src="https://i.pinimg.com/236x/80/c1/5c/80c15c4ba3f3cbb23fad8c02454157b2.jpg" class="h-8" alt="Flowbite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">Pollos locos</span>
                </a>
            </div>
        </div>
    </div>
    </nav>

    <br><br><br><br><br>
                                                                

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md px-6 py-8 bg-white shadow-md rounded-lg">

    <form action="/cliente/login" class="" method="POST">
        @csrf
        <div class="relative text-gray-500 focus-within:text-gray-900 mb-6">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
         <img src="http://127.0.0.1:8000/imagenes/user.png" alt="">
        </div>

        {{-- input users --}}
        <input type="text" id="username" name="username" class="block w-full h-11 pr-5 pl-12 py-2.5 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none" placeholder="usuario">
        </div>
        <div class="relative text-gray-500 focus-within:text-gray-900 mb-2">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
         <svg class="stroke-current ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
           <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" stroke="" stroke-width="1.5" stroke-linecap="round"></path>
         </svg>
        </div>

         {{-- input passwords --}}
        <input type="text" id="password" name="password" class="block w-full h-11 pr-5 pl-12 py-2.5 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none" placeholder="password">
        </div>
    
        <div class="flex mt-7 mb-5">
        <button class="w-full h-9 bg-indigo-600 hover:bg-indigo-900 transition-all duration-700 rounded-full shadow-xs text-white text-base font-semibold leading-6">LOGIN</button>
        </div>
        <div class="flex-1 border-b border-gray-200"></div>
        <div class="flex mt-7 mb-5">
            <button class="w-full h-8 bg-indigo-400 hover:bg-indigo-900 transition-all duration-700 rounded-full shadow-xs text-white text-base font-semibold leading-6">REGISTRARSE</button>
            </div>


        <div class="flex w-full items-center space-x-4 mt-10 mb-10">
        <div class="flex-1 border-b border-gray-200"></div>
        <span class="flex items-center justify-center text-gray-400 text-lg font-normal leading-7 px-5">OR</span>
        <div class="flex-1 border-b border-gray-200"></div>
        </div>
        <p class="text-gray-900 text-center text-base font-medium leading-6 mb-3">Login con Google</p>
        <div class="flex items-center justify-center gap-x-3">
       
            <a href="javascript:;" class="w-9 h-9 rounded-full bg-gray-700 flex justify-center items-center hover:bg-indigo-600">
                <img src="http://127.0.0.1:8000/imagenes/google.png" alt="Google Logo" class="w-full h-full rounded-full"> 
            </a>
       
        </div>
        </form>

    </div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
</body>
</html>