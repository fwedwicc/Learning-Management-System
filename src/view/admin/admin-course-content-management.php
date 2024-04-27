<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Course Content Management</title>
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
      <!-- Title -->
      <div class="flex items-center justify-start">
        <span class="gap-4 inline-flex justify-center items-center">
          <h1 class="font-bold text-4xl text-corn-flower-blue">BSIT | <span>Software Engineering</span></h1>
          <span class="inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Year 2nd Semester
          </span>
        </span>
      </div>
      <!-- Add Content Button -->
      <div class="flex justify-end">
        <button class="inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-neon-blue text-white font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano mt-12">
          <svg class="w-5 h-5 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          Add Content
        </button>
      </div>
      <!-- Main content -->
      <div class="flex items-center justify-center flex-grow border border-black border-solid mt-8">
        <div class="grid grid-cols-8">
          <div class="col-span-2 bg-white p-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nulla iusto corrupti, deleniti est facere reiciendis tempore qui tenetur voluptates amet voluptatibus tempora voluptas soluta fuga ducimus exercitationem illo quisquam?</div>
          <div class="col-span-6 bg-white p-6 max-h-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nostrum ipsa magni esse quidem earum saepe at eos, voluptatibus, iure assumenda natus cupiditate ea maiores, aliquam aspernatur omnis officia. Optio.</div>
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