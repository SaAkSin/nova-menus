Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'nova-menus',
      path: '/nova-menus',
      component: require('./components/Tool'),
    },
  ])
})
