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
      <h1 class="font-bold text-4xl text-corn-flower-blue">Software Engineering</h1>
      <div class="flex flex-col items-center gap-8 mt-8 mb-12 pt-8 px-10">
        <div class="flex items-center justify-between w-full">
          <h1 class="font-bold text-3xl text-corn-flower-blue">Quiz 1</h1>
          <!-- Timer -->
          <div class="inline-flex gap-2 items-center justify-center text-neon-blue border border-neon-blue bg-lav-sant font-medium rounded-md text-sm px-4 py-2.5">
            <svg class="w-5 h-5 text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span>5:00</span>
          </div>
        </div>

        <!-- Tab Component for Answer Keys and Submissions -->
        <div class="mb-4">
          <ul class="flex flex-wrap -mb-px text-sm font-medium text-center transition duration-300 ease-in-out" id="default-tab" data-tabs-toggle="tab-content" role="tablist" data-tabs-inactive-classes="text-moody-blue" data-tabs-active-classes="text-neon-blue border-neon-blue bg-ghost-lavender">
            <li class="me-2" role="presentation">
              <button class="inline-block px-4 py-2 hover:bg-ghost-lavender transition duration-300 ease-in-out border-b-2 rounded-t-lg" id="answerKeys-tab" data-tabs-target="#answerKeys" type="button" role="tab" aria-controls="answerKeys" aria-selected="false">Answer Keys</button>
            </li>
            <li class="me-2" role="presentation">
              <button class="inline-block px-4 py-2 hover:bg-ghost-lavender transition duration-300 ease-in-out border-b-2 rounded-t-lg" id="submissions-tab" data-tabs-target="#submissions" type="button" role="tab" aria-controls="submissions" aria-selected="false">Submissions</button>
            </li>
          </ul>
        </div>

      <!-- Answer Keys Tab -->
      <div id="tab-content">
        <div class="hidden relative overflow-x-auto sm:rounded-lg" id="answerKeys" role="tabpanel" aria-labelledby="answerKeys-tab">
          <div class="">
            <!-- Quiz Container -->
            <div class="space-y-6 w-full max-w-[70rem] p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
              <!-- Question 1 -->
              <span class="mt-4 items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-lg">
                Question # 1
              </span>
              <h3 class="mb-5 text-lg font-medium text-corn-flower-blue">What is the difference between a software library and a framework?</h3>
              <!-- Answers/Radio Buttons for Question 5 -->
              <ul class="grid w-full gap-4 md:grid-cols-2 flex flex-col">
                <li class="flex">
                  <input type="radio" id="answer-1-1" name="answers5" value="answer-1-1" class="hidden peer" required disabled readonly/>
                  <label for="answer-1-1" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">A library is a set of functions that you can call, whereas a framework is a system where you define the flow of control</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-1-2" name="answers5" value="answer-1-2" class="hidden peer" required checked/>
                  <label for="answer-1-2" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">A library provides specific functionalities that can be directly used in your code, while a framework dictates the overall structure and design of your application</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-1-3" name="answers5" value="answer-1-3" class="hidden peer" required disabled readonly/>
                  <label for="answer-1-3" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">A library is a collection of reusable code modules that you can incorporate into your own programs, while a framework is a comprehensive architecture that dictates the structure and flow of your application</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-1-4" name="answers5" value="answer-1-4" class="hidden peer" required disabled readonly/>
                  <label for="answer-1-4" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">A library offers specific functionalities that can be utilized in your projects, while a framework provides a complete structure and set of rules for developing applications</div>
                  </label>
                </li>
              </ul>
            </div>
            <!-- Quiz Container -->
            <div class="space-y-6 w-full max-w-[70rem] p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
              <!-- Question 2 -->
              <span class="mt-4 items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-lg">
                Question # 2
              </span>
              <h3 class="mb-5 text-lg font-medium text-corn-flower-blue">What is the primary purpose of software testing?</h3>
              <!-- Answers/Radio Buttons for Question 2 -->
              <ul class="grid w-full gap-4 md:grid-cols-2 flex flex-col">
                <li class="flex">
                  <input type="radio" id="answer-2-1" name="answers2" value="answer-2-1" class="hidden peer" required checked/>
                  <label for="answer-2-1" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">To find and fix all bugs</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-2-2" name="answers2" value="answer-2-2" class="hidden peer" required disabled readonly/>
                  <label for="answer-2-2" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">To ensure the software meets requirements and specifications</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-2-3" name="answers2" value="answer-2-3" class="hidden peer" required disabled readonly/>
                  <label for="answer-2-3" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">To evaluate the software's functionality and performance</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-2-4" name="answers2" value="answer-2-4" class="hidden peer" required disabled readonly/>
                  <label for="answer-2-4" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">To enhance the software's reliability and stability</div>
                  </label>
                </li>
              </ul>
            </div>
            <!-- Quiz Container -->
            <div class="space-y-6 w-full max-w-[70rem] p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
              <!-- Question 3 -->
              <span class="mt-4 items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-lg">
                Question # 3
              </span>
              <h3 class="mb-5 text-lg font-medium text-corn-flower-blue">What is a software development life cycle (SDLC)?</h3>
              <!-- Answers/Radio Buttons for Question 3 -->
              <ul class="grid w-full gap-4 md:grid-cols-2 flex flex-col">
                <li class="flex">
                  <input type="radio" id="answer-3-1" name="answers3" value="answer-3-1" class="hidden peer" required  disabled readonly/>
                  <label for="answer-3-1" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">A process of creating software</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-3-2" name="answers3" value="answer-3-2" class="hidden peer" required  disabled readonly/>
                  <label for="answer-3-2" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">A framework that defines tasks performed at each phase of software development</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-3-3" name="answers3" value="answer-3-3" class="hidden peer" required checked/>
                  <label for="answer-3-3" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">A systematic approach to software development, encompassing planning, design, development, testing, deployment, and maintenance</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-3-4" name="answers3" value="answer-3-4" class="hidden peer" required  disabled readonly/>
                  <label for="answer-3-4" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">A set of methodologies for project management and software development</div>
                  </label>
                </li>
              </ul>
            </div>
            <!-- Quiz Container -->
            <div class="space-y-6 w-full max-w-[70rem] p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
              <!-- Question 4 -->
              <span class="mt-4 items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-lg">
                Question # 4
              </span>
              <h3 class="mb-5 text-lg font-medium text-corn-flower-blue">What is Agile methodology?</h3>
              <!-- Answers/Radio Buttons for Question 4 -->
              <ul class="grid w-full gap-4 md:grid-cols-2 flex flex-col">
                <li class="flex">
                  <input type="radio" id="answer-4-1" name="answers4" value="answer-4-1" class="hidden peer" required disabled readonly/>
                  <label for="answer-4-1" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">A software development approach that promotes flexibility and customer satisfaction</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-4-2" name="answers4" value="answer-4-2" class="hidden peer" required  checked/>
                  <label for="answer-4-2" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">An iterative and incremental software development methodology</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-4-3" name="answers4" value="answer-4-3" class="hidden peer" required disabled readonly/>
                  <label for="answer-4-3" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">Focuses on delivering working software frequently, with a preference for face-to-face communication</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-4-4" name="answers4" value="answer-4-4" class="hidden peer" required disabled readonly/>
                  <label for="answer-4-4" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">Based on principles outlined in the Agile Manifesto</div>
                  </label>
                </li>
              </ul>
            </div>  
            <!-- Quiz Container -->
            <div class="space-y-6 w-full max-w-[70rem] p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
              <!-- Question 5 -->
              <span class="mt-4 items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-lg">
                Question # 5
              </span>
              <h3 class="mb-5 text-lg font-medium text-corn-flower-blue">What is object-oriented programming (OOP)?</h3>
              <!-- Answers/Radio Buttons for Question 6 -->
              <ul class="grid w-full gap-4 md:grid-cols-2 flex flex-col">
                <li class="flex">
                  <input type="radio" id="answer-5-1" name="answers6" value="answer-5-1" class="hidden peer" required  checked/>
                  <label for="answer-5-1" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">OOP is a programming paradigm that uses objects and classes to design applications and software</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-5-2" name="answers6" value="answer-5-2" class="hidden peer" required  disabled readonly/>
                  <label for="answer-5-2" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">OOP is centered around the concept of objects, which encapsulate data and behavior, promoting code reusability and modularity</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-5-3" name="answers6" value="answer-5-3" class="hidden peer" required  disabled readonly/>
                  <label for="answer-5-3" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">OOP allows for the organization of code into reusable components, promoting easier maintenance and scalability of software systems</div>
                  </label>
                </li>
                <li class="flex">
                  <input type="radio" id="answer-5-4" name="answers6" value="answer-5-4" class="hidden peer" required  disabled readonly/>
                  <label for="answer-5-4" class="inline-flex items-center justify-between w-full p-5 text-deep-koamaru bg-white border border-quartz rounded-lg cursor-pointer peer-checked:border-neon-blue peer-checked:bg-ghost-white peer-checked:text-neon-blue peer-checked:border-2 hover:text-neon-blue hover:bg-ghost-white transition duration-300 ease-in-out">
                    <div class="w-full">OOP enables the modeling of real-world entities and relationships in software development, fostering a more intuitive and organized approach to programming</div>
                  </label>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Submissions Tab -->
        <div class="hidden relative overflow-x-auto sm:rounded-lg" id="submissions" role="tabpanel" aria-labelledby="submissions-tab">
          <div class="max-h-[480px] overflow-y-auto">
            <table class="w-full text-sm text-left rtl:text-right text-deep-koamaru">
              <thead class="text-xs text-corn-flower-blue uppercase bg-ghost-lavender sticky top-0">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Student name
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Student number
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Program
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Classification
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Section
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Grade
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Submission Date
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b border-indigo-100">
                  <th scope="row" class="px-6 py-4 font-medium text-deep-koamaru whitespace-nowrap">
                    Lian V. Torres
                  </th>
                  <td class="px-6 py-4">
                    22-2806
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="px-6 py-4">
                    80%
                  </td>
                  <td class="px-6 py-4">
                    05/10/2024
                  </td>
                </tr>
                <tr class="bg-white border-b border-indigo-100">
                  <th scope="row" class="px-6 py-4 font-medium text-deep-koamaru whitespace-nowrap">
                    Reanna M. Carreon
                  </th>
                  <td class="px-6 py-4">
                    22-2879
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="px-6 py-4">
                    80%
                  </td>
                  <td class="px-6 py-4">
                    05/10/2024
                  </td>
                </tr>
                <tr class="bg-white border-b border-indigo-100">
                  <th scope="row" class="px-6 py-4 font-medium text-deep-koamaru whitespace-nowrap">
                    Frederick C. Moreno
                  </th>
                  <td class="px-6 py-4">
                    22-2808
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="px-6 py-4">
                    80%
                  </td>
                  <td class="px-6 py-4">
                    05/10/2024
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
        
        <!-- Submit Button -->
        <!--
        <button class="w-[10rem] text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105 mt-8">Submit Quiz</button>
        -->
      </div>
    </div>
  </div>


  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
  <style>
      .peer:checked ~ .peer-checked\:border-neon-blue {
        --tw-border-opacity: 1;
        border-color: rgb(0 179 32);
    }

      .border-quartz {
        --tw-border-opacity: 1;
        border-color: rgb(255 0 0);
    }
  </style>
</body>

</html>