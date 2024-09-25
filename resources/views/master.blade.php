<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styling for the body background image */
        body {
            background-image: url('{{ asset('images/carbg.jpg') }}');
            background-size: cover; /* Ensures the image covers the entire background */
            background-position: center; /* Centers the background image */
            background-repeat: no-repeat; /* Prevents image repetition */
            margin: 0; /* Remove default margin */
            height: 100vh; /* Makes sure body covers the viewport height */
            display: flex; /* Allows for flexible alignment of children */
            flex-direction: column; /* Aligns children vertically */
        }
        /* Custom hover effect for links */
        .hover-zoom-out:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        /* Custom styling for the nav bar with circular ends */
        .nav-bar {
            border-radius: 0 0 100px 100px;
            background-color: rgba(29, 78, 216, 0.8); /* Semi-transparent blue */
            padding: 1rem; /* Adjust padding as needed */
        }
        .nav-bar a {
            transition: transform 0.3s ease;
        }
        .nav-bar a:hover {
            transform: scale(1.05);
        }
        /* Increase font size for navigation links */
        .nav-link {
            font-size: 1.25rem; /* Adjust size as needed */
        }
    </style>
</head>
<body class="font-sans antialiased">

<nav class="nav-bar border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
        <a href="https://lumbiniictcampus.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/nlogo.jpg') }}" class="h-12 rounded-full w-12" alt="Banner Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Banners</span>
        </a>

        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparent md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">
                <li>
                    <a href="#" class="nav-link block py-2 px-3 text-gray-900 rounded hover:bg-blue-500 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 hover-zoom-out">Home</a>
                </li>
                <li>
                    <a href="#" class="nav-link block py-2 px-3 text-gray-900 rounded hover:bg-blue-500 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 hover-zoom-out">About</a>
                </li>
                <li>
                    <a href="#" class="nav-link block py-2 px-3 text-gray-900 rounded hover:bg-blue-500 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 hover-zoom-out">Services</a>
                </li>
                <li>
                    <a href="#" class="nav-link block py-2 px-3 text-gray-900 rounded hover:bg-blue-500 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 hover-zoom-out">Category</a>
                </li>
                <li>
                    <a href="#" class="nav-link block py-2 px-3 text-gray-900 rounded hover:bg-blue-500 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 hover-zoom-out">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
