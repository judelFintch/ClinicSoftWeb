const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

function initScrollReveal() {
    const elements = document.querySelectorAll('.reveal');

    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
        elements.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1, rootMargin: '0px 0px -40px 0px' },
    );

    elements.forEach((el) => observer.observe(el));
}

document.addEventListener('DOMContentLoaded', initScrollReveal);
document.addEventListener('livewire:navigated', initScrollReveal);

document.addEventListener('alpine:init', () => {
    Alpine.data('heroSlider', (count) => ({
        active: 0,
        count,
        timer: null,

        init() {
            if (!prefersReducedMotion) {
                this.play();
            }
        },

        play() {
            this.stop();
            this.timer = setInterval(() => this.next(), 6500);
        },

        stop() {
            if (this.timer) {
                clearInterval(this.timer);
                this.timer = null;
            }
        },

        restart() {
            if (!prefersReducedMotion) {
                this.play();
            }
        },

        next() {
            this.active = (this.active + 1) % this.count;
        },

        prev() {
            this.active = (this.active - 1 + this.count) % this.count;
        },

        goTo(index) {
            this.active = index;
            this.restart();
        },
    }));
});
