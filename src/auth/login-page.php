<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Login</title>
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
  <div class="h-screen grid md:grid-cols-2">
    <!-- Left side -->
    <div class="col-span-1 hidden md:block">
      <div id="default-carousel" class="relative object-cover w-full h-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-full overflow-hidden">
          <!-- Picture 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../public/assets/img/qcu-image1-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
          <!-- Picture 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../public/assets/img/qcu-image2-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by Joanah Marie Aldave">
          </div>
          <!-- Picture 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../public/assets/img/qcu-image3-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
          <!-- Picture 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../public/assets/img/qcu-image4-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by Joanah Marie Aldave">
          </div>
          <!-- Picture 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../public/assets/img/qcu-image5-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
          <!-- Picture 6 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../../public/assets/img/qcu-image6-login.png" class="absolute block object-cover w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="QCU Photograph by CSS">
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="5"></button>
        </div>
      </div>
    </div>
    <!-- Right side -->
    <div class="col-span-1 p-12">
      <span class="inline-flex">
        <img src="../../assets/images/LMS-logo.png" alt="LMS Logo" class="h-10 w-auto mr-6">
        <h3 class="font-medium text-deep-koamaru text-xl">Learning Management System</h3>
      </span>
      <!-- Greeting -->
      <div class="flex-col flex items-center justify-center h-full">
        <h1 class="font-bold text-deep-koamaru text-4xl mb-8">Welcome to LMS!</h1>
        <div class="w-full max-w-sm p-4 bg-white rounded-2xl drop-shadows sm:p-6 md:p-8">
          <!-- Form -->
          <form class="space-y-3" action="#">
            <h5 class="text-xl font-medium text-deep-koamaru mb-7">Sign In to your account</h5>
            <!-- Username Input -->
            <label for="user" class="block text-sm font-medium text-deep-koamaru">Username</label>
            <div class="flex">
              <span class="inline-flex items-center px-3 text-sm text-witty-blue bg-ghost-lavender border rounded-e-0 border-lavender rounded-s-md">
                <svg class="w-6 h-6 text-witty-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd" />
                </svg>
              </span>
              <input type="text" id="user" class="rounded-none rounded-e-md bg-ghost-white border text-deep-koamaru focus:ring-neon-blue focus:border-neon-blue block flex-1 min-w-0 w-full text-sm border-lavender p-2.5 placeholder-moody-blue" placeholder="Your username">
            </div>
            <!-- Password Input -->
            <label for="password" class="block text-sm font-medium text-deep-koamaru pt-3">Password</label>
            <div class="flex">
              <span class="inline-flex items-center px-3 text-sm text-witty-blue bg-ghost-lavender border rounded-e-0 border-lavender rounded-s-md">
                <svg class="w-6 h-6 text-witty-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7c0-1.1.9-2 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6c.6 0 1 .4 1 1v3a1 1 0 1 1-2 0v-3c0-.6.4-1 1-1Z" clip-rule="evenodd" />
                </svg>
              </span>
              <input type="password" id="password" class="rounded-none rounded-e-md bg-ghost-white border text-deep-koamaru focus:ring-neon-blue focus:border-neon-blue block flex-1 min-w-0 w-full text-sm border-lavender p-2.5 placeholder-moody-blue" placeholder="Your password">
            </div>
            <!-- Show and Forgot Password container -->
            <div class="flex justify-between pb-4">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember" type="checkbox" onclick="togglePasswordVisibility()" value="" class="w-4 h-4 border border-lavender rounded bg-ghost-white focus:ring-3 focus:ring-neon-blue text-neon-blue cursor-pointer">
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-deep-koamaru">Show Password</label>
              </div>
              <a href="./forgot-password.php" data-popover-target="forgot-pass-popover" data-popover-placement="bottom" class="text-neon-blue hover:underline text-sm font-medium">Forgot Password?</a>
              <!-- Optional kemeruts -->
              <!-- <a href="#" class="ms-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a> -->
            </div>
            <!-- Error Message for validation -->
            <!-- <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p> -->
            <!-- Login Button -->
            <button type="submit" class="w-full text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center">Login</button>
            <!-- Popver for admin login link -->
            <div data-popover id="forgot-pass-popover" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
              <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                <h3 class="font-semibold text-gray-900 dark:text-white">Forgot Password Page</h3>
              </div>
              <div class="px-3 py-2">
                <p>Click this link and you'll be directed to the forgot password page.</p>
              </div>
              <div data-popper-arrow></div>
            </div>
          </form>
        </div>
        <!-- Footer -->
        <span id="year" class="block text-sm text-deep-koamaru sm:text-center mt-11"></span>
        <!-- Popover for QCU Website footer -->
        <div data-popover id="qcu-popover" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-96 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
          <div class="grid grid-cols-5">
            <div class="col-span-3 p-3">
              <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">About Quezon City University</h3>
                <p>Quezon City University, formerly known as Quezon City Polytechnic University, is a city government-funded university in Quezon City, Philippines. It was established on March 1, 1994, as the Quezon City Polytechnic, offering technical and vocational courses.</p>
                <a href="https://qcu.edu.ph/" target="_blank" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                  </svg></a>
              </div>
            </div>
            <img src="../../../public/assets/img/qcu-map-preview.png" class="h-full object-cover col-span-2" alt="QCU map" />
            <!-- Nasisira responsiveness pag nag embed ng map omai -->
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15436.896375439417!2d121.0325339!3d14.6999155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b0d899095555%3A0x523cb309be95e9a6!2sQuezon%20City%20University!5e0!3m2!1sen!2sph!4v1707633815719!5m2!1sen!2sph" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-full col-span-2" alt="QCU map"></iframe> -->
          </div>
          <div data-popper-arrow></div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // For password visibility
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById('password');
      passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    }
    // Footer date
    document.addEventListener('DOMContentLoaded', function() {
      const yearSpan = document.getElementById('year');
      const currentYear = new Date().getFullYear();
      yearSpan.innerHTML = `© ${currentYear} <a href="https://qcu.edu.ph/" data-popover-target="qcu-popover" class="hover:underline" target="_blank">LMS</a>. All Rights Reserved.`;
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  <script src="../../assets/tailwind.js"></script>
</body>

</html>