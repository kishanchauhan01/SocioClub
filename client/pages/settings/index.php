<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <?php include '../../../public/css/bootstap.html' ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        /* 
        ! Sidebar classes
        */
        /* Custom styles for the hamburger menu */
        .hamburger {
            display: none;
        }

        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .sidebar {
                width: 40%;
                /* Adjust width for smaller screens */
            }
        }


        /* 
        ! security 
        */
        .toggle-circle {
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-900 text-white ">

    <div class="flex flex-col sm:flex-row h-screen">
        <!-- Left side bar -->
        <div class="sidebar bg-gray-800 w-1/3 md:w-1/5 lg:w-1/6 p-4 sticky top-0 z-20 rounded-lg hidden md:block  " id="sidebar">
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
                    <span class="text-lg">Home</span>
                </div>

                <div class="tab max-w-xs overflow-hidden">
                    <ul class="space-y-2 list-none p-0 m-0">
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="showContent('account')">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                                    <path d="M17.5002 5.83333C19.0473 5.83333 20.531 6.44791 21.625 7.54187C22.7189 8.63583 23.3335 10.1196 23.3335 11.6667C23.3335 13.2138 22.7189 14.6975 21.625 15.7915C20.531 16.8854 19.0473 17.5 17.5002 17.5C15.9531 17.5 14.4693 16.8854 13.3754 15.7915C12.2814 14.6975 11.6668 13.2138 11.6668 11.6667C11.6668 10.1196 12.2814 8.63583 13.3754 7.54187C14.4693 6.44791 15.9531 5.83333 17.5002 5.83333ZM17.5002 20.4167C23.946 20.4167 29.1668 23.0271 29.1668 26.25V29.1667H5.8335V26.25C5.8335 23.0271 11.0543 20.4167 17.5002 20.4167Z" fill="white" />
                                </svg>
                            </span>
                            <span>Account</span>
                        </li>
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="showContent('security')">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                    <path d="M7.25016 26.5833C6.58558 26.5833 6.01686 26.3469 5.544 25.874C5.07113 25.4012 4.8343 24.8321 4.8335 24.1667V12.0833C4.8335 11.4187 5.07033 10.85 5.544 10.3772C6.01766 9.9043 6.58639 9.66747 7.25016 9.66666H8.4585V7.25C8.4585 5.57847 9.04776 4.15384 10.2263 2.97612C11.4048 1.7984 12.8294 1.20913 14.5002 1.20833C16.1709 1.20752 17.5959 1.79679 18.7752 2.97612C19.9546 4.15545 20.5434 5.58008 20.5418 7.25V9.66666H21.7502C22.4147 9.66666 22.9839 9.9035 23.4575 10.3772C23.9312 10.8508 24.1676 11.4196 24.1668 12.0833V24.1667C24.1668 24.8312 23.9304 25.4004 23.4575 25.874C22.9847 26.3477 22.4156 26.5841 21.7502 26.5833H7.25016ZM14.5002 20.5417C15.1647 20.5417 15.7339 20.3052 16.2075 19.8324C16.6812 19.3595 16.9176 18.7904 16.9168 18.125C16.916 17.4596 16.6796 16.8909 16.2075 16.4188C15.7355 15.9468 15.1664 15.7099 14.5002 15.7083C13.834 15.7067 13.2652 15.9436 12.794 16.4188C12.3227 16.8941 12.0859 17.4628 12.0835 18.125C12.0811 18.7872 12.3179 19.3563 12.794 19.8324C13.2701 20.3085 13.8388 20.5449 14.5002 20.5417ZM10.8752 9.66666H18.1252V7.25C18.1252 6.24305 17.7727 5.38715 17.0679 4.68229C16.363 3.97743 15.5071 3.625 14.5002 3.625C13.4932 3.625 12.6373 3.97743 11.9325 4.68229C11.2276 5.38715 10.8752 6.24305 10.8752 7.25V9.66666Z" fill="white" />
                                </svg>
                            </span>
                            <span>Security</span>
                        </li>
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="showContent('privacy')">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                    <path d="M14.2947 10.875L18.1252 14.6933V14.5C18.1252 13.5386 17.7432 12.6166 17.0634 11.9367C16.3836 11.2569 15.4616 10.875 14.5002 10.875H14.2947ZM9.09891 11.8417L10.9718 13.7146C10.9114 13.9683 10.8752 14.2221 10.8752 14.5C10.8752 15.4614 11.2571 16.3834 11.9369 17.0633C12.6167 17.7431 13.5388 18.125 14.5002 18.125C14.766 18.125 15.0318 18.0888 15.2856 18.0283L17.1585 19.9012C16.3489 20.3 15.4547 20.5417 14.5002 20.5417C12.8978 20.5417 11.3611 19.9051 10.2281 18.7721C9.09503 17.6391 8.4585 16.1024 8.4585 14.5C8.4585 13.5454 8.70016 12.6513 9.09891 11.8417ZM2.41683 5.15958L5.17183 7.91458L5.71558 8.45833C3.72183 10.0292 2.151 12.0833 1.2085 14.5C3.29891 19.8046 8.4585 23.5625 14.5002 23.5625C16.3731 23.5625 18.1614 23.2 19.7927 22.5475L20.3122 23.055L23.8406 26.5833L25.3752 25.0487L3.95141 3.625M14.5002 8.45833C16.1025 8.45833 17.6392 9.09486 18.7723 10.2279C19.9053 11.3609 20.5418 12.8977 20.5418 14.5C20.5418 15.2733 20.3847 16.0225 20.1068 16.6992L23.6472 20.2396C25.4597 18.7292 26.9097 16.7475 27.7918 14.5C25.7014 9.19542 20.5418 5.4375 14.5002 5.4375C12.8085 5.4375 11.1893 5.73958 9.66683 6.28333L12.2889 8.88125C12.9777 8.61542 13.7147 8.45833 14.5002 8.45833Z" fill="white" />
                                </svg>
                            </span>
                            <span>Privacy</span>
                        </li>
                        <li class="flex items-center p-2 rounded-lg hover:bg-gray-600 cursor-pointer" onclick="showContent('about')">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                    <path d="M18.4168 21.25H15.5835V24.0833H18.4168M18.4168 9.91665H15.5835V18.4167H18.4168M17.0002 31.1667C15.1398 31.1667 13.2976 30.8002 11.5788 30.0883C9.86003 29.3763 8.29831 28.3328 6.98282 27.0173C4.32605 24.3606 2.8335 20.7572 2.8335 17C2.8335 13.2428 4.32605 9.63941 6.98282 6.98264C8.29831 5.66715 9.86003 4.62364 11.5788 3.91169C13.2976 3.19975 15.1398 2.83332 17.0002 2.83332C20.7574 2.83332 24.3607 4.32588 27.0175 6.98264C29.6743 9.63941 31.1668 13.2428 31.1668 17C31.1668 18.8604 30.8004 20.7026 30.0885 22.4213C29.3765 24.1401 28.333 25.7018 27.0175 27.0173C25.702 28.3328 24.1403 29.3763 22.4215 30.0883C20.7027 30.8002 18.8606 31.1667 17.0002 31.1667Z" fill="white" />
                                </svg>
                            </span>
                            <span>About Us</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Hamburger button -->
        <div class="hamburger md:hidden fixed top-4 left-4 cursor-pointer z-30 bg-gray-700 p-2 rounded-lg ">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.75C0 3.55109 0.0790176 3.36032 0.21967 3.21967C0.360322 3.07902 0.551088 3 0.75 3H15.25C15.4489 3 15.6397 3.07902 15.7803 3.21967C15.921 3.36032 16 3.55109 16 3.75C16 3.94891 15.921 4.13968 15.7803 4.28033C15.6397 4.42098 15.4489 4.5 15.25 4.5H0.75C0.551088 4.5 0.360322 4.42098 0.21967 4.28033C0.0790176 4.13968 0 3.94891 0 3.75ZM0 8C0 7.80109 0.0790176 7.61032 0.21967 7.46967C0.360322 7.32902 0.551088 7.25 0.75 7.25H15.25C15.4489 7.25 15.6397 7.32902 15.7803 7.46967C15.921 7.61032 16 7.80109 16 8C16 8.19891 15.921 8.38968 15.7803 8.53033C15.6397 8.67098 15.4489 8.75 15.25 8.75H0.75C0.551088 8.75 0.360322 8.67098 0.21967 8.53033C0.0790176 8.38968 0 8.19891 0 8ZM0.75 11.5C0.551088 11.5 0.360322 11.579 0.21967 11.7197C0.0790176 11.8603 0 12.0511 0 12.25C0 12.4489 0.0790176 12.6397 0.21967 12.7803C0.360322 12.921 0.551088 13 0.75 13H15.25C15.4489 13 15.6397 12.921 15.7803 12.7803C15.921 12.6397 16 12.4489 16 12.25C16 12.0511 15.921 11.8603 15.7803 11.7197C15.6397 11.579 15.4489 11.5 15.25 11.5H0.75Z" fill="white" />
            </svg>
        </div>




        <!-- Account settings start -->
        <div id="account" style="background-color:rgba(34, 25, 25, 0.63);" class="content-item absolute left-0 md:top-0 top-16 account flex-1 p-4 w-screen h-screen md:w-4/5 lg:w-5/6 md:ml-1/5 lg:ml-1/6 z-10 md:relative ">

            <div class="relative w-full h-1/5 bg-blue-600 rounded-lg mb-10" style="background-image: url('../../../public/images/homess/profile.jpeg'); background-size: cover; background-position: center;">
                <div class="absolute top-0 right-0 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="48" viewBox="0 0 116 38" fill="none">
                        <path d="M0 19C0 8.50659 8.50659 0 19 0H109C112.866 0 116 3.13401 116 7V31C116 34.866 112.866 38 109 38H7C3.13401 38 0 34.866 0 31V19Z" fill="#4E4E4E" fill-opacity="0.7" />
                        <path d="M22 31V26.75L35.2 13.575C35.4 13.3917 35.621 13.25 35.863 13.15C36.105 13.05 36.359 13 36.625 13C36.891 13 37.1493 13.05 37.4 13.15C37.6507 13.25 37.8673 13.4 38.05 13.6L39.425 15C39.625 15.1833 39.771 15.4 39.863 15.65C39.955 15.9 40.0007 16.15 40 16.4C40 16.6667 39.9543 16.921 39.863 17.163C39.7717 17.405 39.6257 17.6257 39.425 17.825L26.25 31H22ZM36.6 17.8L38 16.4L36.6 15L35.2 16.4L36.6 17.8Z" fill="white" />
                        <path d="M57.2538 28V11.0303H67.0975V12.4223H58.8033V18.8108H66.5755V20.2029H58.8033V26.608H67.2633V28H57.2538ZM75.3835 28.2652C74.3395 28.2652 73.4253 27.989 72.6409 27.4366C71.8565 26.8842 71.2433 26.1136 70.8014 25.1248C70.365 24.136 70.1468 22.9842 70.1468 21.6695C70.1468 20.3603 70.365 19.2141 70.8014 18.2308C71.2433 17.242 71.8592 16.4742 72.6491 15.9273C73.4391 15.3749 74.3588 15.0987 75.4084 15.0987C76.1817 15.0987 76.8253 15.2368 77.339 15.513C77.8527 15.7837 78.2643 16.1207 78.5736 16.5239C78.883 16.9272 79.1233 17.3194 79.2945 17.7005H79.4271V11.0303H80.9103V28H79.4685V25.6385H79.2945C79.1233 26.0252 78.8802 26.4229 78.5653 26.8317C78.2505 27.2349 77.8334 27.5747 77.3142 27.8509C76.8004 28.1271 76.1569 28.2652 75.3835 28.2652ZM75.5575 26.9145C76.3806 26.9145 77.0822 26.6908 77.6622 26.2434C78.2422 25.7904 78.6841 25.169 78.9879 24.379C79.2973 23.5836 79.4519 22.6721 79.4519 21.6446C79.4519 20.6282 79.3 19.7306 78.9962 18.9517C78.6924 18.1673 78.2505 17.5541 77.6705 17.1122C77.0904 16.6648 76.3861 16.4411 75.5575 16.4411C74.7068 16.4411 73.9887 16.6731 73.4032 17.1371C72.8232 17.5956 72.3812 18.217 72.0774 19.0014C71.7791 19.7858 71.63 20.6669 71.63 21.6446C71.63 22.6334 71.7819 23.5256 72.0857 24.321C72.3895 25.1165 72.8314 25.749 73.4115 26.2185C73.997 26.6825 74.7124 26.9145 75.5575 26.9145ZM85.1278 28V15.2727H86.611V28H85.1278ZM85.8819 13.0852C85.578 13.0852 85.3184 12.983 85.103 12.7786C84.8875 12.5687 84.7798 12.3174 84.7798 12.0246C84.7798 11.7318 84.8875 11.4833 85.103 11.2789C85.3184 11.069 85.578 10.964 85.8819 10.964C86.1857 10.964 86.4453 11.069 86.6607 11.2789C86.8762 11.4833 86.9839 11.7318 86.9839 12.0246C86.9839 12.3174 86.8762 12.5687 86.6607 12.7786C86.4453 12.983 86.1857 13.0852 85.8819 13.0852ZM95.5247 15.2727V16.5571H89.4511V15.2727H95.5247ZM91.3485 12.2235H92.8317V24.6773C92.8317 25.2076 92.9229 25.6247 93.1052 25.9285C93.2875 26.2268 93.525 26.4395 93.8178 26.5665C94.1105 26.6881 94.4226 26.7488 94.7541 26.7488C94.9474 26.7488 95.1131 26.7378 95.2512 26.7157C95.3893 26.6881 95.5109 26.6604 95.6158 26.6328L95.9307 27.9669C95.7871 28.0221 95.6103 28.0718 95.4004 28.116C95.1905 28.1657 94.9309 28.1906 94.6215 28.1906C94.0802 28.1906 93.5581 28.0718 93.0555 27.8343C92.5583 27.5967 92.1495 27.2432 91.8291 26.7737C91.5087 26.3041 91.3485 25.7214 91.3485 25.0253V12.2235Z" fill="white" />
                    </svg>
                </div>
                <div class="absolute left-12 md:left-20" style="bottom:-30%;">
                    <div class="relative">
                        <img src="../../../public/images/homess/profile.jpeg" alt="Profile Photo" class="md:w-32 md:h-32 w-24 h-24 rounded-full border-white" />
                        <div class="absolute bottom-0 left-16 mb-1 mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="48" viewBox="0 0 116 38" fill="none">
                                <path d="M0 19C0 8.50659 8.50659 0 19 0H109C112.866 0 116 3.13401 116 7V31C116 34.866 112.866 38 109 38H7C3.13401 38 0 34.866 0 31V19Z" fill="#4E4E4E" fill-opacity="0.7" />
                                <path d="M22 31V26.75L35.2 13.575C35.4 13.3917 35.621 13.25 35.863 13.15C36.105 13.05 36.359 13 36.625 13C36.891 13 37.1493 13.05 37.4 13.15C37.6507 13.25 37.8673 13.4 38.05 13.6L39.425 15C39.625 15.1833 39.771 15.4 39.863 15.65C39.955 15.9 40.0007 16.15 40 16.4C40 16.6667 39.9543 16.921 39.863 17.163C39.7717 17.405 39.6257 17.6257 39.425 17.825L26.25 31H22ZM36.6 17.8L38 16.4L36.6 15L35.2 16.4L36.6 17.8Z" fill="white" />
                                <path d="M57.2538 28V11.0303H67.0975V12.4223H58.8033V18.8108H66.5755V20.2029H58.8033V26.608H67.2633V28H57.2538ZM75.3835 28.2652C74.3395 28.2652 73.4253 27.989 72.6409 27.4366C71.8565 26.8842 71.2433 26.1136 70.8014 25.1248C70.365 24.136 70.1468 22.9842 70.1468 21.6695C70.1468 20.3603 70.365 19.2141 70.8014 18.2308C71.2433 17.242 71.8592 16.4742 72.6491 15.9273C73.4391 15.3749 74.3588 15.0987 75.4084 15.0987C76.1817 15.0987 76.8253 15.2368 77.339 15.513C77.8527 15.7837 78.2643 16.1207 78.5736 16.5239C78.883 16.9272 79.1233 17.3194 79.2945 17.7005H79.4271V11.0303H80.9103V28H79.4685V25.6385H79.2945C79.1233 26.0252 78.8802 26.4229 78.5653 26.8317C78.2505 27.2349 77.8334 27.5747 77.3142 27.8509C76.8004 28.1271 76.1569 28.2652 75.3835 28.2652ZM75.5575 26.9145C76.3806 26.9145 77.0822 26.6908 77.6622 26.2434C78.2422 25.7904 78.6841 25.169 78.9879 24.379C79.2973 23.5836 79.4519 22.6721 79.4519 21.6446C79.4519 20.6282 79.3 19.7306 78.9962 18.9517C78.6924 18.1673 78.2505 17.5541 77.6705 17.1122C77.0904 16.6648 76.3861 16.4411 75.5575 16.4411C74.7068 16.4411 73.9887 16.6731 73.4032 17.1371C72.8232 17.5956 72.3812 18.217 72.0774 19.0014C71.7791 19.7858 71.63 20.6669 71.63 21.6446C71.63 22.6334 71.7819 23.5256 72.0857 24.321C72.3895 25.1165 72.8314 25.749 73.4115 26.2185C73.997 26.6825 74.7124 26.9145 75.5575 26.9145ZM85.1278 28V15.2727H86.611V28H85.1278ZM85.8819 13.0852C85.578 13.0852 85.3184 12.983 85.103 12.7786C84.8875 12.5687 84.7798 12.3174 84.7798 12.0246C84.7798 11.7318 84.8875 11.4833 85.103 11.2789C85.3184 11.069 85.578 10.964 85.8819 10.964C86.1857 10.964 86.4453 11.069 86.6607 11.2789C86.8762 11.4833 86.9839 11.7318 86.9839 12.0246C86.9839 12.3174 86.8762 12.5687 86.6607 12.7786C86.4453 12.983 86.1857 13.0852 85.8819 13.0852ZM95.5247 15.2727V16.5571H89.4511V15.2727H95.5247ZM91.3485 12.2235H92.8317V24.6773C92.8317 25.2076 92.9229 25.6247 93.1052 25.9285C93.2875 26.2268 93.525 26.4395 93.8178 26.5665C94.1105 26.6881 94.4226 26.7488 94.7541 26.7488C94.9474 26.7488 95.1131 26.7378 95.2512 26.7157C95.3893 26.6881 95.5109 26.6604 95.6158 26.6328L95.9307 27.9669C95.7871 28.0221 95.6103 28.0718 95.4004 28.116C95.1905 28.1657 94.9309 28.1906 94.6215 28.1906C94.0802 28.1906 93.5581 28.0718 93.0555 27.8343C92.5583 27.5967 92.1495 27.2432 91.8291 26.7737C91.5087 26.3041 91.3485 25.7214 91.3485 25.0253V12.2235Z" fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fields">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-2">
                    <div class="flex flex-col gap-2">
                        <label for="firstName" class="text-white text-2xl">First Name</label>
                        <input type="text" name="firstName" id="first-name" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="lastName" class="text-white text-2xl">Last Name</label>
                        <input type="text" name="lastName" id="last-name" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-2 mt-1">
                    <div class="flex flex-col gap-2">
                        <label for="userName" class="text-white text-2xl">Thoughts</label>
                        <input type="text" name="userName" id="user-name" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="dob" class="text-white text-2xl">Date Of Birth</label>
                        <input type="date" name="dob" id="DOB" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                        <div class="invalid-feedback">
                            Please select DOB.
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-1 m-2">
                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-white text-2xl">Bios</label>
                        <input type="email" name="email" id="eamilId" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                        <div class="invalid-feedback">
                            Please enter an email.
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-2 mt-1 align-center">
                    <div class="flex flex-col gap-2">
                        <label for="password" class="text-white text-2xl">Username</label>
                        <input type="password" name="password" id="pswd" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                        <div class="invalid-feedback">
                            Please enter a password.
                        </div>
                    </div>
                    <div class="flex items-end mb-1">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 rounded w-1/4 font-bold" type="submit" style="background-color: #133149;">Change</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-2 mt-1">
                    <div class="flex flex-col gap-2">
                        <label for="password" class="text-white text-2xl">Email</label>
                        <input type="password" name="password" id="pswd" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                        <div class="invalid-feedback">
                            Please enter a password.
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="rePassword" class="text-white text-2xl">Password</label>
                        <input type="password" name="rePassword" id="rpswd" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                        <div class="invalid-feedback">
                            Please re-enter the password.
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex justify-center ">
                    <button class="bg-blue-500 hover:bg-blue-800 text-white py-2 rounded w-full md:w-1/4 text-2xl font-black" style="background-color:#D97E7E;">save changes</button>
                </div>
            </div>



        </div>

        <!-- Security setting start -->
        <div id="security" style="background-color:rgba(34, 25, 25, 0.63);" class="hidden content-item absolute left-0 md:top-0 top-16 account bg-gray-900 flex-1 p-4 w-screen h-screen md:w-4/5 lg:w-5/6 md:ml-1/5 lg:ml-1/6 z-10 md:relative ">
            <div class="grid grid-cols-1 ml-2 mt-3">
                <div class="flex flex-col gap-2">
                    <label for="email" class="text-white text-2xl">Email</label>
                    <input type="email" name="email" id="eamilId" class="bg-gray-900 text-white border border-gray-900 rounded-lg w-full p-2" required>
                    <div class="invalid-feedback">
                        Please enter an email.
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  ml-2 mt-3 align-center gap-2">
                <div class="flex flex-col gap-2 ">
                    <label for="password" class="text-white text-2xl">Password</label>
                    <input type="password" name="password" id="pswd" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                    <div class="invalid-feedback">
                        Please enter a password.
                    </div>
                </div>
                <div class="flex items-end mb-1 gap-4">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 rounded w-1/4 font-bold" type="submit" style="background-color:#D97E7E;">Show</button>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 rounded w-1/4 font-bold" type="submit" style="background-color:#133149;">Change</button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  ml-2 mt-3 align-center gap-2">
                <div class="flex flex-col gap-2">
                    <label for="password" class="text-white text-2xl">Mobile</label>
                    <input type="number" name="password" id="pswd" class="bg-gray-800 text-white border border-gray-900 rounded-lg w-full p-2" required>
                    <div class="invalid-feedback">
                        Please enter a password.
                    </div>
                </div>
                <div class="flex items-end mb-1">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 rounded w-1/4 font-bold" type="submit" style="background-color: #133149;">Change</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-4  ml-2 mt-4 align-center">
                <div class="flex flex-col gap-2">
                    <label for="password" class="text-white text-2xl">Two Step Verification</label>
                </div>
                <div class="flex items-end mb-1 gap-4">
                    <div class="flex items-center">
                        <span id="toggle-label" class="mr-2 text-gray-600">Off</span>
                        <div id="toggle" class="relative inline-flex items-center cursor-pointer w-14 h-8 rounded-full bg-gray-300">
                            <span class="absolute left-1 w-6 h-6 bg-white rounded-full shadow toggle-circle"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Privacy setting start -->
        <div id="privacy" style="background-color:rgba(34, 25, 25, 0.63);"  class="hidden content-item absolute left-0 md:top-0 top-16 account bg-gray-900 flex-1 p-4 w-screen h-screen md:w-4/5 lg:w-5/6 md:ml-1/5 lg:ml-1/6 z-10 md:relative ">
            <div class="grid grid-cols-1 md:grid-cols-5 sm:grid-cols-3 ml-2 mt-3 align-center gap-2">
                <div class="flex flex-col gap-2">
                    <label for="password" class="text-white text-2xl">Password</label>
                    <div class="flex gap-4  ">
                        <svg id="humanIcon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 29 29" fill="none" class="hidden">
                            <path d="M14.5002 4.83325C15.782 4.83325 17.0114 5.34248 17.9178 6.2489C18.8243 7.15533 19.3335 8.38471 19.3335 9.66659C19.3335 10.9485 18.8243 12.1778 17.9178 13.0843C17.0114 13.9907 15.782 14.4999 14.5002 14.4999C13.2183 14.4999 11.9889 13.9907 11.0825 13.0843C10.1761 12.1778 9.66683 10.9485 9.66683 9.66659C9.66683 8.38471 10.1761 7.15533 11.0825 6.2489C11.9889 5.34248 13.2183 4.83325 14.5002 4.83325ZM14.5002 16.9166C19.841 16.9166 24.1668 19.0795 24.1668 21.7499V24.1666H4.8335V21.7499C4.8335 19.0795 9.15933 16.9166 14.5002 16.9166Z" fill="white" />
                        </svg>
                        <svg id="lockIcon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32" fill="none" class="">
                            <path d="M8.82117 28C8.22828 28 7.72117 27.7889 7.29984 27.3667C6.8785 26.9444 6.66739 26.4382 6.6665 25.848V14.1547C6.6665 13.5627 6.87761 13.056 7.29984 12.6347C7.72206 12.2133 8.22873 12.0018 8.81984 12H10.6665V9.33333C10.6665 7.848 11.1843 6.588 12.2198 5.55333C13.2545 4.51778 14.5145 4 15.9998 4C17.4852 4 18.7456 4.51778 19.7812 5.55333C20.8167 6.58889 21.3341 7.84889 21.3332 9.33333V12H23.1798C23.7718 12 24.2785 12.2111 24.6998 12.6333C25.1212 13.0556 25.3323 13.5622 25.3332 14.1533V25.8467C25.3332 26.4387 25.1221 26.9453 24.6998 27.3667C24.2776 27.788 23.7709 27.9991 23.1798 28H8.82117ZM15.9998 22C16.5625 22 17.0363 21.8071 17.4212 21.4213C17.8069 21.0364 17.9998 20.5627 17.9998 20C17.9998 19.4373 17.8069 18.9636 17.4212 18.5787C17.0354 18.1938 16.5616 18.0009 15.9998 18C15.4381 17.9991 14.9643 18.192 14.5785 18.5787C14.1927 18.9636 13.9998 19.4373 13.9998 20C13.9998 20.5627 14.1927 21.0364 14.5785 21.4213C14.9634 21.8071 15.4372 22 15.9998 22ZM11.9998 12H19.9998V9.33333C19.9998 8.22222 19.6109 7.27778 18.8332 6.5C18.0554 5.72222 17.1109 5.33333 15.9998 5.33333C14.8887 5.33333 13.9443 5.72222 13.1665 6.5C12.3887 7.27778 11.9998 8.22222 11.9998 9.33333V12Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-end mb-1 gap-4">
                    <div class="relative w-64 h-9">
                        <div class="flex w-full h-full bg-gray-300 rounded-full">
                            <button class="flex-1 h-full text-black font-medium rounded-full transition duration-300 ease-in-out hover:bg-gray-400 focus:outline-none" onclick="selectOption('private')" id="privateButton">
                                Private
                            </button>
                            <button class="flex-1 h-full text-black font-medium rounded-full transition duration-300 ease-in-out hover:bg-gray-400 focus:outline-none bg-blue-500" onclick="selectOption('public')" id="publicButton">
                                Public
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About us -->
        <div id="about" style="background-color:rgba(34, 25, 25, 0.63);" class="hidden content-item absolute left-0 md:top-0 top-16 account bg-gray-900 flex-1 p-4 w-screen h-screen md:w-4/5 lg:w-5/6 md:ml-1/5 lg:ml-1/6 z-10 md:relative ">
            <h1>hi this is ansh</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam suscipit, odio labore hic sint omnis provident molestiae id nisi eaque vel in illum delectus quis doloribus voluptatem est deleniti eius totam libero non nam, esse fuga. Neque soluta veniam beatae.</p>
        </div>

    </div>

    <script>
        //! Side bar 
        const hamburger = document.querySelector('.hamburger');
        const sidebar = document.getElementById('sidebar');

        // Toggle sidebar visibility when hamburger is clicked
        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            if (!sidebar.classList.contains('hidden')) {
                hamburger.style.display = "none"; // Hide hamburger when sidebar is visible
            }
        });

        // Close sidebar when clicking outside of it
        document.addEventListener('click', (event) => {
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnHamburger = hamburger.contains(event.target);

            // If the click is outside the sidebar and not on the hamburger, hide the sidebar
            if (window.innerWidth < 768) { // Tailwind's 'md' breakpoint is 768px 
                if (!isClickInsideSidebar && !isClickOnHamburger) {
                    sidebar.classList.add('hidden'); // Hide the sidebar
                    hamburger.style.display = "block"; // Show the hamburger again
                }
            }
        });



        //! Security
        const toggle = document.getElementById('toggle');
        const toggleLabel = document.getElementById('toggle-label');
        let isOn = false;

        toggle.addEventListener('click', () => {
            isOn = !isOn;
            toggle.classList.toggle('bg-blue-600', isOn);
            toggle.classList.toggle('bg-gray-300', !isOn);
            toggleLabel.textContent = isOn ? 'On' : 'Off';
            const circle = toggle.querySelector('.toggle-circle');
            circle.style.transform = isOn ? 'translateX(100%)' : 'translateX(0)';
        });


        //! Privacy
        function selectOption(option) {
            const privateButton = document.getElementById('privateButton');
            const publicButton = document.getElementById('publicButton');
            const lockIcon = document.getElementById('lockIcon');
            const humanIcon = document.getElementById('humanIcon');

            if (option === 'private') {
                privateButton.classList.add('bg-blue-500', 'text-white');
                privateButton.classList.remove('hover:bg-gray-400');
                publicButton.classList.remove('bg-blue-500', 'text-white');
                publicButton.classList.add('hover:bg-gray-400');
                lockIcon.classList.remove('hidden');
                humanIcon.classList.add('hidden');
            } else {
                publicButton.classList.add('bg-blue-500', 'text-white');
                publicButton.classList.remove('hover:bg-gray-400');
                privateButton.classList.remove('bg-blue-500', 'text-white');
                privateButton.classList.add('hover:bg-gray-400');
                humanIcon.classList.remove('hidden');
                lockIcon.classList.add('hidden');
            }
        }

        // Set default selection to public
        selectOption('public');


        
        //! js for click and show  
        function showContent(section) {
            // Hide all content items
            const items = document.querySelectorAll('.content-item');
            items.forEach(item => {
                item.classList.add('hidden');
            });

            // Show the selected content item
            const selectedItem = document.getElementById(section);
            if (selectedItem) {
                selectedItem.classList.remove('hidden');
            }
        }
    </script>
</body>

</html>