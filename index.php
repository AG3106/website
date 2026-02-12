<?php
$current_page = "About";
include("includes/header.inc");
include("includes/menu.inc");
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
            <li><strong>Programming Languages & Utilities:</strong> Python, C, C++, Bash, Git, LaTeX</li>
            <li><strong>Libraries & Frameworks:</strong> PyTorch, Unsloth, NumPy, Pandas, Matplotlib, TensorFlow, OpenCV, ROS2 Humble</li>
            <li><strong>Tools & Platforms:</strong> Google Colab, VS Code, Hugging Face, NVIDIA Jetson, GitHub, Gazebo, IsaacSim</li>
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
                    <div class="score">CPI: 9.22/10</div>
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
    let isManualScroll = false;
    let manualScrollTimer = null;
    
    // Populate sections
    links.forEach(link => {
        const id = link.getAttribute('href').substring(1);
        const el = document.getElementById(id);
        if (el) sections.push({ id, el, link });
    });

    // Create marker element
    const nav = document.querySelector('.sidebar-nav');
    if (nav) {
        const marker = document.createElement('div');
        marker.classList.add('sidebar-marker');
        nav.appendChild(marker);
    }

    function updateActive() {
        if (isManualScroll) return; // Skip update if scrolling manually

        if (sections.length === 0) return;
        
        // Default to the first section if none match yet (top of page)
        let current = sections[0];
        const offset = 200; 

        for (const s of sections) {
            const rect = s.el.getBoundingClientRect();
            if (rect.top <= offset) {
                current = s;
            }
        }

        // Special check for bottom of page to ensure last item is selected
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 50) {
             current = sections[sections.length - 1];
        }

        links.forEach(l => l.classList.remove('active'));
        if (current && current.link) {
            current.link.classList.add('active');
            moveMarker(current.link);
            scrollToActive(current.link);
        }
    }

    function moveMarker(link) {
        const marker = document.querySelector('.sidebar-marker');
        const nav = document.querySelector('.sidebar-nav');
        if (marker && nav && link) {
            // Need relative position to nav
            const navRect = nav.getBoundingClientRect();
            const linkRect = link.getBoundingClientRect();
            
            const top = linkRect.top - navRect.top;
            const height = linkRect.height;
            
            marker.style.top = `${top}px`;
            marker.style.height = `${height}px`;
        }
    }

    // Update on scroll
    window.addEventListener('scroll', updateActive);
    
    // Initial call
    updateActive();

    function highlightIntermediates(fromLink, toLink) {
        if (!fromLink || !toLink) return;
        
        const allLinks = sections.map(s => s.link);
        const startIdx = allLinks.indexOf(fromLink);
        const endIdx = allLinks.indexOf(toLink);
        


        if (startIdx === -1 || endIdx === -1 || startIdx === endIdx) return;
        
        const isDown = endIdx > startIdx;
        const min = Math.min(startIdx, endIdx);
        const max = Math.max(startIdx, endIdx);
        
        const indices = [];
        for (let i = min + 1; i < max; i++) {
            indices.push(i);
        }
        
        if (indices.length === 0) return;
        
        // Match CSS transition duration (300ms)
        const totalDuration = 300; 
        const stepDuration = totalDuration / (indices.length + 1);
        
        const orderedIndices = isDown ? indices : indices.reverse();
        
        orderedIndices.forEach((idx, i) => {
            const link = allLinks[idx];
            setTimeout(() => {
                link.classList.add('intermediate-active');
                setTimeout(() => link.classList.remove('intermediate-active'), 250); // Longer active time
            }, (i + 1) * stepDuration);
        });
    }

    function scrollToActive(link) {
        const nav = document.querySelector('.sidebar-nav');
        if (nav && link) {
            // Center the active link in the scroll view
            const scrollLeft = link.offsetLeft - (nav.offsetWidth / 2) + (link.offsetWidth / 2);
            nav.scrollTo({
                left: scrollLeft,
                behavior: 'smooth'
            });
        }
    }

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const currentActive = document.querySelector('.sidebar-link.active');
            
            // Move marker immediately (starts 300ms transition)
            moveMarker(this);

            // Highlight intermediates based on 300ms duration
            if (currentActive && currentActive !== this) {
                 highlightIntermediates(currentActive, this);
            }

            const id = this.getAttribute('href').substring(1);
            const targetEl = document.getElementById(id);
            
            // Set flag to prevent scroll spy from interfering
            isManualScroll = true;
            if (manualScrollTimer) clearTimeout(manualScrollTimer);
            manualScrollTimer = setTimeout(() => {
                isManualScroll = false;
            }, 1000); 

            // Scroll to target
            if (targetEl) {
                targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
            
            // Auto-scroll the nav bar to keep this item visible
            scrollToActive(this);

            // Delay updating active state until slide finishes (300ms)
            setTimeout(() => {
                links.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            }, 300);
        });
    });
    
    // Also scroll on initial load and during scroll spy interaction
    const oldUpdateActive = updateActive; // preserve ref if needed, but we modify updateActive directly
    
    // We need to inject scrollToActive into updateActive. 
    // Since I can't easily hook into the middle of the existing function with replace_file_content without replacing the whole thing, 
    // I will replace updateActive above. Wait, I am editing the click handler here.
    // I should probably edit updateActive separately to include scrollToActive(current.link).
});
</script>

<?php include("includes/footer.inc"); ?>
