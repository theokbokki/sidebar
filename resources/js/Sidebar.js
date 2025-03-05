export default class Sidebar {
    constructor(el = null) {
        if (el === null) {
            document.querySelectorAll("[data-sidebar]").forEach((sidebar) => {
                new Sidebar(sidebar);
            });

            return;
        }

        if (!(el instanceof HTMLElement)) {
            throw new Error("Sidebar: A valid DOM element is required.");
        }

        this.el = el;

        this.getElements();
        this.setup();
        this.setEvents();
    }

    getElements() {
        this.toggleBtn = this.el.querySelector("[data-sidebar-toggle]");
    }

    setup() {
        this.isOpen = true;
        this.collapsible = this.el.dataset.collapsible;
    }

    setEvents() {
        this.toggleBtn.addEventListener("click", this.toggle.bind(this));
    }

    toggle() {
        if (this.isOpen) {
            this.el.classList.add("collapsed");
        } else {
            this.el.classList.remove("collapsed");
        }

        this.isOpen = !this.isOpen;

    }
}
