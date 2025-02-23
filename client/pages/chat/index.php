<?php include_once "../header.php" ?>
<link rel="stylesheet" href="../../../public/css/setting.css">
</head>
<style>
    /* Custom CSS to hide scrollbar */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }



    /* chat  */
</style>

<body class="bg-gray-900 text-white ">

    <div class="flex flex-col sm:flex-row h-100%">
        <!-- Left side bar -->
        <div style="background-color:rgba(11, 10, 10, 0.63);" class="sidebar bg-gray-800 sticky top-0 z-20 rounded-lg hidden md:block" id="sidebar">
            <div class="flex flex-col h-screen">
                <div class="flex items-center bg-gray-700 rounded-lg p-2 mb-4 cursor-pointer hover:bg-gray-600">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60" fill="none">
                            <path d="M11.25 53.75H48.75" stroke="#FC8A8A" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.25 53.75V20M48.75 53.75V20" stroke="#FC8A8A" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5 25L30 5L55 25" stroke="#FC8A8A" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.75 53.75V31.25H36.25V53.75" stroke="#FC8A8A" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>

                <div class="tab max-w-xs overflow-hidden">
                    <ul class="flex flex-col items-center space-y-1 list-none p-0 m-0">
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="showContent('account')">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.9101 13.1085C4.9101 8.68273 8.4979 5.09493 12.9237 5.09493C17.3494 5.09493 20.9372 8.68273 20.9372 13.1085C20.9372 17.5343 17.3494 21.1221 12.9237 21.1221C8.4979 21.1221 4.9101 17.5343 4.9101 13.1085ZM12.9237 1.08815C6.28501 1.08815 0.90332 6.46984 0.90332 13.1085C0.90332 19.7472 6.28501 25.1288 12.9237 25.1288C15.2451 25.1288 17.4128 24.4708 19.2505 23.331L24.7491 28.8297C25.8249 29.9054 27.5691 29.9054 28.6448 28.8297C29.7206 27.7539 29.7206 26.0097 28.6448 24.934L23.1462 19.4353C24.286 17.5977 24.944 15.4299 24.944 13.1085C24.944 6.46984 19.5623 1.08815 12.9237 1.08815Z" fill="#FFEAEA" />
                                </svg>
                                </svg>
                            </span>
                        </li>
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="showContent('security')">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9247 10.3169C13.1586 10.3169 10.9163 12.5593 10.9163 15.3254C10.9163 18.0915 13.1586 20.3339 15.9247 20.3339C18.6908 20.3339 20.9332 18.0915 20.9332 15.3254C20.9332 12.5593 18.6908 10.3169 15.9247 10.3169ZM13.4205 15.3254C13.4205 13.9423 14.5417 12.8211 15.9247 12.8211C17.3078 12.8211 18.429 13.9423 18.429 15.3254C18.429 16.7084 17.3078 17.8296 15.9247 17.8296C14.5417 17.8296 13.4205 16.7084 13.4205 15.3254Z" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1634 2.10855C13.3938 2.10855 11.9592 3.54311 11.9592 5.3127C11.9592 6.71048 10.4461 7.58408 9.23561 6.88521C7.7031 6.00041 5.74348 6.52549 4.85868 8.058L4.09778 9.37592C3.21298 10.9084 3.73806 12.8681 5.27058 13.7529C6.48109 14.4518 6.48109 16.199 5.27058 16.8979C3.73806 17.7827 3.21298 19.7423 4.09778 21.2748L4.85868 22.5928C5.74348 24.1253 7.7031 24.6504 9.23561 23.7656C10.4461 23.0667 11.9592 23.9403 11.9592 25.338C11.9592 27.1076 13.3938 28.5422 15.1634 28.5422H16.6852C18.4548 28.5422 19.8893 27.1076 19.8893 25.338C19.8893 23.9403 21.4025 23.0666 22.613 23.7655C24.1455 24.6503 26.1052 24.1253 26.99 22.5927L27.7509 21.2748C28.6357 19.7423 28.1106 17.7827 26.5781 16.8979C25.3676 16.199 25.3676 14.4518 26.5781 13.7529C28.1106 12.8681 28.6357 10.9084 27.7509 9.37592L26.99 8.05803C26.1052 6.52549 24.1455 6.00042 22.613 6.88522C21.4025 7.58412 19.8893 6.7105 19.8893 5.31271C19.8893 3.5431 18.4548 2.10855 16.6852 2.10855H15.1634ZM14.6026 5.3127C14.6026 5.00299 14.8537 4.75192 15.1634 4.75192H16.6852C16.9949 4.75192 17.246 5.00299 17.246 5.31271C17.246 8.74538 20.9619 10.8908 23.9347 9.17444C24.2029 9.01958 24.5459 9.11149 24.7008 9.37971L25.4617 10.6976C25.6165 10.9658 25.5246 11.3088 25.2564 11.4637C22.2836 13.18 22.2836 17.4708 25.2564 19.1871C25.5246 19.342 25.6165 19.6849 25.4617 19.9532L24.7008 21.271C24.5459 21.5393 24.2029 21.6312 23.9347 21.4763C20.9619 19.76 17.246 21.9054 17.246 25.338C17.246 25.6478 16.9949 25.8988 16.6852 25.8988H15.1634C14.8537 25.8988 14.6026 25.6478 14.6026 25.338C14.6026 21.9054 10.8867 19.76 7.91393 21.4763C7.64572 21.6312 7.30275 21.5393 7.1479 21.2711L6.387 19.9532C6.23214 19.6849 6.32404 19.342 6.59226 19.1871C9.56502 17.4708 9.56502 13.18 6.59226 11.4637C6.32404 11.3088 6.23214 10.9658 6.387 10.6976L7.1479 9.37968C7.30275 9.11147 7.64572 9.01957 7.91393 9.17443C10.8867 10.8907 14.6026 8.74531 14.6026 5.3127Z" fill="white" />
                                </svg>
                                </svg>
                            </span>
                        </li>
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="showContent('privacy')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                                <path d="M3.45801 21.9277V4.69135C3.45801 4.07974 3.95842 3.57933 4.57003 3.57933H22.3624C22.974 3.57933 23.4744 4.07974 23.4744 4.69135V18.0356C23.4744 18.6472 22.974 19.1476 22.3624 19.1476H6.23806L3.45801 21.9277Z" stroke="white" stroke-width="2.22405" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.01855 8.02742H17.9147" stroke="white" stroke-width="2.22405" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.01855 11.3635H17.9147" stroke="white" stroke-width="2.22405" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.01855 14.6996H13.4666" stroke="white" stroke-width="2.22405" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- Hamburger button -->
        <!-- <div class="hamburger md:hidden fixed top-4 left-4 cursor-pointer z-30 bg-gray-700 p-2 rounded-lg ">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.75C0 3.55109 0.0790176 3.36032 0.21967 3.21967C0.360322 3.07902 0.551088 3 0.75 3H15.25C15.4489 3 15.6397 3.07902 15.7803 3.21967C15.921 3.36032 16 3.55109 16 3.75C16 3.94891 15.921 4.13968 15.7803 4.28033C15.6397 4.42098 15.4489 4.5 15.25 4.5H0.75C0.551088 4.5 0.360322 4.42098 0.21967 4.28033C0.0790176 4.13968 0 3.94891 0 3.75ZM0 8C0 7.80109 0.0790176 7.61032 0.21967 7.46967C0.360322 7.32902 0.551088 7.25 0.75 7.25H15.25C15.4489 7.25 15.6397 7.32902 15.7803 7.46967C15.921 7.61032 16 7.80109 16 8C16 8.19891 15.921 8.38968 15.7803 8.53033C15.6397 8.67098 15.4489 8.75 15.25 8.75H0.75C0.551088 8.75 0.360322 8.67098 0.21967 8.53033C0.0790176 8.38968 0 8.19891 0 8ZM0.75 11.5C0.551088 11.5 0.360322 11.579 0.21967 11.7197C0.0790176 11.8603 0 12.0511 0 12.25C0 12.4489 0.0790176 12.6397 0.21967 12.7803C0.360322 12.921 0.551088 13 0.75 13H15.25C15.4489 13 15.6397 12.921 15.7803 12.7803C15.921 12.6397 16 12.4489 16 12.25C16 12.0511 15.921 11.8603 15.7803 11.7197C15.6397 11.579 15.4489 11.5 15.25 11.5H0.75Z" fill="white" />
            </svg>
        </div> -->




        <div class="rounded-none w-1/6" style="background-color: #1B1F23;" aria-label="Chat profiles">
            <section class="pt-2.5 w-full bg-[#18181B] pb-[35rem] shadow-[0px_4px_4px_rgba(0,0,0,0.25)]">
                <div class="flex flex-col pl-1.5 w-full">
                    <ul class="flex list-none p-0 m-0 overflow-y-auto h-screen scrollbar-hide w-full"> <!-- Added classes for scrolling -->
                        <li class="flex flex-col md:flex-row w-full">
                            <div class="flex flex-col gap-3.5 w-full">
                                <div class="flex items-center  hover:bg-gray-800 transition duration-300 p-2 rounded w-full">
                                    <img
                                        loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/b917abc0a25da1dbd3e8c9d9d7b222c11636ee71ba3f566062297f5e7a5e271e?placeholderIfAbsent=true"
                                        alt="Profile picture of Daivd"
                                        class="object-contain rounded-full aspect-square w-10 md:w-12" />
                                    <div class="flex flex-col ml-2">
                                        <h2 class="text-xl font-black text-white">Daivd</h2>
                                        <p class="self-start text-sm text-[#D6D3D1]">davi_23</p>
                                    </div>
                                </div>
                                <div class="flex items-center  hover:bg-gray-800 transition duration-300 p-2 rounded w-full">
                                    <img
                                        loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/b917abc0a25da1dbd3e8c9d9d7b222c11636ee71ba3f566062297f5e7a5e271e?placeholderIfAbsent=true"
                                        alt="Profile picture of Daivd"
                                        class="object-contain rounded-full aspect-square w-10 md:w-12" />
                                    <div class="flex flex-col ml-2">
                                        <h2 class="text-xl font-black text-white">Daivd</h2>
                                        <p class="self-start text-sm text-[#D6D3D1]">davi_23</p>
                                    </div>
                                </div>


                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <main
            class="flex flex-col h-screen w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
            role="main"
            aria-label="Chat interface">

            <header class="flex flex-col pt-1.5 pl-2 w-full whitespace-nowrap rounded bg-zinc-800">
                <div style="background-color: #282B27;" class="flex gap-2 self-start w-full rounded-2xl">
                    <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/f4ae4fef877ac4cfe6540e096988883e270ff5e4d5137c05556e06acf0e83ee4"
                        class="object-contain shrink-0 rounded-full aspect-square w-20 hover:opacity-90 transition-opacity"
                        alt="Profile picture of kishan" />
                    <div class="flex flex-col self-start">
                        <h1 class="self-start text-xl font-black text-white hover:text-gray-100 transition-colors">kishan</h1>
                        <p class="mt-2.5 text-sm text-stone-300 hover:text-stone-200 transition-colors">kishan_234</p>
                    </div>
                </div>
                <div class="shrink-0 self-end max-w-full h-0.5 border-2 border-solid border-stone-600" role="separator"></div>
            </header>

            <section class="flex flex-col flex-grow gap-5 justify-between items-start text-black mt-4 overflow-y-auto" role="log" aria-label="Chat messages">
                <article
                    class="flex relative flex-col self-end px-4 pt-1.5 pb-4 mt-9 text-2xl rounded-none w-[8.5rem] hover:shadow-lg transition-shadow"
                    style="aspect-ratio: 3.513"
                    role="article">
                    <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/df653d7e198bf73f6f385c11b77eae35d1fcb978d14fe147721b6c276ef1c4df"
                        class="object-cover absolute inset-0 size-full"
                        alt="Message background" />
                    <p class="relative z-10 select-text">i am fine</p>
                </article>
                <article
                    class="flex relative flex-col self-start px-2.5 pt-1 pb-3.5 text-xl rounded-none w-[19.5rem] hover:shadow-lg transition-shadow"
                    style="aspect-ratio: 8.211"
                    role="article">
                    <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/7845e8fbb440c01ef97db44e71ecf4db27cd5010fd4dfcec249cd224b16fb6cc"
                        class="object-cover absolute inset-0 size-full"
                        alt="Message background" />
                    <p class="relative z-10 select-text">hey how are you kishan</p>
                </article>
            </section>

            <footer class="flex flex-wrap gap-5 justify-between pr-2 pl-5 mt-5 w-full text-3xl rounded-2xl bg-slate-800 text-neutral-400 hover:bg-slate-700 transition-colors" style="margin-top: auto;">
                <label for="chatInput" class="sr-only">Type your message</label>
                <input type="text" id="chatInput" placeholder="chat something here :)" class="bg-transparent border-none outline-none text-neutral-400 flex-grow placeholder-neutral -500 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg transition-all" aria-label="Chat input" />
                <button class="focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg p- 2 hover:bg-slate-600 active:bg-slate-500 transition-colors" aria-label="Send message">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/c3e6154a3da600d55c445f63e061c5553a94647426bce63cf0700b249e46f6d6" class="object-contain shrink-0 w-[4.4rem] hover:opacity-90 transition-opacity" style="aspect-ratio: 1.16" alt="Send button" />
                </button>
            </footer>
        </main>


        <!-- <main
            class="rounded-none w-full h-screen focus:outline-none focus:ring-2 focus:ring-blue-500 "
            role="main"
            aria-label="Chat interface">
            <header
                class="flex flex-col pt-1.5 pl-2 w-full whitespace-nowrap rounded bg-zinc-800">
                <div style="background-color: #282B27;" class="flex gap-2 self-start w-full rounded-2xl">
                    <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/f4ae4fef877ac4cfe6540e096988883e270ff5e4d5137c05556e06acf0e83ee4"
                        class="object-contain shrink-0 rounded-full aspect-square w-20 hover:opacity-90 transition-opacity"
                        alt="Profile picture of kishan" />
                    <div class="flex flex-col self-start">
                        <h1
                            class="self-start text-xl font-black text-white hover:text-gray-100 transition-colors">
                            kishan
                        </h1>
                        <p
                            class="mt-2.5 text-sm text-stone-300 hover:text-stone-200 transition-colors">
                            kishan_234
                        </p>
                    </div>
                </div>
                <div
                    class="shrink-0 self-end max-w-full h-0.5 border-2 border-solid border-stone-600"
                    role="separator"></div>
            </header>

            <section
                class="flex flex-wrap gap-5 justify-between items-start text-black mt-4"
                role="log"
                aria-label="Chat messages">
                <article
                    class="flex relative flex-col self-end px-4 pt-1.5 pb-4 mt-9 text-2xl rounded-none w-[8.5rem] hover:shadow-lg transition-shadow"
                    style="aspect-ratio: 3.513"
                    role="article">
                    <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/df653d7e198bf73f6f385c11b77eae35d1fcb978d14fe147721b6c276ef1c4df"
                        class="object-cover absolute inset-0 size-full"
                        alt="Message background" />
                    <p class="relative z-10 select-text">i am fine</p>
                </article>
                <article
                    class="flex relative flex-col self-start px-2.5 pt-1 pb-3.5 text-xl rounded-none w-[19.5rem] hover:shadow-lg transition-shadow"
                    style="aspect-ratio: 8.211"
                    role="article">
                    <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/7845e8fbb440c01ef97db44e71ecf4db27cd5010fd4dfcec249cd224b16fb6cc"
                        class="object-cover absolute inset-0 size-full"
                        alt="Message background" />
                    <p class="relative z-10 select-text">hey how are you kishan</p>
                </article>
            </section>

            
            <footer
                class="flex flex-wrap gap-5 justify-between pr-2 pl-5 mt-5 w-full text-3xl rounded-2xl bg-slate-800 text-neutral-400 hover:bg-slate-700 transition-colors sticky bottom-0">
                <label for="chatInput" class="sr-only">Type your message</label>
                <input
                    type="text"
                    id="chatInput"
                    placeholder="chat something here :)"
                    class="bg-transparent border-none outline-none text-neutral-400 flex-grow placeholder-neutral -500 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg transition-all"
                    aria-label="Chat input" />
                <button
                    class="focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg p-2 hover:bg-slate-600 active:bg-slate-500 transition-colors"
                    aria-label="Send message">
                    <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/c3e6154a3da600d55c445f63e061c5553a94647426bce63cf0700b249e46f6d6"
                        class="object-contain shrink-0 w-[4.4rem] hover:opacity-90 transition-opacity"
                        style="aspect-ratio: 1.16"
                        alt="Send button" />
                </button>
            </footer>
        </main> -->


    </div>

</body>

</html>