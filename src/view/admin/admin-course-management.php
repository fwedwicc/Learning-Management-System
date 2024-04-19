<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Course Management</title>
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
<!-- Admin side/navigation bar -->
<?php
include_once './side-nav-bar.php';
?>

<body class="bg-ghost-white">
  <div class="p-4 sm:ml-64">
    <div class="pt-4 px-5 rounded-2xl mt-14">
      <div class="flex items-center justify-between">
        <span class="space-y-2">
          <h1 class="font-bold text-4xl text-corn-flower-blue">BS in Information Technology</h1>
          <h5 class="font-medium text-xl text-deep-koamaru">2nd Year, 2nd Semester</h5>
        </span>
        <!-- Back Button -->
        <a href="./admin-dashboard.php" type="button" class="inline-flex gap-1.5 items-center justify-center text-neon-blue focus:outline-none hover:bg-ghost-lavender focus:ring-4 focus:ring-deep-lav-blue font-medium rounded-md text-sm pl-5 pr-3 py-2.5 transition ease-in-out duration-300 hover:scale-105 cursor-pointer">
          Back
          <svg class="w-4 h-4 text-neon-blue mt-[0.2rem]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
          </svg>
        </a>
      </div>
      <button class="inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-neon-blue text-white font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano mt-12" target="_blank">
        <svg class="w-5 h-5 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        Add Course
      </button>
      <!-- Cards Man Container -->
      <div class="grid grid-cols-3 mt-12 gap-6">
        <!-- Course Card 1 -->
        <div class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue flex flex-col justify-between">
          <a href="#">
            <div class="relative">
              <img src="../../../assets/images/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration" draggable="false">
              <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">SE101</h5>
            </div>
            <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Software Engineering</h5>
            <!-- Semester Indicator -->
          </a>
          <div class="flex justify-between items-center mt-4">
            <span class="inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
              3 Units
            </span>
            <!-- Action Buttons -->
            <button type="button" id="dropdown-button-1" data-dropdown-toggle="dropdown-menu-1" data-dropdown-placement="right" class="text-deep-koamaru hover:bg-ghost-lavender hover:text-neon-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue focus:bg-ghost-lavender font-medium rounded-full text-sm p-2 text-center inline-flex items-center transition duration-300 ease-in-out">
              <svg class="w-7 h-7 text-deep-koamaru" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
              </svg>
              <span class="sr-only">Actions</span>
            </button>
          </div>
        </div>
        <!-- Dropdown Content for Course 1 -->
        <div id="dropdown-menu-1" class="z-10 hidden bg-white divide-y divide-indigo-100 rounded-lg drop-shadows w-auto">
          <ul class="py-2 text-sm text-deep-koamaru" aria-labelledby="dropdown-button-1">
            <li>
              <button class="w-full px-4 py-2 font-medium hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Edit Course</a>
              </button>
            </li>
            <li>
              <button class="w-full px-4 py-2 font-medium hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Delete Course</a>
              </button>
            </li>
          </ul>
        </div>
        <!-- Course Card 2 -->
        <div class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue flex flex-col justify-between">
          <a href="#">
            <div class="relative">
              <img src="../../../assets/images/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration" draggable="false">
              <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">HCI101</h5>
            </div>
            <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Introduction to Human Computer Interaction</h5>
            <!-- Semester Indicator -->
          </a>
          <div class="flex justify-between items-center mt-4">
            <span class="inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
              3 Units
            </span>
            <!-- Action Buttons -->
            <button type="button" id="dropdown-button-2" data-dropdown-toggle="dropdown-menu-2" data-dropdown-placement="right" class="text-deep-koamaru hover:bg-ghost-lavender hover:text-neon-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue focus:bg-ghost-lavender font-medium rounded-full text-sm p-2 text-center inline-flex items-center transition duration-300 ease-in-out">
              <svg class="w-7 h-7 text-deep-koamaru" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
              </svg>
              <span class="sr-only">Actions</span>
            </button>
          </div>
        </div>
        <!-- Dropdown Content for Course 2 -->
        <div id="dropdown-menu-2" class="z-10 hidden bg-white divide-y divide-indigo-100 rounded-lg drop-shadows w-auto">
          <ul class="py-2 text-sm text-deep-koamaru" aria-labelledby="dropdown-button-2">
            <li>
              <button class="w-full px-4 py-2 font-medium hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Edit Course</a>
              </button>
            </li>
            <li>
              <button class="w-full px-4 py-2 font-medium hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Delete Course</a>
              </button>
            </li>
          </ul>
        </div>
        <!-- Course Card 3 -->
        <div class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue flex flex-col justify-between">
          <a href="#">
            <div class="relative">
              <img src="../../../assets/images/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration" draggable="false">
              <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">IM101</h5>
            </div>
            <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Advanced Database Systems</h5>
            <!-- Semester Indicator -->
          </a>
          <div class="flex justify-between items-center mt-4">
            <span class="inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
              3 Units
            </span>
            <!-- Action Buttons -->
            <button type="button" id="dropdown-button-3" data-dropdown-toggle="dropdown-menu-3" data-dropdown-placement="right" class="text-deep-koamaru hover:bg-ghost-lavender hover:text-neon-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue focus:bg-ghost-lavender font-medium rounded-full text-sm p-2 text-center inline-flex items-center transition duration-300 ease-in-out">
              <svg class="w-7 h-7 text-deep-koamaru" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
              </svg>
              <span class="sr-only">Actions</span>
            </button>
          </div>
        </div>
        <!-- Dropdown Content for Course 3 -->
        <div id="dropdown-menu-3" class="z-10 hidden bg-white divide-y divide-indigo-100 rounded-lg drop-shadows w-auto">
          <ul class="py-2 text-sm text-deep-koamaru" aria-labelledby="dropdown-button-3">
            <li>
              <button class="w-full px-4 py-2 font-medium hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Edit Course</a>
              </button>
            </li>
            <li>
              <button class="w-full px-4 py-2 font-medium hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Delete Course</a>
              </button>
            </li>
          </ul>
        </div>
        <!-- Course Card 4 -->
        <div class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue flex flex-col justify-between">
          <a href="#">
            <div class="relative">
              <img src="../../../assets/images/course-card-illustration.png" class="rounded-xl w-full" alt="Course Card Illustration" draggable="false">
              <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">IPT101</h5>
            </div>
            <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Integrative Programmin and Technologies 1</h5>
            <!-- Semester Indicator -->
          </a>
          <div class="flex justify-between items-center mt-4">
            <span class="inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
              3 Units
            </span>
            <!-- Action Buttons -->
            <button type="button" id="dropdown-button-4" data-dropdown-toggle="dropdown-menu-4" data-dropdown-placement="right" class="text-deep-koamaru hover:bg-ghost-lavender hover:text-neon-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue focus:bg-ghost-lavender font-medium rounded-full text-sm p-2 text-center inline-flex items-center transition duration-300 ease-in-out">
              <svg class="w-7 h-7 text-deep-koamaru" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
              </svg>
              <span class="sr-only">Actions</span>
            </button>
          </div>
        </div>
        <!-- Dropdown Content for Course 4 -->
        <div id="dropdown-menu-4" class="z-10 hidden bg-white divide-y divide-indigo-100 rounded-lg drop-shadows w-auto">
          <ul class="py-2 text-sm text-deep-koamaru" aria-labelledby="dropdown-button-4">
            <li>
              <button class="w-full px-4 py-2 font-medium hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Edit Course</a>
              </button>
            </li>
            <li>
              <button class="w-full px-4 py-2 font-medium hover:bg-ghost-white hover:text-neon-blue transtion duration-300 ease-in-out">Delete Course</a>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
</body>

</html>