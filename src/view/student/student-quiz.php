<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Quiz</title>
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
  <div class="p-4 sm:ml-64 h-screen flex flex-col">
    <div class="pt-4 px-5 mt-14 flex-grow flex flex-col">
      <div class="flex items-center justify-between">
        <h1 class="font-bold text-4xl text-corn-flower-blue">Software Engineering</h1>
        <!-- Back Button -->
        <a href="./student-course-overview.php" type="button" class="inline-flex gap-1.5 items-center justify-center text-neon-blue focus:outline-none hover:bg-ghost-lavender focus:ring-4 focus:ring-deep-lav-blue font-medium rounded-md text-sm pl-5 pr-3 py-2.5 transition ease-in-out duration-300 hover:scale-105 cursor-pointer">
          Back
          <svg class="w-4 h-4 text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
          </svg>
        </a>
      </div>
      <!-- Quiz Intro -->
      <div class="flex items-center justify-center flex-grow">
        <div class="space-y-6 flex flex-col justify-center w-full max-w-[28rem] p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
          <!-- Illustration -->
          <div class="flex flex-col justify-center items-center gap-4">
            <img src="../../../assets/images/quiz-illustration.png" class="w-[8rem] h-auto" alt="Quiz Illustration">
            <h5 class="text-2xl font-bold text-corn-flower-blue">Quiz 1</h5>
          </div>
          <!-- Instructions -->
          <div class="bg-ghost-white p-5 px-7 rounded-md">
            <h2 class="text-lg font-medium text-corn-flower-blue mb-3">Instructions:</h2>
            <ul class="max-w-md space-y-1 text-sm text-gray-600 list-disc list-inside">
              <!-- <li>
                <span class="font-medium">Coverage:</span> Please review the readings from Week 1 and Week 2 before starting the quiz.
              </li> -->
              <!-- <li>
                <span class="font-medium">Items:</span> ...
              </li> -->
              <li>
                <span class="font-medium">Time to Complete:</span> Complete it within 30 minutes of starting.
              </li>
              <li>
                <span class="font-medium">Due Date:</span> Due by 11:59 PM on April 30, 2024
              </li>
              <li>
                <span class="font-medium">Number of Attempts:</span> You have only 1 attempt for this quiz.
              </li>
            </ul>
          </div>
          <!-- Start Quiz Button -->
          <button class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Start Quiz</button>
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