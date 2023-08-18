<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>profile</title>
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body class="font-oswald">
    <div class="lg:flex justify-center w-full">
        <div class="lg:flex lg:flex-col justify-center lg:w-1/3">
            <div class="hidden lg:flex  justify-center mt-10 mb-7">
                <div class="flex text-slate-700 space-x-6 items-center">
                    <div class="border-b-2 border-lightblue text-3xl">Profile</div>
                    <div class="text-lg">Personal</div>
                </div>
            </div>
            <div class="">
                <a href="index.php" class="w-12 h-12 flex items-center justify-center absolute mt-4 ml-3 hover:opacity-40 lg:hidden">
                    <svg viewBox="0 0 1024 1024" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                    <path d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"/>
                    <path d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"/></svg>
                </a>
                <div class="absolute mt-5 right-0">
                    <button class=" text-lightblue text-3xl rounded-lg w-26 h-10 lg:hidden">save</button>
                </div>
                <div class="flex justify-center items-center h-20 lg:hidden">
                    <div>
                        <p class="text-4xl text-lightblue">Profile</p>
                    </div>
                </div>
            
                <div class="h-56">
                    <div class="flex justify-center items-center">
                       <div class="relative w-32 h-32 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <svg class="bg-zinc-300 absolute w-36 h-36 text-gray-400 -left-2" fill="#555555" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <a class="text-blue-800">Change profile picture</a>
                    </div>
                </div>
            
                <div>
                    <div class="flex items-center justify-center border-b border-slate-500 pb-3 pt-3 text-lg">
                        <div class="w-1/3">
                            <p class="ml-5">Full Name</p>
                        </div>
                        <div class="text-slate-500 w-2/3 ">
                            <input type="text" value="ismail soudassi" class="border-none w-full pl-5" readonly>
                        </div>
                    </div>
                    <div class="flex items-center justify-center border-b border-slate-500 pb-3 pt-3 text-lg">
                        <div class="w-1/3">
                            <p class="ml-5">Phone number</p>
                        </div>
                        <div class="text-slate-500 w-2/3">
                            <input type="text" value="0620212324" class="border-none w-full pl-5" readonly>
                        </div>
                    </div>
                    <div class="flex items-center justify-center border-b border-slate-500 pb-3 pt-3 text-lg">
                        <div class="w-1/3">
                            <p class="ml-5">E-mail address</p>
                        </div>
                        <div class="text-slate-500 w-2/3">
                            <input type="text" value="ismailsoud123@gmail.com" class="border-none w-full pl-5" readonly>
                        </div>
                    </div>
                    <div class="flex items-center justify-center border-b border-slate-500 pb-3 pt-3 text-lg">
                        <div class="w-1/3">
                            <p class="ml-5">Location</p>
                        </div>
                        <div class="text-slate-500 w-2/3">
                            <select name="city" id="city" class="border-none w-auto pl-5 pr-5">
                                <option value="meknes">meknes</option>
                            </select>                
                        </div>
                    </div>
                    <div class="flex items-center justify-center border-b border-slate-500 pb-3 pt-3 text-lg">
                        <div class="flex flex-col w-full">
                            <div class="flex w-full">
                                <div class="">
                                    <p class="ml-5">Choose a Profetion</p>
                                </div>
                                <div class="text-slate-500 w-1/3">
                                    <select name="city" id="city" class="border-none w-auto pl-5 pr-5">
                                        <option value="Autre">Autre</option>
                                    </select>                
                                </div>
                            </div>
                            <div class="flex items-center justify-center pt-3 text-lg">
                                <div class="w-1/3">
                                    <p class="ml-5 ">OR Add Yours</p>
                                </div>
                                <div class="text-slate-500 w-2/3">
                                    <input type="text" value="programer" class="border-none w-full pl-7" readonly>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="flex justify-center border-b border-slate-500 pb-3 pt-3 text-lg">
                        <div class="w-1/3 flex">
                            <p class="ml-5">Bio</p>
                        </div>
                        <div class="text-slate-500 w-2/3">
                            <textarea name="bio" id="bio" cols="30" rows="4" class="pl-3 pt-2" placeholder="Give a brief introduction about yourself"></textarea>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>


</body>
</html>