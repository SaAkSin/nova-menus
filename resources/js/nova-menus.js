import NovaMenus from "./components/NovaMenus";

Nova.booting((Vue, router, store) => {
  Vue.component('nova-menus', NovaMenus);
});