import Sidebar from "./Sidebar.js";
import "./bootstrap";

class App {
    constructor() {
        new Sidebar();
    }
}

window.addEventListener("DOMContentLoaded", () => new App());
