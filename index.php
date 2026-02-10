<?php
$current_page = "About";
include("header.inc");
include("menu.inc");
?>

<div class="page-with-sidebar">
    <aside class="page-sidebar">
        <ul class="sidebar-nav">
            <li>
                <a href="#about" class="sidebar-link active">About Me</a>
                <ul class="sidebar-subnav">
                    <li><a href="#achievements" class="sidebar-link">Key Achievements</a></li>
                    <li><a href="#skills" class="sidebar-link">Technical Skills</a></li>
                    <li><a href="#positions" class="sidebar-link">Positions of Responsibility</a></li>
                    <li><a href="#education" class="sidebar-link">Academic Qualifications</a></li>
                </ul>
            </li>
        </ul>
    </aside>

    <div class="page-content">

        <h1 id="about">About Me</h1>

        <p>I am a second-year undergraduate at IIT Kanpur, pursuing a B.Tech in Computer Science and Engineering. My interests include <strong>Machine Learning</strong>, <strong>Computer Vision</strong>, <strong>Robotics</strong>, and <strong>Reinforcement Learning</strong>.</p>

        <h2 id="achievements">Key Achievements</h2>

        <ul>
            <li><strong>Academic Excellence Award 2024</strong> — top 10% of 1,200+ student cohort</li>
            <li><strong>Reliance Foundation UG Scholar</strong> — awarded to top 5,000 students across India</li>
            <li><strong>JEE Advanced 2024</strong> — AIR 719 among 250,000 candidates</li>
            <li><strong>JEE Main 2024</strong> — AIR 164 (99.99th percentile), city topper</li>
        </ul>

        <h2 id="skills">Technical Skills</h2>

        <ul>
            <li><strong>Languages:</strong> Python, C, C++, Bash, Git, LaTeX</li>
            <li><strong>ML/DL:</strong> PyTorch, TensorFlow, Unsloth, Hugging Face</li>
            <li><strong>Robotics:</strong> ROS2, Gazebo, IsaacSim, NVIDIA Jetson</li>
            <li><strong>Tools:</strong> OpenCV, NumPy, Pandas, Matplotlib</li>
        </ul>

        <h2 id="positions">Positions of Responsibility</h2>

        <h3>Secretary — Brain and Cognitive Sciences Club, IITK <span class="date">June 2025 - Present</span></h3>
        <p style="margin-bottom: 8px;"><strong>Initiatives:</strong></p>
        <ul>
            <li>Conducted sessions on Introduction to ML and a workshop on Reinforcement Learning</li>
            <li>Mentored 20+ students in a winter project on Competitive Reinforcement Learning</li>
            <li>Participated in the NeurIPS Open Polymer Prediction 2025 hackathon (weighted MAE: 0.1)</li>
        </ul>

        <h3>Team Member — Team ERA, IITK <span class="date">April 2025 - Present</span></h3>
        <p style="margin-bottom: 8px;"><strong>Contributions:</strong></p>
        <ul>
            <li>Improving decision-making algorithms for robots competing in the <strong>RoboCup MSL</strong></li>
            <li>Designing real-time perception and control algorithms</li>
        </ul>

        <h2 id="education">Academic Qualifications</h2>

        <div class="education-timeline">
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="degree">B.Tech, Computer Science and Engineering</h3>
                        <span class="timeline-year">2024–Present</span>
                    </div>
                    <div class="institution">Indian Institute of Technology Kanpur</div>
                    <div class="score">CPI: <strong>9.22</strong>/10</div>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="degree">Higher Secondary Certificate (XII)</h3>
                        <span class="timeline-year">2024</span>
                    </div>
                    <div class="institution">Matoshri, Eklahare</div>
                    <div class="score">Score: 88.67%</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="degree">Indian Certificate of Secondary Education (X)</h3>
                        <span class="timeline-year">2022</span>
                    </div>
                    <div class="institution">Ryan International, Nashik</div>
                    <div class="score">Score: 92.17%</div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.sidebar-link');
    const sections = [];
    links.forEach(link => {
        const id = link.getAttribute('href').substring(1);
        const el = document.getElementById(id);
        if (el) sections.push({ id, el, link });
    });

    function updateActive() {
        let current = sections[0];
        for (const s of sections) {
            if (s.el.getBoundingClientRect().top <= 120) current = s;
        }
        links.forEach(l => l.classList.remove('active'));
        current.link.classList.add('active');
    }

    window.addEventListener('scroll', updateActive);
    updateActive();

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.getAttribute('href').substring(1);
            document.getElementById(id).scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
});
</script>

<?php include("footer.inc"); ?>
