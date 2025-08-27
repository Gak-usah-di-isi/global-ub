<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FFFFFF] w-full min-h-screen">
    <div class="max-w-[1440px] mx-auto">

        <nav class="w-full h-20 flex justify-between items-center bg-[#FFFFFFF2] border-b px-28">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('/images/ub.png') }}" alt="Logo UB" class="h-8">
                <img src="{{ asset('/images/gub.png') }}" alt="Logo Gub" class="h-8">
            </div>
            <div class="flex items-center space-x-8">
                <a href="#" class="text-[#29303D] font-medium text-[14px] leading-[24px] tracking-normal">Home</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[14px] leading-[24px] tracking-normal">About</a>
                <a href="#" class="text-[#29303D] font-medium text-[14px] leading-[24px] tracking-normal">News</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[14px] leading-[24px] tracking-normal">Event</a>
                <a href="#" class="text-[#29303D] font-medium text-[14px] leading-[24px] tracking-normal">Study in
                    UB</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[14px] leading-[24px] tracking-normal">Partnership</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[14px] leading-[24px] tracking-normal">Gallery</a>
            </div>
            <div class="flex items-center">
                <button
                    class="bg-[#0000FF] text-white py-2 px-4 rounded-[10px] w-[78px] h-[36px] flex items-center gap-[8px]">
                    <span class="font-medium text-[14px] leading-[24px] tracking-normal">Eng</span>
                    <img src="{{ asset('icons/globe.svg') }}" alt="Globe Icon" class="w-5 h-5">
                </button>
            </div>
        </nav>

        <section class="relative w-full h-[700px] max-w-[1440px] mx-auto">
            <div class="absolute inset-0 bg-[url('../../../public/images/hero-bg.jpg')] bg-cover bg-center">
                <div class="absolute inset-0 bg-gradient-to-r from-[#0000FF] to-[#6699FF] opacity-90"></div>
            </div>
            <div
                class="absolute top-1/2 transform -translate-y-1/2 w-full flex items-center justify-between px-[120px]">
                <div class="text-container flex flex-col gap-[24px]"
                    style="width: 779px; height: 288px; max-width: 896px;">
                    <h1
                        class="text-[72px] font-bold leading-[72px] tracking-normal text-white font-[font-family/Font 1]">
                        Inspiring Change,<br>Uniting Civilizations
                    </h1>
                    <h2 class="text-[24px] font-regular leading-[24px] text-white">Leading research and innovation on
                        the global stage</h2>
                    <div class="flex gap-[8px]">

                        <button
                            class="bg-[#FFFFFF1A] border border-[#FFFFFF33] shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-[#0000FF] py-2 px-[33px] rounded-[12px] w-[220px] h-[56px] flex items-center gap-2">
                            <span class="font-medium text-[14px] leading-[24px] text-white">Explore Programs</span>
                            <img src="{{ asset('icons/play.svg') }}" alt="Play Icon" class="w-6 h-6">
                        </button>

                        <button
                            class="bg-[#FFFFFF1A] border border-[#FFFFFF4D] shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-[#0000FF] py-2 px-[41px] rounded-[12px] w-[179px] h-[56px]">
                            <span class="font-medium text-[14px] leading-[24px] text-white">Watch Video</span>
                        </button>
                    </div>
                </div>
                <div class="image-container w-[380px] h-[390px] rounded-[20px] overflow-hidden">
                    <img src="{{ asset('/images/hero-content.jpg') }}" alt="Image"
                        class="w-full h-full object-cover">
                </div>
            </div>

            <div
                class="absolute top-1/2 left-7 transform -translate-y-1/2 p-2 bg-[#FFFFFF1A] rounded-full shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
                <button class="w-12 h-12 flex justify-center items-center text-white">
                    <img src="{{ asset('icons/left-arrow.svg') }}" alt="Previous" class="w-6 h-6">
                </button>
            </div>
            <div
                class="absolute top-1/2 right-7 transform -translate-y-1/2 p-2 bg-[#FFFFFF1A] rounded-full shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
                <button class="w-12 h-12 flex justify-center items-center text-white">
                    <img src="{{ asset('icons/right-arrow.svg') }}" alt="Next" class="w-6 h-6">
                </button>
            </div>

            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-2">
                <div class="w-2 h-2 bg-[#FFFFFF80] rounded-full transition-all duration-300"></div>
                <div class="w-2 h-2 bg-[#FFFFFF80] rounded-full transition-all duration-300"></div>
                <div class="w-2 h-2 bg-[#FFFFFF] rounded-full transition-all duration-300"></div>
                <div class="w-2 h-2 bg-[#FFFFFF80] rounded-full transition-all duration-300"></div>
                <div class="w-2 h-2 bg-[#FFFFFF80] rounded-full transition-all duration-300"></div>
            </div>
        </section>

    </div>
</body>

</html>
