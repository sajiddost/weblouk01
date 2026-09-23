(function () {
    'use strict';

    document.documentElement.classList.add('js');

    var header = document.getElementById('header');
    var menuToggle = document.getElementById('menu-toggle');
    var menu = document.getElementById('menu');
    var menuIcon = menuToggle ? menuToggle.querySelector('i') : null;
    var isMenuOpen = false;

    // ---- mobile menu ----
    var lockScroll = function (lock) {
        if (lock) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    };
    if (menuToggle && menu) {
        var setMenuOpen = function (open) {
            isMenuOpen = open;
            menu.classList.toggle('open', isMenuOpen);
            if (menuIcon) {
                menuIcon.className = isMenuOpen ? 'ri-close-line' : 'ri-menu-line';
            }
            menuToggle.setAttribute('aria-expanded', isMenuOpen ? 'true' : 'false');
            lockScroll(isMenuOpen);
        };
        menuToggle.addEventListener('click', function () {
            setMenuOpen(!isMenuOpen);
        });

        document.addEventListener('click', function (e) {
            if (isMenuOpen && !menu.contains(e.target) && !menuToggle.contains(e.target)) {
                setMenuOpen(false);
            }
        });
    }

    // ---- services dropdown ----
    var dropItems = document.querySelectorAll('.menu-item-has-children');
    if (dropItems.length) {
        var closeDropdowns = function (except) {
            dropItems.forEach(function (li) {
                if (li === except) { return; }
                li.classList.remove('open');
                var link = li.querySelector('.menu-link');
                if (link) { link.setAttribute('aria-expanded', 'false'); }
            });
        };
        dropItems.forEach(function (li) {
            var link = li.querySelector('.menu-link');
            if (!link) { return; }
            link.addEventListener('click', function (e) {
                e.preventDefault();
                var isOpen = li.classList.toggle('open');
                link.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                closeDropdowns(li);
            });
            // avoid closing when the mobile menu's outside-click handler fires
            li.addEventListener('click', function (e) { e.stopPropagation(); });

            // desktop: open on hover (incl. the small gap under the trigger),
            // close when the pointer leaves the whole li. Skip touch pointers
            // so tap on hybrid devices toggles cleanly instead of double-firing.
            if (window.matchMedia && window.matchMedia('(hover: hover)').matches) {
                li.addEventListener('pointerenter', function (e) {
                    if (e.pointerType === 'touch') { return; }
                    closeDropdowns(li);
                    li.classList.add('open');
                    link.setAttribute('aria-expanded', 'true');
                });
                li.addEventListener('pointerleave', function (e) {
                    if (e.pointerType === 'touch') { return; }
                    li.classList.remove('open');
                    link.setAttribute('aria-expanded', 'false');
                });
            }
        });
        document.addEventListener('click', function () {
            closeDropdowns(null);
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') { closeDropdowns(null); }
        });
    }

    // ---- sticky header shrink ----
    if (header) {
        var onScrollHeader = function () {
            header.classList.toggle('scrolled', window.scrollY > 40);
        };
        window.addEventListener('scroll', onScrollHeader, { passive: true });
        onScrollHeader();
    }

    // ---- scroll to top + ring progress ----
    var scrollTop = document.getElementById('scroll-to-top');
    if (scrollTop) {
        var ring = scrollTop.querySelector('svg path');
        var CIRC = 2 * Math.PI * 49; // r=49
        if (ring) {
            ring.style.strokeDasharray = CIRC;
            ring.style.strokeDashoffset = '0';
        }
        var onScrollTop = function () {
            var st = window.scrollY || document.documentElement.scrollTop;
            var wh = window.innerHeight;
            var dh = document.body.scrollHeight - wh;
            var pct = dh > 0 ? (st / dh) * 100 : 100;
            if (ring) { ring.style.strokeDashoffset = String(CIRC - (pct * CIRC) / 100); }
            scrollTop.style.display = st > 350 ? 'flex' : 'none';
        };
        window.addEventListener('scroll', onScrollTop, { passive: true });
        onScrollTop();
        scrollTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ---- reveal on scroll (fadeInUp) ----
    var reveals = document.querySelectorAll('.fadeInUp');
    if ('IntersectionObserver' in window && reveals.length) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) { return; }
                var el = entry.target;
                var delay = parseFloat(el.getAttribute('data-delay')) || 0;
                if (delay) { el.style.transitionDelay = delay + 's'; }
                el.classList.add('visible');
                io.unobserve(el);
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        reveals.forEach(function (el) { io.observe(el); });
    } else if (reveals.length) {
        reveals.forEach(function (el) { el.classList.add('visible'); });
    }

    // ---- accordion (FAQ) ----
    document.querySelectorAll('.accordion-header').forEach(function (headerEl) {
        headerEl.addEventListener('click', function () {
            var item = headerEl.closest('.accordion-item');
            var holder = headerEl.closest('.accordion-holder');
            if (holder) {
                holder.querySelectorAll('.accordion-item[data-open="true"]').forEach(function (open) {
                    if (open !== item) { open.setAttribute('data-open', 'false'); }
                });
            }
            var open = item.getAttribute('data-open') === 'true';
            item.setAttribute('data-open', open ? 'false' : 'true');
        });
    });

    // ---- audit form loading state ----
    document.querySelectorAll('.hero-audit-form, .audit-form').forEach(function (form) {
        form.addEventListener('submit', function () {
            var input = form.querySelector('input[name="url"]');
            var btn = form.querySelector('button[type="submit"]');
            if (!btn || btn.classList.contains('is-loading')) { return; }
            if (input && input.value.trim() === '') {
                input.focus();
                return;
            }
            btn.classList.add('is-loading');
            btn.disabled = true;
            var label = form.classList.contains('hero-audit-form') ? 'Auditing' : 'Running Audit';
            btn.innerHTML = '<span class="btn-spinner" aria-hidden="true"></span> ' + label + '...';
        });
    });
})();