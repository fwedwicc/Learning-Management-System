<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Test</title>
  <!-- Tailwind cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <!-- Flowbite cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <!-- Icon -->
  <link rel="icon" type="image/png" href="../../../assets/images/LMS-logo.png" />
  <!-- Css link -->
  <link rel="stylesheet" href="../assets/style.css">
  <style>
    .jcalendar-selected {
      background-color: #4F46E5 !important;
      border-radius: 0.5rem;
      color: #ffffff;
    }

    .jcalendar-weekday {
      color: #4F46E5;
      font-weight: 700px;
    }

    .jcalendar-header {
      color: #4F46E5;
    }
  </style>

  <script src="https://jsuites.net/v4/jsuites.js"></script>
  <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
</head>

<body class="bg-ghost-white">
  <div id='calendar'></div>
  <script>
    // Create a new calendar
    jSuites.calendar(document.getElementById('calendar'), {
      format: 'YYYY-MM-DD',
      onupdate: function(a, b) {
        document.getElementById('calendar-value').innerText = b;
      }
    });
  </script>

  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../assets/tailwind.config.js"></script>
</body>

</html>