// See http://brunch.io for documentation.
exports.files = {
  javascripts: {
    joinTo: {
      'js/app.js': /^app/,
      'js/vendor.js': /^node_modules/,
    }
  },
  stylesheets: {
    joinTo: {
      'css/app.css': /^app/,
      'css/vendor.css': /^node_modules/,
    }
  }
};

exports.plugins = {
  browserSync: {
    files: ['*']
  }
};

exports.watcher = {
  usePolling: true,
  awaitWriteFinish: true
};

exports.npm = {
  styles: {
    'normalize.css': ['normalize.css']
  },
  globals: {
    // Je dis à Brunch de créer les variable $ et jQuery
    // ayant pour valeur la librairie jquery
    '$': 'jquery',
    'jQuery': 'jquery'
    // Cela me permet de ne pas écrire dans mon javascript :
    // var $ = jQuery = require('jquery');
    // D'après la doc de jquery.scrollex, je vais avoir besoin de ma "variable" scrollex
  }
};

exports.modules = {
  autoRequire: {
    'js/app.js': ['initialize']
  }
};