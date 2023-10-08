<template>
  <div class="container-fluid">
    <div class="row pt-2 pt-sm-0">
      <div class="col-2 d-flex d-sm-none align-items-center justify-content-start">
        <unordered-list-outlined class="trigger ps-1" :style="{fontSize: '25px'}" @click="showDrawer"/>
      </div>

      <div class="col-8 d-flex d-sm-none align-items-center justify-content-center">
        <img src="https://freepngimg.com/save/32196-pepsi-logo-transparent/686x670" style="width: 50px; height: 50px">
      </div>

      <div class="col-2 d-flex d-sm-none align-items-center justify-content-end">
        <div class="pe-1">
          <img class="rounded-circle" src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/profile/user-1.jpg" style="width: 35px; height: 35px">
        </div>
      </div>
    </div>

    <a-drawer
        title='Foodex'
        :placement="placement"
        :closable="false"
        :open="open"
        :width="300"
        @close="onClose"
    >
      <a-menu
          id="dddddd"
          v-model:openKeys="openKeys"
          v-model:selectedKeys="selectedKeys"
          style="border: none"
          mode="inline"
          theme="light"
          :items="items"
          @click="handleClick"
      ></a-menu>
    </a-drawer>

  </div>

</template>

<script setup>
import { reactive, ref, watch, h } from 'vue';
import { MailOutlined, AppstoreOutlined, SettingOutlined, UnorderedListOutlined } from '@ant-design/icons-vue';

const placement = ref('left');
const open = ref(false);
const showDrawer = () => {
  open.value = true;
};
const onClose = () => {
  open.value = false;
};
const selectedKeys = ref(['1']);
const openKeys = ref(['sub1']);

function getItem(label, key, icon, children, type) {
  return {
    key,
    icon,
    children,
    label,
    type,
  };
}
const items = reactive([
  getItem('Navigation One', 'sub1', () => h(MailOutlined), [
    getItem('Item 1', 'g1', null, [getItem('Option 1', '1'), getItem('Option 2', '2')], 'group'),
    getItem('Item 2', 'g2', null, [getItem('Option 3', '3'), getItem('Option 4', '4')], 'group'),
  ]),
  getItem('Navigation Two', 'sub2', () => h(AppstoreOutlined), [
    getItem('Option 5', '5'),
    getItem('Option 6', '6'),
    getItem('Submenu', 'sub3', null, [getItem('Option 7', '7'), getItem('Option 8', '8')]),
  ]),
  {
    type: 'divider',
  },
  getItem('Navigation Three', 'sub4', () => h(SettingOutlined), [
    getItem('Option 9', '9'),
    getItem('Option 10', '10'),
    getItem('Option 11', '11'),
    getItem('Option 12', '12'),
  ]),
  getItem('Group', 'grp', null, [getItem('Option 13', '13'), getItem('Option 14', '14')], 'group'),
]);
const handleClick = e => {
  console.log('click', e);
};
watch(openKeys, val => {
  console.log('openKeys', val);
});
</script>

<style scoped>

</style>