    <section id="home" class="relative h-screen">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/mylove.jpg') }}" alt="Header Background" 
                 class="w-full h-full object-cover object-center">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-80"></div>
        </div>

        <!-- Profile Section -->
        <div class="relative h-full flex items-center justify-center">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-center gap-6 sm:gap-8">
                    <!-- Profile Image -->
                    <div class="w-32 h-32 sm:w-48 sm:h-48 rounded-full overflow-hidden border-4 border-red-500">
                        <img src="{{ asset('images/me.jpeg') }}" alt="Profile Picture" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Profile Description -->
                    <div class="text-white text-center md:text-left max-w-2xl">
                        <h2 class="text-2xl sm:text-3xl font-bold mb-3 sm:mb-4">Chasoul UIX</h2>
                        <p class="text-gray-300 text-base sm:text-lg mb-4">
                            Former at International Creative Agency 2021 <br>
                            Full Stack Developer | Content Creator | UI/UX Designer | Freelancer
                        </p>
                        <div class="flex flex-wrap justify-center md:justify-start gap-2 sm:gap-4 mb-6">
                            <span class="bg-gray-800 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm flex items-center gap-2">
                                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain.svg" class="w-4 sm:w-5 h-4 sm:h-5" alt="Laravel"/>
                                Laravel
                            </span>
                            <span class="bg-gray-800 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm flex items-center gap-2">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" class="w-4 sm:w-5 h-4 sm:h-5" alt="Vue.js"/>
                                Vue.js
                            </span>
                            <span class="bg-gray-800 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm flex items-center gap-2">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-4 sm:w-5 h-4 sm:h-5" alt="React"/>
                                React
                            </span>
                            <span class="bg-gray-800 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm flex items-center gap-2">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" class="w-4 sm:w-5 h-4 sm:h-5" alt="Flutter"/>
                                Flutter
                            </span>
                            <span class="bg-gray-800 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm flex items-center gap-2">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" class="w-4 sm:w-5 h-4 sm:h-5" alt="Express"/>
                                Express
                            </span>
                        </div>
                        <!-- Action Buttons -->
                        <div class="flex flex-wrap justify-center md:justify-start gap-4">
                            <a href="#contact" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-full transition duration-300">
                                Contact Us
                            </a>
                            <a href="https://github.com/Chasoul-VSCode" class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-full transition duration-300">
                                Github
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="container mx-auto px-4 mt-16 sm:mt-24" id="about">
            <div class="max-w-4xl mx-auto">
                <h3 class="text-2xl sm:text-3xl font-bold text-white text-center mb-8">About Me</h3>

                <!-- Skills -->
                <div class="mb-12">
                    <h4 class="text-lg font-semibold text-red-500 mb-4">Professional Skills</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-gray-300 text-sm mb-1">
                                    <span>Laravel</span>
                                    <span>95%</span>
                                </div>
                                <div class="h-2 bg-gray-700 rounded-full">
                                    <div class="h-full bg-red-500 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-gray-300 text-sm mb-1">
                                    <span>Vue.js</span>
                                    <span>90%</span>
                                </div>
                                <div class="h-2 bg-gray-700 rounded-full">
                                    <div class="h-full bg-red-500 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-gray-300 text-sm mb-1">
                                    <span>React</span>
                                    <span>85%</span>
                                </div>
                                <div class="h-2 bg-gray-700 rounded-full">
                                    <div class="h-full bg-red-500 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-gray-300 text-sm mb-1">
                                    <span>Flutter</span>
                                    <span>80%</span>
                                </div>
                                <div class="h-2 bg-gray-700 rounded-full">
                                    <div class="h-full bg-red-500 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-gray-300 text-sm mb-1">
                                    <span>Express.js</span>
                                    <span>85%</span>
                                </div>
                                <div class="h-2 bg-gray-700 rounded-full">
                                    <div class="h-full bg-red-500 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-gray-300 text-sm mb-1">
                                    <span>UI/UX Design</span>
                                    <span>75%</span>
                                </div>
                                <div class="h-2 bg-gray-700 rounded-full">
                                    <div class="h-full bg-red-500 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brief Description -->
                <div class="text-gray-300">
                    <h4 class="text-lg font-semibold text-red-500 mb-4">About Me</h4>
                    <p class="leading-relaxed">
                   Lulusan SMK Multimedia, dan sekarang menajalani pendidikan S1 Teknik Informatika di STIKOM Kota Bogor,
                   saya memiliki ketertarikan pada pemrograman, UI/UX Design, dan Content Creator.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Contact Section -->
        <div class="container mx-auto px-4 mt-8 sm:mt-12">
            <h3 class="text-xl sm:text-2xl font-bold text-white text-center mb-6 sm:mb-8">Let's Connect</h3>
            <div class="max-w-4xl mx-auto bg-gray-800 rounded-lg p-6 sm:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Contact Info -->
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-lg font-semibold text-red-500 mb-3">Contact Information</h4>
                            <div class="space-y-4">
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    <a href="mailto:john.doe@example.com" class="hover:text-red-500 transition">shaamocha3003@gmail.com</a>
                                </div>
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    <a href="tel:+1234567890" class="hover:text-red-500 transition">085172360309</a>
                                </div>
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Indonesia, Jawa Barat</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <form class="space-y-4" action="mailto:shaamocha3003@gmail.com" method="POST" enctype="text/plain">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Name</label>
                            <input type="text" id="name" name="name" class="w-full bg-gray-700 border border-gray-600 rounded-md px-4 py-2 text-gray-300 focus:outline-none focus:border-red-500" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full bg-gray-700 border border-gray-600 rounded-md px-4 py-2 text-gray-300 focus:outline-none focus:border-red-500" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full bg-gray-700 border border-gray-600 rounded-md px-4 py-2 text-gray-300 focus:outline-none focus:border-red-500" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition duration-300">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        

        <!-- Projects Section -->
        <div class="container mx-auto px-4 mt-8 sm:mt-12" id="projects">
            <h3 class="text-xl sm:text-2xl font-bold text-white text-center mb-6 sm:mb-8">My Projects</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Project Card 1 -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/project1.jpg') }}" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-bold text-red-500 mb-2">E-Commerce Platform</h4>
                        <p class="text-gray-300 text-sm mb-4">A full-featured e-commerce platform built with Laravel and Vue.js</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-700 text-xs px-2 py-1 rounded-full text-gray-300">Laravel</span>
                            <span class="bg-gray-700 text-xs px-2 py-1 rounded-full text-gray-300">Vue.js</span>
                            <span class="bg-gray-700 text-xs px-2 py-1 rounded-full text-gray-300">MySQL</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/project2.jpg') }}" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-bold text-red-500 mb-2">Task Management App</h4>
                        <p class="text-gray-300 text-sm mb-4">A mobile-first task management application with real-time updates</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-700 text-xs px-2 py-1 rounded-full text-gray-300">Flutter</span>
                            <span class="bg-gray-700 text-xs px-2 py-1 rounded-full text-gray-300">Firebase</span>
                            <span class="bg-gray-700 text-xs px-2 py-1 rounded-full text-gray-300">Node.js</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/project3.jpg') }}" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg font-bold text-red-500 mb-2">AI Content Generator</h4>
                        <p class="text-gray-300 text-sm mb-4">An AI-powered content generation tool using OpenAI's GPT-3</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-700 text-xs px-2 py-1 rounded-full text-gray-300">Python</span>
                            <span class="bg-gray-700 text-xs px-2 py-1 rounded-full text-gray-300">React</span>
                            <span class="bg-gray-700 text-xs px-2 py-1 rounded-full text-gray-300">OpenAI API</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Work Experience Timeline -->
        <div class="container mx-auto px-4 mt-8 sm:mt-12">
            <h3 class="text-xl sm:text-2xl font-bold text-white text-center mb-6 sm:mb-8">Work Experience</h3>
            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute h-full w-0.5 bg-red-500 left-4 sm:left-1/2 transform sm:-translate-x-1/2"></div>
                
                <!-- Timeline Items -->
                <div class="space-y-6 sm:space-y-8">
                    <!-- Experience 1 -->
                    <div class="flex flex-col sm:flex-row sm:justify-between items-start sm:items-center w-full pl-12 sm:pl-0">
                        <div class="hidden sm:block w-5/12"></div>
                        <div class="w-2.5 h-2.5 bg-red-500 rounded-full absolute left-4 sm:left-1/2 transform sm:-translate-x-1/2 mt-6 sm:mt-0"></div>
                        <div class="w-full sm:w-5/12 bg-gray-800 p-4 sm:p-6 rounded-lg shadow-lg">
                            <h4 class="text-lg sm:text-xl font-bold text-red-500">Designer Graphics</h4>
                            <p class="text-gray-400 text-xs sm:text-sm mb-2">Freelancer</p>
                            <p class="text-gray-300 text-sm sm:text-base">Menggunakan Adobe Photoshop, Adobe Illustrator, dan Adobe After Effects untuk membuat desain grafis yang menarik dan profesional.</p>
                        </div>
                    </div>

                    <!-- Experience 2 -->
                    <div class="flex flex-col sm:flex-row sm:justify-between items-start sm:items-center w-full pl-12 sm:pl-0">
                        <div class="w-full sm:w-5/12 bg-gray-800 p-4 sm:p-6 rounded-lg shadow-lg order-2 sm:order-1">
                            <h4 class="text-lg sm:text-xl font-bold text-red-500">Senior Web Developer</h4>
                            <p class="text-gray-400 text-xs sm:text-sm mb-2">Tech Corp • 2020 - 2022</p>
                            <p class="text-gray-300 text-sm sm:text-base">Led development of enterprise web applications using Laravel and Vue.js. Managed team of 5 developers and implemented CI/CD practices.</p>
                        </div>
                        <div class="w-2.5 h-2.5 bg-red-500 rounded-full absolute left-4 sm:left-1/2 transform sm:-translate-x-1/2 mt-6 sm:mt-0 order-1 sm:order-2"></div>
                        <div class="hidden sm:block w-5/12 order-3"></div>
                    </div>

                    <!-- Experience 3 -->
                    <div class="flex flex-col sm:flex-row sm:justify-between items-start sm:items-center w-full pl-12 sm:pl-0">
                        <div class="hidden sm:block w-5/12"></div>
                        <div class="w-2.5 h-2.5 bg-red-500 rounded-full absolute left-4 sm:left-1/2 transform sm:-translate-x-1/2 mt-6 sm:mt-0"></div>
                        <div class="w-full sm:w-5/12 bg-gray-800 p-4 sm:p-6 rounded-lg shadow-lg">
                            <h4 class="text-lg sm:text-xl font-bold text-red-500">Full Stack Developer</h4>
                            <p class="text-gray-400 text-xs sm:text-sm mb-2">Digital Solutions Inc • 2018 - 2020</p>
                            <p class="text-gray-300 text-sm sm:text-base">Developed and maintained multiple client websites. Implemented responsive designs and integrated various third-party APIs.</p>
                        </div>
                    </div>

                    <!-- Experience 4 -->
                    <div class="flex flex-col sm:flex-row sm:justify-between items-start sm:items-center w-full pl-12 sm:pl-0">
                        <div class="w-full sm:w-5/12 bg-gray-800 p-4 sm:p-6 rounded-lg shadow-lg order-2 sm:order-1">
                            <h4 class="text-lg sm:text-xl font-bold text-red-500">Frontend Developer</h4>
                            <p class="text-gray-400 text-xs sm:text-sm mb-2">Web Creatives • 2017 - 2018</p>
                            <p class="text-gray-300 text-sm sm:text-base">Specialized in creating responsive and interactive user interfaces using React and modern CSS frameworks.</p>
                        </div>
                        <div class="w-2.5 h-2.5 bg-red-500 rounded-full absolute left-4 sm:left-1/2 transform sm:-translate-x-1/2 mt-6 sm:mt-0 order-1 sm:order-2"></div>
                        <div class="hidden sm:block w-5/12 order-3"></div>
                    </div>

                    <!-- Experience 5 -->
                    <div class="flex flex-col sm:flex-row sm:justify-between items-start sm:items-center w-full pl-12 sm:pl-0">
                        <div class="hidden sm:block w-5/12"></div>
                        <div class="w-2.5 h-2.5 bg-red-500 rounded-full absolute left-4 sm:left-1/2 transform sm:-translate-x-1/2 mt-6 sm:mt-0"></div>
                        <div class="w-full sm:w-5/12 bg-gray-800 p-4 sm:p-6 rounded-lg shadow-lg">
                            <h4 class="text-lg sm:text-xl font-bold text-red-500">Junior Web Developer</h4>
                            <p class="text-gray-400 text-xs sm:text-sm mb-2">StartUp Hub • 2016 - 2017</p>
                            <p class="text-gray-300 text-sm sm:text-base">Started career developing frontend interfaces and learning backend development with PHP and MySQL.</p>
                        </div>
                    </div>

                    <!-- Experience 6 -->
                    <div class="flex flex-col sm:flex-row sm:justify-between items-start sm:items-center w-full pl-12 sm:pl-0">
                        <div class="w-full sm:w-5/12 bg-gray-800 p-4 sm:p-6 rounded-lg shadow-lg order-2 sm:order-1">
                            <h4 class="text-lg sm:text-xl font-bold text-red-500">Web Design Intern</h4>
                            <p class="text-gray-400 text-xs sm:text-sm mb-2">Creative Agency • 2015 - 2016</p>
                            <p class="text-gray-300 text-sm sm:text-base">Assisted in designing and implementing website layouts. Learned fundamentals of UX/UI design and basic web development.</p>
                        </div>
                        <div class="w-2.5 h-2.5 bg-red-500 rounded-full absolute left-4 sm:left-1/2 transform sm:-translate-x-1/2 mt-6 sm:mt-0 order-1 sm:order-2"></div>
                        <div class="hidden sm:block w-5/12 order-3"></div>
                    </div>

                    <!-- Experience 7 -->
                    <div class="flex flex-col sm:flex-row sm:justify-between items-start sm:items-center w-full pl-12 sm:pl-0">
                        <div class="hidden sm:block w-5/12"></div>
                        <div class="w-2.5 h-2.5 bg-red-500 rounded-full absolute left-4 sm:left-1/2 transform sm:-translate-x-1/2 mt-6 sm:mt-0"></div>
                        <div class="w-full sm:w-5/12 bg-gray-800 p-4 sm:p-6 rounded-lg shadow-lg">
                            <h4 class="text-lg sm:text-xl font-bold text-red-500">Freelance Web Developer</h4>
                            <p class="text-gray-400 text-xs sm:text-sm mb-2">Self-Employed • 2014 - 2015</p>
                            <p class="text-gray-300 text-sm sm:text-base">Built websites for small businesses and personal clients. Gained experience in client communication and project management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <footer class="bg-gray-800 mt-16">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- About Section -->
                <div>
                    <h3 class="text-xl font-bold text-red-500 mb-4">About Me</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        A passionate full-stack developer dedicated to creating beautiful and functional web applications. Always eager to take on new challenges and learn new technologies.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold text-red-500 mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-red-500 transition text-sm">Home</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-red-500 transition text-sm">About</a></li>
                        <li><a href="#projects" class="text-gray-300 hover:text-red-500 transition text-sm">Projects</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-red-500 transition text-sm">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold text-red-500 mb-4">Contact Info</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-300 text-sm">
                            <svg class="w-4 h-4 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            john.doe@example.com
                        </li>
                        <li class="flex items-center text-gray-300 text-sm">
                            <svg class="w-4 h-4 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            +1 (234) 567-890
                        </li>
                        <li class="flex items-center text-gray-300 text-sm">
                            <svg class="w-4 h-4 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            San Francisco, CA
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8">
                <p class="text-center text-gray-400 text-sm">
                    © 2023 John Doe. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    </section>
