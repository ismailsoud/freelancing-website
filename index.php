<?php 
session_start();
if(isset($_SESSION["name"])){
    echo 'logged-in';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./dist/output.css" rel="stylesheet">
    <script src="js/main.js" defer></script>
    <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!--  -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <!--  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <!--  -->
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body class="font-popping ">
<!-- nav -->
    <nav class="text-sm bg-white/80 backdrop-blur-md shadow-md w-full fixed top-0 left-0 right-0 z-10"  x-cloak x-data="appData()" x-init="appInit()">
        <div class="h-20 lg:h-20 mx-auto w-full">
            <div class="flex justify-between h-full ">
                <!-- logo -->
                <div>
                    <a href="#" class="ml-4 lg:ml-20 flex items-center h-full">
                        <span class="text-blue-700 text-2xl lg:text-4xl whitespace-nowrap font-extrabold">Allo service</span>
                    </a>
                </div>
                <div class="text-2xl flex justify-end w-3/5 space-x-4 opacity-90">
                    <!-- primary  -->
                    <div id="account" class="h-full flex items-center space-x-1 lg:mr-20">
                        <!-- sm-md -->
                        
                        <!-- lg -->
                        <a href="log-sign.php" class="lg:flex">
                            <div class="flex space-x-5">
                            <button class="bg-blue-600 text-creamWhite justify-center items-center px-5 py-1 rounded-full hidden lg:flex whitespace-nowrap h-12">AJOUTER UNE ANNONCE</button>
                                <a src="./log-sign.php" class="flex text-gray-600 cursor-pointer transition-colors duration-300 font-semibold justify-center items-center<?php if(isset($_SESSION["name"])){echo 'hidden';};?>">
                                    <svg class="fill-current h-7 w-7 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                                    </svg>
                                    Login
                                </a>
                            </div>
                        </a>
                    </div>
                    <!-- secoundary -->
                    <div id="hamberger" class="flex items-center h-full lg:hidden">
                        <!-- sm-md -->
                        <button id="hamberger-button" class="mr-3">
                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg class="w-8 h-8"  viewBox="0 -2 28 28" xmlns="http://www.w3.org/2000/svg" fill="#1D4ED8"><path d="m2.61 0h22.431c1.441 0 2.61 1.168 2.61 2.61s-1.168 2.61-2.61 2.61h-22.431c-1.441 0-2.61-1.168-2.61-2.61s1.168-2.61 2.61-2.61z"/><path d="m2.61 9.39h22.431c1.441 0 2.61 1.168 2.61 2.61s-1.168 2.61-2.61 2.61h-22.431c-1.441 0-2.61-1.168-2.61-2.61s1.168-2.61 2.61-2.61z"/><path d="m2.61 18.781h22.431c1.441 0 2.61 1.168 2.61 2.61s-1.168 2.61-2.61 2.61h-22.431c-1.441 0-2.61-1.168-2.61-2.61s1.168-2.61 2.61-2.61z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <section id="mobile-menu" class="absolute top-0 w-full bg-black
    flex-col min-h-screen origin-top animate-open-menu hidden z-10 ">
        <button  class="self-end px-3 text-white text-4xl hover:opacity-75">
            &times;
        </button>
        <nav class="flex flex-col items-center" aria-label="mobile">
            <a href="#" class="text-white w-full text-center pt-5 hover:opacity-80">Ajouter une anonce</a> 
            <a href="#" class="text-white w-full text-center pt-4 hover:opacity-80">home</a>
            <a href="#" class="text-white w-full text-center pt-4 hover:opacity-80">Contat</a>
            <a href="#" class="text-white w-full text-center pt-4 hover:opacity-80">About</a> 
        </nav>
    </section>

<!-- slid -->
    <section id="slide" class="h-24 shadow-lg w-full opacity-80 z-0 font-medium mt-20">
        <div class="h-full flex justify-center">
            <div class="slide flex h-full overflow-scroll">
                <a href="#">
                    <div class="h-full flex flex-col justify-center items-center mx-5">
                        <div class="h-11 w-11 flex flex-col items-center mt-3">
                            <img src="img/slide-img/programmer-svgrepo-com.svg" alt="not found">
                        </div>
                        <span class="text-base">Programers</span>
                    </div>
                </a>
                <a href="#">
                    <div class="h-full flex flex-col justify-center items-center mx-5">
                        <div class="h-11 w-11 flex flex-col items-center mt-3">
                            <img src="img/slide-img/maid-svgrepo-com.svg" alt="not found">
                        </div>
                        <span class="text-base">Maids</span>
                    </div>
                </a>
                <a href="#">
                    <div class="h-full flex flex-col justify-center items-center mx-5">
                        <div class="h-11 w-11 flex flex-col items-center mt-3">
                            <img src="img/slide-img/plumber-svgrepo-com.svg" alt="not found">
                        </div>
                        <span class="text-base">Plumers</span>
                    </div>
                </a>
                <a href="#">
                    <div class="h-full flex flex-col justify-center items-center mx-5">
                        <div class="h-11 w-11 flex flex-col items-center mt-3">
                            <img src="img/slide-img/dyer-svgrepo-com.svg" alt="not found">
                        </div>
                        <span class="text-base">Dyers</span>
                    </div>
                </a>
                <a href="#">
                    <div class="h-full flex flex-col justify-center items-center mx-5">
                        <div class="h-11 w-11 flex flex-col items-center mt-3">
                            <img src="img/slide-img/gardener-svgrepo-com.svg" alt="not found">
                        </div>
                        <span class="text-base">Gardeners</span>
                    </div>
                </a>
                <a href="#">
                    <div class="h-full flex flex-col justify-center items-center mx-5">
                        <div class="h-11 w-11 flex flex-col items-center mt-3">
                            <img src="img/slide-img/teacher-svgrepo-com.svg" alt="not found">
                        </div>
                        <span class="text-base">Teachers</span>
                    </div>
                </a>
                <a href="#">
                    <div class="h-full flex flex-col justify-center items-center mx-5">
                        <div class="h-11 w-11 flex flex-col items-center mt-3">
                            <img src="img/slide-img/hairdresser-svgrepo-com.svg" alt="not found">
                        </div>
                        <span class="text-base">Hairdressers</span>
                    </div>
                </a>
                <a href="#">
                    <div class="h-full flex flex-col justify-center items-center mx-5">
                        <div class="h-11 w-11 flex flex-col items-center mt-3">
                            <img src="img/slide-img/taxi-driver-svgrepo-com.svg" alt="not found">
                        </div>
                        <span class="text-base">Taxi</span>
                    </div>
                </a>
                <a href="#">
                    <div class="h-full flex flex-col justify-center items-center mx-5">
                        <div class="h-11 w-11 flex flex-col items-center mt-3">
                            <img src="img/slide-img/nurse-svgrepo-com.svg" alt="not found">
                        </div>
                        <span class="text-base">Nurses</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

<!-- searsh-mobile -->
<div class="max-w-2xl mx-auto mt-14 w-10/12 ">
	<form class="flex items-center">   
        <label for="voice-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Programers, Plumers, gardners..." required>
        </div>
        <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>Search</button>
    </form>
</div>

<!-- main -->
    <main class="main-content mt-16 font-medium lg:ml-14 lg:mr-14">
        <div id="Programers">
            <div href="#" class="flex ml-5 mb-3">
                <a href="#" class="flex space-x-2">
                    <div class="flex justify-center items-center h-10 w-10 border-none border-lightblue rounded-full bg-lightblue">
                        <img class="w-6 h-6" src="img/main-svg/programer.svg" alt="teacher">
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="text-xl">Our Programers</span>
                    </div>
                </a>
            </div>
            <!-- cards -->
            <div class=" w-full flex ">
                <button class="shrink-0 justify-center items-center relative h-52 mt-2 mr-2 hidden lg:flex pre-btn">
                    <div class="w-9 h-9 flex justify-center items-center border-none bg-white costum-shadow-2 rounded-full hover:shadow-lg hover:opacity-70">
                        <img class="w-7 h-7 opacity-50" src="./img/main-svg/left-arrow-backup-2-svgrepo-com.svg" alt="">
                    </div>
                </button>
                <div class="overflow-hidden w-full">
                    <div class="flex overflow-scroll shrink-0 space-x-4 product-container scroll-smooth ml-3">
                        <!-- s -->
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="shrink-0 justify-center items-center relative h-52 mt-2 hidden lg:flex ml-2 nxt-btn">
                    <div class="w-9 h-9 flex justify-center items-center border-none bg-white costum-shadow-3 rounded-full hover:shadow-lg hover:opacity-70">
                        <img class="w-7 h-7 opacity-50" src="./img/main-svg/right.svg" alt="">
                    </div>
                </button>
            </div>
        </div>
        <div id="Teachers">
            <div href="#" class="flex space-x-2 ml-5 mb-3">
                <a href="#" class="flex space-x-2">
                    <div class="flex justify-center items-center h-10 w-10 border-none border-lightGreen rounded-full bg-emerald-500">
                        <img class="w-6 h-6" src="img/main-svg/teacher.svg" alt="teacher">
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="text-xl">Our Teacher</span>
                    </div>
                </a>
            </div>
            <!-- card -->
            <div class=" w-full flex ">
                <button class="shrink-0 justify-center items-center relative h-52 mt-2 mr-2 hidden lg:flex pre-btn">
                    <div class="w-9 h-9 flex justify-center items-center border-none bg-white costum-shadow-2 rounded-full hover:shadow-lg hover:opacity-70">
                        <img class="w-7 h-7 opacity-50" src="./img/main-svg/left-arrow-backup-2-svgrepo-com.svg" alt="">
                    </div>
                </button>
                <div class="overflow-hidden w-full">
                    <div class="flex overflow-scroll shrink-0 space-x-4 product-container scroll-smooth">
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="shrink-0 justify-center items-center relative h-52 mt-2 hidden lg:flex ml-2 nxt-btn">
                    <div class="w-9 h-9 flex justify-center items-center border-none bg-white costum-shadow-3 rounded-full hover:shadow-lg hover:opacity-70">
                        <img class="w-7 h-7 opacity-50" src="./img/main-svg/right.svg" alt="">
                    </div>
                </button>
            </div>
        </div>
        <div id="Plumers">
            <div href="#" class="flex space-x-2 ml-5 mb-3">
                <a href="#" class="flex space-x-2">
                    <div class="flex justify-center items-center h-10 w-10 border-none border-niceblue rounded-full bg-slate-400">
                        <img class="w-6 h-6" src="img/main-svg/plumer.svg" alt="teacher">
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="text-xl">Our Plumers</span>
                    </div>
                </a>
            </div>
            <!-- card -->
            <div class=" w-full flex ">
                <button class="shrink-0 justify-center items-center relative h-52 mt-2 mr-2 hidden lg:flex pre-btn">
                    <div class="w-9 h-9 flex justify-center items-center border-none bg-white costum-shadow-2 rounded-full hover:shadow-lg hover:opacity-70">
                        <img class="w-7 h-7 opacity-50" src="./img/main-svg/left-arrow-backup-2-svgrepo-com.svg" alt="">
                    </div>
                </button>
                <div class="overflow-hidden w-full">
                    <div class="flex overflow-scroll shrink-0 space-x-4 product-container scroll-smooth">
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="shrink-0 justify-center items-center relative h-52 mt-2 hidden lg:flex ml-2 nxt-btn">
                    <div class="w-9 h-9 flex justify-center items-center border-none bg-white costum-shadow-3 rounded-full hover:shadow-lg hover:opacity-70">
                        <img class="w-7 h-7 opacity-50" src="./img/main-svg/right.svg" alt="">
                    </div>
                </button>
            </div>
        </div>
        <div id="Gardeners">
            <div href="#" class="flex space-x-2 ml-5 mb-3">
                <a href="#" class="flex space-x-2">
                    <div class="flex justify-center items-center h-10 w-10 border-none border-niceblue rounded-full bg-green-500">
                        <img class="w-6 h-6" src="img/main-svg/gardener.svg" alt="teacher">
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="text-xl">Our Gardeners</span>
                    </div>
                </a>
            </div>
            <!-- card -->
            <div class=" w-full flex ">
                <button class="shrink-0 justify-center items-center relative h-52 mt-2 mr-2 hidden lg:flex pre-btn">
                    <div class="w-9 h-9 flex justify-center items-center border-none bg-white costum-shadow-2 rounded-full hover:shadow-lg hover:opacity-70">
                        <img class="w-7 h-7 opacity-50" src="./img/main-svg/left-arrow-backup-2-svgrepo-com.svg" alt="">
                    </div>
                </button>
                <div class="overflow-hidden w-full">
                    <div class="flex overflow-scroll shrink-0 space-x-4 product-container scroll-smooth">
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shrink-0 w-44 ml-2 lg:w-60">
                            <div class="w-full bg-creamWhite h-64 lg:h-80 border-none rounded-lg overflow-hidden mb-10 mt-2 text-slate-700 costum-shadow-1">
                                <div class="flex flex-col">
                                    <div class="flex justify-center h-20">
                                        <div class="border-2 border-lightblue rounded-full overflow-hidden w-20 h-20 lg:w-28 lg:h-28 flex justify-center relative -bottom-2 lg:bottom-0 lg:mt-5">
                                            <img class="w-32 h-22 " src="./img/card-img/anahh.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="text-lg flex justify-center mt-4 lg:mt-16 poppins font-popping">
                                        <p>smail</p>
                                    </div>
                                    <div class="text-sm flex justify-center mt-1 pb-1">
                                        <p class="whitespace-nowrap poppins">Fake teacher</p><p class="pl-1 ml-1 border-l-2 whitespace-nowrap underline">Meknes</p>
                                    </div>
                                    <div class="text-lg flex justify-center mt-1">
                                        <p>100DH/Hr</p>
                                    </div>
                                    <div class="w-full mt-1">
                                        <div class="flex justify-center opacity-90">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star1.svg" alt="star">
                                            <img class="w-4 h-4" src="./img/stars/star0.svg" alt="star">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="w-full relative mt-2 lg:mt-4">
                                    <div class="flex justify-center items-center space-x-1">
                                        <button class="text-xs bg-lightblue w-8/12 h-8 lg:w-40 lg:h-10 text-creamWhite border-0 rounded-full">View profile</button>
                                        <button class="w-8 h-8 lg:w-10 lg:h-10 flex justify-center items-center bg-green-400 rounded-full">
                                            <img class="w-5 h-5 lg:w-5 lg:h-5" src="./img/main-svg/whatsapp-svgrepo-com.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="shrink-0 justify-center items-center relative h-52 mt-2 hidden lg:flex ml-2 nxt-btn">
                    <div class="w-9 h-9 flex justify-center items-center border-none bg-white costum-shadow-3 rounded-full hover:shadow-lg hover:opacity-70">
                        <img class="w-7 h-7 opacity-50" src="./img/main-svg/right.svg" alt="">
                    </div>
                </button>
            </div>
        </div>
    </main> 

<!-- bottom menu -->
    <section class="w-full rounded-t-3xl lg:rounded-none flex justify-center items-center mt-20 mb-20">
        <div class="flex flex-col space-y-2">
            <div class="w-full lg:flex space-x-2">
                <a class="lg:w-36 lg:shrink-0">
                    <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border ">
                        <div class="w-5/12 flex justify-center items-center">
                            <img class="w-5/12" src="./img/slide-img/programmer-svgrepo-com.svg" alt="p">  
                        </div>
                        <div>
                            <p class="text-sm">Programers</p>
                        </div>
                    </div>
                </a>
                <a href="" class="lg:w-36 lg:shrink-0">
                    <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border">
                        <div class="w-5/12 flex justify-center items-center">
                            <img class="w-5/12" src="./img/slide-img/plumber-svgrepo-com.svg" alt="p">  
                        </div>
                        <div>
                            <p class="text-sm">Plumers</p>
                        </div>
                    </div>
                </a>
                <a href="" class="lg:w-36 lg:shrink-0">
                    <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border">
                        <div class="w-5/12 flex justify-center items-center">
                            <img class="w-5/12" src="./img/slide-img/plumber-svgrepo-com.svg" alt="p">  
                        </div>
                        <div>
                            <p class="text-sm">Plumers</p>
                        </div>
                    </div>
                </a>
                <a href="" class="lg:w-36 lg:shrink-0">
                    <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border">
                        <div class="w-5/12 flex justify-center items-center">
                            <img class="w-5/12 " src="./img/slide-img/gardener-svgrepo-com.svg" alt="p">  
                        </div>
                        <div>
                            <p class="text-sm">Gardeners</p>
                        </div>
                    </div>
                </a>    
                <a href="" class="lg:w-36 lg:shrink-0">
                    <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border">
                        <div class="w-5/12 flex justify-center items-center">
                            <img class="w-5/12 " src="./img/slide-img/teacher-svgrepo-com.svg" alt="p">  
                        </div>
                        <div>
                            <p class="text-sm">Teachers</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full lg:flex space-x-2">
                <a href="" class="lg:w-36 lg:shrink-0">
                    <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border">
                        <div class="w-5/12 flex justify-center items-center">
                            <img class="w-5/12 " src="./img/slide-img/gardener-svgrepo-com.svg" alt="p">  
                        </div>
                        <div>
                            <p class="text-sm">Gardeners</p>
                        </div>
                    </div>
                </a>    
                <a href="" class="lg:w-36 lg:shrink-0">
                    <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border">
                        <div class="w-5/12 flex justify-center items-center">
                            <img class="w-5/12 " src="./img/slide-img/teacher-svgrepo-com.svg" alt="p">  
                        </div>
                        <div>
                            <p class="text-sm">Teachers</p>
                        </div>
                    </div>
                </a>
                <a href="" class="lg:w-36 lg:shrink-0">
                    <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border">
                        <div class="w-5/12 flex justify-center items-center">
                            <img class="w-5/12" src="./img/slide-img/maid-svgrepo-com.svg" alt="p">  
                        </div>
                        <div>
                            <p class="text-sm">Maids</p>
                        </div>
                    </div>
                </a>  
                <a href="" class="lg:w-36 lg:shrink-0">
                    <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border">
                        <div class="w-5/12 flex justify-center items-center">
                            <img class="w-5/12" src="./img/slide-img/taxi-driver-svgrepo-com.svg" alt="p">  
                        </div>
                        <div>
                            <p class="text-sm">Taxi</p>
                        </div>
                    </div>
                </a>
                <a href="" class="lg:w-36 lg:shrink-0">
                    <div class="">
                        <div class="flex justify-center items-center h-40 flex-col space-y-2 border-black border">
                            <div class="w-5/12 flex justify-center items-center">
                                <img class="w-5/12" src="./img/slide-img/nurse-svgrepo-com.svg" alt="p">  
                            </div>
                            <div>
                                <p class="text-sm">Nurses</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div >
            <div class="h-96 w-full bg-slate-950 border-slate-950 flex justify-center items-center">
                <p class="text-creamWhite text-2xl">Made by Shma3in</p>
            </div>
            <div class="bg-gray-200 flex justify-center items-center h-10">
                <p>credit: naaah</p>
            </div>
        </div>
    </footer>
<script>
    const appData = () => {
        return {
            percent: 0,

            appInit() {
                // source: https://codepen.io/A_kamel/pen/qBmmGKJ
                window.addEventListener('scroll', () => {
                    let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
                        height = document.documentElement.scrollHeight - document.documentElement.clientHeight;

                    this.percent = Math.round((winScroll / height) * 100);
                });
            },
        };
    };
</script>
</body>
</html>