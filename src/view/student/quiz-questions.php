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
  <div class="p-4 sm:ml-64">
    <div class="pt-4 px-5 rounded-2xl mt-14">
      <h1 class="font-bold text-4xl pb-6 text-corn-flower-blue">Software Engineering</h1>
      <div class="flex flex-col items-center gap-8 mt-12 mb-12">
        <!-- Quiz Container -->
        <div class="space-y-6  w-full max-w-[70rem] p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
          <span class="mt-4 items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-lg">
            Question # 1
          </span>
          <!-- Question -->
          <h3 class="mb-5 text-lg font-medium text-corn-flower-blue">How much do you expect to use each month?</h3>
          <ul class="grid w-full gap-4 md:grid-cols-2">
            <!-- Answers/Radio Buttons -->
            <li>
              <input type="radio" id="answer-1" name="answers" value="answer-1" class="hidden peer" required />
              <label for="answer-1" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                <div class="w-full">Good for small websites</div>
              </label>
            </li>
            <li>
              <input type="radio" id="answer-2" name="answers" value="answer-2" class="hidden peer" required />
              <label for="answer-2" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                <div class="w-full">Good for small websites</div>
              </label>
            </li>
            <li>
              <input type="radio" id="answer-3" name="answers" value="answer-3" class="hidden peer" required />
              <label for="answer-3" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                <div class="w-full">Good for small websites</div>
              </label>
            </li>
            <li>
              <input type="radio" id="answer-4" name="answers" value="answer-4" class="hidden peer" required />
              <label for="answer-4" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                <div class="w-full">Good for small websites</div>
              </label>
            </li>
          </ul>
        </div>
        


    </div>
  </div>

  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
</body>

</html>