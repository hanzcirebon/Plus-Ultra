<x-mainLayout>
    <div class="bg-gray-100 flex flex-col items-center justify-center h-screen">
        <div class="space-y-4 mb-8">
            <div class="flex space-x-4">
                <div class="cursor-pointer transition-transform transform hover:scale-105 p-6 bg-blue-200 rounded-xl shadow-lg flex flex-col items-center justify-center" onclick="startQuiz()">
                    <div class="text-lg font-semibold text-blue-900">1</div>
                    <p class="text-blue-900">Complete the Test</p>
                </div>
                <div class="cursor-pointer transition-transform transform hover:scale-105 p-6 bg-yellow-200 rounded-xl shadow-lg flex flex-col items-center justify-center" onclick="viewRecommendations()">
                    <div class="text-lg font-semibold text-yellow-900">2</div>
                    <p class="text-yellow-900">View Recommends</p>
                </div>
            </div>
        </div>
        <div class="w-full max-w-xl p-5 bg-white rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold text-center mb-4">Welcome to the Fun Quiz!</h1>
            <p class="text-gray-700 text-md mb-6 text-center">Test your knowledge with our quick and fun quiz. Let's see how much you know!</p>
            <div id="question-container" class="flex flex-col space-y-4">
                <!-- Question will be injected here -->
            </div>
            <div class="flex justify-between mt-6">
                <button id="prev-btn" class=" bg-gray-300 text-gray-600 cursor-not-allowed font-bold py-2 px-4 rounded" onclick="prevQuestion()">Previous</button>
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
                question: "Which activity do you enjoy the most?",
                options: ["Solving puzzles and brain teasers", "Playing video games", "Exploring new software or apps", "Analyzing data or graphs"],
                related: ["problem solving", "game development", "software developer", "analysis"]
            },
            { 
                question: "Which subject are you most comfortable with?", 
                options: ["Mathematics", "Computer Subject", "Art or design", "Economics or business","Science (physic, biology, chemistry)"],
                related: ["mathematics,statistics", "computer science", "ui design", "business", "science"]
            }
            // { 
            //     question: "What do you find most intriguing?", 
            //     options: ["Understanding complex systems", "Creatively expressing ideas", "Designing and building projects", "Working with numbers and patterns"],
            //     related: []
            // },
            // {
            //     question: "When faced with a problem, how do you prefer to approach it?", 
            //     options: ["Break it down into smaller parts and analyze each part", "Experiment with different solutions until one works", "Plan and organize a structured solution", "Follow a set of rules or guidelines to solve it"],
            //     related: []
            // },
            // { 
            //     question: "What kind of tasks do you good at?", 
            //     options: ["Analyzing data and finding patterns", "Generating new ideas or concepts", "Writing code or programming", "Designing user interfaces or experiences"],
            //     related: []
            // },
            // { 
            //     question: "Which skill do you think is most important for success in the modern world?", 
            //     options: ["Critical thinking and problem-solving", "Creativity and innovation", "Technical skills like coding or software development", "Communication and collaboration"],
            //     related: []
            // },
            // { 
            //     question: "What interests you the most about technology?", 
            //     options: ["Building and programming machines", "Creating visually appealing content", "Analyzing data to uncover insights", "Exploring new ways to connect people"],
            //     related: []
            // },
            // { 
            //     question: "Which project would you be most excited to work on?", 
            //     options: ["Developing a new mobile app", "Designing a virtual reality game", "Analyzing real-world datasets to solve a problem", "Building a scalable cloud infrastructure"],
            //     related: []
            // },
            // { 
            //     question: "How do you prefer to learn new things?", 
            //     options: ["Through hands-on experimentation and trial-and-error", "By studying theories and concepts", "Through interactive tutorials or online courses", "By collaborating with others and sharing ideas"],
            //     related: []
            // }
        ];
        let currentQuestion = 0;

        function displayQuestion() {
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
            console.log(localStorage.getItem('question_0'));
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
            document.getElementById('submit-btn').classList.add('cursor-not-allowed');

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
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
            //

            // enable submit button
            document.getElementById('submit-btn').classList.remove('cursor-not-allowed');
        }


        function startQuiz() {
            displayQuestion();
        }

        function viewRecommendations() {
            alert('This feature is coming soon!');
        }

        window.onload = () => displayQuestion();
    </script>
</x-mainLayout>