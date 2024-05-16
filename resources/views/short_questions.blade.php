<x-mainLayout>
    <div class="bg-gray-100 flex flex-col items-center justify-center h-screen">
        <div class="space-y-4 mb-8">
            <div class="flex space-x-4">
                <div class="cursor-pointer transition-transform transform p-6 bg-blue-200 rounded-xl shadow-lg flex flex-col items-center justify-center" onclick="startQuiz()">
                    <div class="text-lg font-semibold text-blue-900">Step - 1</div>
                    <p class="text-blue-900">Complete the Test</p>
                </div>
                <div class="cursor-pointer transition-transform transform p-6 bg-yellow-200 rounded-xl shadow-lg flex flex-col items-center justify-center" onclick="viewRecommendations()">
                    <div class="text-lg font-semibold text-yellow-900">Step - 2</div>
                    <p class="text-yellow-900">View Recommends</p>
                </div>
            </div>
        </div>
        <div class="relative w-full max-w-xl p-5 bg-white rounded-lg shadow-lg">
            {{-- <p class="absolute border-2 p-3 bottom-2 left-1/2 w-20 text-center text-cyan-50 bg-slate-800 rounded-xl"><span id="currentQuestion">1</span> / 10</p> --}}
            <h1 class="text-2xl font-bold text-center mb-4">Welcome to the Short Questions!</h1>
            <p class="text-gray-700 text-md mb-6 text-center">Get personalize specialization result using our Recommendation Model, and see which field would be a fit for you!</p>
            <div id="question-container" class="flex flex-col space-y-4">
                <!-- Question will be injected here -->
            </div>
            <div class="flex justify-between mt-6">
                <button id="prev-btn" class=" bg-gray-300 text-gray-600 cursor-not-allowed font-bold py-2 px-4 rounded" onclick="prevQuestion()">Previous</button>
                <p class="bg-slate-600 text-cyan-50 font-bold py-2 px-4 rounded"><span id="currentQuestion">1</span> / 10</p>
                <button id="submit-btn" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hidden" onclick="submitQuiz()">Submit</button>
                <button id="next-btn" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" onclick="nextQuestion()">Next</button>
            </div>
        </div>
    </div>
    <style>
        .selected {
            background-color: #FFC3D7 !important; /* Important to override other styles */
        }
    </style>
    <script>
        const questions = [
            {
                "question": "Which activity do you enjoy the most?",
                "options": ["Solving puzzles and brain teasers", "Playing video games", "Exploring new software or apps", "Reading paper/journal/blog"],
                "related": ["algorithms,critical thinking", "team player", "research", "research"]
            },
            {
                "question": "Which subject are you most comfortable with?",
                "options": ["Mathematics", "Art or design", "Computer Science", "Economics or Business", "Science (Physics, Biology, Chemistry)"],
                "related": ["mathematics,analytical skills", "written communication,creative direction","computer science,programming,problem solving","business,communication,analytical skills","data science,critical thinking"]
            },
            {
                "question": "How do you prefer to approach complex projects?",
                "options": ["Breaking them down into smaller tasks", "Collaborating with a team", "Following established methodologies", "Experimenting with different approaches"],
                "related": ["problem solving,analytical skills", "teamwork,communication", "project management,methodologies", "creativity,innovation"]
            },
            {
                "question": "What aspect of technology interests you the most?",
                "options": ["Developing software applications", "Analyzing and interpreting data", "Creating immersive gaming experiences", "Securing digital systems and networks"],
                "related": ["software development", "data analysis", "game development", "cybersecurity"]
            },
            {
                "question": "When faced with a problem, how do you prefer to approach it?",
                "options": ["Break it down into smaller parts and analyze each part", "Experiment with different solutions until one works", "Plan and organize a structured solution", "Follow a set of rules or guidelines to solve it"],
                "related": ["leadership,design patterns", "written communication,reporting", "teamwork,communication", "algorithms,coding standards"]
            },
            {
                "question": "Which area of technology do you see yourself making an impact in?",
                "options": ["Artificial Intelligence and Machine Learning", "Information Systems and Data Analysis", "Game Development and Virtual Reality", "Cybersecurity and Network Defense"],
                "related": ["ai,machine learning", "information technology", "game development", "networking"]
            },
            {
                "question": "What type of problem-solving challenges excite you the most?",
                "options": ["Analyzing and interpreting data to uncover insights", "Creating innovative solutions to complex problems", "Designing and developing software applications", "Protecting digital assets from cyber threats"],
                "related": ["problem solving,analytical skills", "innovation", "software development", "risk assessment"]
            },
            {
                "question": "How do you prefer to work in a team setting?",
                "options": ["Taking a leadership role and delegating tasks", "Contributing ideas and collaborating with others", "Providing technical expertise and support", "Ensuring effective communication and coordination"],
                "related": ["leadership", "collaboration,communication", "technical support", "communication"]
            },
            {
                "question": "What kind of tasks do you good at?",
                "options": ["Analyzing data and finding patterns", "Generating new ideas or concepts", "Writing code or programming", "Designing user interfaces or experiences"],
                "related": ["critical thinking,design patterns", "board analysis", "code reviews", "game design,graphic design"]
            },
            {
                "question": "What motivates you to pursue a career in technology?",
                "options": ["Solving real-world problems using innovative solutions", "Exploring cutting-edge advancements in the field", "Making a positive impact on society through technology", "Building a successful and rewarding career in IT"],
                "related": ["innovation,build processes", "exploration", "impact", "career development"]
            }
        ];
        let currentQuestion = 0;

        function displayQuestion() {
            // Display the question's number parameter
            document.getElementById('currentQuestion').textContent = currentQuestion + 1;
            // Display which questions
            const questionContainer = document.getElementById('question-container');
            questionContainer.innerHTML = `<div class="text-lg font-semibold">${currentQuestion+1}. ${questions[currentQuestion].question}</div>
            <div class="flex flex-col space-y-2">
                ${questions[currentQuestion].options.map((option, index) => `<button class="text-white bg-gray-800 hover:bg-gray-600 py-2 px-4 rounded" onclick="selectOption(this)">${option}</button>`).join('')}
            </div>`;

            // check if the questions is the last questions
            if (currentQuestion === questions.length - 1) {
                document.getElementById('next-btn').classList.add('hidden');
                document.getElementById('submit-btn').classList.remove('hidden');
            // check if the questions is the first questions
            } else if (currentQuestion === 0){
                document.getElementById('prev-btn').classList.add('cursor-not-allowed');
                document.getElementById('prev-btn').classList.add('bg-gray-300');
                document.getElementById('prev-btn').classList.add('text-gray-600');
                document.getElementById('prev-btn').classList.remove('bg-blue-500');
                document.getElementById('prev-btn').classList.remove('hover:bg-blue-700');
                document.getElementById('prev-btn').classList.remove('text-white');
            // else
            } else {
                document.getElementById('next-btn').classList.remove('hidden');
                document.getElementById('submit-btn').classList.add('hidden');
                document.getElementById('prev-btn').classList.remove('cursor-not-allowed');
                document.getElementById('prev-btn').classList.remove('bg-gray-300');
                document.getElementById('prev-btn').classList.remove('text-gray-600');
                document.getElementById('prev-btn').classList.add('bg-blue-500');
                document.getElementById('prev-btn').classList.add('hover:bg-blue-700');
                document.getElementById('prev-btn').classList.add('text-white');
            }
        }

        function selectOption(selectedElement) {
            const options = document.querySelectorAll('#question-container button');
            options.forEach(option => {
                option.classList.remove('selected');
            });
            selectedElement.classList.add('selected');
            
            // Find the index of the selected option to get the related data
            const selectedOptionIndex = Array.from(options).indexOf(selectedElement);
            const relatedData = questions[currentQuestion].related[selectedOptionIndex];

            localStorage.setItem('question_' + currentQuestion, relatedData);
        }

        function nextQuestion() {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                displayQuestion();
            }
        }

        function prevQuestion() {
            if (currentQuestion > 0) {
                currentQuestion--;
                displayQuestion();
            }
        }

        function submitQuiz() {
            // disable the submit button
            const submitBtn = document.getElementById('submit-btn');
            submitBtn.disabled = true;
            submitBtn.classList.add('cursor-not-allowed', 'opacity-50'); 

            let answers = [];
            for (let i = 0; i < questions.length; i++) {
                question_num = 'question_' + i;
                let storedData = localStorage.getItem(question_num);
                answers.push(storedData);
            }
            // console.log('Success:', JSON.stringify({answers: answers}));

            // Sending data to Laravel backend
            fetch('/submit-answer', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Include CSRF token
                },
                body: JSON.stringify({answers: answers}),
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
                alert('Congratulations! You have submitted the quiz.');
                submitBtn.disabled = false;
                submitBtn.classList.remove('cursor-not-allowed', 'opacity-50');
                window.location.href = '/specialization'; 
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
                submitBtn.disabled = false;
                submitBtn.classList.remove('cursor-not-allowed', 'opacity-50');
            });
        }


        function startQuiz() {
            displayQuestion();
        }

        function viewRecommendations() {
            @if(Session::has('recommendation_result'))
                // If the session exists, redirect to another page
                window.location.href = "{{ route('specialization.index') }}"; 
            @else
                // If the session does not exist, show an alert
                alert('Please do the questions first!');
            @endif
        }

        window.onload = () => displayQuestion();
    </script>
</x-mainLayout>