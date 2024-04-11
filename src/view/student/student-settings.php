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
      <h1 class="font-bold text-4xl text-corn-flower-blue">Profile Settings</h1>
      <div class="flex flex-col gap-8 pt-8">


        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
          <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="tab-content" role="tablist">
            <li class="me-2" role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg" id="account-profile-tab" data-tabs-target="#account-profile" type="button" role="tab" aria-controls="account-profile" aria-selected="false">Account Profile</button>
            </li>
            <li class="me-2" role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="change-username-tab" data-tabs-target="#change-username" type="button" role="tab" aria-controls="change-username" aria-selected="false">Change Username</button>
            </li>
            <li class="me-2" role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="change-password-tab" data-tabs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">Change Password</button>
            </li>
            <li role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="change-email-tab" data-tabs-target="#change-email" type="button" role="tab" aria-controls="change-email" aria-selected="false">Change Email Address</button>
            </li>
          </ul>
        </div>
        <div id="tab-content">
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Account profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
          </div>
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="change-username" role="tabpanel" aria-labelledby="change-username-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Change username tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
          </div>
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Change password tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
          </div>
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Change email address tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
          </div>
        </div>
        <!-- Submit Button -->
        <button class="w-[10rem] text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105 mt-8">Save Changes</button>
      </div>
    </div>
  </div>


  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
</body>

</html>