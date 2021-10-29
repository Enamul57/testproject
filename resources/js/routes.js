let home = require('./components/Home.vue').default;
let service = require('./components/Service.vue').default;
let date = require('./components/Date.vue').default;
let info = require('./components/Info.vue').default;
let checkout = require('./components/Checkout.vue').default;
export const routes = [
    {path:'/',component:home,name:'Home'},
    {path:'/service',component:service,name:'Service'},
    {path:'/date',component:date,name:'Date'},
    {path:'/info',component:info,name:'Info'},
    {path:'/checkout',component:checkout,name:'Checkout'},
];