<x-mainLayout>
    <div class="none py-6">
        <div class="max-w-full flex justify-center pb-8">
            <div class="max-w-2xl">
                <h1 class="uppercase text-7xl text-left font-bold mr-0 pr-0 pt-0 pb-1.5 pl-0.5">
                    <span class="text-purple_template">How to</span>
                    <span class="text-pink_template">Explore</span>
                    <span class="text-purple_template">Your IT Future</span>
                </h1>
                <p class="text-xl font-semibold text-gray-700">Your academic and career path should be clear and promising. Our platform guides learning paths for IT and digital creative fields to help you make informed choices.</p>
            </div>
            <div class="">
                <div class="">
                    <img class="h-96" src="{{ asset('img/Body_new.jpeg') }}">
                </div>
            </div>
        </div>
        <div class="max-w-full flex justify-center banner text-interact pb-5">
            <h1 class=" text-4xl blur-xs">
                <span class="text-purple_template">Hi! Welcome to IT Explore, </span>
                <span class="text-pink_template" id="dynamic-text"> </span>
                <span class="cursor border-r-2 border-[#00ffae] animate-blink">&nbsp;</span>
            </h1>
        </div>
        <x-searchBar></x-searchBar>
    </div>
    {{-- BIG DIV --}}
    <div class="2xl pt-32 big-div">
        <div class="flex max-md:flex-col justify-center max-md:items-center gap-10 pb-32 explore-by-interest">
            <div class="font-semibold max-md:text-center">
                <h2 class="text-purple_template text-4xl pb-5">
                    Explore By Your<br><span class="text-pink_template">Interests</span>
                </h2>
                <a href="{{ route('course-overview.index') }}" class="text-purple_template hover:underline">
                    Or See All Courses &rarr;
                </a>
            </div>
            <div class="grid grid-cols-3 gap-5 justify-between max-xl:grid-cols-2 max-lg:grid-cols-1 max-lg:gap-2">
                <a href="{{ route('career-choices.details', 'Information Technology') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-robot">
                            <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.58 26.58 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.933.933 0 0 1-.765.935c-.845.147-2.34.346-4.235.346-1.895 0-3.39-.2-4.235-.346A.933.933 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a24.767 24.767 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25.286 25.286 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135Z"></path>
                            <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5 class="">Information Technology</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Data Structures') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                            <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5 class="">Data Structures</span></h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Decision Support Systems') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-terminal-fill">
                            <path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9.5 5.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1m-6.354-.354a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708L4.793 6.5z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5 class="">Decision Support Systems</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Computer Science') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-easel2-fill">
                            <path d="M8.447.276a.5.5 0 0 0-.894 0L7.19 1H2.5A1.5 1.5 0 0 0 1 2.5V10h14V2.5A1.5 1.5 0 0 0 13.5 1H8.809z"></path>
                            <path fill-rule="evenodd" d="M.5 11a.5.5 0 0 0 0 1h2.86l-.845 3.379a.5.5 0 0 0 .97.242L3.89 14h8.22l.405 1.621a.5.5 0 0 0 .97-.242L12.64 12h2.86a.5.5 0 0 0 0-1zm3.64 2 .25-1h7.22l.25 1z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5>Computer Science</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Security Science') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-amd">
                            <path d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0H.334ZM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2V9.72Z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5>Security Science</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Artificial Intelligence') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                            <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5>Artificial Intelligence</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Computer Graphics') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-code-slash">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5>Computer Graphics</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Database Management') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                            <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5>Database Management</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Information Systems') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                            <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5>Information Systems</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Systems Analysis and Design') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                            <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5>Systems Analysis and Design</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Programming') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                            <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5>Programming</h5>
                    </div>
                </a>
                <a href="{{ route('career-choices.details', 'Networks and Communications') }}" class="flex flex-row border border-gray-300 border-2 w-[288px] h-[56px] items-center ease-out duration-150 hover:shadow-[3px_3px_2px_2px] hover:shadow-gray-300 focus:border-light_purple_template focus:shadow-light_purple_template">
                    <div class="text-white bg-purple_template p-2.5 rounded-full m-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-stack">
                            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
                            <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
                        </svg>
                    </div>
                    <div class="text-purple_template">
                        <h5>Networks and Communications</h5>
                    </div>
                </a>
            </div>
        </div>

        {{-- HELP TO DISCOVER PATH --}}
        <div class="flex justify-center items-center max-md:text-center gap-10 max-lg:flex-col pb-32">
            <div class="max-w-xl flex flex-col justify-center gap-5">
                <h2 class="text-purple_template text-4xl font-semibold">
                    We help you to <br><span class="text-pink_template">Discover your </span><span class="text-pink_template">Path</span> in <span class="text-pink_template">IT</span>
                </h2>
                <p class="text-xl">
                    We guide you through the vast landscape of IT and digital creation courses. Whether you’re just starting or looking to specialize, we have something for everyone.
                </p>
                {{-- <a href="{{ route('job-overview.index') }}" class="bg-purple_template text-white font-bold py-2 px-4 rounded-full">Know More</a> --}}
            </div>
            <div>
                <img class="h-[600px] w-[600px] max-xl:h-[400px] max-xl:w-[400px] max-lg:h-auto max-ls:w-auto rounded-xl drop-shadow-2xl  transition-all duration-300 hover:scale-110" src="{{ asset('img/Pathway_home.jpeg') }}">
            </div>
        </div>

        {{-- MAIN SERVICE CARD --}}
        <div class="flex flex-col justify-center items-center pb-32">
            <div class="max-w-2xl text-center pb-16">
                <h2 class="text-4xl font-semibold pb-5">
                    <span class="text-purple_template">Our Main </span><span class="text-pink_template">Services</span>
                </h2>
                <p class="text-xl">
                    Not sure where to start? Our platform offers personalized course recommendations based on your interests and goals. Start your journey with us today and unlock your IT and digital creation potential.
                </p>
            </div>
            {{-- CARDS --}}
            <div class="flex flex-row flex-wrap justify-center gap-10">
                <a href="{{ route('course-overview.index') }}" class="bg-sky-100 drop-shadow-lg max-w-96 rounded-xl hover:scale-110 transition duration-200 focus:bg-sky-300">
                    <img src="{{ asset('img/Main_service_1-Photoroom.png-Photoroom.png') }}" class="h-80 hover:rotate-6 transition duration-150">
                    <div class="px-3 py-5">
                        <h4 class="text-center text-2xl text-purple_template font-semibold">
                            IT Courses
                        </h4>
                        <p class="text-lg">
                            List of courses, including course title, introduction, difficulty level, and estimated study time
                        </p>
                    </div>
                </a>
                <a href="{{ route('global-trend.index') }}" class="bg-sky-100 drop-shadow-lg max-w-96 rounded-xl hover:scale-110 transition duration-200 focus:bg-sky-300">
                    <img src="{{ asset('img/Main_service_2-Photoroom.png-Photoroom.png') }}" class="h-80 hover:rotate-6 transition duration-150">
                    <div class="px-3 py-5">
                        <h4 class="text-center text-2xl text-purple_template font-semibold">
                            Global trends
                        </h4>
                        <p class="text-lg">
                            View the latest global IT trends, such as emerging technologies, industry growth rates, and key players.
                        </p>
                    </div>
                </a>
                <a href="{{ route('job-overview.index') }}" class="bg-sky-100 drop-shadow-lg max-w-96 rounded-xl hover:scale-110 transition duration-200 focus:bg-sky-300">
                    <img src="{{ asset('img/Main_service_3-removebg-preview.png') }}" class="h-80 hover:rotate-6 transition duration-150">
                    <div class="px-3 py-5">
                        <h4 class="text-center text-2xl text-purple_template font-semibold">
                            Career Choices
                        </h4>
                        <p class="text-lg">
                            Provide growth trends and future needs of different IT professions.
                        </p>
                    </div>
                </a>
            </div>
        </div>

        {{-- ABOUT US --}}
        <div class="pb-32 max-w-full flex flex-col justify-center items-center">
            <div class="max-w-4xl text-center">
                <h1 class="text-4xl font-bold pb-5">
                    <span class="text-purple_template">About </span><span class="text-pink_template"> Us</span>
                </h1>
                <p class="text-lg">
                    Our team is committed to leveraging innovative information technology solutions to drive social change and contribute positively to society. With a focus on sustainable and ethical practices, we aim to address pressing social issues through the development and implementation of cutting-edge IT services. Our mission is to empower communities, enhance quality of life, and create meaningful impact through technology-driven initiatives. By prioritizing social responsibility and technological excellence, we are dedicated to advancing a more equitable and connected world.
                </p>
            </div>
            
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</x-mainLayout>