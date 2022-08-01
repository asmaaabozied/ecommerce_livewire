import { createRouter,createWebHistory } from "vue-router";
import Home from "../views/HomePage.vue"
import Rating from "../views/PerfumeRating.vue"
import Register from "../views/RegisterPage.vue"
import Checkout from "../views/CheckoutPage.vue"
import AccountSetting from "../views/AccountSetting.vue"
import MerchantServices from "../views/MerchantServices.vue"
import Cart from "../views/CartPage.vue"
import PerfumeManufacturing from "../views/PerfumeManufacturing.vue"
import Education from "../views/EducationPage.vue"
import BankAccount from "../views/BankAccounts.vue"

const routes = [
    {
        path: "/en",
        name: "Home",
        component: Home,
    },
    {
        path: "/perfume-ratings/en",
        name: "Perfume Rating",
        component: Rating,
    },
    {
        path: "/register/en",
        name: "Register",
        component: Register,
    },
    {
        path: "/merchant-services/en",
        name: "Merchant Services",
        component: MerchantServices,
    },
    {
        path: "/account-setting/en",
        name: "Account Setting",
        component: AccountSetting,
    },
    {
        path: "/checkout/en",
        name: "Checkout",
        component: Checkout,
    },
    {
        path: "/cart/en",
        name: "cart",
        component: Cart,
    },
    {
        path: "/merchant-services/en",
        name: "Merchant Services",
        component: MerchantServices,
    },
    {
        path: "/perfume-manufacturing/en",
        name: "Perfume Manufacturing",
        component: PerfumeManufacturing,
    },
    {
        path: "/education/en",
        name: "Education",
        component: Education,
    },
    {
        path:"/bank-accounts/en",
        name:"Bank Account",
        component:BankAccount
    }
];
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
    linkExactActiveClass: "exact-active",
});
export default router
