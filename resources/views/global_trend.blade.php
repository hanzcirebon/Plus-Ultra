<!DOCTYPE html>
<html lang="en">

<header>
    @include('header')
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-cloud/1.2.5/d3.layout.cloud.min.js"></script>
</header>

<body>
    @include('navbar')

    <!-- <h3 style="margin-top: 10px;text-align: center;"><span style="color: rgb(124, 118, 187);">2024 IT Industry </span><span style="color: rgb(255, 135, 176);">Growth</span><span style="color: rgb(124, 118, 187);"> Rates</span></h3>
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row gy-4 w-100" style="max-width: 800px;">
            <div class="col-12">
                <div class="card"><img class="card-img w-100 d-block placeholder" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="card-img-overlay text-center placeholder d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
        </div>
    </div>
    <h3 style="margin-top: 10px;text-align: center;"><span style="color: rgb(124, 118, 187);">2024 Emerging </span><span style="color: rgb(255, 135, 176);">Technologies</span></h3>
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row gy-4 w-100" style="max-width: 800px;">
            <div class="col-12">
                <div class="card"><img class="card-img w-100 d-block placeholder" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="card-img-overlay text-center placeholder d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
        </div>
    </div> -->
    <h3 style="margin-top: 10px;text-align: center;"><span style="color: rgb(124, 118, 187);">Emerging </span><span style="color: rgb(255, 135, 176);">Job Roles</span></h3>
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row gy-4 w-100" style="max-width: 800px;">
            <div class="col-12">
                <div class="card">
                    <div id="job_barchart" class="text-center d-flex flex-column justify-content-center align-items-center p-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 id="wordcloud-title" style="margin-top: 10px;text-align: center;"><span style="color: rgb(124, 118, 187);">In-Demand </span><span style="color: rgb(255, 135, 176);">Skills</span></h3>
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row gy-4 w-100" style="max-width: 800px;">
            <div class="col-12">
                <div class="card wordcloud-container">
                    <div id="wordcloud" class="wordcloud text-center d-flex flex-column justify-content-center align-items-center p-4">
                        <h4>Click any Bar on Emerging Job Barchart</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <h3 style="margin-top: 10px;text-align: center;"><span style="color: rgb(124, 118, 187);">Technology </span><span style="color: rgb(255, 135, 176);">Impact</span></h3>
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row gy-4 w-100" style="max-width: 800px;">
            <div class="col-12">
                <div class="card"><img class="card-img w-100 d-block placeholder" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="card-img-overlay text-center placeholder d-flex flex-column justify-content-center align-items-center p-4"></div>
                </div>
            </div>
        </div>
    </div> -->

    @include('footer')
    <script>
        d3.json("https://raw.githubusercontent.com/hanzcirebon/test/main/job_data.json")
            .then(function(data) {
                // Process the data and create the bar chart
                var margin = { top: 50, right: 10, bottom: 80, left: 125 }, // Modified margins
                    width = 760 - margin.left - margin.right,
                    height = 500 - margin.top - margin.bottom;

                var svg = d3.select("#job_barchart") // Target the container 
                    .append("svg")
                    .attr("width", width + margin.left + margin.right)
                    .attr("height", height + margin.top + margin.bottom)
                    .append("g")
                    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

                // X Axis 
                var xScale = d3.scaleLinear()
                    .domain([0, d3.max(data, function(d) { return d.count; })]) // Use your count field
                    .range([0, width]);
                
                // Append X axis title
                svg.append("text")
                    .attr("class", "x-axis-title")
                    .attr("text-anchor", "middle")
                    .attr("x", width / 2)
                    .attr("y", -margin.top / 2) // Move the title above the chart
                    .style("font-weight", "bold") // Set font weight to bold
                    .style("font-size", "20px") // Set font size to 16px
                    .text("Number of Job Postings on LinkedIn");

                svg.append("g")
                    .attr("transform", "translate(0," + height + ")")
                    .call(d3.axisBottom(xScale))
                    .selectAll("text")
                    .attr("transform", "translate(-10,0)rotate(-45)")
                    .style("text-anchor", "end")
                    .style("font-size", "12px");

                // Y Axis 
                var yScale = d3.scaleBand()
                    .range([0, height])
                    .domain(data.map(function(d) { return d.job_title; }))
                    .padding(.1);

                svg.append("g")
                    .call(d3.axisLeft(yScale));

                // Bars 
                svg.selectAll("myRect")
                    .data(data)
                    .enter()
                    .append("rect")
                    .attr("x", xScale(0)) // Start bars at 0
                    .attr("y", function(d) { return yScale(d.job_title); })
                    .attr("width", function(d) { return xScale(d.count); })
                    .attr("height", yScale.bandwidth())
                    .attr("fill", "#69b3a2");

                var tooltip = d3.select("body") // Create a tooltip element
                    .append("div")
                    .style("opacity", 0)
                    .attr("class", "tooltip");

                // Calculate the bar chart height dynamically
                var chartHeight = height + margin.top + margin.bottom;

                // Function to generate word cloud on bar click
                function showWordCloud(jobTitle) {
                    // Filter the data to get skills for the selected job
                    var skillsData = data.find(d => d.job_title === jobTitle).count_skills;

                    // Clear any existing word cloud
                    d3.select("#wordcloud").remove();

                    // Select the wordcloud-container element
                    var wordCloudContainer = d3.select(".wordcloud-container")
                        .style("position", "relative")
                        .classed("wordcloud text-center d-flex flex-column justify-content-center align-items-center p-4", true);

                      // Update the title based on the job title
                    d3.select("#wordcloud-title")
                    .html(`<span style="color: rgb(124, 118, 187);">In-Demand Skills for </span><span style="color: rgb(255, 135, 176);">${jobTitle}</span>`);
                    
                    // Append the word cloud to the wordcloud-container
                    wordCloudContainer
                        .append("div")
                        .attr("id", "wordcloud")
                        .style("top", "0")
                        .style("left", "0")
                        .style("width", "100%")
                        .style("height", "100%");

                    // Generate the word cloud
                    generateWordCloud(skillsData, d3.select("#wordcloud"), 75);
                }

                svg.selectAll("rect")
                    .on("mouseover", function(event, d) {
                        tooltip.style("opacity", 1)
                            .html("Job: " + d.job_title + "<br>Count: " + d.count)
                            // Adjust positioning for tooltip box around the cursor
                            .style("left", (event.pageX + 15) + "px") // Offset to the right of the cursor
                            .style("top", (event.pageY - 40) + "px"); // Offset above the cursor
                    })
                    .on("mouseout", function() {
                        tooltip.style("opacity", 0);
                    })
                    .on("click", function(event, d) {
                        showWordCloud(d.job_title);
                    });

                // Word Cloud Generation
                function generateWordCloud(skillsData, container, limit) {
                    // Sort skillsData in descending order of occurrences
                    var sortedData = Object.entries(skillsData).sort((a, b) => b[1] - a[1]);

                    // Take the top 'limit' words
                    var limitedWords = sortedData.slice(0, limit).map(entry => ({ text: entry[0], size: entry[1] }));

                    // Calculate maximum frequency
                    var maxFrequency = limitedWords[0].size;

                    // Normalize word sizes based on the maximum frequency
                    limitedWords.forEach(word => {
                        word.size = Math.sqrt(word.size / maxFrequency) * 30; // Adjust multiplier as needed for desired scaling
                    });

                    var cloudWidth = 400; // Adjust as needed
                    var cloudHeight = 300; // Adjust as needed

                    // Update the size of the container
                    container.style("width", cloudWidth + "px")
                        .style("height", cloudHeight + "px");

                    var fill = d3.scaleOrdinal(d3.schemeCategory10);

                    d3.layout.cloud()
                        .size([cloudWidth, cloudHeight])
                        .words(limitedWords)
                        .padding(3)
                        .rotate(0) // No rotation for now
                        .font("Impact")
                        .fontSize(function(d) { return d.size; })
                        .on("end", draw)
                        .start();

                    function draw(words) {
                        var cloud = container.append("svg")
                        .attr("width", cloudWidth)
                        .attr("height", cloudHeight)
                        .append("g")
                        .attr("transform", "translate(" + cloudWidth / 2 + "," + cloudHeight / 2 + ")");

                        // Entering words:
                        var text = cloud.selectAll("text")
                        .data(words)
                        .enter().append("text")
                        .style("font-family", "Impact")
                        .style("fill", function(d, i) { return fill(i); })
                        .attr("text-anchor", "middle")
                        .attr('font-size', 1)
                        .text(function(d) { return d.text; })
                        .transition()
                        .duration(600)
                        .style("font-size", function(d) { return d.size + "px"; })
                        .attr("transform", function(d) {
                            return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
                        })
                        .style("fill-opacity", 1);

                        // Exiting words:
                        cloud.selectAll("text")
                        .data(words)
                        .exit()
                        .transition()
                        .duration(200)
                        .style('fill-opacity', 1e-6)
                        .attr('font-size', 1)
                        .remove();
                    }
                }
            })

            .catch(function(error) {
                console.error("Error fetching data:", error);
            });


    </script>
    <style>
        .tooltip {
            opacity: 0;          /* Hidden by default */
            position: absolute;  /* Positioned relative to the document */
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 10px; 
            border-radius: 5px;  /* Add a slight border radius for a softer look */
        }

        #wordcloud text {
            cursor: pointer;
        }
    </style>
    @include('script_js')
</body>
</html>