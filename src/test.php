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
    .ProseMirror:focus {
      outline: none;
    }

    .tiptap ul p,
    .tiptap ol p {
      display: inline;
    }

    .tiptap p.is-editor-empty:first-child::before {
      font-size: 14px;
      content: attr(data-placeholder);
      float: left;
      height: 0;
      pointer-events: none;
    }
  </style>
</head>
<!-- Student side/navigation bar -->
<?php
include_once './view/student/side-nav-bar.php';
?>

<body class="bg-ghost-white">
  <div class="p-4 sm:ml-64 sm:mr-72">
    <div class="pt-4 pl-4 rounded-2xl border-purple-blue mt-14">
      <h1 class="font-bold text-4xl pb-6 text-corn-flower-blue">WYSIWYG Editor Trial</h1>
      <!-- Tiptap -->
      <div class="border border-purple-blue rounded-xl overflow-hidden">
        <div id="hs-editor-tiptap">
          <div class="flex align-middle gap-x-0.5 border-b border-purple-blue p-2">
            <button class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-deep-koamaru dark:hover:bg-ghost-lavender" type="button" data-hs-editor-bold="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 12a4 4 0 0 0 0-8H6v8"></path>
                <path d="M15 20a4 4 0 0 0 0-8H6v8Z"></path>
              </svg>
            </button>
            <button class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-deep-koamaru dark:hover:bg-ghost-lavender" type="button" data-hs-editor-italic="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" x2="10" y1="4" y2="4"></line>
                <line x1="14" x2="5" y1="20" y2="20"></line>
                <line x1="15" x2="9" y1="4" y2="20"></line>
              </svg>
            </button>
            <button class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-deep-koamaru dark:hover:bg-ghost-lavender" type="button" data-hs-editor-underline="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 4v6a6 6 0 0 0 12 0V4"></path>
                <line x1="4" x2="20" y1="20" y2="20"></line>
              </svg>
            </button>
            <button class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-deep-koamaru dark:hover:bg-ghost-lavender" type="button" data-hs-editor-strike="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 4H9a3 3 0 0 0-2.83 4"></path>
                <path d="M14 12a4 4 0 0 1 0 8H6"></path>
                <line x1="4" x2="20" y1="12" y2="12"></line>
              </svg>
            </button>
            <button class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-deep-koamaru dark:hover:bg-ghost-lavender" type="button" data-hs-editor-link="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
              </svg>
            </button>
            <button class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-deep-koamaru dark:hover:bg-ghost-lavender" type="button" data-hs-editor-ol="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="10" x2="21" y1="6" y2="6"></line>
                <line x1="10" x2="21" y1="12" y2="12"></line>
                <line x1="10" x2="21" y1="18" y2="18"></line>
                <path d="M4 6h1v4"></path>
                <path d="M4 10h2"></path>
                <path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"></path>
              </svg>
            </button>
            <button class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-deep-koamaru dark:hover:bg-ghost-lavender" type="button" data-hs-editor-ul="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="8" x2="21" y1="6" y2="6"></line>
                <line x1="8" x2="21" y1="12" y2="12"></line>
                <line x1="8" x2="21" y1="18" y2="18"></line>
                <line x1="3" x2="3.01" y1="6" y2="6"></line>
                <line x1="3" x2="3.01" y1="12" y2="12"></line>
                <line x1="3" x2="3.01" y1="18" y2="18"></line>
              </svg>
            </button>
            <button class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-deep-koamaru dark:hover:bg-ghost-lavender" type="button" data-hs-editor-blockquote="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 6H3"></path>
                <path d="M21 12H8"></path>
                <path d="M21 18H8"></path>
                <path d="M3 12v6"></path>
              </svg>
            </button>
            <button class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-deep-koamaru dark:hover:bg-ghost-lavender" type="button" data-hs-editor-code="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m18 16 4-4-4-4"></path>
                <path d="m6 8-4 4 4 4"></path>
                <path d="m14.5 4-5 16"></path>
              </svg>
            </button>
          </div>

          <div class="h-[10rem] overflow-auto p-5" data-hs-editor-field=""></div>
        </div>
      </div>
      <!-- End Tiptap -->

    </div>
  </div>
  <!-- WYSIWYG Script -->
  <script type="module">
    // Tiptap
    import {
      Editor
    } from 'https://esm.sh/@tiptap/core';
    import Placeholder from 'https://esm.sh/@tiptap/extension-placeholder';
    import StarterKit from 'https://esm.sh/@tiptap/starter-kit';
    import Paragraph from 'https://esm.sh/@tiptap/extension-paragraph';
    import Bold from 'https://esm.sh/@tiptap/extension-bold';
    import Underline from 'https://esm.sh/@tiptap/extension-underline';
    import Link from 'https://esm.sh/@tiptap/extension-link';
    import BulletList from 'https://esm.sh/@tiptap/extension-bullet-list';
    import OrderedList from 'https://esm.sh/@tiptap/extension-ordered-list';
    import ListItem from 'https://esm.sh/@tiptap/extension-list-item';
    import Blockquote from 'https://esm.sh/@tiptap/extension-blockquote';

    const editor = new Editor({
      element: document.querySelector('#hs-editor-tiptap [data-hs-editor-field]'),
      extensions: [
        Placeholder.configure({
          placeholder: 'Enter your activity submission here...',
          emptyNodeClass: 'text-moody-blue'
        }),
        StarterKit,
        Paragraph.configure({
          HTMLAttributes: {
            class: 'text-deep-koamaru'
          }
        }),
        Bold.configure({
          HTMLAttributes: {
            class: 'font-bold'
          }
        }),
        Underline,
        Link.configure({
          HTMLAttributes: {
            class: 'inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium dark:text-white'
          }
        }),
        BulletList.configure({
          HTMLAttributes: {
            class: 'list-disc list-inside text-gray-800 dark:text-white'
          }
        }),
        OrderedList.configure({
          HTMLAttributes: {
            class: 'list-decimal list-inside text-gray-800 dark:text-white'
          }
        }),
        ListItem,
        Blockquote.configure({
          HTMLAttributes: {
            class: 'text-gray-800 sm:text-xl dark:text-white'
          }
        })
      ]
    });
    const actions = [{
        id: '#hs-editor-tiptap [data-hs-editor-bold]',
        fn: () => editor.chain().focus().toggleBold().run()
      },
      {
        id: '#hs-editor-tiptap [data-hs-editor-italic]',
        fn: () => editor.chain().focus().toggleItalic().run()
      },
      {
        id: '#hs-editor-tiptap [data-hs-editor-underline]',
        fn: () => editor.chain().focus().toggleUnderline().run()
      },
      {
        id: '#hs-editor-tiptap [data-hs-editor-strike]',
        fn: () => editor.chain().focus().toggleStrike().run()
      },
      {
        id: '#hs-editor-tiptap [data-hs-editor-link]',
        fn: () => {
          const url = window.prompt('URL');
          editor.chain().focus().extendMarkRange('link').setLink({
            href: url
          }).run();
        }
      },
      {
        id: '#hs-editor-tiptap [data-hs-editor-ol]',
        fn: () => editor.chain().focus().toggleOrderedList().run()
      },
      {
        id: '#hs-editor-tiptap [data-hs-editor-ul]',
        fn: () => editor.chain().focus().toggleBulletList().run()
      },
      {
        id: '#hs-editor-tiptap [data-hs-editor-blockquote]',
        fn: () => editor.chain().focus().toggleBlockquote().run()
      },
      {
        id: '#hs-editor-tiptap [data-hs-editor-code]',
        fn: () => editor.chain().focus().toggleCode().run()
      }
    ];

    actions.forEach(({
      id,
      fn
    }) => {
      const action = document.querySelector(id);

      if (action === null) return;

      action.addEventListener('click', fn);
    });
  </script>

  <script>
    window.onload = function() {
      var datepicker = document.querySelector('[inline-datepicker]');
      var today = new Date();
      var day = String(today.getDate()).padStart(2, '0');
      var month = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
      var year = today.getFullYear();

      today = month + '/' + day + '/' + year;
      datepicker.setAttribute('data-date', today);
    }
  </script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
  <!-- Flowbite cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <!-- Tailwind colors -->
  <script src="../assets/tailwind.config.js"></script>
</body>

</html>