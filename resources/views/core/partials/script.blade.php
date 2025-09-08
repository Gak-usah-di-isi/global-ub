<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        const button = this;
        const spans = button.querySelectorAll('span');

        if (mobileMenu.classList.contains('invisible')) {
            mobileMenu.classList.remove('-translate-y-full', 'opacity-0', 'invisible');
            mobileMenu.classList.add('translate-y-0', 'opacity-100', 'visible');
            spans[0].classList.add('rotate-45', 'translate-y-1.5');
            spans[1].classList.add('opacity-0');
            spans[2].classList.add('-rotate-45', '-translate-y-1.5');
        } else {
            mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'invisible');
            mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');

            spans[0].classList.remove('rotate-45', 'translate-y-1.5');
            spans[1].classList.remove('opacity-0');
            spans[2].classList.remove('-rotate-45', '-translate-y-1.5');
        }
    });

    document.addEventListener('click', function(event) {
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuButton = document.getElementById('mobile-menu-button');

        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
            if (!mobileMenu.classList.contains('invisible')) {
                const spans = mobileMenuButton.querySelectorAll('span');
                mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'invisible');
                mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');

                spans[0].classList.remove('rotate-45', 'translate-y-1.5');
                spans[1].classList.remove('opacity-0');
                spans[2].classList.remove('-rotate-45', '-translate-y-1.5');
            }
        }
    });
</script>
