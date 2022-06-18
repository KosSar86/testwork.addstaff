
; /* Start:"a:4:{s:4:"full";s:58:"/local/templates/crystal_green/js/script.js?16554358502730";s:6:"source";s:43:"/local/templates/crystal_green/js/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function() {
var sendToPHP = [];                                                     // Создаю балванку массива для отправки в обработчик PHP

var button = new BX.UI.Button({											// Создаю кнопку
    text: "Загрузить сотрудников",
    size: BX.UI.Button.Size.LARGE,
    color: BX.UI.Button.Color.SUCCESS,
    onclick: function(button, event) {									// Если надпись "очистить инфоблок" нажимаю передается 
        if (button.isActive()){
			sendToPHP = [];
			BX.ajax({													// отправляю запрос "deleteAll"
				url:URL,
				method: 'POST',
				data:{sendFromJS: "deleteAll"},
				onsuccess: function (result) {
					console.log('успешно');
					$("#main_button_message").html(result);
				}
			});
		button.setText("Загрузить сотрудников");						// меняю надпись на "Загрузить сотрудников"
		button.setActive(false);
		}
        else{
			Promise.all([													// промисом получаю данные по адресам
			fetch('https://reqres.in/api/users?page=1'),
			fetch('https://reqres.in/api/users?page=2')
			]).then(allResponses => {
				Promise.all([allResponses[0].json(), allResponses[1].json()])  // вторым промисом получаю содержание свойства body
				.then((body) => {					
					body.map(body => {											// перебираю массив body
					body.data.map(item => {item.page = body.page});				// в массиве body data добавляю свойство page (страница к которой пренадлежит обьект сотрудник)
					sendToPHP.push(body.data);									// добавляю каждый body.data в массив для отправки в  обработчик PHP
					});
					sendToPHP = [...sendToPHP[0], ...sendToPHP[1]]				// обьединяю два массива в один
					BX.ajax({
						url:URL,												// отправляю запрос с массивом
						method: 'POST',
						data:{sendFromJS: sendToPHP},
						onsuccess: function (result) {
							console.log('успешно');
							$("#main_button_message").html(result);
						}
					})
				})
			})
            button.setText("Очистить инфоблок");								// меняю надпись на кнопке на "Очистить инфоблок
            button.setActive();
		}
	}
});
	var container = document.getElementById("main_button");
    button.renderTo(container);													// создаю кнопку в блоке div
})();

/* End */
;; /* /local/templates/crystal_green/js/script.js?16554358502730*/
