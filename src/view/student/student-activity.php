<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Student Activity</title>
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
  <div class="p-4 sm:ml-64 sm:mr-[22rem]">
    <div class="pt-4 pl-4 mt-14">
      <!-- Course/Activity Title -->
      <h1 class="font-bold text-4xl pb-6 text-corn-flower-blue mb-2">Software Engineering | Activity 1</h1>
      <!-- Instructions -->
      <div class="bg-lav-sant pt-6 pb-8 px-8 rounded-2xl">
        <h2 class="text-lg font-medium text-deep-koamaru mb-3">Instructions:</h2>
        <ul class="max-w-md space-y-1 text-sm text-deep-koamaru list-disc list-inside mb-4">
          <li>
            <span class="font-medium">Time:</span> Complete it within 30 minutes of starting.
          </li>
          <li>
            <span class="font-medium">Due Date:</span> Due by 11:59 PM on April 30, 2024
          </li>
          <li>
            <span class="font-medium">Number of Attempts:</span> You have only 1 attempt for this quiz.
          </li>
        </ul>
        <a href="" id="pdfLink">SE101-Activity-1.pdf</a>
        <!-- <iframe class="pdf w-full h-full py-8 px-[5rem] rounded-2xl" id="learning-material" src="../../../assets/learning-materials/sample-learning-material.pdf">
        </iframe> -->
      </div>
    </div>
  </div>
  <!-- Right Sidebar -->
  <aside id="logo-sidebar" class="fixed top-0 right-0 z-40 w-[22rem] h-screen pt-20 transition-transform -translate-x-full bg-ghost-white sm:translate-x-0 hidden sm:block" aria-label="Sidebar">
    <div class="h-full pt-2 pb-7 space-y-5 pl-1 pr-8 overflow-y-auto bg-ghost-white">
      <!-- Assignment card -->
      <div class="block max-w-sm p-8 bg-white rounded-2xl drop-shadows overflow-y-auto">
        <h5 class="mb-6 text-2xl font-bold tracking-tight text-corn-flower-blue">Assignment</h5>
        <div class="space-y-2">
          <!-- Status -->
          <span class="inline-flex items-center gap-3 font-medium text-deep-koamaru">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-corn-flower-blue">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
            </svg>
            Status:
            <span class="inline-flex items-center bg-lime-50 text-green-700 text-sm font-medium px-4 py-1.5 rounded-full">
              Done
            </span>
          </span>
          <!-- Start Date -->
          <span class="inline-flex items-center gap-3 font-medium text-deep-koamaru">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-corn-flower-blue">
              <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
              <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
            </svg>
            Start: April 12, 2024
          </span>
          <!-- Due Date -->
          <span class="inline-flex items-center gap-3 font-medium text-deep-koamaru">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-corn-flower-blue">
              <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
              <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
            </svg>
            End: April 16, 2024
          </span>
          <!-- Grade -->
          <span class="inline-flex items-center gap-3 font-medium text-deep-koamaru">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-corn-flower-blue">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
            </svg>
            Grade:
            <span class="inline-flex items-center bg-blue-50 text-royal-blue text-sm font-medium px-4 py-1.5 rounded-full">
              Pending
            </span>
          </span>
        </div>
      </div>
      <!-- Add Comment card -->
      <div class="block max-w-sm p-8 bg-white rounded-2xl drop-shadows overflow-y-auto space-y-4">
        <h5 class="mb-2 text-lg font-medium tracking-tight text-corn-flower-blue">Private Comments</h5>
        <form>
          <label for="chat" class="sr-only">Add comment</label>
          <div class="flex items-center gap-2">
            <textarea id="chat" rows="1" class="block p-2.5 w-full text-sm bg-ghost-white rounded-lg border border-none cursor-pointer focus:cursor-auto focus:ring-neon-blue focus:border-neon-blue resize-none overflow-hidden text-deep-koamaru placeholder:text-neon-blue focus:placeholder:text-deep-koamaru placeholder:font-medium transition duration-300 ease-in-out hover:bg-ghost-lavender focus:hover:bg-ghost-white focus:placeholder:font-normal" placeholder="Add comment"></textarea>
            <!-- Submit Button -->
            <button id="submit-button" type="submit" class="hidden inline-flex justify-center p-2 text-witty-blue rounded-full cursor-not-allowed transition duration-300 ease-in-out">
              <!-- hover:bg-ghost-lavender text-neon-blue -->
              <svg class="w-4 h-4 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
              </svg>
              <span class="sr-only">Submit</span>
            </button>
          </div>
        </form>
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
        submitButton.classList.add('text-witty-blue', 'cursor-not-allowed');
        submitButton.classList.remove('hover:bg-ghost-lavender', 'text-neon-blue', 'cursor-pointer');
      } else {
        submitButton.disabled = false;
        submitButton.classList.add('hover:bg-ghost-lavender', 'text-neon-blue', 'cursor-pointer');
        submitButton.classList.remove('text-witty-blue', 'cursor-not-allowed');
      }
    });

    // PDF Viewer
    document.getElementById('pdfLink').onclick = function() {
      var win = window.open();
      win.document.write('<iframe src="../../../assets/learning-materials/sample-learning-material.pdf" frameborder="0" style="width: 100%; height: 100%;" allowfullscreen></iframe>');
    };
  </script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../../../assets/tailwind.config.js"></script>
</body>

</html>