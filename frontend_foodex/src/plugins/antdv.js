import 'ant-design-vue/dist/reset.css';
// import {
//     message,
//     Drawer,
//     Menu,
//     LayoutSider
// } from 'ant-design-vue';

import Antd from 'ant-design-vue';

export default (app) => {
    app.use(Antd)
    // app.config.globalProperties.$message = message;
    // app.component('a-drawer', Drawer);
    // app.component('a-menu', Menu);
    // app.component('a-layout-sider', Menu);
};