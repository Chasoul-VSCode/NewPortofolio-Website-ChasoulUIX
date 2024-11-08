<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chasoul UIX</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/me.jpeg') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900">
    <!-- Navbar -->
    <nav class="bg-gray-800 shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-bold text-red-500">Chasoul UIX</a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="#home" class="text-gray-300 hover:text-red-500 px-3 py-2 rounded-md">Home</a>
                        <a href="#about" class="text-gray-300 hover:text-red-500 px-3 py-2 rounded-md">About</a>
                        <a href="#projects" class="text-gray-300 hover:text-red-500 px-3 py-2 rounded-md">Projects</a>
                        <a href="#contact" class="text-gray-300 hover:text-red-500 px-3 py-2 rounded-md">Contact</a>
                    </div>
                </div>
                
                <!-- Mobile Navigation Button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button p-2 rounded-md text-gray-300 hover:text-red-500 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation Menu -->
            <div class="mobile-menu hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#home" class="block text-gray-300 hover:text-red-500 px-3 py-2 rounded-md">Home</a>
                    <a href="#about" class="block text-gray-300 hover:text-red-500 px-3 py-2 rounded-md">About</a>
                    <a href="#projects" class="block text-gray-300 hover:text-red-500 px-3 py-2 rounded-md">Projects</a>
                    <a href="#contact" class="block text-gray-300 hover:text-red-500 px-3 py-2 rounded-md">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @include('pages.home')
    </main>

    <!-- JavaScript for Mobile Menu -->
    <script>
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
