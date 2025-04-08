import './bootstrap';
import { createApp } from "vue";
import app from "./layouts/app.vue";
import guestNavbar from "./layouts/guest-navbar.vue";  // import navbar from our component with guestNavbar variable name

createApp(app).mount("#app");
createApp(guestNavbar).mount("#guestnavbar"); // added new navbar to use in blade

