<?php
$current_page = "Education";
include("includes/header.inc");
include("includes/menu.inc");
?>

<div class="page-with-sidebar">
    <aside class="page-sidebar">
        <ul class="sidebar-nav">
            <li>
                <a href="#education" class="sidebar-link active">Academic Qualifications</a>
                <ul class="sidebar-subnav">
                    <li><a href="#btech" class="sidebar-link">B.Tech — IIT Kanpur</a></li>
                    <li><a href="#hsc" class="sidebar-link">Higher Secondary (XII)</a></li>
                    <li><a href="#icse" class="sidebar-link">Secondary (X)</a></li>
                </ul>
            </li>
        </ul>
    </aside>

    <div class="page-content">

        <h1 id="education">Academic Qualifications</h1>

        <div class="education-timeline">

            <!-- B.Tech -->
            <div class="timeline-item" id="btech">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="degree">B.Tech, Computer Science and Engineering</h3>
                        <span class="timeline-year">2024–Present</span>
                    </div>
                    <div class="institution">Indian Institute of Technology Kanpur</div>
                    <div class="score">CPI: 9.22/10</div>

                    <div class="por-section">
                        <h4 class="por-heading">Positions of Responsibility</h4>

                        <div class="por-card">
                            <div class="por-card-header">
                                <h5 class="por-role">Secretary — Brain and Cognitive Sciences Club, IITK</h5>
                                <span class="por-date">June 2025 - Present</span>
                            </div>
                            <p class="por-label">Initiatives:</p>
                            <ul>
                                <li>Conducted sessions on Introduction to ML and a workshop on Reinforcement Learning</li>
                                <li>Mentored 20+ students in a winter project on Competitive Reinforcement Learning</li>
                                <li>Participated in the NeurIPS Open Polymer Prediction 2025 hackathon (weighted MAE: 0.1)</li>
                            </ul>
                        </div>

                        <div class="por-card">
                            <div class="por-card-header">
                                <h5 class="por-role">Team Member — Team ERA, IITK</h5>
                                <span class="por-date">April 2025 - Present</span>
                            </div>
                            <p class="por-label">Contributions:</p>
                            <ul>
                                <li>Improving decision-making algorithms for robots competing in the <strong>RoboCup MSL</strong></li>
                                <li>Designing real-time perception and control algorithms</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- XII -->
            <div class="timeline-item" id="hsc">
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

            <!-- X -->
            <div class="timeline-item" id="icse">
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
    
    links.forEach(link => {
        const id = link.getAttribute('href').substring(1);
        const el = document.getElementById(id);
        if (el) sections.push({ id, el, link });
    });

    const nav = document.querySelector('.sidebar-nav');
    if (nav) {
        const marker = document.createElement('div');
        marker.classList.add('sidebar-marker');
        nav.appendChild(marker);
    }

    function updateActive() {
        if (isManualScroll) return;
        if (sections.length === 0) return;
        
        let current = sections[0];
        const offset = 200; 

        for (const s of sections) {
            const rect = s.el.getBoundingClientRect();
            if (rect.top <= offset) {
                current = s;
            }
        }

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
            const navRect = nav.getBoundingClientRect();
            const linkRect = link.getBoundingClientRect();
            
            const top = linkRect.top - navRect.top;
            const height = linkRect.height;
            
            marker.style.top = `${top}px`;
            marker.style.height = `${height}px`;
        }
    }

    window.addEventListener('scroll', updateActive);
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
        
        const totalDuration = 300; 
        const stepDuration = totalDuration / (indices.length + 1);
        
        const orderedIndices = isDown ? indices : indices.reverse();
        
        orderedIndices.forEach((idx, i) => {
            const link = allLinks[idx];
            setTimeout(() => {
                link.classList.add('intermediate-active');
                setTimeout(() => link.classList.remove('intermediate-active'), 250);
            }, (i + 1) * stepDuration);
        });
    }

    function scrollToActive(link) {
        const nav = document.querySelector('.sidebar-nav');
        if (nav && link) {
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
            
            moveMarker(this);

            if (currentActive && currentActive !== this) {
                 highlightIntermediates(currentActive, this);
            }

            const id = this.getAttribute('href').substring(1);
            const targetEl = document.getElementById(id);
            
            isManualScroll = true;
            if (manualScrollTimer) clearTimeout(manualScrollTimer);
            manualScrollTimer = setTimeout(() => {
                isManualScroll = false;
            }, 1000); 

            if (targetEl) {
                targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
            
            scrollToActive(this);

            setTimeout(() => {
                links.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            }, 300);
        });
    });
});
</script>

<?php include("includes/footer.inc"); ?>
