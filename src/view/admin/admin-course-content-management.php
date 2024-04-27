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
<!-- Student side/navigation bar -->
<?php
include_once './side-nav-bar.php';
?>

<body class="bg-ghost-white">
  <div class="p-4 sm:ml-64 h-screen flex flex-col border border-solid border-black">
    <div class="pt-4 px-5 mt-14 flex-grow flex flex-col">
      <div class="flex items-center justify-start">
        <span class="gap-4 inline-flex justify-center items-center">
          <h1 class="font-bold text-4xl text-corn-flower-blue">BSIT | <span>Software Engineering</span></h1>
          <span class="inline-flex items-center bg-ghost-lavender text-neon-blue text-sm font-medium px-4 py-2 rounded-full">
            2nd Year 2nd Semester
          </span>
        </span>
      </div>
      <div class="flex justify-end">
        <button class="inline-flex gap-1 items-center justify-center pl-3 pr-4 py-2 bg-neon-blue text-white font-medium cursor-pointer transition ease-in-out duration-300 hover:scale-105 rounded-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano mt-12">
          <svg class="w-5 h-5 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          Add Content
        </button>
      </div>
      <!-- Main Content -->
      <div class="flex items-center justify-center flex-grow overflow-y-auto">
        <div class="bg-indigo-100 p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis nam expedita ullam quos voluptate alias quod obcaecati dolor, repellat maxime sequi deserunt perferendis, asperiores quas reiciendis tempore blanditiis itaque? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum autem dolore voluptas iste nam ratione aliquid eligendi alias omnis, cupiditate veniam illum sunt saepe nihil sapiente cumque odit ad recusandae. Lorrem   Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nobis reiciendis atque. Reprehenderit accusantium doloremque aspernatur eos esse repellendus, cumque optio facilis nemo reiciendis, veniam et illum delectus dolor praesentium. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, rerum? Vero ad aperiam aliquid consequatur quod voluptatem. Quam ut perferendis, error minus provident nulla eos distinctio consequuntur corporis laborum minima.lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui atque incidunt autem, nemo perferendis corporis consequuntur hic? Unde maiores veniam possimus rem laudantium quam, nisi similique recusandae porro excepturi aspernatur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis nam expedita ullam quos voluptate alias quod obcaecati dolor, repellat maxime sequi deserunt perferendis, asperiores quas reiciendis tempore blanditiis itaque? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum autem dolore voluptas iste nam ratione aliquid eligendi alias omnis, cupiditate veniam illum sunt saepe nihil sapiente cumque odit ad recusandae. Lorrem   Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nobis reiciendis atque. Reprehenderit accusantium doloremque aspernatur eos esse repellendus, cumque optio facilis nemo reiciendis, veniam et illum delectus dolor praesentium. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, rerum? Vero ad aperiam aliquid consequatur quod voluptatem. Quam ut perferendis, error minus provident nulla eos distinctio consequuntur corporis laborum minima.lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui atque incidunt autem, nemo perferendis corporis consequuntur hic? Unde maiores veniam possimus rem laudantium quam, nisi similique recusandae porro excepturi aspernatur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis nam expedita ullam quos voluptate alias quod obcaecati dolor, repellat maxime sequi deserunt perferendis, asperiores quas reiciendis tempore blanditiis itaque? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum autem dolore voluptas iste nam ratione aliquid eligendi alias omnis, cupiditate veniam illum sunt saepe nihil sapiente cumque odit ad recusandae. Lorrem   Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nobis reiciendis atque. Reprehenderit accusantium doloremque aspernatur eos esse repellendus, cumque optio facilis nemo reiciendis, veniam et illum delectus dolor praesentium. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, rerum? Vero ad aperiam aliquid consequatur quod voluptatem. Quam ut perferendis, error minus provident nulla eos distinctio consequuntur corporis laborum minima.lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui atque incidunt autem, nemo perferendis corporis consequuntur hic? Unde maiores veniam possimus rem laudantium quam, nisi similique recusandae porro excepturi aspernatur.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis nam expedita ullam quos voluptate alias quod obcaecati dolor, repellat maxime sequi deserunt perferendis, asperiores quas reiciendis tempore blanditiis itaque? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum autem dolore voluptas iste nam ratione aliquid eligendi alias omnis, cupiditate veniam illum sunt saepe nihil sapiente cumque odit ad recusandae. Lorrem   Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nobis reiciendis atque. Reprehenderit accusantium doloremque aspernatur eos esse repellendus, cumque optio facilis nemo reiciendis, veniam et illum delectus dolor praesentium. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, rerum? Vero ad aperiam aliquid consequatur quod voluptatem. Quam ut perferendis, error minus provident nulla eos distinctio consequuntur corporis laborum minima.lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui atque incidunt autem, nemo perferendis corporis consequuntur hic? Unde maiores veniam possimus rem laudantium quam, nisi similique recusandae porro excepturi aspernatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis nam expedita ullam quos voluptate alias quod obcaecati dolor, repellat maxime sequi deserunt perferendis, asperiores quas reiciendis tempore blanditiis itaque? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum autem dolore voluptas iste nam ratione aliquid eligendi alias omnis, cupiditate veniam illum sunt saepe nihil sapiente cumque odit ad recusandae. Lorrem   Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nobis reiciendis atque. Reprehenderit accusantium doloremque aspernatur eos esse repellendus, cumque optio facilis nemo reiciendis, veniam et illum delectus dolor praesentium. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, rerum? Vero ad aperiam aliquid consequatur quod voluptatem. Quam ut perferendis, error minus provident nulla eos distinctio consequuntur corporis laborum minima.lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui atque incidunt autem, nemo perferendis corporis consequuntur hic? Unde maiores veniam possimus rem laudantium quam, nisi similique recusandae porro excepturi aspernatur.
        
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