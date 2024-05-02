<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Instructor Settings</title>
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
<!-- Instructor side/navigation bar -->
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
          <div class="hidden space-y-5" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab">
            <h1 class="text-4xl font-bold text-corn-flower-blue mb-8">
              Account Profile
            </h1>
            <!-- Student number -->
            <div class="inline-flex rounded-2xl bg-white drop-shadows overflow-y-auto space-y-4">
              <div class="px-8 py-5 flex items-center gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-24 h-24 text-corn-flower-blue">
                  <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                </svg>
                <div class="space-y-2 text-center">
                  <span class="text-neon-blue font-bold text-2xl bg-ghost-lavender px-3 py-1 rounded-md">12-3456</span>
                  <span class="block text-deep-koamaru font-medium text-sm">CSS Department</span>
                </div>
              </div>
            </div>
            <!-- Main Container -->
            <div class="grid gap-6 mb-6 grid-cols-3">
              <!-- Personal -->
              <div class="col-start-1 col-span-4">
                <div class="block rounded-2xl bg-white shadow-[10px_10px_30px_-16px_rgba(224,227,246)] overflow-y-auto space-y-4 p-8">
                  <h5 class="text-2xl font-medium text-corn-flower-blue">Personal Information</h5>
                  <div class="grid grid-cols-5 pt-4">
                    <!-- First -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="block text-slate-500">First name</span>
                      <span class="block text-deep-koamaru font-medium">Juan</span>
                    </div>
                    <!-- Middle Name  -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="block text-slate-500">Middle name</span>
                      <span class="block text-deep-koamaru font-medium">Dela</span>
                    </div>
                    <!-- Last Name -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="block text-slate-500">Last name</span>
                      <span class="block text-deep-koamaru font-medium">Cruz</span>
                    </div>
                    <!-- Suffix -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="block text-slate-500">Suffix</span>
                      <span class="block text-deep-koamaru font-medium">Jr.</span>
                    </div>
                    <!-- Date of Birth -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="block text-slate-500">Date of Birth</span>
                      <span class="block text-deep-koamaru font-medium">July 32, 2099</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Account -->
              <div class="col-start-1 col-span-4">
                <div class="block rounded-2xl bg-white shadow-[10px_10px_30px_-16px_rgba(224,227,246)] overflow-y-auto space-y-4 p-8">
                  <h5 class="text-2xl font-medium text-corn-flower-blue">Account Information</h5>
                  <div class="grid grid-cols-5 pt-4">
                    <!-- Email Address -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="block text-slate-500">Email Address</span>
                      <span class="block text-deep-koamaru font-medium">juan.dela.cruz@gmail.com</span>
                    </div>
                    <!-- Username  -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="block text-slate-500">Username</span>
                      <span class="block text-deep-koamaru font-medium">juandelacruz123</span>
                    </div>
                    <!-- Temporary Password -->
                    <div class="space-y-2.5 col-span-1">
                      <span class="block text-slate-500">Temporary Password</span>
                      <span class="block text-deep-koamaru font-medium">juanpanot123</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- // Account Profile -->
          <!-- Change Username Tab -->
          <div class="hidden p-4" id="change-username" role="tabpanel" aria-labelledby="change-username-tab">
            <div class="w-1/2 m-auto">
              <!-- Change Username -->
              <div class="flex flex-col justify-center items-center">
                <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
                  <form class="space-y-3" action="#">
                    <h5 class="text-xl font-medium text-deep-koamaru mb-3">Change Username</h5>
                    <p class="block text-sm font-normal text-deep-koamaru pb-5">Lorem ipsum dolor sit amet, consectetur adipis.</p>
                    <label for="user" class="block text-sm font-medium text-deep-koamaru">Current Password</label>
                    <!-- Current Password Input -->
                    <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Your current password" required>
                    <label for="user" class="block text-sm font-medium text-deep-koamaru pt-4">New Username</label>
                    <!-- New Username -->
                    <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="New username" required><br>
                    <!-- Error Message for validation -->
                    <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
                    <!-- Submit Button -->
                    <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
                  </form>
                </div>
              </div>
              <!-- // Change Username -->
            </div>
          </div>
          <!-- // Change Username Tab -->
          <!-- Change Password Tab -->
          <div class="hidden p-4" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
            <div class="w-1/2 m-auto">
              <!-- Change Password -->
              <div class="flex flex-col justify-center items-center">
                <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
                  <form class="space-y-3" action="#">
                    <h5 class="text-xl font-medium text-deep-koamaru mb-3">Change Password</h5>
                    <p class="block text-sm font-normal text-deep-koamaru pb-5">Lorem ipsum dolor sit amet, consectetur adipis.</p>
                    <label for="user" class="block text-sm font-medium text-deep-koamaru">Current Password</label>
                    <!-- Current Password Input -->
                    <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Your current password" required>
                    <label for="user" class="block text-sm font-medium text-deep-koamaru pt-4">New Password</label>
                    <!-- New Password -->
                    <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="New Password" required><br>
                    <!-- Error Message for validation -->
                    <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
                    <!-- Submit Button -->
                    <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
                  </form>
                </div>
              </div>
              <!-- // Change Password -->
            </div>
          </div>
          <!-- Change Email Address Tab -->
          <div class="hidden p-4" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
            <!-- Change Email Address -->
            <div class="flex flex-col justify-center items-center">
              <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
                <form class="space-y-3" action="#">
                  <h5 class="text-xl font-medium text-deep-koamaru mb-3">Change Email Address</h5>
                  <p class="block text-sm font-normal text-deep-koamaru pb-5">Lorem ipsum dolor sit amet, consectetur adipis.</p>
                  <label for="user" class="block text-sm font-medium text-deep-koamaru">Current Password</label>
                  <!-- Current Password Input -->
                  <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Your current password" required>
                  <label for="user" class="block text-sm font-medium text-deep-koamaru pt-4">New Email Address</label>
                  <!-- New Email Address -->
                  <input type="text" id="" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="New email address" required><br>
                  <!-- Error Message for validation -->
                  <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
                  <!-- Submit Button -->
                  <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
                </form>
              </div>
            </div>
            <!-- // Change Email Address -->
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