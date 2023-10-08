<template>
  <a-layout style="min-height: 100vh">
    <div class="d-none d-sm-flex">
      <a-layout-sider v-model:collapsed="collapsed" :trigger="null" collapsible theme="light" :width="250" style="border-right: 1px solid lightgrey">
        <div class="d-flex justify-content-center">
          <img class="logo mb-4 mt-2" src="https://freepngimg.com/save/32196-pepsi-logo-transparent/686x670" style="width: 50px; height: 50px">
        </div>
        <a-menu v-model:selectedKeys="selectedKeys" theme="light" mode="inline">
          <a-menu-item key="1">
            <user-outlined />
            <span>Dashboard</span>
          </a-menu-item>
          <a-menu-item key="2">
            <video-camera-outlined />
            <span>Quản lý</span>
          </a-menu-item>
          <a-menu-item key="3">
            <video-camera-outlined />
            <span>Quản lý nhân viên 2</span>
          </a-menu-item>
          <a-menu-item key="4">
            <video-camera-outlined />
            <span>Quản lý nhân viên 3</span>
          </a-menu-item>
          <a-sub-menu key="5">
            <template #title>
            <span>
              <user-outlined />
              <span>User</span>
            </span>
            </template>
            <a-menu-item key="sub1">Tom</a-menu-item>
            <a-menu-item key="sub2">Bill</a-menu-item>
            <a-menu-item key="sub3">Alex</a-menu-item>
          </a-sub-menu>

          <a-menu-item key="6">
            <upload-outlined />
            <span>Phân quyền</span>
          </a-menu-item>
          <a-menu-item key="7">
            <upload-outlined />
            <span>Cài đặt</span>
          </a-menu-item>
        </a-menu>
      </a-layout-sider>
    </div>
    <a-layout>
      <a-layout-header style="background: #fff; font-size: 20px; padding: 0">
        <div v-if="!hideCollapseSideBar">
          <div class="d-flex align-items-center justify-content-between">
            <div style="padding-left: 20px">
              <unordered-list-outlined class="trigger" @click="() => (collapsed = !collapsed)" />
            </div>
            <div style="padding-right: 10px">
              <button class="btn" type="button" id="dropDownMenuUserProfile" data-bs-toggle="dropdown" aria-expanded="false">
                <img style="width: 40px; height: 40px; cursor: pointer" class="rounded-circle" src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/profile/user-1.jpg" alt="logo_user">
              </button>

              <div class="dropdown-menu px-3" aria-labelledby="dropDownMenuUserProfile">
                <div class="mb-2">
                  <b>User Profile</b>
                </div>

                <div class="row">
                  <div class="col-3">
                    <img style="width: 80px; height: 80px; cursor: pointer" class="rounded-circle" src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/profile/user-1.jpg" alt="logo_user">
                  </div>
                  <div class="col">
                    <span style="display: block; font-size: 17px">Uzumaki Sasuke</span>
                    <span style="display: block">Ninja</span>
                  </div>
                </div>
                <a-divider />
                <div class="row hover-background" id="test">
                  <div class="col-2">
                    <div style="width: 100px">
                      <user-outlined :style="{fontSize: '25px', marginLeft: '10px'}"/>
                    </div>
                  </div>
                  <div class="col">
                    <span style="display: block; font-size: 15px">My Profile</span>
                  </div>
                </div>

                <div class="row hover-background">
                  <div class="col-2">
                    <div style="width: 100px">
                      <inbox-outlined :style="{fontSize: '25px', marginLeft: '10px'}"/>
                    </div>
                  </div>
                  <div class="col">
                    <span style="display: block; font-size: 15px">My Inbox</span>
                  </div>
                </div>

                <div class="row hover-background">
                  <div class="col-2">
                    <div style="width: 100px">
                      <book-outlined :style="{fontSize: '25px', marginLeft: '10px'}"/>
                    </div>
                  </div>
                  <div class="col">
                    <span style="display: block; font-size: 15px">My Task</span>
                  </div>
                </div>

                <div class="d-flex justify-content-center mt-4">
                  <a-button class="col fw-bold btn-logout-custom">Logout</a-button>
                </div>


              </div>
            </div>
          </div>
        </div>

      </a-layout-header>
      <a-layout-content class="wrap-content-custom layout-content-custom">
        <router-view></router-view>
      </a-layout-content>
    </a-layout>
  </a-layout>
</template>

<script setup>
// Nếu không dùng <script setup> thì component Header sẽ phải load bằng export default{ component }

import {ref, onMounted} from 'vue'
import {
  VideoCameraOutlined,
  UploadOutlined,
  UnorderedListOutlined,
  UserOutlined,
  InboxOutlined,
  BookOutlined
} from '@ant-design/icons-vue'

const selectedKeys = ref(['1']);
const collapsed = ref(false);
const hideCollapseSideBar = ref(false)

const screenWidth = ref(window.innerWidth);

const handleResize = () => {
  screenWidth.value = window.innerWidth;

  hideCollapseSideBar.value = false
  if(screenWidth.value <= 576) {
    hideCollapseSideBar.value = true
  }

};

onMounted(() => {
  window.addEventListener('resize', handleResize);
  document.getElementById('test').addEventListener('click', function(e){
    e.stopPropagation()
  })

});

</script>

<style scoped>
  #components-layout-demo-custom-trigger .trigger {
    font-size: 18px;
    line-height: 64px;
    padding: 0 24px;
    cursor: pointer;
    transition: color 0.3s;
  }

  #components-layout-demo-custom-trigger .trigger:hover {
    color: #1890ff;
  }

  #components-layout-demo-custom-trigger .logo {
    height: 32px;
    background: rgba(255, 255, 255, 0.3);
    margin: 16px;
  }

  .site-layout .site-layout-background {
    background: #fff;
  }

  .wrap-content-custom {
    overflow: auto;
    word-wrap: break-word;
  }

  .layout-content-custom {
    margin: 24px 16px;
    padding: 24px;
    background: #fff;
    min-height: 280px
  }

  .dropdown-menu{
    width: 400px;
    border-color: #f5f5f5 !important;
    line-height: 40px;
    border-radius: 15px;
    /*box-shadow: 1px 1px 1px 1px grey;*/
  }

  .btn-check:checked+.btn, .btn.active, .btn.show, .btn:first-child:active, :not(.btn-check)+.btn:active{
    border-color: transparent;
  }

  .hover-background:hover{
    cursor: pointer;
    background: #f8f9fa;
  }

  .btn-logout-custom{
    border-color: #5D87FF;
    color: #5D87FF;
  }

  .btn-logout-custom:hover{
    background: #5D87FF;
    color: white
  }

</style>