try {
    window.toastr = require('toastr');
    window.sweetalert2 = require('sweetalert2');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
