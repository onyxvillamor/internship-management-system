    <!-- sidenav -->
    <div class="bg-gray-100 w-[100px] md:w-[255px] px-2 md:px-6 py-4">
        <div class="flex flex-col justify-between h-full">
            <?php
            $currentUri = $_SERVER['REQUEST_URI'];
            if (urlIs('/admin') || strpos($currentUri, '/admin/') === 0): ?>
                <div>
                    <div class="mx-4 mb-6 flex flex-row items-center justify-center">
                        <img src="/views/img/TUP.png" class="w-[42px] h-[42px] mr-2" alt="">
                        <p class="hidden md:inline text-sm font-bold text-gray-700">TUPV SIT ADMIN</p>
                    </div>
                    <div class="border-b-2 border-gray-300 mx-auto my-4"></div>
                    <div class="ml-2 flex flex-col items-center md:items-start  md:pl-7">
                        <a href="/admin" class="flex items-center <?= urlIs('/admin') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fa-solid fa-gauge mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">Dashboard</span>
                        </a>

                        <a href="/admin/students" class="flex items-center <?= urlIs('/admin/students') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fa-solid fa-user mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">Students</span>
                        </a>

                        <a href="/admin/internships" class="flex items-center <?= urlIs('/admin/internships') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fas fa-briefcase mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">Internships</span>
                        </a>

                        <a href="/admin/applications" class="flex items-center <?= urlIs('/admin/applications') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fas fa-file-alt mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">Applications</span>
                        </a>

                        <a href="/admin/settings" class="flex items-center <?= urlIs('/admin/settings') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fas fa-cog mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">Settings</span>
                        </a>
                    </div>
                    <div class="border-b-2 border-gray-300 mx-4 my-4"></div>

                </div>


            <?php else: ?>
                <div>
                    <div class="mx-4 mb-6 flex flex-row items-center justify-center">
                        <img src="/views/img/TUP.png" class="w-[42px] h-[42px] mr-2" alt="">
                        <p class="hidden md:inline text-2xl font-bold text-gray-700">TUPV SIT</p>
                    </div>
                    <div class="border-b-2 border-gray-300 mx-auto my-4"></div>
                    <div class="ml-2 flex flex-col items-center md:items-start  md:pl-7">
                        <a href="/student" class="flex items-center <?= urlIs('/student') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fa-solid fa-gauge mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">Dashboard</span>
                        </a>

                        <a href="/student/profile" class="flex items-center <?= urlIs('/student/profile') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fa-solid fa-user mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">Student Profile</span>
                        </a>

                        <a href="/student/internship" class="flex items-center <?= urlIs('/student/internship') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fas fa-briefcase mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">Available Internships</span>
                        </a>

                        <a href="/student/applications" class="flex items-center <?= urlIs('/student/applications') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fas fa-file-alt mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">My Applications</span>
                        </a>

                        <a href="/student/notifications" class="flex items-center <?= urlIs('/student/notifications') ? "text-gray-700" : "text-gray-400"; ?> hover:text-gray-700 rounded-sm px-3 py-2 text-sm font-medium">
                            <i class="fas fa-envelope mr-3 text-2xl md:text-lg"></i>
                            <span class="hidden md:inline">Notifications</span>
                        </a>
                    </div>
                    <div class="border-b-2 border-gray-300 mx-4 my-4"></div>
                   
                </div>

            <?php endif ?>
            <div class="flex justify-center w-full">
                <a href="/logout" class="flex items-center bg-[#f44e3f] shadow-md hover:bg-[#EC4C3D]  hover:text-white rounded-md  w-max px-3 md:px-6 mx-2 py-3 md:py-2 text-sm font-medium">
                    <i class="inline fa-solid fa-right-from-bracket md:hidden"></i>
                    <span class="hidden text-white md:inline">LOGOUT</span>
                </a>
            </div>
        </div>


    </div>



    <div class=" flex-1">