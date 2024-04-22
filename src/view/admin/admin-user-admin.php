<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Management System | Admin User - Admin</title>
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
  <div class="p-4 sm:ml-64 h-screen flex flex-col">
    <div class="pt-4 px-5 mt-14 flex-grow flex flex-col">
      <h1 class="font-bold text-4xl text-corn-flower-blue">Admins List</h1>
      <!-- Main Container -->
      <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-6 pt-8">
        <!-- Register new account -->
        <button type="button" data-modal-target="register-modal" data-modal-toggle="register-modal" class="px-5 py-2.5 text-sm font-medium inline-flex items-center rounded-md bg-neon-blue text-white cursor-pointer transition ease-in-out duration-300 hover:scale-105 hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano">
          <svg class="w-4 h-4 mr-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M8 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.1a5 5 0 0 0-4.7 1.4l-6.7 6.6a3 3 0 0 0-.8 1.6l-.7 3.7a3 3 0 0 0 3.5 3.5l3.7-.7a3 3 0 0 0 1.5-.9l4.2-4.2V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M17.4 8a1 1 0 0 1 1.2.3 1 1 0 0 1 0 1.6l-.3.3-1.6-1.5.4-.4.3-.2Zm-2.1 2.1-4.6 4.7-.4 1.9 1.9-.4 4.6-4.7-1.5-1.5ZM17.9 6a3 3 0 0 0-2.2 1L9 13.5a1 1 0 0 0-.2.5L8 17.8a1 1 0 0 0 1.2 1.1l3.7-.7c.2 0 .4-.1.5-.3l6.6-6.6A3 3 0 0 0 18 6Z" clip-rule="evenodd" />
          </svg>
          Register
        </button>
        <!-- Main modal -->
        <div id="register-modal" data-modal-backdrop="static" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
          <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-2xl shadow">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-indigo-100">
                <h1 class="text-4xl font-bold text-corn-flower-blue">
                  Create account
                </h1>
                <!-- Close modal -->
                <button type="button" class="rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center text-neon-blue focus:outline-none hover:bg-ghost-lavender focus:ring-4 focus:ring-deep-lav-blue transition ease-in-out duration-300 hover:scale-105 cursor-pointer" data-modal-toggle="register-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <form class="p-6 bg-white">
                <!-- Student number -->
                <div class="grid gap-6 mb-6 md:grid-cols-7">
                  <div class="col-span-2">
                    <label for="student-number" class="block mb-2 text-sm font-medium text-deep-koamaru">Student number</label>
                    <input type="text" id="student-number" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" pattern="[0-9]{2}-[0-9]{4}" placeholder="12-3456" required>
                  </div>
                </div>
                <!-- Personal data section -->
                <hr class="h-px my-4 bg-indigo-100 border-0 border-indigo-100">
                <h3 class="text-2xl font-medium text-deep-koamaru mb-6">
                  Personal
                </h3>
                <div class="grid gap-6 mb-6 md:grid-cols-7">
                  <!-- First name -->
                  <div class="col-span-2">
                    <label for="first-name" class="block mb-2 text-sm font-medium text-deep-koamaru">First name</label>
                    <input type="text" id="first-name" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Juan" required>
                  </div>
                  <!-- Middle name -->
                  <div class="col-span-2">
                    <label for="middle-name" class="block mb-2 text-sm font-medium text-deep-koamaru">Middle name</label>
                    <input type="text" id="middle-name" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Dela">
                  </div>
                  <!-- Last name -->
                  <div class="col-span-2">
                    <label for="last-name" class="block mb-2 text-sm font-medium text-deep-koamaru">Last name</label>
                    <input type="text" id="last-name" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Dela Cruz" required>
                  </div>
                  <!-- Suffix -->
                  <div class="col-span-1">
                    <label for="suffix" class="block mb-2 text-sm font-medium text-deep-koamaru">Suffix</label>
                    <select id="suffix" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300">
                      <option value="" selected>Select</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                      <option value="IV">IV</option>
                      <option value="V">V</option>
                      <option value="VI">VI</option>
                    </select>
                  </div>
                  <!-- Birth date -->
                  <div class="col-span-2">
                    <label for="birth-date" class="block mb-2 text-sm font-medium text-deep-koamaru">Date of birth</label>
                    <div class="relative max-w-sm">
                      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-moody-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                      </div>
                      <input datepicker datepicker-autohide type="text" id="birth-date" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full ps-10 p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Select date" required>
                    </div>
                  </div>
                </div>
                <!-- Academic data section -->
                <hr class="h-px my-4 bg-indigo-100 border-0 border-indigo-100">
                <h3 class="text-2xl font-medium text-deep-koamaru mb-6">
                  Academic
                </h3>
                <div class="grid gap-6 mb-6 md:grid-cols-7">
                  <!-- Program -->
                  <div class="col-span-2">
                    <label for="program" class="block mb-2 text-sm font-medium text-deep-koamaru">Program</label>
                    <select id="program" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" required>
                      <option value="" selected disabled>Select</option>
                      <option value="BSENT">BSENT</option>
                      <option value="BSA">BSA</option>
                      <option value="BSMA">BSMA</option>
                      <option value="BSIE">BSIE</option>
                      <option value="BSECE">BSECE</option>
                      <option value="BSIT">BSIT</option>
                      <option value="BSCS">BSCS</option>
                      <option value="BSIS">BSIS</option>
                      <option value="BSCE">BSCE</option>
                    </select>
                  </div>
                  <!-- Year level -->
                  <div class="col-span-2">
                    <label for="year-level" class="block mb-2 text-sm font-medium text-deep-koamaru">Year level</label>
                    <select id="year-level" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" required>
                      <option value="" selected disabled>Select</option>
                      <option value="1st-year">1st year</option>
                      <option value="2nd-year">2nd year</option>
                      <option value="3rd-year">3rd year</option>
                      <option value="4th-year">4th year</option>
                      <option value="Irregular">Irregular</option>
                    </select>
                  </div>
                  <!-- Classification -->
                  <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-deep-koamaru">Classification</label>
                    <div class="flex mt-4">
                      <div class="flex items-center me-10">
                        <input id="regular" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-neon-blue bg-ghost-white border-lavender focus:ring-neon-blue focus:ring-2 cursor-pointer transition duration-300 ease-in-out">
                        <label for="regular" class="ms-2 text-sm font-medium text-deep-koamaru">Regular</label>
                      </div>
                      <div class="flex items-center me-4">
                        <input id="irregular" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-neon-blue bg-ghost-white border-lavender focus:ring-neon-blue focus:ring-2 cursor-pointer transition duration-300 ease-in-out">
                        <label for="irregular" class="ms-2 text-sm font-medium text-deep-koamaru">Irregular</label>
                      </div>
                    </div>
                  </div>
                  <!-- Section -->
                  <div class="col-span-1">
                    <label for="section" class="block mb-2 text-sm font-medium text-deep-koamaru">Section</label>
                    <input type="text" id="section" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="SBIT-1A" required>
                  </div>
                </div>
                <!-- Account data section -->
                <hr class="h-px my-4 bg-indigo-100 border-0 dark:border-indigo-100">
                <h3 class="text-2xl font-medium text-deep-koamaru mb-6">
                  Account
                </h3>
                <div class="grid gap-6 mb-6 md:grid-cols-7">
                  <!-- Email address -->
                  <div class="col-span-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-deep-koamaru">Email address</label>
                    <input type="email" id="email" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="juan.dela.cruz@gmail.com" required>
                  </div>
                  <!-- Username -->
                  <div class="col-span-2">
                    <label for="username" class="block mb-2 text-sm font-medium text-deep-koamaru">Username</label>
                    <input type="text" id="username" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="Juan123" required>
                  </div>
                  <!-- Temporary password -->
                  <div class="col-span-2">
                    <label for="password" class="block mb-2 text-sm font-medium text-deep-koamaru">Temporary password</label>
                    <input type="text" id="password" class="bg-ghost-white border border-lavender text-deep-koamaru text-sm rounded-lg focus:ring-neon-blue focus:border-neon-blue block w-full p-2.5 placeholder-moody-blue transition ease-in-out duration-300" placeholder="•••••••••" required>
                  </div>
                </div>
                <!-- Modal footer -->
                <div class="border-t border-indigo-100 pt-6">
                  <!-- Register button -->
                  <button data-modal-target="register-confirmation-modal" data-modal-toggle="register-confirmation-modal" type="button" class="text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-md text-sm px-5 py-2.5 text-center transition ease-in-out duration-300 hover:scale-105">Register</button>
                  <!-- Cancel button -->
                  <button data-modal-hide="register-modal" type="button" class="ms-3 text-neon-blue bg-ghost-lavender hover:bg-lavender-blue focus:ring-4 focus:outline-none focus:ring-deep-lav-blue rounded-md text-sm font-medium px-5 py-2.5 focus:z-10 transition duration-300 ease-in-out hover:scale-105">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Confirmation Modal Content -->
        <div id="register-confirmation-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
          <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-2xl py-8">
              <div class="p-4 md:p-5">
                <svg class="mx-auto mb-4 text-corn-flower-blue w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-12 text-lg font-normal text-center text-deep-koamaru px-6">Are you sure you want to register the account?</h3>
                <div class="gap-4 flex justify-center">
                  <button data-modal-hide="register-confirmation-modal" data-modal-target="success-modal" data-modal-toggle="success-modal" type="button" class="text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-lg text-lg font-medium inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">
                    Yes
                  </button>
                  <button data-modal-hide="register-confirmation-modal" type="button" class="text-deep-koamaru bg-transparent border border-purple-blue hover:bg-ghost-lavender focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-lg text-lg font-medium inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">No</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Success Modal -->
        <div id="success-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full backdrop-blur-sm bg-ghost-lavender bg-opacity-50">
          <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-2xl py-8">
              <div class="p-4 md:p-5">
                <svg class="mx-auto mb-4 text-green-400 w-16 h-16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 1 0-18c1.052 0 2.062.18 3 .512M7 9.577l3.923 3.923 8.5-8.5M17 14v6m-3-3h6" />
                </svg>
                <h3 class="mb-12 text-lg font-normal text-deep-koamaru text-center">Admin account registered successfully!</h3>
                <div class="flex justify-center">
                  <button data-modal-hide="success-modal" type="button" class="text-white bg-neon-blue hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano font-medium rounded-lg text-lg font-medium inline-flex items-center px-7 py-2.5 text-center transition duration-300 ease-in-out hover:scale-105">
                    OK
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Search and filter bar -->
        <div class="flex">
          <!-- <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your</label> -->
          <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-neon-blue rounded-s-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano transition ease-in-out duration-300" type="button">All programs
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <!-- programs dropdown - tabi ng search bar -->
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg drop-shadows w-44">
            <ul class="py-2 text-sm text-deep-koamaru" aria-labelledby="dropdown-button">
              <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-ghost-white hover:text-neon-blue transition duration-300 ease-in-out">BSIT</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-ghost-white hover:text-neon-blue transition duration-300 ease-in-out">BSCS</button>
              </li>
              <li>
                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-ghost-white hover:text-neon-blue transition duration-300 ease-in-out">BSIS</button>
              </li>
            </ul>
          </div>
          <div class="relative w-[15rem]">
            <!-- Search -->
            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm border border-lavender text-deep-koamaru bg-lav-sant rounded-e-lg focus:ring-neon-blue focus:border-neon-blue placeholder-moody-blue transition ease-in-out duration-300" placeholder="Search...">
            <!-- Search Button -->
            <button type="submit" class="absolute top-0 end-0 p-2.5 px-4 text-sm font-medium h-full text-white bg-neon-blue rounded-e-md hover:bg-free-speech-blue focus:ring-4 focus:outline-none focus:ring-perano transition duration-300 ease-in-out">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
              <span class="sr-only">Search</span>
            </button>
          </div>
        </div>
      </div>
      <!-- Tab Component for Enrolled and Unenrolled -->
      <div class="mb-4">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center transition duration-300 ease-in-out" id="default-tab" data-tabs-toggle="tab-content" role="tablist" data-tabs-inactive-classes="text-moody-blue" data-tabs-active-classes="text-neon-blue border-neon-blue bg-ghost-lavender">
          <li class="me-2" role="presentation">
            <button class="inline-block px-4 py-2 hover:bg-ghost-lavender transition duration-300 ease-in-out border-b-2 rounded-t-lg" id="active-table-tab" data-tabs-target="#active" type="button" role="tab" aria-controls="active" aria-selected="false">Active</button>
          </li>
          <li class="me-2" role="presentation">
            <button class="inline-block px-4 py-2 hover:bg-ghost-lavender transition duration-300 ease-in-out border-b-2 rounded-t-lg" id="inactive-table-tab" data-tabs-target="#inactive" type="button" role="tab" aria-controls="inactive" aria-selected="false">Inactive</button>
          </li>
        </ul>
      </div>
      <!-- Active Table -->
      <div id="tab-content">
        <div class="hidden relative overflow-x-auto sm:rounded-lg" id="active" role="tabpanel" aria-labelledby="active-table-tab">
          <div class="max-h-[480px] overflow-y-auto">
            <table class="w-full text-sm text-left rtl:text-right text-deep-koamaru">
              <thead class="text-xs text-corn-flower-blue uppercase bg-ghost-lavender sticky top-0">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Student name
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Student number
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Program
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Classification
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Section
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b border-indigo-100">
                  <th scope="row" class="px-6 py-4 font-medium text-deep-koamaru whitespace-nowrap">
                    Lian V. Torres
                  </th>
                  <td class="px-6 py-4">
                    22-2806
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Inactive Table -->
        <div class="hidden relative overflow-x-auto sm:rounded-lg" id="inactive" role="tabpanel" aria-labelledby="inactive-table-tab">
          <div class="max-h-[480px] overflow-y-auto">
            <table class="w-full text-sm text-left rtl:text-right text-deep-koamaru">
              <thead class="text-xs text-corn-flower-blue uppercase bg-ghost-lavender sticky top-0">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    Student name
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Student number
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Program
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Classification
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Section
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b border-indigo-100">
                  <th scope="row" class="px-6 py-4 font-medium text-deep-koamaru whitespace-nowrap">
                    Frederick C. Moreno
                  </th>
                  <td class="px-6 py-4">
                    22-2808
                  </td>
                  <td class="px-6 py-4">
                    BSIT
                  </td>
                  <td class="px-6 py-4">
                    Irregular
                  </td>
                  <td class="px-6 py-4">
                    -
                  </td>
                  <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Archive</a>
                  </td>
                </tr>
              </tbody>
            </table>
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