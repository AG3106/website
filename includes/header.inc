<?php
    if (!isset($base_url)) {
        $base_url = "./";
    }
    $site_name = "Aayush Gajeshwar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?></title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css?v=<?php echo time(); ?>.7">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script>
        (function() {
            var theme = localStorage.getItem('theme');
            if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
    </script>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="header-inner">
                <div class="profile-section">
                    <img src="<?php echo $base_url; ?>images/image.jpeg" alt="<?php echo $site_name; ?>" class="profile-image">
                    <h1 class="site-title"><?php echo $site_name; ?></h1>
                    <p class="site-subtitle">Second-year Undergraduate, Department of Computer Science and Engineering<br>Indian Institute of Technology Kanpur</p>
                    <div class="social-icons">
                        <a href="https://github.com/ag3106" target="_blank" class="social-icon" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/aayush-gajeshwar-313017331/" target="_blank" class="social-icon" aria-label="LinkedIn">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto:aayushk24@iitk.ac.in" class="social-icon" aria-label="Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                    <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                    </button>
                </div>
