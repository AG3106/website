<?php
$current_page = "Research";
include("includes/header.inc");
include("includes/menu.inc");
?>

<div class="page-with-sidebar">
    <aside class="page-sidebar">
        <ul class="sidebar-nav">
            <li><a href="#conference-papers" class="sidebar-link active">Conference Papers</a></li>
        </ul>
    </aside>

    <div class="page-content">
        <h1 id="conference-papers">Conference Papers</h1>

        <ol class="publication-list">
            <li class="publication-item">
                <article>
                    <div class="publication-header">
                        <h2 class="publication-title">TRINETRA: Text-guided Remote-sensing Interpretation via Ensemble-based TRansformers</h2>
                        <span class="publication-badge">IGARSS 2026</span>
                    </div>

                    <p class="publication-authors">
                        Harshit Jaiswal<sup>*</sup>, Vedant Neekhra<sup>*</sup>, Shlok Jain<sup>*</sup>, <strong>Aayush Gajeshwar<sup>*</sup></strong>, Dabeet Kumar Das<sup>*</sup>, Arnab Datta<sup>*</sup>, Archisman Dhar<sup>*</sup>, Ujjwal Prakash<sup>*</sup>, Jugal R. Patel, Ichchhit Baranwal, Tushar Shukla, Neeraj Badal, and Ashutosh Gupta
                    </p>

                    <p class="publication-venue">
                        Accepted at <em>2026 IEEE International Geoscience and Remote Sensing Symposium (IGARSS 2026)</em>, Washington, DC, USA, Aug. 9-14, 2026.
                    </p>

                    <div class="publication-links">
                        <a href="https://github.com/Shlok-Jain/isro-geonli" target="_blank" class="publication-link" rel="noopener">
                            <i class="fab fa-github"></i> Code
                        </a>
                        <a href="https://drive.google.com/file/d/1hbhzwfZOZ4yGz87a7-9yW5cpmiY3R3Ao/view" target="_blank" class="publication-link" rel="noopener">
                            <i class="fas fa-file-alt"></i> Report
                        </a>
                    </div>

                    <p class="publication-note"><sup>*</sup> Equal contribution.</p>
                </article>
            </li>
        </ol>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.sidebar-link');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.getAttribute('href').substring(1);
            const target = document.getElementById(id);
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
});
</script>

<?php include("includes/footer.inc"); ?>
