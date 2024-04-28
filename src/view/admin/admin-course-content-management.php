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
        <button class="inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-neon-blue text-white font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano mt-12" data-modal-toggle="add-content-modal" data-modal-target="add-content-modal" data-modal-backdrop="static">
          <svg class="w-5 h-5 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          Add Content
        </button>
      </div>
      <!-- Add Content Modal -->
      <div id="add-content-modal" data-modal-backdrop="static" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
        <div class="relative w-full max-w-4xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-2xl shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-indigo-100">
              <h1 class="text-4xl font-bold text-corn-flower-blue">
                Add Course Content
              </h1>
              <!-- Close modal -->
              <button type="button" class="rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center text-neon-blue focus:outline-none hover:bg-ghost-lavender focus:ring-4 focus:ring-deep-lav-blue transition ease-in-out duration-300 hover:scale-105 cursor-pointer" data-modal-toggle="add-content-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 bg-white">
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
              </div>
              <!-- Modal footer -->
              <div class="border-t border-indigo-100 pt-6">
                <!-- Submit button -->
                <button data-modal-target="" data-modal-toggle="" type="button" id="" class="text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
                <!-- Cancel button -->
                <button data-modal-hide="add-content-modal" type="button" class="ms-3 text-neon-blue bg-ghost-lavender hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue rounded-md text-sm font-medium px-5 py-2.5 focus:z-10 transition duration-300 ease-in-out hover:scale-105">Cancel</button>
              </div>
              <!-- // Confirmation Modal Content -->
            </form>
          </div>
        </div>
      </div>
      <!-- // Add Content Modal -->
      <!-- Main content -->
      <div class="flex items-center justify-between mt-8 mb-6">
        <div class="grid grid-cols-8 gap-4 w-full">
          <div class="col-span-2">
            <ul class="space-y-3" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist" data-tabs-inactive-classes="text-moody-blue bg-lav-sant" data-tabs-active-classes="bg-ghost-lavender text-neon-blue border-neon-blue border-l-4 border-neon-blue font-medium">
              <!-- Week 1 Button -->
              <li role="presentation">
                <button class="rounded-lg hover:bg-ghost-lavender transition duration-300 ease-in-out w-full flex items-center justify-center p-3 w-full" id="week-1-tab" data-tabs-target="#week-1" type="button" role="tab" aria-controls="week-1" aria-selected="false">Week 1 - Course Orientation</button>
              </li>
              <!-- Week 2 Button -->
              <li role="presentation">
                <button class="rounded-lg hover:bg-ghost-lavender transition duration-300 ease-in-out w-full flex items-center justify-center p-3 w-full" id="week-2-tab" data-tabs-target="#week-2" type="button" role="tab" aria-controls="week-2" aria-selected="false">Week 2</button>
              </li>
              <!-- Week 3 Button -->
              <li role="presentation">
                <button class="rounded-lg hover:bg-ghost-lavender transition duration-300 ease-in-out w-full flex items-center justify-center p-3 w-full" id="week-3-tab" data-tabs-target="#week-3" type="button" role="tab" aria-controls="week-3" aria-selected="false">Week 3</button>
              </li>
            </ul>
          </div>
          <div class="col-span-6 max-h-auto">
            <div id="default-tab-content">
              <!-- Week 1 Content -->
              <div class="hidden p-4 rounded-xl bg-white drop-shadows w-full" id="week-1" role="tabpanel" aria-labelledby="week-1-tab">
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
                </div>
              </div>
              <!-- Week 2 Content -->
              <div class="hidden p-4 rounded-lg bg-white drop-shadows w-full" id="week-2" role="tabpanel" aria-labelledby="week-2-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
              </div>
              <!-- Week 3 Content -->
              <div class="hidden p-4 rounded-lg bg-white drop-shadows w-full" id="week-3" role="tabpanel" aria-labelledby="week-3-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
              </div>
            </div>
          </div>
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