<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Student Dashboard</title>
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
<!-- Student side/navigation bar -->
<?php
include_once './side-nav-calendar.php';
?>

<body class="bg-ghost-white">
  <div class="p-4 sm:ml-64 sm:mr-[22rem]">
    <div class="pt-4 pl-4 mt-14">
      <!-- General Announcement Container -->
      <div class="block rounded-2xl border border-purple-blue overflow-y-auto space-y-4">
        <span class="border-purple-blue border-b border-solid block bg-ghost-lavender flex items-center py-4 pl-7 gap-2.5">
          <svg class="w-6 h-6 text-corn-flower-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M18.458 3.11A1 1 0 0 1 19 4v16a1 1 0 0 1-1.581.814L12 16.944V7.056l5.419-3.87a1 1 0 0 1 1.039-.076ZM22 12c0 1.48-.804 2.773-2 3.465v-6.93c1.196.692 2 1.984 2 3.465ZM10 8H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6V8Zm0 9H5v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3Z" clip-rule="evenodd" />
          </svg>
          <h5 class="text-xl font-medium text-corn-flower-blue">General Announcements</h5>
        </span>
        <p class="font-normal text-deep-koamaru px-8 pt-1 pb-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, dolores. Recusandae consequatur explicabo quibusdam dolore hic accusantium fuga tempore rerum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam pariatur voluptates velit, architecto quia obcaecati expedita esse ea enim rem laborum incidunt at consequatur blanditiis repudiandae! Itaque libero eum enim?</p>
      </div>
      <!--  Enrolled Course -->
      <h1 class="font-bold text-4xl pb-6 text-corn-flower-blue mt-8 mb-2">Enrolled Courses</h1>
      <div class="grid grid-cols-2 gap-5 mb-6">
        <!-- Course Card -->
        <a href="./student-course-overview.php" class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue">
          <div class="relative">
            <img src="../../../assets/images/course-card-illustration.png" class="rounded-xl" alt="">
            <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">SE101</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Software Engineering</h5>
          <span class="block">Mary Anne Manandeg</span>
          <span class="block">SBIT-2B</span>
          <!-- Semester Indicator -->
          <span class="mt-4 inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Semester
          </span>
        </a>
        <!-- Course Card -->
        <a href="#" class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue">
          <div class="relative">
            <img src="../../../assets/images/course-card-illustration.png" class="rounded-xl" alt="">
            <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">IPT101</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Intergative Programming Technologies 1</h5>
          <span class="block">Chrisitan Escoto</span>
          <span class="block">SBIT-2B</span>
          <!-- Semester Indicator -->
          <span class="mt-4 inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Semester
          </span>
        </a>
        <!-- Course Card -->
        <a href="#" class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue">
          <div class="relative">
            <img src="../../../assets/images/course-card-illustration.png" class="rounded-xl" alt="">
            <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">IM101</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Advanced Database</h5>
          <span class="block">Zharina Pascual</span>
          <span class="block">SBIT-2B</span>
          <!-- Semester Indicator -->
          <span class="mt-4 inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Semester
          </span>
        </a>
        <!-- Course Card -->
        <a href="#" class="relative block p-6 bg-white rounded-2xl hover:shadow-[15px_15px_30px_-3px_rgba(224,227,246)] transition duration-700 ease-in-out col-span-1 overflow-y-auto border-b-4 border-transparent hover:border-neon-blue">
          <div class="relative">
            <img src="../../../assets/images/course-card-illustration.png" class="rounded-xl" alt="">
            <h5 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mb-3 text-4xl font-bold tracking-tight text-white">MS101</h5>
          </div>
          <h5 class="mt-7 text-2xl font-medium tracking-tight text-corn-flower-blue">Quantitative Methods</h5>
          <span class="block">Luisito Soriano</span>
          <span class="block">SBIT-3G</span>
          <!-- Semester Indicator -->
          <span class="mt-4 inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Semester
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
</body>

</html>