// JavaScript Document

function getBaseURL () {
   return location.protocol + '//' + location.hostname + 
      (location.port && ':' + location.port) + '/';
}

(function() {
    tinymce.create('tinymce.plugins.vecb_button7', {
        init : function(ed, url) {
            ed.addButton('vecb_button7', {
                title : 'type 2 avenir heavy',image : url+'/icons/tag.png',onclick : function() {
                     ed.selection.setContent('<span class="af_type_2_avenir_heavy">' + ed.selection.getContent() + '</span>');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vecb_button7', tinymce.plugins.vecb_button7);
})();