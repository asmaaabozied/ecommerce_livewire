import "bootstrap/dist/css/bootstrap.css"
import { createApp } from 'vue'
import App from './App.vue'

import "bootstrap/dist/js/bootstrap.js"

import router from "./router/index"

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'
/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import {faAngleDoubleRight,faSignOutAlt,faUser, faLock,faAt,faDownload,faTicketAlt,faTachometerAlt,faUserFriends,faStore,faMapMarkerAlt,faLink,faPhone,faShoppingCart, faInfoCircle, faSearch, faShareNodes, faHeart } from '@fortawesome/free-solid-svg-icons'

import i18n from './i18n'
/* add icons to the library */
library.add(
    faHeart,
    faShareNodes,
    faSearch,
    faInfoCircle,
    faUser,
    faLock,
    faAt,
    faUserFriends,
    faMapMarkerAlt,
    faDownload,
    faTicketAlt,
    faTachometerAlt,
    faStore,
    faLink,
    faPhone,
    faShoppingCart,
    faSignOutAlt,
    faAngleDoubleRight
);


createApp(App).use(i18n).use(router).component('font-awesome-icon', FontAwesomeIcon).mount("#app");