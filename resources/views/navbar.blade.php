
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <header>
        <!-- <p class="bg-red-800">kjjhk</p>
        <p class="test">AAA</p> -->

        <nav class="
          flex flex-wrap
          items-center
          justify-between
          w-full
          py-4
          md:py-0
          px-10
          text-lg text-gray-700
          bg-white
        ">
            <!-- <p class="font-ibm">สวัสดี</p> -->
            <div class="hidden w-full md:flex md:items-center md:w-auto">

                <div class=" flex flex-wrap items-center gap-5">
                    <div class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            class="fill-gray-500 ">
                            <path
                                d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z">
                            </path>
                        </svg>
                        <p class="text-sm text-gray-500 font-ibm font-semibold">ถ.สุขุมวิท กรุงเทพมหานคร</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            class="fill-gray-500">
                            <path
                                d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z">
                            </path>
                        </svg>
                        <p class="text-sm text-gray-500 font-ibm font-semibold">email@gmail.com</p>
                    </div>
                </div>
            </div>


            <div class="hidden w-full md:flex md:items-center md:w-auto " id="">

                <div class="flex gap-2 md:p-4 py-2 ">

                    <!-- <p class=" text-gray-500 text-sm font-ibm font-semibold">ไทย</p>     -->
                    <div class="flex">
                        <button
                            class="relative rounded-md	 flex justify-center items-center bg-white  focus:outline-none  text-gray-600  focus:ring ring-fuchsia-200 group">
                            <svg class="p-1" width="25" height="25" viewBox="0 0 32 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="32" height="21" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_105_828"
                                            transform="matrix(0.00505051 0 0 0.00769601 0 -0.00793651)" />
                                    </pattern>
                                    <image id="image0_105_828" width="198" height="132"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                            <p class="text-sm text-gray-500 font-ibm font-semibold">ไทย</p>
                            <span class="border-l hover:bg-gray-100">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>

                            <div
                                class="absolute hidden group-focus:block rounded-md	 top-full px-2 min-w-full w-max bg-white shadow-md mt-2 ">
                                <div class="text-left flex relative">
                                    <div class="group relative flex  rounded-lg p-1 hover:bg-gray-50">
                                        <svg class="p-1" width="25" height="25" viewBox="0 0 32 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <rect width="32" height="21" fill="url(#pattern0)" />
                                            <defs>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                                    height="1">
                                                    <use xlink:href="#image0_105_828"
                                                        transform="matrix(0.00505051 0 0 0.00769601 0 -0.00793651)" />
                                                </pattern>
                                                <image id="image0_105_828" width="198" height="132"
                                                    xlink:href="data:image/png;base64,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" />
                                            </defs>
                                        </svg>

                                        <div>
                                            <a href="#" class="text-sm text-gray-500 font-ibm font-semibold">
                                                English
                                                <span class="absolute inset-0"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </button>
                    </div>
                </div>

                <div class="flex gap-2 md:p-4 py-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        class="fill-gray-500">
                        <path
                            d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z">
                        </path>
                    </svg>
                    <p class=" text-gray-500 text-sm font-ibm font-semibold">062-0683387</p>
                </div>
            </div>
        </nav>

        <nav class="
          flex flex-wrap
          items-center
          justify-between
          w-full
          pb-4
          md:py-0
          px-10
          text-lg text-gray-700
          bg-white
        ">

            <div>
                <a class="flex gap-5" href="#">
                    <svg class="fill-purple-400" width="30" height="30" viewBox="0 0 20 19"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 13.114C6.002 7.163 1.426 6.071 1.22 6.024L0 5.75V7C0 14.29 3.925 19 10 19C15.981 19 20 14.178 20 7V5.75L18.78 6.024C18.574 6.071 13.998 7.163 10 13.114Z" />
                        <path
                            d="M9.27406 0.767C7.47505 2.665 6.43405 4.542 5.83105 6.062C7.16005 6.846 8.61205 8.005 9.99005 9.747C11.3541 7.987 12.8161 6.822 14.1601 6.038C13.5551 4.523 12.5141 2.655 10.7251 0.767L10.0001 0L9.27406 0.767Z" />
                    </svg>
                    <p class="text-purple-400 font-bold text-xl">Lirena</p>
                </a>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                <ul class="
              pt-4
              text-base text-gray-700
              md:flex
              md:justify-between 
              md:pt-0">
                    <li class="hidden  sm:block ">
                        <a class="md:p-4 py-2 flex hover:text-purple-400" id="reserve_lg" href="#">
                            <p class="font-ibm font-semibold">จองบริการ</p>
                            <svg class="h-5 w-5 mt-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                            </span>
                        </a>


                        <div class="hidden mt-2 bg-white shadow-md rounded-xl p-4 my-3 absolute" id="menu_reserve_lg">
                            <div class="hover:bg-purple-100 p-3 rounded-xl cursor-pointer">
                                <p class="hover:text-gray-600 font-ibm text-semibold"
                                    onClick="redirectToPageAroma_Oil()">นวดน้ำมันอโรมา</p>
                                <p class="text-xs font-ibm text-semibold">Get a better understanding of your traffic
                                </p>
                            </div>

                            <div class="mt-3 hover:bg-purple-100 p-3 rounded-xl cursor-pointer">
                                <p class="hover:text-gray-600 font-ibm">นวดแผนไทย</p>
                                <p class="text-xs font-ibm">Get a better understanding of your traffic</p>
                            </div>

                            <div class="mt-3 hover:bg-purple-100 p-3 rounded-xl cursor-pointer">
                                <p class="hover:text-gray-600 font-ibm text-semibold">นวดกดจุด</p>
                                <p class="text-xs font-ibm text-semibold">Get a better understanding of your traffic
                                </p>
                            </div>
                        </div>

                    </li>

                    <li class=" sm:hidden ">
                        <a class="md:p-4 py-2 flex hover:text-purple-400" id="reserve" href="#">
                            <p class="font-ibm font-semibold">จองบริการ</p>
                            <svg class="h-5 w-5 mt-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                            </span>
                        </a>

                        <div class=" sm:hidden " id="menu_reserve">
                            <div class=" bg-white shadow-md w-full rounded-xl p-4 my-3">

                                <div class="hover:bg-purple-100 p-3 rounded-xl cursor-pointer"
                                    onclick="redirectToPageAroma_Oil()">
                                    <p class="hover:text-gray-600 font-ibm text-semibold">นวดน้ำมันอโรมา</p>
                                    <p class="text-xs font-ibm text-semibold">Get a better understanding of your traffic
                                    </p>

                                </div>

                                <div class="mt-3 hover:bg-purple-100 p-3 rounded-xl cursor-pointer">
                                    <p class="hover:text-gray-600 font-ibm">นวดแผนไทย</p>
                                    <p class="text-xs font-ibm">Get a better understanding of your traffic</p>
                                </div>

                                <div class="mt-3 hover:bg-purple-100 p-3 rounded-xl cursor-pointer">
                                    <p class="hover:text-gray-600 font-ibm text-semibold">นวดกดจุด</p>
                                    <p class="text-xs font-ibm text-semibold">Get a better understanding of your traffic
                                    </p>
                                </div>

                            </div>
                        </div>

                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-400 font-ibm font-semibold cursor-pointer"
                            onClick="redirectToPagePromotion()">โปรโมชั่น</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-400 font-ibm font-semibold cursor-pointer"
                            onClick="redirectToPageReserve_Group()">สำหรับองค์กร</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-400 font-ibm font-semibold cursor-pointer"
                            onClick="redirectToPageOur_Portfolio()">ผลงานของเรา</a>
                    </li>
                    <li class="mt-3">
                        <a class="bg-fuchsia-900 px-5 py-2 rounded-lg hover:bg-purple-400 text-white  md:flex" role="button"
                            onclick="redirectToPageRegister()">ลงทะเบียน</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
const button = document.querySelector('#menu-button');
const menu = document.querySelector('#menu');

button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});


const reserve = document.querySelector('#reserve');
const menu_reserve = document.querySelector('#menu_reserve');


reserve.addEventListener('click', () => {
    menu_reserve.classList.toggle('hidden');
});


const reserve_lg = document.querySelector('#reserve_lg');
const menu_reserve_lg = document.querySelector('#menu_reserve_lg');


reserve_lg.addEventListener('click', () => {
    menu_reserve_lg.classList.toggle('hidden');
});
</script>


<!-- <script>
function redirectToPageRegister() {
    window.location.href = "register.php";
}

function redirectToPageAroma_Oil() {
    window.location.href = "aroma_oil.php";
}

function redirectToPagePromotion() {
    window.location.href = "promotion.php";
}

function redirectToPageReserve_Group() {
    window.location.href = "reserve_group.php";
}

function redirectToPageOur_Portfolio() {
    window.location.href = "our_portfolio.php";
}
</script> -->


</html>


