import { createApp } from 'vue'
import App from './App.vue'
import router from "./router";
import './assets/main.css'

// Plugins
import './plugins/bootstrap'

import antdvPlugin from './plugins/antdv';

const app = createApp(App)

antdvPlugin(app)

app.use(router)
app.mount('#app')


