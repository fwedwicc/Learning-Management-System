<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Forgot Password</title>
  <!-- Tailwind cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Flowbite cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <!-- Icon -->
  <link rel="icon" type="image/png" href="../../assets/images/LMS-logo.png" />
  <!-- Css link -->
  <link rel="stylesheet" href="../../assets/styles.css">
</head>

<body class="bg-ghost-white">
  <div class="p-12 h-screen">
    <span class="inline-flex">
      <img src="../../assets/images/LMS-logo.png" alt="LMS Logo" class="h-9 w-auto mr-6">
      <h3 class="font-medium text-corn-flower-blue text-xl">Learning Management System</h3>
    </span>
    <div class="flex-col flex items-center justify-center h-full">
      <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
        <!-- Form -->
        <form class="space-y-3" action="#">
          <h5 class="text-xl font-medium text-corn-flower-blue mb-3">Forgot Password</h5>
          <p class="block text-sm font-normal text-deep-koamaru pb-5">Please enter your email address to receive an OTP</p>
          <!-- Email Address Input -->
          <input type="text" id="first-name" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-md focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="juan.delacruz@gmail.com" required>
          <!-- Error Message for validation -->
          <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
          <!-- Action Buttons -->
          <div class="flex gap-4 pt-8">
            <!-- Cancel -->
            <button type="button" class="w-full text-neon-blue bg-ghost-lavender focus:outline-none hover:bg-lavender-blue focus:ring-4 focus:ring-deep-lav-blue font-medium rounded-md text-sm px-5 py-2.5 transition ease-in-out duration-300 hover:scale-105">Cancel</button>
            <!-- Continue -->
            <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Continue</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../assets/tailwind.config.js"></script>
</body>

</html>