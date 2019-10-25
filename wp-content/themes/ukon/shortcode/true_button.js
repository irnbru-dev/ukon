(function() {
    tinymce.PluginManager.add('card_simple_button', function( editor, url ) { // true_mce_button - ID кнопки
        editor.addButton('card_simple_button', {  // true_mce_button - ID кнопки, везде должен быть одинаковым
            text: 'Карточка',
            title: 'Добавить карточку', // всплывающая подсказка
            icon: 'fa fa-camera-retro', // тут можно указать любую из существующих векторных иконок в TinyMCE либо собственный CSS-класс
            // onclick: function() {
            //     editor.insertContent('[misha]'); // вставляем шорткод [misha] в редактор, также можно задать любое действие jQuery
            // }

            onclick: () => {
                editor.windowManager.open({
                    title: 'Карточка',
                    body: [
                        {
                            type: 'listbox',
                            name: 'cardNum',
                            label: 'Количество элементов',
                            'values': [
                                {text: '1', value: '1'},
                                {text: '2', value: '2'},
                                {text: '3', value: '3'},
                                {text: '4', value: '4'},
                                {text: '5', value: '5'},
                                {text: '6', value: '6'},
                                {text: '7', value: '7'},
                                {text: '8', value: '8'},
                                {text: '9', value: '9'},
                                {text: '10', value: '10'},
                                {text: '11', value: '11'},
                                {text: '12', value: '12'},
                                {text: '13', value: '13'},
                                {text: '14', value: '14'},
                                {text: '15', value: '15'},
                                {text: '16', value: '16'},
                                {text: '17', value: '17'},
                                {text: '18', value: '18'},
                                {text: '19', value: '19'},
                                {text: '20', value: '20'},
                            ]
                        }
                    ],
                    onsubmit: (e) => {
                        const cardNum = e.data.cardNum;
                        const body = [];

                        for (let el = 1; el <= cardNum; el++) {
                            body.push(
                                {
                                    type: 'textbox',
                                    name: 'icon' + el,
                                    value: '',
                                    classes: 'input_icon',
                                },
                                {
                                    type: 'button',
                                    name: 'icon_upload_button' + el,
                                    label: '',
                                    text: 'Загрузить иконку',
                                    classes: 'icon_upload_button',
                                },
                                {
                                    type: 'textbox',
                                    name: 'content' + el,
                                    label: 'Описание ' + el,
                                    multiline: true,
                                    minWidth: 200,
                                    minHeight: 80
                                },
                                {
                                    type: 'textbox',
                                    name: 'link' + el,
                                    label: 'Ссылка на страницу ' + el,
                                    multiline: true,
                                    minWidth: 200,
                                    minHeight: 80
                                }
                            );
                        }

                        editor.windowManager.open({
                            title: 'Контент карточек',
                            body: body,
                            onsubmit: (e) => {
                                editor.insertContent('[row]');

                                for (let el = 1; el <= cardNum; el++) {
                                    editor.insertContent('[card link="' + e.data['link' + el] + '" icon="' + e.data['icon' + el] + '"]<p>' + e.data['content' + el] + '</p>[/card]');
                                }

                                editor.insertContent('[/row]');
                            }
                        });
                    }
                });
            }
        });
    });
})();
