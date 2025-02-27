<?php include_once "../header.php" ?>
<link rel="stylesheet" href="../../../public/css/setting.css">
</head>
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<body class="bg-gray-900 text-white">

    <!-- Top Bar for smaller screens -->
    <div class="md:hidden fixed top-0 left-0 right-0 bg-gray-800 z-30 p-2 flex justify-between items-center">
        <button onclick="toggleSidebar()" class="text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
        <span class="text-white text-lg font-bold">Chat App</span>
    </div>

    <div class="flex flex-col sm:flex-row h-screen pt-12 md:pt-0">
        <!-- Left side bar -->
        <div id="sidebar" class="sidebar bg-gray-800 sticky top-0 z-20 rounded-lg hidden md:block">
            <div class="flex flex-col h-screen">
                <div class="flex items-center bg-gray-700 rounded-lg p-2 mb-4 cursor-pointer hover:bg-gray-600" onclick="window.location.href='../home/index.php'">
                    <span class="mr-2">
                        <!-- Home Icon SVG -->
                    </span>
                </div>
                <div class="tab max-w-xs overflow-hidden">
                    <ul class="flex flex-col items-center space-y-1 list-none p-0 m-0">
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="window.location.href=''">
                            <span class="mr-2">
                                <!-- Search Icon SVG -->
                            </span>
                        </li>
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="window.location.href='../settings/index.php'">
                            <span class="mr-2">
                                <!-- Settings Icon SVG -->
                            </span>
                        </li>
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="showContent('privacy')">
                            <!-- Privacy Icon SVG -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Profile Feed -->
        <div id="profileFeed" class="rounded-none w-full md:w-1/6 bg-[#1B1F23]">
            <section class="pt-2.5 w-full bg-[#18181B] pb-[35rem] shadow-[0px_4px_4px_rgba(0,0,0,0.25)]">
                <div class="flex flex-col pl-1.5 w-full">
                    <ul class="flex list-none p-0 m-0 overflow-y-auto h-screen scrollbar-hide w-full">
                        <li class="flex flex-col md:flex-row w-full">
                            <div class="flex flex-col gap-3.5 w-full">
                                <div class="flex items-center hover:bg-gray-800 transition duration-300 p-2 rounded w-full">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/b917abc0a25da1dbd3e8c9d9d7b222c11636ee71ba3f566062297f5e7a5e271e?placeholderIfAbsent=true" alt="Profile picture of Daivd" class="object-contain rounded-full aspect-square w-10 md:w-12" />
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

        <!-- Chat Area -->
        <main id="chatArea" class="flex flex-col h-screen w-full md:w-5/6 focus:outline-none focus:ring-2 focus:ring-blue-500" role="main" aria-label="Chat interface">
            <header class="flex flex-col pt-1.5 pl-2 w-full whitespace-nowrap rounded bg-zinc-800">
                <div style="background-color: #282B27;" class="flex gap-2 self-start w-full rounded-2xl">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/bd2f17561c9249ef9149481515aca2d2/f4ae4fef877ac4cfe6540e096988883e270ff5e4d5137c05556e06acf0e83ee4" class="object-contain shrink-0 rounded-full aspect-square w-20 hover:opacity-90 transition-opacity" alt="Profile picture of kishan" />
                    <div class="flex flex-col self-start">
                        <h1 class="self-start text-xl font-black text-white hover:text-gray-100 transition-colors">kishan</h1>
                        <p class="mt-2.5 text-sm text-stone-300 hover:text-stone-200 transition-colors">kishan_234</p>
                    </div>
                </div>
                <div class="shrink-0 self-end max-w-full h-0.5 border-2 border-solid border-stone-600" role="separator"></div>
            </header>

            <!-- Chat Section -->
            <section class="flex flex-col flex-grow gap-5 justify-end items-start text-black mt-4 overflow-y-auto" role="log" aria-label="Chat messages">
                <ul class="list-none p-0 m-0 w-full">
                    <li class="flex justify-start mb-2">
                        <div class="bg-blue-500 text-white p-3 rounded-lg max-w-xs">
                            <p class="select-text">Hey, shu kar chho </p>
                        </div>
                    </li>
                    <li class="flex justify-end mb-2">
                        <div class="bg-green-500 text-white p-3 rounded-lg max-w-xs">
                            <p class="select-text">nothing . </p>
                        </div>
                    </li>
                    <li class="flex justify-start mb-2">
                        <div class="bg-blue-500 text-white p-3 rounded-lg max-w-xs">
                            <p class="select-text">this is last message</p>
                        </div>
                    </li>
                </ul>
            </section>

            <footer class="flex flex-wrap gap-5 justify-between pr-2 pl-5 mt-5 w-full text-3xl rounded-2xl bg-slate-800 text-neutral-400 hover:bg-slate-700 transition-colors" style="margin-top: auto;">
                <label for="chatInput" class="sr-only">Type your message</label>
                <input type="text" id="chatInput" placeholder="chat something here :)" class="bg-transparent border-none outline-none text-neutral-400 flex-grow placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg transition-all" aria-label="Chat input" />
                <button class="focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg p-2 hover:bg-slate-600 active:bg-slate-500 transition-colors" aria-label="Send message">
                    <img loading="lazy" src="../../../public/images/chat/send.svg" class="object-contain shrink-0 w-[4.4rem] hover:opacity-90 transition-opacity" style="aspect-ratio: 1.16" alt="Send button" />
                </button>
            </footer>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden');
        }

        function toggleChatArea() {
            const chatArea = document.getElementById('chatArea');
            const profileFeed = document.getElementById('profileFeed');
            chatArea.classList.toggle('hidden');
            profileFeed.classList.toggle('hidden');
        }
    </script>

</body>

</html>