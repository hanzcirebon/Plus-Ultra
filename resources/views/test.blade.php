<!DOCTYPE html>
<html lang="en">
<header>
    @include('header')
</header>
<body>
@include('navbar')
    <div class="container">
        <!-- CONTENT 1 -->
        <div id="content1" class="text-center align-items-center content active">
            <div class="row">
                <h1>Test Results</h1>
            </div>
            <div class="row">
                <p><b>
                    Taken together, you haave shown a certain interest an willingneess in Artificial Intelligence.<br>
                    It is recommended that you further explore AI-related disciplines and careers to better develop your potential
                </b></p>
            </div>
            <div class="row content-img">
                <img src="https://placehold.co/600x400" alt="placeholder">
            </div>
        </div>
        <!-- CONTENT 1 -->
        <div id="content2" class="text-center align-items-center content">
            <div class="row">
                <h1>Recommendation</h1>
            </div>
            <div class="row">
                <p><b>
                    Taken together, you haave shown a certain interest an willingneess in Artificial Intelligence.<br>
                    It is recommended that you further explore AI-related disciplines and careers to better develop your potential
                </b></p>
            </div>
            <div class="row content-img">
                <img src="https://placehold.co/600x400" alt="placeholder">
            </div>
        </div>
        <!-- CONTENT 1 -->
        <div id="content3" class="text-center align-items-center content">
            <div class="row">
                <h1>Career Pathway</h1>
            </div>
            <div class="row">
                <p><b>
                    Taken together, you haave shown a certain interest an willingneess in Artificial Intelligence.<br>
                    It is recommended that you further explore AI-related disciplines and careers to better develop your potential
                </b></p>
            </div>
            <div class="row content-img">
                <img src="https://placehold.co/600x400" alt="placeholder">
            </div>
        </div>
        
        <div class="row justify-content-between">
            <div class="col">
                <button class="prev">Previous</button>
            </div>
            <div class="col text-center">
                <span id="pageIndicator">0/3</span>
            </div>
            <div class="col text-end">
                <button class="next">Next</button>
            </div>
        </div>
    </div>
</body>
    <style>
        #content1 {
            background: grey;
        }
        #content2 {
            background: teal;
        }
        #content3 {
            background: cyan;
        }
        .test-result{
            text-align: center;
            margin-bottom: 25;
        }
        img {
            max-width: 600px;
            max-height: 400px;
        }
        .content-img {
            padding-bottom:50px
        }
        .content {
            transition: opacity 1s ease; /* Smooth transition for opacity */
            opacity: 0;                      /* Start with content hidden */
            display: none;                   /* Use display to add/remove from layout */
        }

        .content.active {
            display: block; /* Only active content is display:block */
            opacity: 1;     /* Active content is fully visible */
        }
        .next, .prev {
            margin:10px;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var contents = document.querySelectorAll('.content');
            var currentIndex = 0; // Start with the first content index
            var totalContent = contents.length; // Total number of content sections
            var pageIndicator = document.getElementById('pageIndicator');

            function showContent(index) {
                contents.forEach((content, i) => {
                    if (i === index) {
                        content.classList.add('active');
                    } else {
                        content.classList.remove('active');
                    }
                });
                pageIndicator.textContent = `${index + 1}/${totalContent}`; // Update the page indicator
            }

            document.querySelector('.next').addEventListener('click', function() {
                if (currentIndex < contents.length - 1) {
                    currentIndex++;
                    showContent(currentIndex);
                }
            });

            document.querySelector('.prev').addEventListener('click', function() {
                if (currentIndex > 0) {
                    currentIndex--;
                    showContent(currentIndex);
                }
            });

            // Initially show the first content
            showContent(currentIndex);
        });
    </script>
</html>