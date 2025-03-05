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
        this.groupToggles = this.el.querySelectorAll("[data-sidebar-group] button");
    }

    setup() {
        this.isOpen = true;
        this.collapsible = this.el.dataset.collapsible;
        this.el.dataset.collapsible = "";
    }

    setEvents() {
        this.toggleBtn.addEventListener("click", this.toggle.bind(this));
        this.groupToggles.forEach((toggle) => {
            toggle.addEventListener("click", this.toggleGroup.bind(this));
        });
    }

    toggle() {
        if (this.isOpen) {
            this.el.dataset.collapsible = this.collapsible;
        } else {
            this.el.dataset.collapsible = "";
        }

        this.isOpen = !this.isOpen;
    }

    toggleGroup(e) {
        if (e.currentTarget.dataset.state === "open") {
            e.currentTarget.dataset.state = "closed";

            return;
        }

        e.currentTarget.dataset.state = "open";
    }
}
