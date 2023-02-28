<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <script defer src="./partials/js/functions.js"></script>
    <script defer src="https://kit.fontawesome.com/bf2c5f39e9.js" crossorigin="anonymous"></script>
    <title>CodingWithPawan | Home</title>
</head>

<body class="overflow-x-hidden">
    <template>
        <div class="alertMessage"></div>
    </template>
    <nav
        class="bg-gradient-to-tl from-[rgba(255,255,255,0.1)] to-[rgba(255,255,255,0) bg-[rgba(255,255,255,0.1)] backdrop-blur-md fixed w-screen h-28 flex justify-around border-b-4 border-blue-600 z-10">
        <div class="flex text-white">
            <img src="./src/images/Codingwithpawanlogo.svg" alt="Youtube Channel Logo" class="w-20 h-20 p-2">
            <div class="p-4">
                <span class="text-2xl">CodingWithPawan</span>
                <p>Projects are best way to improve in programming</p>
            </div>
        </div>
        <div class="p-6">
            <a class="p-2 px-4 border-b-2  border-orange-600 text-orange-500 hover:text-orange-400" href="#home"><i
                    class="fa fa-home p-2"></i> Home</a>
            <a class="p-2 px-4 border-b-2 hover:border-blue-600 hover:text-blue-500" href="#blog"><i
                    class="fa fa-blog p-2"></i> Blog</a>
        </div>
    </nav>

    <div class="h-screen bg-homeBack bg-fixed bg-opacity-40 flex justify-center items-center z-0"
        style="background-image: url('./src/images/homeBack.jpg');">
        <div
            class="w-[calc(100vw-20rem)] text-gray-600 p-4 bg-gradient-to-tl from-[rgba(0,0,0,0.1)] to-[rgba(0,0,0,0) bg-[rgba(0,0,0,0.1)] backdrop-blur-md rounded-lg border-2 border-[rgba(0,0,0,0.18)] drop-shadow-md flex justify-around">
            <div class="text-white flex flex-col justify-center items-center">
                <div class="flex">
                    <div class="text-center text-9xl">
                        I'm
                    </div>
                    <div>
                        <h1 class="text-5xl">Pawan Kushwah</h1>
                        <div class="w-fit h-14 bg-blue-400 p-1 overflow-hidden mt-2">
                            <h4 class="text-5xl">Web Developer</h4>
                            <h4 class="text-5xl">Youtuber</h4>
                        </div>
                    </div>
                </div>

            </div>
            <div class="rounded-full overflow-hidden border-4 border-blue-400">
                <img src="./src/images/mypic.png" alt="Pic" class="w-80">
            </div>
        </div>
    </div>

    <div class="w-screen h-screen">

    </div>

</body>

</html>