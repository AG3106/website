<?php
$current_page = "Projects";
include("includes/header.inc");
include("includes/menu.inc");
?>

<div class="page-with-sidebar">
    <aside class="page-sidebar">
        <ul class="sidebar-nav">
            <li><a href="#competitions" class="sidebar-link active">Competitions</a></li>
            <li><a href="#projects" class="sidebar-link">Projects</a></li>
        </ul>
    </aside>

    <div class="page-content">

        <h1 id="competitions">Competitions</h1>

        <div class="project-card">
            <div class="project-header">
                <div class="project-title-row">
                    <h2>Inter IIT Tech Meet 14.0</h2>
                    <span class="project-badge">🥈 Silver Medal</span>
                </div>
                <div class="project-meta">
                    <span class="project-org">ISRO</span>
                    <span class="project-date">Nov - Dec 2025</span>
                </div>
            </div>
            <p class="project-objective"><strong>Objective:</strong> Build a multimodal Geo-NLI system for satellite imagery tasks</p>
            <ul>
                <li>Developed <strong>TRINETRA</strong> to orchestrate VLMs (fine-tuned Qwen3VL) and CV experts via <strong>LLaMA 3.1</strong></li>
                <li>Created <strong>GeoMeasure</strong> by fusing SAM 2.1/3 with RemoteCLIP for numerical VQA</li>
                <li>Optimized a <strong>Tri-YOLO ensemble</strong> for scale variance (0.4m-30m GSD)</li>
                <li>Achieved <strong>&lt;10s inference</strong> on A100 GPU, outperforming SOTA</li>
            </ul>
            <div class="project-links">
                <a href="https://www.interiit-tech.com/ps/ISRO_M3_TechMeet14.pdf" target="_blank" class="project-link"><i class="fas fa-file-alt"></i> Problem Statement</a>
                <a href="https://github.com/Shlok-Jain/isro-geonli" target="_blank" class="project-link"><i class="fab fa-github"></i> Code</a>
                <a href="https://drive.google.com/file/d/1hbhzwfZOZ4yGz87a7-9yW5cpmiY3R3Ao/view" target="_blank" class="project-link"><i class="fas fa-file-alt"></i> Report</a>
                <span class="project-tag">Paper submitted to IGARSS 2026</span>
            </div>
        </div>

        <h1 id="projects">Projects</h1>

        
        <div class="project-card">
            <div class="project-header">
                <div class="project-title-row">
                    <h2>Brain Spy</h2>
                    <span class="project-badge award">🏆 Best Research Project - SnT Summer Project Showcase</span>
                </div>
                <div class="project-meta">
                    <span class="project-org">Brain and Cognitive Sciences Club, IITK • Summer Project</span>
                    <span class="project-date">May - July 2025</span>
                </div>
            </div>
            <ul>
                <li>Built a fast <strong>sMRI preprocessing pipeline</strong> for ADNI scans</li>
                <li>Benchmarked <strong>CNN, 3D CNN, attention-based, and dual-branch</strong> architectures for Alzheimer's detection</li>
                <li>Achieved <strong>85% accuracy</strong>, competitive with SOTA benchmarks</li>
                <li>Applied <strong>transfer learning</strong> for early-stage MCI detection</li>
            </ul>
            <div class="project-links">
                <a href="https://github.com/ramdaftari/brain-spy" target="_blank" class="project-link"><i class="fab fa-github"></i> Code</a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-header">
                <div class="project-title-row">
                    <h2>Omnidirectional Monocular Perception</h2>
                </div>
                <div class="project-meta">
                    <span class="project-org">Team ERA, IITK • Prof. Twinkle Tripathy</span>
                    <span class="project-date">May - July 2025</span>
                </div>
            </div>
            <ul>
                <li>Built a cost-effective <strong>360-degree perception system</strong> that replaces LiDAR with monocular cameras</li>
                <li>Developed a <strong>Genetic Algorithm</strong>-based localization method from camera observations</li>
                <li>Fused it with odometry for <strong>real-time localization at 20 Hz</strong></li>
                <li>Integrated <strong>YOLO11n + Geometric Ray Casting</strong> for 3D coordinates</li>
                <li>Achieved <strong>&lt;10 cm positioning error</strong> without active depth sensors</li>
            </ul>
            <div class="project-links">
                <a href="https://github.com/AG3106/Localization" target="_blank" class="project-link"><i class="fab fa-github"></i> Code</a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-header">
                <div class="project-title-row">
                    <h2>Goalkeeper Robot Control System</h2>
                </div>
                <div class="project-meta">
                    <span class="project-org">Team ERA, IITK • Prof. Twinkle Tripathy</span>
                    <span class="project-date">Aug - Nov 2025</span>
                </div>
            </div>
            <ul>
                <li>Trained <strong>YOLO11n</strong> with a Kinect depth camera for <strong>3D ball tracking at 20 FPS</strong></li>
                <li>Formulated <strong>trajectory prediction algorithm</strong> for interception point estimation</li>
                <li>Implemented custom <strong>velocity controller</strong> for goalkeeper movement</li>
                <li>Validated via custom <strong>2D Python simulator</strong> before physical deployment</li>
            </ul>
            <div class="project-links">
                <a href="https://github.com/Rattandeep-Singh/ERA-Goalkeeper-Integration" target="_blank" class="project-link"><i class="fab fa-github"></i> Code</a>
            </div>
        </div>
        
        <div class="project-card">
            <div class="project-header">
                <div class="project-title-row">
                    <h2>Stack-O-Matic</h2>
                </div>
                <div class="project-meta">
                    <span class="project-org">Brain and Cognitive Sciences Club, IITK • Winter Project</span>
                    <span class="project-date">Dec - Jan 2025</span>
                </div>
            </div>
            <ul>
                <li>Built a custom <strong>Tetris environment</strong> with Pygame rendering and video export utilities</li>
                <li>Implemented a <strong>Double DQN model</strong> and training pipeline for this environment</li>
            </ul>
            <div class="project-links">
                <a href="https://github.com/AG3106/Stack-O-Matic" target="_blank" class="project-link"><i class="fab fa-github"></i> Code</a>
            </div>
        </div>
    </div>
</div>

<script>
// Highlight sidebar link on scroll
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

    // Smooth scroll
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.getAttribute('href').substring(1);
            document.getElementById(id).scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
});
</script>

<?php include("includes/footer.inc"); ?>
