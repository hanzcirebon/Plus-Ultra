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
    <h3 style="margin-top: 10px;text-align: center;"><span style="color: rgb(124, 118, 187);">Related </span><span style="color: rgb(255, 135, 176);">Skills and Technologies</span><span style="color: rgb(124, 118, 187);"> on Emerging Job Roles</span></h3>
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row gy-4 w-100" style="max-width: 800px;">
            <div class="col-12">
                <div class="card">
                <div id="network-graph"></div>
                </div>
            </div>
        </div>
    </div>

    <h3 style="margin-top: 10px;text-align: center;"><span style="color: rgb(124, 118, 187);">Connection Betweeen Each </span><span style="color: rgb(255, 135, 176);">Skills and Technologies</span><span style="color: rgb(124, 118, 187);"> on Emerging Job Roles</span></h3>
    <div class="container d-flex flex-column align-items-center py-4 py-xl-5">
        <div class="row gy-4 w-100" style="max-width: 800px;">
            <div class="col-12">
                <div class="card">
                <div id="hie-graph"></div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
    <script>
        // BAR CHART
        d3.json("https://raw.githubusercontent.com/hanzcirebon/test/main/job_datav2.json")
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

                // WORD CLOUD
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

        // NETWORK GRAPH
        d3.json("https://raw.githubusercontent.com/hanzcirebon/test/main/job_datav2.json")
            .then(function(data) {
                // Filter out the job title "Architect"
                const filteredData = data.filter(job => job.job_title !== "Data Architect");

                // Extract job titles and skills data
                const jobData = filteredData;

                // Define the number of top skills to display for each job title
                const topSkillsCount = 10;

                // Define nodes and links
                const nodes = [];
                const links = [];
                const skillCounts = {}; // Object to store the count of jobs for each skill
                
                // Define tooltip variable
                const tooltip = d3.select("body").append("div")
                    .attr("class", "tooltip-network")
                    .style("opacity", 0);

                jobData.forEach(job => {
                    // Sort skills by count in descending order and take top skills
                    const sortedSkills = Object.entries(job.count_skills)
                        .sort((a, b) => b[1] - a[1])
                        .slice(0, topSkillsCount);
                    
                    nodes.push({ id: job.job_title, type: 'job', count: job.count });
                    sortedSkills.forEach(skill => {
                        const skillName = skill[0];
                        const skillCount = skill[1];
                        if (!(skillName in skillCounts)) {
                            skillCounts[skillName] = 0;
                            nodes.push({ id: skillName, type: 'skill', count: skillCount });
                        }
                        skillCounts[skillName]++;
                        links.push({ source: job.job_title, target: skillName });
                    });
                });

                // Define SVG dimensions
                const width = 800;
                const height = 600;

                // Create SVG
                const svg = d3.select("#network-graph")
                    .append("svg")
                    .attr("width", width)
                    .attr("height", height);

                // Create gradient
                const gradient = svg.append("defs")
                    .append("linearGradient")
                    .attr("id", "gradient")
                    .attr("x1", "0%")
                    .attr("y1", "0%")
                    .attr("x2", "100%")
                    .attr("y2", "100%");
                
                gradient.append("stop")
                    .attr("offset", "0%")
                    .style("stop-color", "#ff7f0e"); // Orange color
                gradient.append("stop")
                    .attr("offset", "100%")
                    .style("stop-color", "#2ca02c"); // Green color

                // Create group for zooming
                const g = svg.append("g");

                // Create simulation
                const simulation = d3.forceSimulation(nodes)
                    .force("link", d3.forceLink(links).id(d => d.id))
                    .force("charge", d3.forceManyBody().strength(-300))
                    .force("center", d3.forceCenter(width / 2, height / 2));

                // Draw links
                const link = g.selectAll(".link")
                    .data(links)
                    .enter().append("line")
                    .attr("class", "link");

                // Draw nodes
                const node = g.selectAll(".node")
                    .data(nodes)
                    .enter().append("circle")
                    .attr("class", "node")
                    .attr("r", d => d.type === 'job' ? 8 : 5)
                    .attr("class", d => d.type === 'job' ? 'job-node' : 'skill-node')
                    .call(d3.drag()
                        .on("start", dragstarted)
                        .on("drag", dragged)
                        .on("end", dragended))
                    .on("mouseover", handleMouseOver)
                    .on("mouseout", handleMouseOut);

                // Add node labels
                const label = g.selectAll(null)
                    .data(nodes)
                    .enter()
                    .append('text')
                    .text(d => d.id)
                    .attr('font-size', 12)
                    .attr("class", d => d.type === 'job' ? 'job-label' : 'skill-label');

                // Update node and link positions
                simulation.on("tick", () => {
                    link
                        .attr("x1", d => d.source.x)
                        .attr("y1", d => d.source.y)
                        .attr("x2", d => d.target.x)
                        .attr("y2", d => d.target.y);

                    node
                        .attr("cx", d => d.x)
                        .attr("cy", d => d.y);

                    label
                        .attr('x', d => d.x + 10)
                        .attr('y', d => d.y - 10);
                });

                // Define zoom behavior
                const zoom = d3.zoom()
                    .scaleExtent([0.1, 10])
                    .on("zoom", function(event) {
                        g.attr("transform", event.transform);
                    });

                // Apply zoom behavior to SVG
                svg.call(zoom);

                // Drag functions
                function dragstarted(event, d) {
                    if (!event.active) simulation.alphaTarget(0.3).restart();
                    d.fx = d.x;
                    d.fy = d.y;
                }

                function dragged(event, d) {
                    d.fx = event.x;
                    d.fy = event.y;
                }

                function dragended(event, d) {
                    if (!event.active) simulation.alphaTarget(0);
                    d.fx = null;
                    d.fy = null;
                }

                // Tooltip functions
                function handleMouseOver(event, d) {
                    tooltip.transition()
                        .duration(200)
                        .style("opacity", .9);
                    tooltip.html(d.id + "<br/>" + "Count: " + d.count)
                        .style("left", (event.pageX) + "px")
                        .style("top", (event.pageY - 28) + "px");
                }

                function handleMouseOut(d) {
                    tooltip.transition()
                        .duration(500)
                        .style("opacity", 0);
                }
            })
            .catch(function(error) {
                console.log("Error loading the data");
                console.error(error);
            });

        // HIREARCHY GRAPH
    
        var diameter = 800,
        radius = diameter / 2,
        innerRadius = radius - 120;

        var cluster = d3.cluster()
            .size([360, innerRadius]);

        var line = d3.radialLine()
            .curve(d3.curveBundle.beta(0.85))
            .radius(function(d) { return d.y; })
            .angle(function(d) { return d.x / 180 * Math.PI; });

        var svg = d3.select("#hie-graph").append("svg")
            .attr("width", diameter)
            .attr("height", diameter)
            .append("g")
            .attr("transform", "translate(" + radius + "," + radius + ")");

        var link = svg.append("g").selectAll(".link-hie"),
            node = svg.append("g").selectAll(".node-hie");

        d3.json("https://raw.githubusercontent.com/hanzcirebon/test/main/skills_data.json").then(function(classes) {
            var root = packageHierarchy(classes)
                .sum(function(d) { return d.size; });

            cluster(root);

            link = link
            .data(packageImports(root.leaves()))
            .join("path")
                .each(function(d) { d.source = d[0], d.target = d[d.length - 1]; })
                .attr("class", "link-hie")
                .attr("d", line);

            node = node
            .data(root.leaves())
            .join("text")
                .attr("class", "node-hie")
                .attr("dy", "0.31em")
                .attr("transform", function(d) { return "rotate(" + (d.x - 90) + ")translate(" + (d.y + 8) + ",0)" + (d.x < 180 ? "" : "rotate(180)"); })
                .attr("text-anchor", function(d) { return d.x < 180 ? "start" : "end"; })
                .text(function(d) { return d.data.key; })
                .on("mouseover", function(event, d) {
                link.style('stroke-opacity', function(l) {
                    return l.source === d || l.target === d ? 0.9 : 0.1;
                })
                .classed("highlight", function(l) {
                    return l.source === d || l.target === d;
                })
                .classed("fade", function(l) {
                    return l.source !== d && l.target !== d;
                });

                d3.select(this).classed("highlight", true);

                node.classed("highlight", function(n) {
                    return (this !== n && (d.data.imports.includes(n.data.name) || n.data.imports.includes(d.data.name)));
                });
                })
                .on("mouseout", function(event, d) {
                link.style('stroke-opacity', 0.5)
                .classed("highlight", false)
                .classed("fade", false);

                node.classed("highlight", false);
                });
        });

        function packageHierarchy(classes) {
            var map = {};

            function find(name, data) {
            var node = map[name], i;
            if (!node) {
                node = map[name] = data || {name: name, children: []};
                if (name.length) {
                node.parent = find(name.substring(0, i = name.lastIndexOf(".")));
                node.parent.children.push(node);
                node.key = name.substring(i + 1);
                }
            }
            return node;
            }

            classes.forEach(function(d) {
            find(d.name, d);
            });

            return d3.hierarchy(map[""]);
        }

        function packageImports(nodes) {
            var map = {},
                imports = [];

            nodes.forEach(function(d) {
            map[d.data.name] = d;
            });

            nodes.forEach(function(d) {
            if (d.data.imports) d.data.imports.forEach(function(i) {
                imports.push(map[d.data.name].path(map[i]));
            });
            });

            return imports;
        }

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

        .tooltip-network {
            position: absolute;
            text-align: center;
            padding: 6px;
            font: 12px sans-serif;
            background: #FFFFFF;
            border: 1px solid #333;
            border-radius: 5px;
            pointer-events: none;
        }

        .job-node {
            fill: #007bff; /* Blue color */
        }

        .skill-node {
            fill: url(#gradient); /* Gradient fill */
        }

        .job-label {
            fill: #007bff; /* Blue color */
        }

        .skill-label {
            fill: black; /* Black color */
        }

        .link {
            stroke: #ccc; /* Light gray color */
            stroke-width: 1.5px;
        }

        .node-hie {
            font: 10px sans-serif;
        }

        .link-hie {
            stroke: steelblue;
            stroke-opacity: 0.5;
            fill: none;
            pointer-events: none;
        }

        .link-hie.highlight {
            stroke-opacity: 0.5;
            stroke-width: 3px;
        }

        .link-hie.fade {
            stroke-opacity: 0;
        }

        .node-hie.highlight {
            font-weight: bold;
            fill: rgb(0, 72, 255);
            /* Or any color that stands out */
        }
    </style>
    @include('script_js')
</body>
</html>