<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Instructor Course Overview</title>
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
  <div class="p-4 sm:ml-64 sm:mr-[21rem]">
    <div class="pt-4 pl-4 rounded-2xl border-purple-blue mt-14">
      <h1 class="font-bold text-4xl pb-6 text-corn-flower-blue">Software Engineering</h1>
      <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-ghost-lavender text-indigo-600">
        <!-- Week 1 accordion heading -->
        <h2 id="accordion-color-heading-1">
          <div class="flex justify-between items-center w-full border border-b-0 border-purple-blue rounded-t-xl">
            <button type="button" class="w-full inline-flex justify-between items-center rounded-r-xl rounded-tl-xl p-5 font-medium rtl:text-right text-deep-koamaru focus:ring-4 focus:ring-lavender-blue hover:bg-ghost-lavender transition duration-300 ease-in-out gap-3" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
              <span>Week 1 - Course Orientation</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
              </svg>
              <!-- Unlock Button -->
              <!-- <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-neon-blue text-white font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano" data-modal-target="add-section-modal" data-modal-toggle="add-section-modal">
                <svg class="w-5 h-5 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M15 7a2 2 0 1 1 4 0v4a1 1 0 1 0 2 0V7a4 4 0 0 0-8 0v3H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V7Zm-5 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Unlock
              </button> -->
              <!-- Lock Button -->
              <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-ghost-lavender text-neon-blue font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue" data-modal-target="remove-section-modal" data-modal-toggle="remove-section-modal">
                <svg class="w-5 h-5 mr-1 text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Lock
              </button>
            </button>
          </div>
        </h2>
        <!-- Week 1 accordion content -->
        <div id="accordion-color-body-1" class="overflow-hidden transition-all duration-300 ease-in-out" aria-labelledby="accordion-color-heading-1">
          <div class="p-5 border border-b-0 border-purple-blue">
            <span class="mb-2 text-deep-koamaru">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
            <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Topics</h3>
                <ul class="list-disc pl-5 pt-4 text-deep-koamaru">
                  <li>Mission</li>
                  <li>Vission</li>
                  <li>Course Syllabus</li>
                  <li>Grading System</li>
                  <li>Class Policies</li>
                  <li>Course Requirements</li>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Learning Materials</h3>
                <ul class="list-none pt-4 text-deep-koamaru space-y-3">
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 1 - PowerPoint Presentation
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 1 - Additional PDF Materials
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Assessment and Tasks</h3>
                <ul class="list-disc pl-5 pt-4 text-deep-koamaru">
                  <li>Oral Recitation/Selected Responses</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Week 2 & 3 accordion heading -->
        <h2 id="accordion-color-heading-2">
          <div class="flex justify-between items-center w-full border border-b-0 border-purple-blue">
            <button type="button" class="w-full inline-flex justify-between items-center rounded-r-xl p-5 font-medium rtl:text-right text-deep-koamaru focus:ring-4 focus:ring-lavender-blue hover:bg-ghost-lavender transition duration-300 ease-in-out gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
              <span>Week 2 & 3 - Web Basics Terminologies & Hypertext Markup Language</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
              </svg>
              <!-- Unlock Button -->
              <!-- <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-neon-blue text-white font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano" data-modal-target="add-section-modal" data-modal-toggle="add-section-modal">
                <svg class="w-5 h-5 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M15 7a2 2 0 1 1 4 0v4a1 1 0 1 0 2 0V7a4 4 0 0 0-8 0v3H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V7Zm-5 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Unlock
              </button> -->
              <!-- Lock Button -->
              <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-ghost-lavender text-neon-blue font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue" data-modal-target="remove-section-modal" data-modal-toggle="remove-section-modal">
                <svg class="w-5 h-5 mr-1 text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Lock
              </button>
            </button>
          </div>
        </h2>
        <!-- Week 2 & 3 accordion content -->
        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
          <div class="p-5 border border-b-0 border-purple-blue">
            <span class="mb-2 text-deep-koamaru">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
            <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Topics</h3>
                <ul class="list-disc pl-5 pt-4 text-deep-koamaru">
                  <li>Whati s WWW, Web Server, Website, Web-browser</li>
                  <li>Static vs Dynamic Webpage</li>
                  <li>Types of Website</li>
                  <li>Principles of good web design</li>
                  <hr class="h-px my-5 bg-purple-blue border-0">
                  <li>Basics</li>
                  <li>Formatting</li>
                  <li>List, Links and Graphical Elements</li>
                  <li>Tables</li>
                  <li>Frames</li>
                  <li>Forms</li>
                  <li>Special Elements and Design Consideration</li>
                </ul>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Learning Materials</h3>
                <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                  <li>
                    <a href="./student-material.php" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 2 & 3 - PowerPoint Presentation
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 2 & 3 - Additional Materials
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Assessment and Tasks</h3>
                <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                  <li>
                    <a href="./student-activity.php" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                      </svg>
                      Laboratory Activity 1
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                      </svg>
                      Assignment 1
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Week 4 accordion heading -->
        <h2 id="accordion-color-heading-3">
          <div class="flex justify-between items-center w-full border border-b-0 border-purple-blue">
            <button type="button" class="w-full inline-flex justify-between items-center rounded-r-xl p-5 font-medium rtl:text-right text-deep-koamaru focus:ring-4 focus:ring-lavender-blue hover:bg-ghost-lavender transition duration-300 ease-in-out gap-3" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
              <span>Week 4 - Cascading Style Sheet</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
              </svg>
              <!-- Unlock Button -->
              <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-neon-blue text-white font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano" data-modal-target="add-section-modal" data-modal-toggle="add-section-modal">
                <svg class="w-5 h-5 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M15 7a2 2 0 1 1 4 0v4a1 1 0 1 0 2 0V7a4 4 0 0 0-8 0v3H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V7Zm-5 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Unlock
              </button>
              <!-- Lock Button -->
              <!-- <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-ghost-lavender text-neon-blue font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue" data-modal-target="remove-section-modal" data-modal-toggle="remove-section-modal">
                <svg class="w-5 h-5 mr-1 text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Lock
              </button> -->
            </button>
          </div>
        </h2>
        <!-- Week 4 accordion content -->
        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
          <div class="p-5 border border-t-0 border-purple-blue">
            <span class="mb-2 text-deep-koamaru">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
            <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Topics</h3>
                <ul class="list-disc pl-5 pt-4 text-deep-koamaru">
                  <li>Intorduction to CSS</li>
                  <li>CSS Properties</li>
                  <li>CSS Concepts</li>
                  <li>XML</li>
                </ul>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Learning Materials</h3>
                <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 4 - PowerPoint Presentation
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 4 - Additional PDF Materials
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Assessment and Tasks</h3>
                <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                      </svg>
                      Laboratory Activity 2
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                      </svg>
                      Assignment 2
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Week 5 & 6 accordion heading -->
        <h2 id="accordion-color-heading-4">
          <div class="flex justify-between items-center w-full border border-b-0 border-purple-blue">
            <button type="button" class="w-full inline-flex justify-between items-center rounded-r-xl p-5 font-medium rtl:text-right text-deep-koamaru focus:ring-4 focus:ring-lavender-blue hover:bg-ghost-lavender transition duration-300 ease-in-out gap-3" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
              <span>Week 5 & 6 - Intorduction to JavaScript</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
              </svg>
              <!-- Unlock Button -->
              <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-neon-blue text-white font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano" data-modal-target="add-section-modal" data-modal-toggle="add-section-modal">
                <svg class="w-5 h-5 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M15 7a2 2 0 1 1 4 0v4a1 1 0 1 0 2 0V7a4 4 0 0 0-8 0v3H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V7Zm-5 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Unlock
              </button>
              <!-- Lock Button -->
              <!-- <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-ghost-lavender text-neon-blue font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue" data-modal-target="remove-section-modal" data-modal-toggle="remove-section-modal">
                <svg class="w-5 h-5 mr-1 text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Lock
              </button> -->
            </button>
          </div>
        </h2>
        <!-- Week 5 & 6 accordion content -->
        <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
          <div class="p-5 border border-t-0 border-purple-blue">
            <span class="mb-2 text-deep-koamaru">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
            <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Topics</h3>
                <ul class="list-disc pl-5 pt-4 text-deep-koamaru">
                  <li>Intorduction to JavaScript</li>
                  <li>Functions and Objects</li>
                  <li>JavaScript Expressions</li>
                  <li>Javascript Event Handler</li>
                  <li>Javascript in Web Browsers</li>
                </ul>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Learning Materials</h3>
                <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 5 & 6 - PowerPoint Presentation
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 5 & 6 - Additional PDF Materials
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Assessment and Tasks</h3>
                <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                      </svg>
                      Laboratory Activity 3
                    </a>
                  </li>
                  <li>
                    <a href="./student-quiz.php" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                      </svg>
                      Quiz 1
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Week 7 accordion heading -->
        <h2 id="accordion-color-heading-5">
          <div class="flex justify-between items-center w-full border border-b-1 border-purple-blue">
            <button type="button" class="w-full inline-flex justify-between items-center rounded-r-xl p-5 font-medium rtl:text-right text-deep-koamaru focus:ring-4 focus:ring-lavender-blue hover:bg-ghost-lavender transition duration-300 ease-in-out gap-3" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
              <span>Week 7 - Hypertext Preprocessor</span>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
              </svg>
              <!-- Unlock Button -->
              <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-neon-blue text-white font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano" data-modal-target="add-section-modal" data-modal-toggle="add-section-modal">
                <svg class="w-5 h-5 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M15 7a2 2 0 1 1 4 0v4a1 1 0 1 0 2 0V7a4 4 0 0 0-8 0v3H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V7Zm-5 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Unlock
              </button>
              <!-- Lock Button -->
              <!-- <button class="mx-3 inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-ghost-lavender text-neon-blue font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue" data-modal-target="remove-section-modal" data-modal-toggle="remove-section-modal">
                <svg class="w-5 h-5 mr-1 text-neon-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Lock
              </button> -->
            </button>
          </div>
        </h2>
        <!-- Week 7 accordion content -->
        <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
          <div class="p-5 border border-t-0 border-purple-blue rounded-b-xl">
            <span class="mb-2 text-deep-koamaru">Learning Outcomes: Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo rerum vero animi quisquam eaque commodi expedita possimus labore veniam. Placeat earum eum veritatis. Esse perferendis tempora porro sequi vel.</span>
            <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4 mt-4">
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Topics</h3>
                <ul class="list-disc pl-5 pt-4 text-deep-koamaru">
                  <li>Intorduction to PHP</li>
                  <li>PHP Form</li>
                  <li>Handling</li>
                  <li>Validation</li>
                  <li>Cookies and Session</li>
                </ul>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Learning Materials</h3>
                <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 7 - PowerPoint Presentation
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-royal-blue border border-royal-blue hover:bg-hawkes-blue focus:ring-4 focus:outline-none focus:ring-tropical-blue rounded-lg text-sm bg-solitude transition ease-in-out duration-300">
                      <svg class="w-3 h-3 me-2 text-royal-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
                      </svg>
                      Week 7 - Additional PDF Materials
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-span-1">
                <h3 class="text-lg font-semibold text-deep-koamaru">Assessment and Tasks</h3>
                <ul class="list-none pt-4 text-gray-500 dark:text-gray-400 space-y-3">
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                      </svg>
                      Laboratory Activity 4
                    </a>
                  </li>
                  <li>
                    <a href="#" class="w-full px-3 py-2 text-sm font-medium text-center inline-flex items-center text-camarone border border-camarone hover:bg-granny-apple focus:ring-4 focus:outline-none focus:ring-chinook rounded-lg transition duration-300 ease-in-out bg-off-green">
                      <svg class="w-3 h-3 me-2 text-camarone" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z" />
                      </svg>
                      Assignment 3
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Right Sidebar -->
  <aside id="logo-sidebar" class="fixed top-0 right-0 z-40 w-[21rem] h-screen pt-20 transition-transform -translate-x-full bg-ghost-white sm:translate-x-0 hidden sm:block" aria-label="Sidebar">
    <div class="h-full pt-2 pb-7 gap-5 pl-1 pr-8 overflow-y-auto bg-ghost-white grid grid-rows-2">
      <!-- Card -->
      <div class="block max-w-sm p-8 bg-white rounded-2xl drop-shadows row-span-1 overflow-y-auto space-y-4 flex flex-col">
        <h5 class="mb-2 text-lg font-medium tracking-tight text-corn-flower-blue">Post an Announcement</h5>
        <form>
          <label for="chat" class="sr-only">Add Announcement</label>
          <div class="flex flex-col items-center gap-2">
            <textarea id="chat" rows="1" class="block p-2.5 w-full text-sm bg-ghost-white rounded-lg border border-none cursor-pointer focus:cursor-auto focus:ring-neon-blue focus:border-neon-blue resize-none overflow-hidden text-deep-koamaru placeholder:text-neon-blue focus:placeholder:text-deep-koamaru placeholder:font-medium transition duration-300 ease-in-out hover:bg-ghost-lavender focus:hover:bg-ghost-white focus:placeholder:font-normal" placeholder="Add Announcement"></textarea>
            <!-- Submit Button -->
            <button id="submit-button" type="submit" class="mt-2 hidden block w-full justify-center p-2 text-witty-blue rounded-md cursor-not-allowed transition duration-300 ease-in-out bg-ghost-lavender">
              Post
            </button>
          </div>
        </form>
        <!-- Sample Announcement -->
        <div class="bg-ghost-white p-3 rounded-md">
          <span class="text-deep-koamaru font-medium">
            Juan Dela Cruz
            <span class="italic block font-normal text-sm">April 19</span>
          </span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nemo ad mollitia natus.</p>
        </div>
      </div>
      <div class="block max-w-sm p-8 bg-white rounded-2xl drop-shadows row-span-1 overflow-y-auto space-y-4 flex flex-col justify-between">
        <!-- Card Content -->
      </div>

    </div>
  </aside>
  <script>
    // Hiding submit button
    var textarea = document.getElementById('chat');
    var submitButton = document.getElementById('submit-button');

    // Show submit button when textarea is focused
    textarea.addEventListener('focus', function() {
      submitButton.style.display = 'inline-flex';
    });

    // Hide submit button when textarea loses focus
    textarea.addEventListener('blur', function() {
      submitButton.style.display = 'none';
    });

    // Auto height of textarea
    var textarea = document.getElementById('chat');
    textarea.addEventListener('input', autoResize, false);

    function autoResize() {
      this.style.height = 'auto';
      this.style.height = this.scrollHeight + 'px';

    }
    // Button state

    // Set the initial state of the submit button to disabled
    submitButton.disabled = true;

    // Add an event listener for the input event on the textarea
    textarea.addEventListener('input', function() {
      // If the textarea is empty, disable the button, otherwise enable it
      if (this.value.trim() === '') {
        submitButton.disabled = true;
        submitButton.classList.add('text-witty-blue', 'cursor-not-allowed', 'bg-ghost-lavender');
        submitButton.classList.remove('hover:bg-ghost-lavender', 'text-neon-blue', 'cursor-pointer', 'bg-neon-blue', 'hover:bg-free-speech-blue');
      } else {
        submitButton.disabled = false;
        submitButton.classList.add('hover:bg-ghost-lavender', 'text-white', 'cursor-pointer', 'bg-neon-blue', 'hover:bg-free-speech-blue');
        submitButton.classList.remove('text-witty-blue', 'cursor-not-allowed');
      }
    });
  </script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
</body>

</html>