import Admin from "@/layouts/admin/Admin.vue";
import Dashboard from "@/pages/admin/Dashboard.vue";
import Management from "@/pages/admin/Management.vue";

const admin = [
  {
    path: '/admin',
    component: Admin,
    children: [
      {
        path: 'dashboard',
        name: 'admin-dashboard',
        component: Dashboard
      },
      {
        path: 'management',
        name: 'admin-management',
        component: Management
      }
    ]
  }
]
export default admin
