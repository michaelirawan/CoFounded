/**
 * @license Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	//config.uiColor = 'red';
	config.toolbar = 'Basic';
	config.contentsCss = 'ckstyle.css';
	config.toolbar_Basic =
  [
  	['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','Format']
  ];
};

CKEDITOR.on('instanceReady', function(e) {
    // First time
    e.editor.document.getBody().setStyle('color', 'white');
    // in case the user switches to source and back
    e.editor.on('contentDom', function() {
        e.editor.document.getBody().setStyle('color', 'white');
    });
});
