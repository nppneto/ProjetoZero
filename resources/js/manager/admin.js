try {
    window.$ = window.jQuery = require('jquery');
    require('admin-lte');
    require('admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js');
    require('./ClassCurso');
    require('./ClassPagina');
} catch (e) {}