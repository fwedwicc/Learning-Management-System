<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | OTP Verification</title>
  <!-- Tailwind cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <!-- Flowbite cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <!-- Icon -->
  <link rel="icon" type="image/png" href="../../assets/images/LMS-logo.png" />
  <!-- Css link -->
  <link rel="stylesheet" href="../../assets/style.css">
</head>

<body class="bg-ghost-white">
  <div class="p-12 h-screen">
    <span class="inline-flex items-center">
      <img src="../../assets/images/LMS-logo.png" alt="LMS Logo" class="h-9 w-auto mr-6">
      <h3 class="font-medium text-deep-koamaru text-xl">Learning Management System</h3>
    </span>

    <div class="flex-col flex items-center justify-center h-full">
      <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
        <!-- Form -->
        <form class="space-y-3" action="#">
          <h5 class="text-xl font-medium text-deep-koamaru mb-3">Verification</h5>
          <p class="block text-sm font-normal text-deep-koamaru pb-5">We have sent OTP to your e-mail, type kemerychu.</p>
          <!-- OTP Input -->
          <div class="flex pb-6 space-x-2 rtl:space-x-reverse">
            <div>
              <label for="code-1" class="sr-only">First code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-next="code-2" id="code-1" class="block w-full h-auto py-3 text-sm bg-ghost-white border border-lavender text-corn-flower-blue font-extrabold text-center text-deep-koamaru rounded-lg focus:ring-neon-blue focus:border-neon-blue transition duration-300 ease-in-out" required />
            </div>
            <div>
              <label for="code-2" class="sr-only">Second code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-1" data-focus-input-next="code-3" id="code-2" class="block w-full h-auto py-3 text-sm bg-ghost-white border border-lavender text-corn-flower-blue font-extrabold text-center text-deep-koamaru rounded-lg focus:ring-neon-blue focus:border-neon-blue transition duration-300 ease-in-out" required />
            </div>
            <div>
              <label for="code-3" class="sr-only">Third code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-2" data-focus-input-next="code-4" id="code-3" class="block w-full h-auto py-3 text-sm bg-ghost-white border border-lavender text-corn-flower-blue font-extrabold text-center text-deep-koamaru rounded-lg focus:ring-neon-blue focus:border-neon-blue transition duration-300 ease-in-out" required />
            </div>
            <div>
              <label for="code-4" class="sr-only">Fourth code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-3" data-focus-input-next="code-5" id="code-4" class="block w-full h-auto py-3 text-sm bg-ghost-white border border-lavender text-corn-flower-blue font-extrabold text-center text-deep-koamaru rounded-lg focus:ring-neon-blue focus:border-neon-blue transition duration-300 ease-in-out" required />
            </div>
            <div>
              <label for="code-5" class="sr-only">Fifth code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-4" data-focus-input-next="code-6" id="code-5" class="block w-full h-auto py-3 text-sm bg-ghost-white border border-lavender text-corn-flower-blue font-extrabold text-center text-deep-koamaru rounded-lg focus:ring-neon-blue focus:border-neon-blue transition duration-300 ease-in-out" required />
            </div>
            <div>
              <label for="code-6" class="sr-only">Sixth code</label>
              <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-5" id="code-6" class="block w-full h-auto py-3 text-sm bg-ghost-white border border-lavender text-corn-flower-blue font-extrabold text-center text-deep-koamaru rounded-lg focus:ring-neon-blue focus:border-neon-blue transition duration-300 ease-in-out" required />
            </div>
          </div>
          <!-- Error Message for validation -->
          <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
          <!-- Submit Button -->
          <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Submit</button>
          <!-- Resent OTP link -->
          <span class="block text-sm text-center font-medium text-deep-koamaru pt-1">Didn’t receive OTP? <a href="" class="text-neon-blue hover:underline text-sm font-medium">Resend OTP</a></span>
        </form>
      </div>
    </div>
  </div>

  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../assets/tailwind.config.js"></script>
  <!-- Otp verification js -->
  <script src="./otp-verification.js"></script>
</body>

</html>