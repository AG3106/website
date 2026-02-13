            </div>
        </main>
    </div>
    <script>
        document.getElementById('themeToggle').addEventListener('click', function() {
            var html = document.documentElement;
            var isDark = html.getAttribute('data-theme') === 'dark';
            if (isDark) {
                html.removeAttribute('data-theme');
                localStorage.setItem('theme', 'light');
            } else {
                html.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
            }
        });

        // Center active nav item in mobile menu
        document.addEventListener('DOMContentLoaded', function() {
            var nav = document.querySelector('nav');
            var active = document.querySelector('nav .nav-item.active');
            if (nav && active) {
                // Determine if we need to scroll (only if content overflows or if we want to ensure center)
                // For a horizontally scrolling container:
                var navWidth = nav.offsetWidth;
                var activeRect = active.getBoundingClientRect();
                var navRect = nav.getBoundingClientRect();
                
                // Calculate position of active item relative to nav container
                var activeLeftRelative = activeRect.left - navRect.left;
                
                // If using offsetLeft, we need to account for intermediate offsetParents, 
                // so boundingClientRect difference + scrollLeft is safer for absolute position in scroll content
                var currentScroll = nav.scrollLeft;
                var targetScroll = currentScroll + activeLeftRelative - (navWidth / 2) + (activeRect.width / 2);
                
                nav.scrollTo({
                    left: targetScroll,
                    behavior: 'smooth'
                });
            }

            // Scroll arrows logic
            var navWrapper = document.querySelector('.nav-wrapper');
            if (navWrapper) {
                var nav = navWrapper.querySelector('nav');
                var leftArrow = navWrapper.querySelector('.left-arrow');
                var rightArrow = navWrapper.querySelector('.right-arrow');

                function updateArrows() {
                    // unexpected buffer of 1px
                    if (nav.scrollLeft > 1) {
                        leftArrow.classList.add('visible');
                    } else {
                        leftArrow.classList.remove('visible');
                    }
                    
                    if (nav.scrollLeft + nav.clientWidth < nav.scrollWidth - 1) {
                        rightArrow.classList.add('visible');
                    } else {
                        rightArrow.classList.remove('visible');
                    }
                }

                nav.addEventListener('scroll', updateArrows);
                window.addEventListener('resize', updateArrows);
                
                // Initial check after a slight delay to allow layout to settle
                setTimeout(updateArrows, 100);

                leftArrow.addEventListener('click', function() {
                    nav.scrollBy({ left: -200, behavior: 'smooth' });
                });

                rightArrow.addEventListener('click', function() {
                    nav.scrollBy({ left: 200, behavior: 'smooth' });
                });
            }
        });
    </script>
</body>
</html>