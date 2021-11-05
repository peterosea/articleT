import 'jquery';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

Alpine.plugin(intersect);

// componments
import header from './components/header';
import shrink from './components/shrink';
// Routers
import Router from './util/router';

const routes = new Router({
  // All pages
  common: {
    containerInit() {},
    init() {
      header();
      shrink();
    },
    finalize() {},
  },
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  Alpine.start();
});
