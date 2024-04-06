<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Student Layout</title>
  <!-- Tailwind cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <!-- Flowbite cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <!-- Icon -->
  <link rel="icon" type="image/png" href="../../../assets/images/LMS-logo.png" />
  <!-- Css link -->
  <link rel="stylesheet" href="../../../assets/style.css">
</head>

<body class="bg-ghost-white">
  <!-- Top navigation -->
  <nav class="fixed top-0 z-50 w-full bg-lav-sant border-b border-lavender-blue">
    <div class="px-3 py-4 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <!-- Sidebar responsive -->
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
          </button>
          <a href="#" class="flex ms-2 md:me-24">
            <img src="../../../assets/images/LMS-logo.png" class="h-7 me-5" alt="LMS Logo" />
            <span class="self-center text-xl font-semibold sm:text-lg whitespace-nowrap text-corn-flower-blue">Learning Management System</span>
          </a>
        </div>
        <div class="flex items-center">
          <!-- Notication bell sample -->
          <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-deep-koamaru hover:text-neon-blue transition duration-300 ease-in-out focus:outline-none mr-3" type="button">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
              <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
            </svg>
            <div class="absolute block w-3 h-3 bg-red-500 border-2 border-lav-sant rounded-full -top-0.5 start-2.5"></div>
          </button>
          <!-- Dropdown menu ng notif bell-->
          <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-indigo-100 rounded-2xl drop-shadows" aria-labelledby="dropdownNotificationButton">
            <div class="block px-4 py-2 font-medium text-center text-deep-koamaru rounded-t-2xl bg-white">
              Notifications
            </div>
            <div class="divide-y divide-indigo-100">
              <a href="#" class="flex px-4 py-3 hover:bg-lav-sant transition duration-300 ease-in-out">
                <div class="flex-shrink-0">
                  <img class="w-11 h-auto rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-lime-600 border border-white rounded-full">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                    </svg>
                  </div>
                </div>
                <div class="w-full ps-3">
                  <div class="text-deep-koamaru text-sm mb-1.5">New task from <span class="font-bold text-deep-koamaru">Professor Manandeg</span>: "SE101 - Midterm Quiz 1"</div>
                  <div class="text-xs text-neon-blue">a few moments ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-lav-sant transition duration-300 ease-in-out">
                <div class="flex-shrink-0">
                  <img class="w-11 h-auto rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-lime-600 border border-white rounded-full">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                    </svg>
                  </div>
                </div>
                <div class="w-full ps-3">
                  <div class="text-deep-koamaru text-sm mb-1.5">New material from <span class="font-bold text-deep-koamaru">Professor Manandeg</span>: "SE101 - Midterm Week 3"</div>
                  <div class="text-xs text-neon-blue">10 minutes ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-lav-sant transition duration-300 ease-in-out">
                <div class="flex-shrink-0">
                  <img class="w-11 h-auto rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-lime-600 border border-white rounded-full">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                    </svg>
                  </div>
                </div>
                <div class="w-full ps-3">
                  <div class="text-deep-koamaru text-sm mb-1.5">New material from <span class="font-bold text-deep-koamaru">Professor Manandeg</span>: "SE101 - Midterm Week 2"</div>
                  <div class="text-xs text-neon-blue">44 minutes ago</div>
                </div>
              </a>
              <a href="#" class="flex px-4 py-3 hover:bg-lav-sant transition duration-300 ease-in-out">
                <div class="flex-shrink-0">
                  <img class="w-11 h-auto rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-lime-600 border border-white rounded-full">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                    </svg>
                  </div>
                </div>
                <div class="w-full ps-3">
                  <div class="text-deep-koamaru text-sm mb-1.5">New task from <span class="font-bold text-deep-koamaru">Professor Manandeg</span>: "SE101 - Midterm Activity 1"</div>
                  <div class="text-xs text-neon-blue">1 hour ago</div>
                </div>
              </a>
            </div>
            <a href="#" class="block py-2 text-sm font-medium text-center text-deep-koamaru rounded-b-2xl bg-white hover:bg-lav-sant hover:text-neon-blue transtion duration-300 ease-in-out">
              <div class="inline-flex items-center hover:text-neon-blue">
                <svg class="w-4 h-4 me-2 text-deep-koamaru hover:text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                  <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                </svg>
                View all
              </div>
            </a>
          </div>
          <div class="flex items-center ms-3">
            <div>
              <!-- Profile sa taas -->
              <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-corn-flower-blue hover:bg-neon-blue transition duration-300 ease-in-out rounded-full md:me-0 focus:ring-4 focus:ring-perano" type="button">
                <span class="sr-only">Open user menu</span>
                <svg class="w-6 h-6 text-lav-sant" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-2xl drop-shadows w-56">
                <div class="px-4 py-3 text-sm text-deep-koamaru flex flex-col justify-center items-center">
                  <img class="w-14 h-auto rounded-full mb-3" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                  <div class="font-medium">Juan Dela Cruz</div>
                  <div class="truncate">juan.dela.cruz@gmail.com</div>
                </div>
                <ul class="py-2 text-sm font-medium text-deep-koamaru text-center" aria-labelledby="dropdownUserAvatarButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Sign out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  </nav>
  <!-- Left Sidebar -->
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-lav-sant border-r border-lavender-blue sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-lav-sant">
      <ul class="space-y-2 font-medium">
        <li>
          <!-- Link -->
          <a href="#" class="flex items-center p-3 text-corn-flower-blue rounded-lg hover:bg-ghost-lavender group transition duration-300 ease-in-out hover:text-neon-blue">
            <svg class="w-5 h-5 text-corn-flower-blue group-hover:text-neon-blue transition duration-300 ease-in-out" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z" clip-rule="evenodd" />
            </svg>
            <span class="ms-3">Dashboard</span>
          </a>
        </li>
        <!-- Course dropdown -->
        <button type="button" class="flex items-center w-full p-3 text-base text-corn-flower-blue rounded-lg group hover:bg-ghost-lavender transition duration-300 ease-in-out hover:text-neon-blue" aria-controls="dropdown-example" data-collapse-toggle="dropdown-programs">
          <svg class="flex-shrink-0 w-5 h-5 text-corn-flower-blue transition duration-75 group-hover:text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
          </svg>
          <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-corn-flower-blue hover:text-neon-blue">Courses</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <ul id="dropdown-programs" class="hidden py-2 space-y-2">
          <li>
            <a href="#" data-popover-target="first-subject" data-popover-placement="right" type="button" class="flex items-center w-full p-2 text-corn-flower-blue transition duration-300 ease-in-out rounded-lg pl-11 group hover:bg-ghost-lavender hover:text-neon-blue">SE101</a>
            <!-- Course overview popover -->
            <div data-popover id="first-subject" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-deep-koamaru transition-opacity duration-300 bg-white border border-quartz rounded-lg shadow-sm opacity-0">
              <div class="px-3 py-2 bg-ghost-white border-b border-quartz rounded-t-lg">
                <h3 class="font-bold text-deep-koamaru">Title: Software Engineering</h3>
              </div>
              <div class="px-3 py-2 space-y-2">
                <span class="block">
                  <span class="font-bold">Professor:</span>
                  <span>Mary Ann Manandeg</span>
                </span>
                <span class="block">
                  <span class="font-bold">Section:</span>
                  <span>SBIT-2A</span>
                </span>
                <span class="block">
                  <span class="font-bold">Description:</span>
                  <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure voluptas neque molestiae quibusdam aspernatur esse libero magnam mollitia quod, consequuntur facere soluta obcaecati eveniet voluptatem cumque.</span>
                </span>
                <a href="" target="_blank" class="flex items-center font-medium text-neon-blue hover:underline">View Subject <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                  </svg></a>
              </div>
              <div data-popper-arrow></div>
            </div>
          </li>
          <li>
            <a href="#" data-popover-target="second-subject" data-popover-placement="right" type="button" class="flex items-center w-full p-2 text-corn-flower-blue transition duration-300 ease-in-out rounded-lg pl-11 group hover:bg-ghost-lavender hover:text-neon-blue">IPT101</a>
            <!-- Course overview popover -->
            <div data-popover id="second-subject" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-deep-koamaru transition-opacity duration-300 bg-white border border-quartz rounded-lg shadow-sm opacity-0">
              <div class="px-3 py-2 bg-ghost-white border-b border-quartz rounded-t-lg">
                <h3 class="font-bold text-deep-koamaru">Title: Integrative Programming and Technologies 1</h3>
              </div>
              <div class="px-3 py-2 space-y-2">
                <span class="block">
                  <span class="font-bold">Professor:</span>
                  <span>Chrisitan Escoto</span>
                </span>
                <span class="block">
                  <span class="font-bold">Section:</span>
                  <span>SBIT-2A</span>
                </span>
                <span class="block">
                  <span class="font-bold">Description:</span>
                  <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure voluptas neque molestiae quibusdam aspernatur esse libero magnam mollitia quod, consequuntur facere soluta obcaecati eveniet voluptatem cumque.</span>
                </span>
                <a href="" target="_blank" class="flex items-center font-medium text-neon-blue hover:underline">View Subject <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                  </svg></a>
              </div>
              <div data-popper-arrow></div>
            </div>
          </li>
          <li>
            <a href="#" data-popover-target="third-subject" data-popover-placement="right" type="button" class="flex items-center w-full p-2 text-corn-flower-blue transition duration-300 ease-in-out rounded-lg pl-11 group hover:bg-ghost-lavender hover:text-neon-blue">IM101</a>
            <!-- Course overview popover -->
            <div data-popover id="third-subject" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-deep-koamaru transition-opacity duration-300 bg-white border border-quartz rounded-lg shadow-sm opacity-0">
              <div class="px-3 py-2 bg-ghost-white border-b border-quartz rounded-t-lg">
                <h3 class="font-bold text-deep-koamaru">Title: Advance Database Systems</h3>
              </div>
              <div class="px-3 py-2 space-y-2">
                <span class="block">
                  <span class="font-bold">Professor:</span>
                  <span>Zharina Pascual</span>
                </span>
                <span class="block">
                  <span class="font-bold">Section:</span>
                  <span>SBIT-2A</span>
                </span>
                <span class="block">
                  <span class="font-bold">Description:</span>
                  <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure voluptas neque molestiae quibusdam aspernatur esse libero magnam mollitia quod, consequuntur facere soluta obcaecati eveniet voluptatem cumque.</span>
                </span>
                <a href="" target="_blank" class="flex items-center font-medium text-neon-blue hover:underline">View Subject <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                  </svg></a>
              </div>
              <div data-popper-arrow></div>
            </div>
          </li>
          <li>
            <a href="#" data-popover-target="fourth-subject" data-popover-placement="right" type="button" class="flex items-center w-full p-2 text-corn-flower-blue transition duration-300 ease-in-out rounded-lg pl-11 group hover:bg-ghost-lavender hover:text-neon-blue">MS102</a>
            <!-- Course overview popover -->
            <div data-popover id="fourth-subject" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-deep-koamaru transition-opacity duration-300 bg-white border border-quartz rounded-lg shadow-sm opacity-0">
              <div class="px-3 py-2 bg-ghost-white border-b border-quartz rounded-t-lg">
                <h3 class="font-bold text-deep-koamaru">Title: Quantitative Methods</h3>
              </div>
              <div class="px-3 py-2 space-y-1">
                <span class="block">
                  <span class="font-bold">Professor:</span>
                  <span>Luisito Soriano</span>
                </span>
                <span class="block">
                  <span class="font-bold">Section:</span>
                  <span>SBIT-3G</span>
                </span>
                <span class="block">
                  <span class="font-bold">Description:</span>
                  <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure voluptas neque molestiae quibusdam aspernatur esse libero magnam mollitia quod, consequuntur facere soluta obcaecati eveniet voluptatem cumque.</span>
                </span>
                <a href="" target="_blank" class="flex items-center font-medium text-neon-blue hover:underline">View Subject <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                  </svg></a>
              </div>
              <div data-popper-arrow></div>
            </div>
          </li>

        </ul>
      </ul>
    </div>
  </aside>
  <!-- Right Sidebar -->
  <aside id="logo-sidebar" class="fixed top-0 right-0 z-40 w-72 h-screen pt-20 transition-transform -translate-x-full bg-ghost-white sm:translate-x-0 hidden sm:block" aria-label="Sidebar">
    <div class="h-full pt-2 pb-7 gap-5 pl-1 pr-8 overflow-y-auto bg-ghost-white grid grid-rows-2">
      <!-- Announcement card -->
      <div class="block max-w-sm p-6 bg-white rounded-2xl drop-shadows row-span-1 overflow-y-auto space-y-4">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-corn-flower-blue">Announcements</h5>
        <p class="font-normal text-deep-koamaru">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, dolores. Recusandae consequatur explicabo quibusdam dolore hic accusantium fuga tempore rerum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam pariatur voluptates velit, architecto quia obcaecati expedita esse ea enim rem laborum incidunt at consequatur blanditiis repudiandae! Itaque libero eum enim?</p>
      </div>
      <!-- Todo card -->
      <div class="block max-w-sm p-6 bg-white rounded-2xl drop-shadows row-span-1 overflow-y-auto">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-corn-flower-blue">To-do</h5>
        <div class="max-w-md space-y-1 text-deep-koamaru list-inside">
          <a href="#" class="flex items-center">
            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            SE101 - Activity 1
          </a>
          <li class="flex items-center">
            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            SE101 - Activity 2
          </li>
          <li class="flex items-center">
            <svg class="w-3.5 h-3.5 me-2 text-gray-500 dark:text-gray-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            IPT101 - Activit 1
          </li>
        </div>
      </div>
    </div>
  </aside>
  <script>
    // JS for state persistence of dropdown in sidebar
    document.addEventListener("DOMContentLoaded", function() {
      const dropdownButtons = document.querySelectorAll('[data-collapse-toggle]');

      // Check and set the initial state based on localStorage
      dropdownButtons.forEach((button) => {
        const dropdownId = button.getAttribute('data-collapse-toggle');
        const dropdown = document.getElementById(dropdownId);

        const isDropdownOpen = localStorage.getItem(dropdownId) === 'true';

        if (isDropdownOpen) {
          dropdown.classList.remove('hidden');
        }
      });

      // Toggle dropdown visibility and store the state in localStorage
      dropdownButtons.forEach((button) => {
        button.addEventListener('click', function() {
          const dropdownId = this.getAttribute('data-collapse-toggle');
          const dropdown = document.getElementById(dropdownId);

          dropdown.classList.toggle('hidden');

          const isDropdownOpen = !dropdown.classList.contains('hidden');
          localStorage.setItem(dropdownId, isDropdownOpen.toString());
        });
      });
    });
  </script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
</body>

</html>