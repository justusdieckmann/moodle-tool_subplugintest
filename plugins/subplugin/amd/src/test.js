/**
 * @module testsubplugin_subplugin/test
 */
define(['jquery'], function($) {

    return {
        init: function() {
            $('#javascriptworking').text('Javascript IS working!');
        }
    };
});