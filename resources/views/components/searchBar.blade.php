<div class="max-w-full flex justify-center">
    <div class="w-[1024px] border-2 border-black shadow-[8px_8px_1px_0px_rgba(255,135,176)] hover:shadow-[10px_10px_5px_2px_rgba(255,135,176)] ring-offset-0 rounded py-5 px-20 mt-10 ease-out duration-150">
        <form class="max-w-md mx-auto" action="{{route('course-overview.index')}}", method="POST">
            @csrf
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-6 ps-10 text-lg text-gray-900 focus:ring-blue-500 focus:border-blue-500" name="course_name" placeholder="Search IT Courses ..." required />

                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-light_purple_template hover:bg-purple_template focus:ring-4 focus:outline-none focus:ring-purple-300 font-bold rounded-sm text-xl px-6 py-3.5">Search</button>
            </div>
        </form>
    </div>
</div>