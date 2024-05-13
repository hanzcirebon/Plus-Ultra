<x-mainLayout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <div class="bg-gray-100">
        <div class="wave">
            <h1 class="text-3xl font-bold text-white mb-2 text-center">SKILL UP ZONE</h1>
        </div>
        <div class="max-w-4xl mx-auto px-6 lg:px-8 pt-10">
            <div class="text-center">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Soft Skills Revealed: The Secret to Becoming a Top Talent
                </h2>
                <p class="text-gray-600 text-sm mb-4">In this carefully prepared document, we've summarized a series of
                    important soft skills for you and provided practical tips and exercises to help you become a top
                    performer in the workplace and in life. Includes: <strong>The golden rules of teamwork</strong></p>
                <ul class="text-center list-disc pl-5 space-y-1 text-gray-600 mb-4">
                    <p>Understand the importance of teamwork</p>
                    <p>Develop effective teamwork skills</p>
                    <p>Create an excellent team atmosphere</p>
                </ul>
                <ul class="text-center font-bold pl-5 space-y-1 text-gray-600 mb-4">
                    <li>The art of problem solving</li>
                </ul>
                <ul class="text-center pl-5 space-y-1 text-gray-600 mb-4">
                    <li>Methods and techniques for analyzing problems</li>
                    <li>Cultivation and development of innovative thinking</li>
                    <li>Problem solving steps and examples</li>
                </ul>
                <ul class="text-center font-bold pl-5 space-y-1 text-gray-600 mb-4">
                    <li>Improvement of communication skills</li>
                </ul>
                <ul class="text-center pl-5 space-y-1 text-gray-600 mb-4">
                    <li>Listening Skills and Technology</li>
                    <li>Express your own views and opinions</li>
                    <li>Conflict handling and problem solving skills</li>
                </ul>
                <ul class="text-center font-bold pl-5 space-y-1 text-gray-600 mb-4">
                    <li>Practice and Exercise</li>
                </ul>
                <p class="text-gray-600 text-sm mb-4 bold">Each chapter ends with exercises to help you consolidate what you
                    have learned. Challenge yourself, improve yourself, and become a master of soft skills</p>
                <a href="{{asset('soft skills.pdf')}}" target="_blank"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Download
                    </span>
                </a>
            </div>
        </div>
    </div>
    <style>
        .wave {
            width: 100%;
            height: auto;
            /* Adjust the height of the SVG */
            background: linear-gradient(#ADA8D6 100%, transparent 50%);
            margin-bottom: 0;
            padding: 1rem;
            /* Removes space below the SVG */
        }
    </style>
</x-mainLayout>