<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Add Course Content</title>
  <!-- Tailwind cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <!-- Flowbite cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <!-- Icon -->
  <link rel="icon" type="image/png" href="../assets/images/LMS-logo.png" />
  <!-- Css link -->
  <link rel="stylesheet" href="../assets/style.css">
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
        <h1 class="font-bold text-4xl text-corn-flower-blue">Add Course Content</h1>
      </div>
      <!-- Modal body -->
      <div class="p-4 bg-white rounded-2xl mt-12">
        <!-- Student number -->
        <div class="grid grid-cols-2 p-4 gap-6">
          <!-- Week Topic Title Input -->
          <div class="col-span-1">
            <label for="" class="block mb-2 text-sm font-medium text-deep-koamaru">Week Topic Title</label>
            <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Week 1 - Content Orientation">
          </div>
          <!-- Learning Outcomes Input -->
          <div class="col-start-1">
            <label for="" class="block mb-2 text-sm font-medium text-deep-koamaru">Learning Outcomes</label>
            <textarea id="" rows="4" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Lorem lorem sinta buko ng papaya"></textarea>
          </div>
          <!-- Topics -->
          <div class="col-start-2">
            <label for="" class="block mb-2 text-sm font-medium text-deep-koamaru">Topics</label>
            <textarea id="" rows="4" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Lorem lorem sinta buko ng papaya"></textarea>
          </div>
          <!-- Handouts -->
          <div class="col-span-1">
            <label for="" class="block mb-2 text-sm font-medium text-deep-koamaru">Handouts</label>
            <input class="block w-full text-sm text-deep-koamaru border border-lavender rounded-lg cursor-pointer bg-ghost-white focus:outline-none" aria-describedby="file_input" id="file_input" type="file" multiple>
            <p class="mt-2 text-xs text-slate-500" id="file_input">PDF, DOCX, JPG or PNG only.</p>
          </div>
          <!-- Assessment and Tasks -->
          <div class="col-span-1">
            <label for="" class="block mb-2 text-sm font-medium text-deep-koamaru">Assessment and Tasks</label>
            <input class="block w-full text-sm text-deep-koamaru border border-lavender rounded-lg cursor-pointer bg-ghost-white focus:outline-none" aria-describedby="file_input" id="file_input" type="file" multiple>
            <p class="mt-2 text-xs text-slate-500" id="file_input">PDF, DOCX, JPG or PNG only.</p>
          </div>
          <!-- Create Quiz -->
          <div class="col-span-1 pt-2">
            <button class="inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-ghost-lavender text-neon-blue font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue" data-modal-target="create-quiz-modal" data-modal-toggle="create-quiz-modal">
              <svg class="w-5 h-5 mr-1 text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
              </svg>
              Create Quiz
            </button>
          </div>
          <!-- Create Quiz Modal -->
          <div id="create-quiz-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50" data-modal-backdrop="static">
            <div class="relative p-4 w-full max-w-5xl max-h-full">
              <!-- Modal content // form to yorms ahh div muna kasi nag rereload -->
              <div class="relative bg-white rounded-2xl shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-indigo-100">
                  <h3 class="text-4xl font-bold text-corn-flower-blue">
                    Create Quiz
                  </h3>
                  <button type="button" id="" class="rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center text-neon-blue focus:outline-none hover:bg-ghost-lavender focus:ring-4 focus:ring-deep-lav-blue transition ease-in-out duration-300 hover:scale-105 cursor-pointer" data-modal-toggle="create-quiz-modal" data-modal-hide="create-quiz-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                </div>
                <!-- Modal Body -->
                <div class="p-4 md:p-5">
                  <div class="flex flex-col justify-end items-center gap-4 px-5 mb-6">
                    <!-- Title and Timer Container -->
                    <div class="grid grid-cols-2 w-full pb-4">
                      <!-- Quiz Title -->
                      <div class="col-span-1">
                        <label for="" class="block mb-2 text-sm font-medium text-deep-koamaru">Quiz Title:</label>
                        <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Quiz 1">
                      </div>
                      <!-- Quiz Title -->
                    </div>
                    <!-- // Title and Timer Container -->
                    <!-- Question Container -->
                    <div class="space-y-6 w-full max-w-[70rem] p-4 border-t rounded-t border-indigo-100 pt-9">
                      <!-- Question 1 -->
                      <span class="mt-4 items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-lg">
                        Question # 1
                      </span>
                      <!-- Question -->
                      <label for="" class="col-span-1 block text-lg font-medium text-deep-koamaru">Question:</label>
                      <textarea id="" rows="2" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Lorem lorem sinta buko ng papaya"></textarea>
                      <!-- // Question -->
                      <!-- Options -->
                      <label for="" class="col-span-1 block text-lg font-medium text-deep-koamaru">Options:</label>
                      <ul class="grid w-full gap-4 md:grid-cols-2 flex flex-col">
                        <li class="flex">
                          <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Option 1">
                        </li>
                        <li class="flex">
                          <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Option 2">
                        </li>
                        <li class="flex">
                          <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Option 3">
                        </li>
                        <li class="flex">
                          <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Option 4">
                        </li>
                      </ul>
                      <!-- // Options -->
                    </div>
                    <!-- // Question Container -->
                    <!-- Question Container -->
                    <div class="space-y-6 w-full max-w-[70rem] p-4 border-t rounded-t border-indigo-100 pt-9">
                      <!-- Question 2 -->
                      <span class="mt-4 items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-lg">
                        Question # 2
                      </span>
                      <!-- Question -->
                      <label for="" class="col-span-1 block text-lg font-medium text-deep-koamaru">Question:</label>
                      <textarea id="" rows="2" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Lorem lorem sinta buko ng papaya"></textarea>
                      <!-- // Question -->
                      <!-- Options -->
                      <label for="" class="col-span-1 block text-lg font-medium text-deep-koamaru">Options:</label>
                      <ul class="grid w-full gap-4 md:grid-cols-2 flex flex-col">
                        <li class="flex">
                          <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Option 1">
                        </li>
                        <li class="flex">
                          <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Option 2">
                        </li>
                        <li class="flex">
                          <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Option 3">
                        </li>
                        <li class="flex">
                          <input type="text" id="" name="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Option 4">
                        </li>
                      </ul>
                      <!-- // Options -->
                    </div>
                    <!-- // Question Container -->
                  </div>
                  <!-- Modal Footer -->
                  <div class="border-t border-indigo-100 pt-6">
                    <!-- Register button -->
                    <button data-modal-target="quiz-confirmation-modal" data-modal-toggle="quiz-confirmation-modal" type="button" id="" class="text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Create</button>
                    <!-- Cancel button -->
                    <button data-modal-toggle="cancel-quiz-modal" data-modal-target="cancel-quiz-modal" type="button" class="ms-3 text-neon-blue bg-ghost-lavender hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue rounded-md text-sm font-medium px-5 py-2.5 focus:z-10 transition duration-300 ease-in-out hover:scale-105">Cancel</button>
                  </div>
                  <!-- // Modal Footer -->
                  <!-- Create Quiz Confirmation Modal -->
                  <div id="quiz-confirmation-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-2xl py-7 px-7">
                        <div class="p-4 md:p-5">
                          <svg class="mx-auto mb-4 text-corn-flower-blue w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>
                          <h3 class="mb-8 text-md font-normal text-deep-koamaru text-center">By proceeding with this
                            action, you ensure all necessary approvals have been obtained and that the implications of this
                            addition have been thoroughly considered.</h3>
                          <form action="" method="">
                            <div class="flex gap-4 pt-8">
                              <!-- Cancel -->
                              <button data-modal-hide="quiz-confirmation-modal" type="button" class="w-full text-deep-koamaru bg-transparent focus:outline-none hover:bg-ghost-lavender border border-purple-blue focus:ring-4 focus:ring-perano font-medium rounded-md text-base px-5 py-2.5 transition ease-in-out duration-300 hover:scale-105">Cancel</button>
                              <!-- Continue -->
                              <button type="submit" data-modal-target="quiz-success-modal" data-modal-hide="quiz-confirmation-modal" data-modal-toggle="quiz-success-modal" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none text-base focus:ring-blue-300 font-medium rounded-md px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- // Create Quiz Confirmation Modal -->
                  <!-- Quiz Success Modal -->
                  <div id="quiz-success-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-2xl py-8">
                        <div class="p-4 md:p-5">
                          <svg class="mx-auto mb-4 text-green-400 w-16 h-16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 1 0-18c1.052 0 2.062.18 3 .512M7 9.577l3.923 3.923 8.5-8.5M17 14v6m-3-3h6" />
                          </svg>
                          <h3 class="mb-12 text-lg font-normal text-deep-koamaru text-center">Quiz created successfully!</h3>
                          <div class="flex justify-center">
                            <button data-modal-hide="quiz-success-modal" type="button" id="" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-lg font-medium inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">
                              OK
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- // Quiz Success Modal -->
                  <!-- Cancel Quiz Modal -->
                  <div id="cancel-quiz-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-2xl py-7 px-7">
                        <div class="p-4 md:p-5">
                          <svg class="mx-auto mb-4 text-corn-flower-blue w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>
                          <form onsubmit="">
                            <h3 class="mb-12 text-lg font-normal text-deep-koamaru text-center px-6">Are you sure you want to
                              go back? All inputs will not be restorderistiks.
                            </h3>
                            <div class="gap-4 flex justify-center">
                              <button data-modal-hide="cancel-quiz-modal" id="konperm" data-modal-toggle="cancel-quiz-modal" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg font-medium inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">
                                Yes
                              </button>
                              <button data-modal-hide="cancel-quiz-modal" id="kansel" type="button" class="text-deep-koamaru bg-transparent border border-purple-blue hover:bg-ghost-lavender focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-lg text-lg font-medium inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">No</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- // Cancel Quiz Modal -->
                </div>
                <!-- // Modal Body -->
              </div>
            </div>
          </div>
          <!-- // Create Quiz Modal -->
          <!-- A&T Desc -->
          <div class="col-start-2">
            <label for="" class="block mb-2 text-sm font-medium text-deep-koamaru">A&T Description (Optional):</label>
            <textarea id="" rows="4" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Lorem lorem sinta buko ng papaya"></textarea>
          </div>
        </div>
        <!-- footer -->
        <div class="py-4 pl-4">
          <!-- Submit button -->
          <button data-modal-target="submit-confirmation-modal" data-modal-toggle="submit-confirmation-modal" type="button" id="" class="text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
          <!-- Cancel button -->
          <button data-modal-target="cancel-modal" data-modal-toggle="cancel-modal" type="button" class="ms-3 text-neon-blue bg-ghost-lavender hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue rounded-md text-sm font-medium px-5 py-2.5 focus:z-10 transition duration-300 ease-in-out hover:scale-105">Cancel</button>
        </div>
        <!-- // footer -->
        <!-- Submit Confirmation Modal -->
        <div id="submit-confirmation-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
          <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-2xl py-7 px-7">
              <div class="p-4 md:p-5">
                <svg class="mx-auto mb-4 text-corn-flower-blue w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-8 text-md font-normal text-deep-koamaru text-center">By proceeding with this
                  action, you ensure all necessary approvals have been obtained and that the implications of this
                  addition have been thoroughly considered.</h3>
                <form action="" method="">
                  <div class="flex gap-4 pt-8">
                    <!-- Cancel -->
                    <button data-modal-hide="submit-confirmation-modal" type="button" class="w-full text-deep-koamaru bg-transparent focus:outline-none hover:bg-ghost-lavender border border-purple-blue focus:ring-4 focus:ring-perano font-medium rounded-md text-base px-5 py-2.5 transition ease-in-out duration-300 hover:scale-105">Cancel</button>
                    <!-- Continue -->
                    <button type="submit" data-modal-target="submit-success-modal" data-modal-hide="submit-confirmation-modal" data-modal-toggle="submit-success-modal" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none text-base focus:ring-blue-300 font-medium rounded-md px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- // Submit Confirmation Modal -->
        <!-- Submit Success Modal -->
        <div id="submit-success-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
          <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-2xl py-8">
              <div class="p-4 md:p-5">
                <svg class="mx-auto mb-4 text-green-400 w-16 h-16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 1 0-18c1.052 0 2.062.18 3 .512M7 9.577l3.923 3.923 8.5-8.5M17 14v6m-3-3h6" />
                </svg>
                <h3 class="mb-12 text-lg font-normal text-deep-koamaru text-center">Course content submitted successfully!</h3>
                <div class="flex justify-center">
                  <button data-modal-hide="submit-success-modal" type="button" id="" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-lg font-medium inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">
                    OK
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // Submit Success Modal -->
        <!-- Cancel Confirmation Modal -->
        <div id="cancel-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
          <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-2xl py-7 px-7">
              <div class="p-4 md:p-5">
                <svg class="mx-auto mb-4 text-corn-flower-blue w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <form onsubmit="">
                  <h3 class="mb-12 text-lg font-normal text-deep-koamaru text-center px-6">Are you sure you want to
                    go back? All inputs will not be restorderistiks.
                  </h3>
                  <div class="gap-4 flex justify-center">
                    <a href="./course-content-management.php" data-modal-hide="cancel-modal" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg font-medium inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">
                      Yes
                    </a>
                    <button data-modal-hide="cancel-modal" type="button" class="text-deep-koamaru bg-transparent border border-purple-blue hover:bg-ghost-lavender focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-lg text-lg font-medium inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">No</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- // Cancel Confirmation Modal -->
        <!--  -->
      </div>
    </div>
    <!--  -->
  </div>
  </div>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../assets/tailwind.config.js"></script>
</body>

</html>