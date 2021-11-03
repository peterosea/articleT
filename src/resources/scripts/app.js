import 'jquery';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

Alpine.plugin(intersect);

import Router from './util/router';

const routes = new Router({
  // All pages
  common: {
    containerInit() {},
    init() {},
    finalize() {},
  },
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  Alpine.start();
});
