<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Student Activity</title>
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
include_once './side-nav-bar.php';
?>

<body class="bg-ghost-white">
  <div class="p-4 sm:ml-64 sm:mr-[22rem]">
    <div class="pt-4 pl-4 mt-14">
      <!-- Course/Activity Title -->
      <h1 class="font-bold text-4xl pb-6 text-corn-flower-blue mb-2">Software Engineering | Activity 1</h1>
      <!-- Instructions -->
      <div class="bg-lav-sant pt-6 pb-8 px-8 rounded-2xl">
        <h2 class="text-lg font-medium text-deep-koamaru mb-3">Instructions:</h2>
        <ul class="max-w-md space-y-1 text-sm text-deep-koamaru list-disc list-inside mb-4">
          <li>
            <span class="font-medium">Time:</span> Complete it within 30 minutes of starting.
          </li>
          <li>
            <span class="font-medium">Due Date:</span> Due by 11:59 PM on April 30, 2024
          </li>
          <li>
            <span class="font-medium">Number of Attempts:</span> You have only 1 attempt for this quiz.
          </li>
        </ul>
        <a href="">SE101-Activity-1.pdf</a>
      </div>
    </div>
  </div>
  <!-- Right Sidebar -->
  <aside id="logo-sidebar" class="fixed top-0 right-0 z-40 w-[22rem] h-screen pt-20 transition-transform -translate-x-full bg-ghost-white sm:translate-x-0 hidden sm:block" aria-label="Sidebar">
    <div class="h-full pt-2 pb-7 space-y-5 pl-1 pr-8 overflow-y-auto bg-ghost-white">
      <!-- Assignment card -->
      <div class="block max-w-sm p-8 bg-white rounded-2xl drop-shadows overflow-y-auto space-y-4">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-corn-flower-blue">Assignment</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, incidunt? Aliquid, provident distinctio ab quis inventore repudiandae aspernatur doloremque, asperiores eligendi quia quibusdam doloribus. Adipisci consectetur repellendus cupiditate iste necessitatibus?</p>
      </div>
      <!-- Add Comment card -->
      <div class="block max-w-sm p-8 bg-white rounded-2xl drop-shadows overflow-y-auto space-y-4">
        <h5 class="mb-2 text-lg font-medium tracking-tight text-corn-flower-blue">Add comment</h5>
      </div>
    </div>
  </aside>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
</body>

</html>