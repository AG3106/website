                <div class="nav-wrapper">
                    <button class="nav-arrow left-arrow" aria-label="Scroll left">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <nav>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url; ?>index.php" class="nav-item <?php if($current_page == 'Home' || $current_page == 'About') echo 'active'; ?>">About</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>education.php" class="nav-item <?php if($current_page == 'Education') echo 'active'; ?>">Education</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>projects.php" class="nav-item <?php if($current_page == 'Projects') echo 'active'; ?>">Projects</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>research.php" class="nav-item <?php if($current_page == 'Research') echo 'active'; ?>">Research</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>contact.php" class="nav-item <?php if($current_page == 'Contact') echo 'active'; ?>">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="nav-arrow right-arrow" aria-label="Scroll right">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </header>
        
        <main>
            <div class="container">