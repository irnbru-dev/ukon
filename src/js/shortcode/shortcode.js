// 'use strict';
//
// (function () {
//     const cardSimple = require('./shortcode/card-simple');
//     const cardFullBg = require('./shortcode/card-full-bg');
//
//     tinymce.PluginManager.add('ukon_editor', (editor, url) => {
//         cardSimple.button(editor);
//         cardFullBg.button(editor);
//     });
//
//     jQuery(document).ready(function ($) {
//         $(document).on('click', '.mce-icon_upload_button', upload_image_tinymce);
//
//         function upload_image_tinymce(e) {
//             e.preventDefault();
//             let $btn = $(this);
//             let $inputField = $btn.prev();
//
//             let customUploader = wp.media.frames.file_frame = wp.media({
//                 title: 'Добавить изображение',
//                 button: {
//                     text: 'Добавить'
//                 },
//                 multiple: false
//             });
//
//             customUploader.on('select', function () {
//                 let attachment = customUploader.state().get('selection').first().toJSON();
//                 let url = attachment.url.replace(/^[a-z]{4,5}\:\/\/[a-z\.]+(.*)/, '$1');
//                 console.log(url);
//
//                 $inputField.val(url);
//             });
//
//             customUploader.open();
//         }
//     });
// })();