<!DOCTYPE html>
<html lang="en">

<header>
    @include('header')
    <link rel="stylesheet" href="{{asset('css/quiz_styles.css')}}">
</header>

<body>
    @include('navbar')

    <main>
        <h1>Quick Test</h1>
        <div class="cards">
            <div class="card" id="card1">
                <div class="icon">1</div>
                <p>Complete the Test</p>
            </div>
            <div class="card" id="card2">
                <div class="icon">2</div>
                <p>View Recommends</p>
            </div>
            <div class="card" id="card3">
                <div class="icon">3</div>
                <p>Unlock Your IT Future</p>
            </div>
        </div>
        <form action="{{ route('predict') }}" method="post">
            @csrf
            <div class="survey-container">

                <!-- Survey question 1 -->
                <div class="survey-item">
                    <div class="survey-question">1. Which activity do you enjoy the most?</div>
                    <input type="radio" id="q1a" name="question1" value ="statistics">
                        <label for="q1a"><span class="option-letter">A</span>Solving puzzles and brain teasers</label>
                    <input type="radio" id="q1b" name="question1" value="gaming">
                        <label for="q1b"><span class="option-letter">B</span>Playing video games</label>
                    <input type="radio" id="q1c" name="question1" value="java">
                        <label for="q1c"><span class="option-letter">C</span>Exploring new software or apps</label>
                    <input type="radio" id="q1d" name="question1" value="tableau">
                        <label for="q1d"><span class="option-letter">D</span>Analyzing data or graphs</label>
                </div>

                <!-- Survey question 2 -->
                <div class="survey-item">
                    <div class="survey-question">2. What do you find most intriguing?</div>
                    <input type="radio" id="q2a" name="question2" value="analysis">
                        <label for="q2a"><span class="option-letter">A</span>Understanding complex systems</label>
                    <input type="radio" id="q2b" name="question2" value="creative">
                        <label for="q2b"><span class="option-letter">B</span>Creatively expressing ideas</label>
                    <input type="radio" id="q2c" name="question2" value="design">
                        <label for="q2c"><span class="option-letter">C</span>Designing and building projects</label>
                    <input type="radio" id="q2d" name="question2" value="mathematics">
                        <label for="q2d"><span class="option-letter">D</span>Working with numbers and patterns</label>
                </div>

                <!-- Survey question 3 -->
                <div class="survey-item">
                    <div class="survey-question">3. Which subject are you most comfortable with?                </div>
                    <input type="radio" id="q3a" name="question3" value="mathematics">
                        <label for="q3a"><span class="option-letter">A</span>Mathematics </label>
                    <input type="radio" id="q3b" name="question3" value="art">
                        <label for="q3b"><span class="option-letter">B</span>Art or design </label>
                    <input type="radio" id="q3c" name="question3" value="programming">
                        <label for="q3c"><span class="option-letter">C</span>Computer Subject </label>
                    <input type="radio" id="q3d" name="question3" value="business">
                        <label for="q3d"><span class="option-letter">D</span>Economics or business </label>
                    <input type="radio" id="q3e" name="question3" value="science">
                        <label for="q3e"><span class="option-letter">E</span>Science (physic, biology, chemistry) </label>
                </div>

                <!-- Survey question 4 -->
                <div class="survey-item">
                    <div class="survey-question">4. When faced with a problem, how do you prefer to approach it?</div>
                    <input type="radio" id="q4a" name="question4" value="analysis">
                        <label for="q4a"><span class="option-letter">A</span>Break it down into smaller parts and analyze each part </label>
                    <input type="radio" id="q4b" name="question4" value="analysis">
                        <label for="q4b"><span class="option-letter">B</span>Experiment with different solutions until one works </label>
                    <input type="radio" id="q4c" name="question4" value="planning">
                        <label for="q4c"><span class="option-letter">C</span>Plan and organize a structured solution </label>
                    <input type="radio" id="q4d" name="question4" value="following order">
                        <label for="q4d"><span class="option-letter">D</span>Follow a set of rules or guidelines to solve it </label>
                </div>

                <!-- Survey question 5 -->
                <div class="survey-item">
                    <div class="survey-question">5. What kind of tasks do you excel at?</div>
                    <input type="radio" id="q5a" name="question5" value="sql">
                        <label for="q5a"><span class="option-letter">A</span>Analyzing data and finding patterns </label>
                    <input type="radio" id="q5b" name="question5" value="leadership">
                        <label for="q5b"><span class="option-letter">B</span>Generating new ideas or concepts </label>
                    <input type="radio" id="q5c" name="question5" value="python">
                        <label for="q5c"><span class="option-letter">C</span>Writing code or programming </label>
                    <input type="radio" id="q5d" name="question5" value="ui/ux">
                        <label for="q5d"><span class="option-letter">D</span>Designing user interfaces or experiences </label>
                </div>

                <!-- Survey question 6 -->
                <div class="survey-item">
                    <div class="survey-question">6. Which skill do you think is most important for success in the modern world?</div>
                    <input type="radio" id="q6a" name="question6" value="critical thinking">
                        <label for="q6a"><span class="option-letter">A</span>Critical thinking and problem-solving</label>
                    <input type="radio" id="q6b" name="question6" value="creatove">
                        <label for="q6b"><span class="option-letter">B</span>Creativity and innovation</label>
                    <input type="radio" id="q6c" name="question6" value="programming">
                        <label for="q6c"><span class="option-letter">C</span>Technical skills like coding or software development</label>
                    <input type="radio" id="q6d" name="question6" value="communication">
                        <label for="q6d"><span class="option-letter">D</span>Communication and collaboration</label>
                </div>

                <!-- Survey question 7 -->
                <div class="survey-item">
                    <div class="survey-question">7. What interests you the most about technology?</div>
                    <input type="radio" id="q7a" name="question7" value="machine learning">
                        <label for="q7a"><span class="option-letter">A</span>Building and programming machines</label>
                    <input type="radio" id="q7b" name="question7" value="designing">
                        <label for="q7b"><span class="option-letter">B</span>Creating visually appealing content</label>
                    <input type="radio" id="q7c" name="question7" value="analysis">
                        <label for="q7c"><span class="option-letter">C</span>Analyzing data to uncover insights</label>
                    <input type="radio" id="q7d" name="question7" value="communication">
                        <label for="q7d"><span class="option-letter">D</span>Exploring new ways to connect people</label>
                </div>

                <!-- Survey question 8 -->
                <div class="survey-item">
                    <div class="survey-question">8. Which project would you be most excited to work on?</div>
                    <input type="radio" id="q8a" name="question8" value="java">
                        <label for="q8a"><span class="option-letter">A</span>Developing a new mobile app</label>
                    <input type="radio" id="q8b" name="question8" value="ui/ux">
                        <label for="q8b"><span class="option-letter">B</span>Designing a virtual reality game</label>
                    <input type="radio" id="q8c" name="question8" value="analysis">
                        <label for="q8c"><span class="option-letter">C</span>Analyzing real-world datasets to solve a problem</label>
                    <input type="radio" id="q8d" name="question8" value="cloud">
                        <label for="q8d"><span class="option-letter">D</span>Building a scalable cloud infrastructure</label>
                </div>

                <!-- Survey question 9 -->
                <div class="survey-item">
                    <div class="survey-question">9. How do you prefer to learn new things?</div>
                    <input type="radio" id="q9a" name="question9" value="experiment">
                        <label for="q9a"><span class="option-letter">A</span>Through hands-on experimentation and trial-and-error</label>
                    <input type="radio" id="q9b" name="question9" value="research">
                        <label for="q9b"><span class="option-letter">B</span>By studying theories and concepts</label>
                    <input type="radio" id="q9c" name="question9" value="learning">
                        <label for="q9c"><span class="option-letter">C</span>Through interactive tutorials or online courses</label>
                    <input type="radio" id="q9d" name="question9" value="teamwork">
                        <label for="q9d"><span class="option-letter">D</span>By collaborating with others and sharing ideas</label>
                </div>

                <!-- Survey question 10 -->
                <div class="survey-item">
                    <div class="survey-question">10. Do you have any technical skills that you want to mention (e.g., python, machine learning, analysis, etc.)? If yes, please fill the text field below with the skills that you want to mention, and separate them with a comma. <br>Example: “python, machine learning, C++”</div>
                    <textarea class="input" type="text" id="q10" name="question10" placeholder="Enter your technical skills, separated by commas"></textarea>
                </div>

                <!-- Survey question 11 -->
                <div class="survey-item">
                    <div class="survey-question">11. Do you have any soft skills that you want to mention (e.g., leadership, communication, teamwork, etc.)? If yes, please fill the text field below with the soft skills that you want to mention, and separate them with a comma. <br>Example: “leadership, communication, teamwork, analysis”</div>
                    <textarea class="input" type="text" id="q11" name="question11" placeholder="Enter your soft skills, separated by commas"></textarea>
                </div>

                <button class="quiz_form" type="submit">Submit</button>

                <!-- More questions can be added in a similar fashion -->

            </div>
        </form>
    </main>

    @include('footer')
    @include('script_js')
</body>
</html>