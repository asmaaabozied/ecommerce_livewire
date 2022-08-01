import { createRouter,createWebHistory } from "vue-router";
import Home from "../views/HomePage.vue"
import Rating from "../views/PerfumeRating.vue"
import Register from "../views/RegisterPage.vue"
import AccountSetting from "../views/AccountSetting.vue"
import Checkout from "../views/CheckoutPage.vue"
import MerchantServices from "../views/MerchantServices.vue";
import Manufacturing from "../views/PerfumeManufacturing.vue"
import BankAccount from "../views/BankAccounts.vue"
import Education from "../views/EducationPage.vue"
import Cart from "../views/CartPage.vue"

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/perfume-rating",
        name: "Perfume Rating",
        component: Rating,
    },
    {
        path: "/register",
        name: "register",
        component: Register,
    },
    {
        path: "/account-setting",
        name: "Account Setting",
        component: AccountSetting,
    },
    {
        path: "/checkout",
        name: "checkout",
        component: Checkout,
    },
    {
        path: "/perfume-manufacturing",
        name: " Perfume Manufacturing",
        component: Manufacturing,
    },
    {
        path: "/merchant-services",
        name: "Merchant Services",
        component: MerchantServices,
    },
    {
        path: "/bank-accounts",
        name: "Bank Account",
        component: BankAccount,
    },
    {
        path: "/education",
        name: "Education",
        component: Education,
    },
    {
        path: "/cart",
        name: "Cart",
        component: Cart,
    }
];
const router = createRouter({
    history:createWebHistory(process.env.BASE_URL),
    routes
})
export default router