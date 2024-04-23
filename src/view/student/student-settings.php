<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Student Settings</title>
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
      <h1 class="font-bold text-4xl text-corn-flower-blue">Settings</h1>
      <div class="flex flex-col gap-8 pt-8">
        <div class="mb-2">
          <ul class="flex flex-wrap -mb-px text-sm font-medium text-center transition duration-300 ease-in-out" id="default-tab" data-tabs-toggle="tab-content" role="tablist" data-tabs-inactive-classes="text-moody-blue" data-tabs-active-classes="text-neon-blue border-neon-blue bg-ghost-lavender">
            <li class="me-2" role="presentation">
              <button class="inline-block px-4 py-2 hover:bg-ghost-lavender transition duration-300 ease-in-out border-b-2 rounded-t-lg" id="account-profile-tab" data-tabs-target="#account-profile" type="button" role="tab" aria-controls="account-profile" aria-selected="false">Account Profile</button>
            </li>
            <li class="me-2" role="presentation">
              <button class="inline-block px-4 py-2 hover:bg-ghost-lavender transition duration-300 ease-in-out border-b-2 rounded-t-lg" id="change-username-tab" data-tabs-target="#change-username" type="button" role="tab" aria-controls="change-username" aria-selected="false">Change Username</button>
            </li>
            <li class="me-2" role="presentation">
              <button class="inline-block px-4 py-2 hover:bg-ghost-lavender transition duration-300 ease-in-out border-b-2 rounded-t-lg" id="change-password-tab" data-tabs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">Change Password</button>
            </li>
            <li role="presentation">
              <button class="inline-block px-4 py-2 hover:bg-ghost-lavender transition duration-300 ease-in-out border-b-2 rounded-t-lg" id="change-email-tab" data-tabs-target="#change-email" type="button" role="tab" aria-controls="change-email" aria-selected="false">Change Email Address</button>
            </li>
          </ul>
        </div>
        <div id="tab-content" class="pb-6">
          <!-- Account Profile Tab -->
          <div class="hidden" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab">
            <h1 class="text-4xl font-bold text-corn-flower-blue mb-8">
              Account Profile
            </h1>
            <!-- Student number -->
            <div class="grid gap-6 mb-6 md:grid-cols-8">
              <div class="col-span-2">
                <div class="block rounded-2xl border border-purple-blue overflow-y-auto space-y-4">
                  <div class="px-8 py-4 flex justify-between">
                    <span class="text-corn-flower-blue font-medium">
                      Student Number:
                    </span>
                    <span class="text-deep-koamaru font-normal">12-3456</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-3">
              <!-- Personal data section -->
              <div class="col-span-1">
                <div class="block rounded-2xl border border-purple-blue overflow-y-auto space-y-4">
                  <span class="border-purple-blue border-b border-solid block bg-ghost-lavender flex items-center py-4 pl-7 gap-2.5">
                    <h5 class="text-xl font-medium text-corn-flower-blue">Personal</h5>
                  </span>
                  <div class="px-8 pt-1 pb-7 grid grid-cols-2 gap-4">
                    <!-- First Name -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      First Name:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">Juan</span>
                    <!-- Middle Name -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Middle Name:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">Dela</span>
                    <!-- Last Name -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Last Name:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">Cruz</span>
                    <!-- Suffix -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Suffix:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">Jr.</span>
                    <!-- Date of Birth -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Date of Birth:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">November 32, 2099</span>
                  </div>
                </div>
              </div>
              <!-- Academic Data Section -->
              <div class="col-span-1">
                <div class="block rounded-2xl border border-purple-blue overflow-y-auto space-y-4 h-full">
                  <span class="border-purple-blue border-b border-solid block bg-ghost-lavender flex items-center py-4 pl-7 gap-2.5">
                    <h5 class="text-xl font-medium text-corn-flower-blue">Academic</h5>
                  </span>
                  <div class="px-8 pt-1 pb-7 grid grid-cols-2 gap-4">
                    <!-- Program -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Program:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">BSIT</span>
                    <!-- Year Level -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Year Level:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">1st Year</span>
                    <!-- Classification -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Classification:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">Regular</span>
                    <!-- Section -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Section:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">SBIT-1A</span>
                  </div>
                </div>
              </div>
              <!-- Account data section -->
              <div class="col-span-1">
                <div class="block rounded-2xl border border-purple-blue overflow-y-auto space-y-4 h-full">
                  <span class="border-purple-blue border-b border-solid block bg-ghost-lavender flex items-center py-4 pl-7 gap-2.5">
                    <h5 class="text-xl font-medium text-corn-flower-blue">Account</h5>
                  </span>
                  <div class="px-8 pt-1 pb-7 grid grid-cols-2 gap-4">
                    <!-- Email Address -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Email Address:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1 truncate">juan.dela.cruz@gmail.com</span>
                    <!-- Username -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Username:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">juandelacruz123</span>
                    <!-- Temporary Password -->
                    <span class="text-corn-flower-blue font-medium col-span-1">
                      Temporary Password:
                    </span>
                    <span class="text-deep-koamaru font-normal col-span-1">juanpanot</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Change Username Tab -->
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="change-username" role="tabpanel" aria-labelledby="change-username-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Change username tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
          </div>
          <!-- Change Password Tab -->
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Change password tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
          </div>
          <!-- Change Email Address Tab -->
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Change email address tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
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