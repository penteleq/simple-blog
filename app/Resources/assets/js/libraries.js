// https://nodejs.org/api/modules.html#modules_all_together

// global variables
var $           = require('jquery') ; window.$       = window.jQuery = $;
var toastr      = require('toastr') ; window.toastr  = toastr           ;
var moment      = require('moment') ; window.moment  = moment           ;

// jquery plugins
require('jquery-ui');
require('jquery-popover');
require('bootstrap');
require('bootstrap-select');
require('bootstrap-datepicker');