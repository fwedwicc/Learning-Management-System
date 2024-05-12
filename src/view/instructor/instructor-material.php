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
        <h1 class="font-bold text-4xl text-corn-flower-blue">Software Engineering | Week 2 & 3</h1>
        <!-- Back Button -->
        <a href="./student-course-overview.php" type="button" class="inline-flex gap-1.5 items-center justify-center text-neon-blue focus:outline-none hover:bg-ghost-lavender focus:ring-4 focus:ring-deep-lav-blue font-medium rounded-md text-sm pl-5 pr-3 py-2.5 transition ease-in-out duration-300 hover:scale-105 cursor-pointer">
          Back
          <svg class="w-4 h-4 text-neon-blue mt-[0.2rem]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
          </svg>
        </a>
      </div>
      <!-- Embedded PDF/Learning Material -->
      <div class="flex items-center justify-center flex-grow">
        <!-- Option 1 -->
        <iframe class="pdf w-full h-full py-8 px-[5rem] rounded-2xl" id="learning-material" src="../../../assets/learning-materials/sample-learning-material.pdf">
        </iframe>
        <!-- Option 2 -->
        <!-- <object class="pdf" data="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf" width="auto" height="500">
        </object> -->
        <!-- Option 3 -->
        <!-- <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&url=http://infolab.stanford.edu/pub/papers/google.pdf#toolbar=0&scrollbar=0" frameBorder="0" scrolling="auto" height="100%" width="100%"></iframe> -->
        <!-- Option 4 -->
        <!-- <iframe src="http://infolab.stanford.edu/pub/papers/google.pdf#toolbar=0&navpanes=0&scrollbar=0" frameBorder="0" scrolling="auto" height="100%" width="100%"></iframe> -->
        <!-- Option 5 -->
        <!-- <embed src="http://infolab.stanford.edu/pub/papers/google.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" frameBorder="0" scrolling="auto" height="100%" width="100%"></embed> -->
        <!-- Option 6 -->
        <!-- <embed type="application/pdf" src="../../../assets/learning-materials/sample-learning-material.pdf" width="100%" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" background-color="0xFF525659" top-toolbar-height="56" full-frame="" internalinstanceid="21" title="CHROME"> -->
      </div>

    </div>
  </div>

  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
</body>

</html>
