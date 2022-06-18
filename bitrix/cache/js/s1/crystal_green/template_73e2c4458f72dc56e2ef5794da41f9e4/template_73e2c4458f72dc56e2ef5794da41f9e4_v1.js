
; /* Start:"a:4:{s:4:"full";s:58:"/local/templates/crystal_green/js/script.js?16554030721508";s:6:"source";s:43:"/local/templates/crystal_green/js/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function() {
var sendToPHP = [];

var button = new BX.UI.Button({
    text: "Загрузить сотрудников",
    size: BX.UI.Button.Size.LARGE,
    color: BX.UI.Button.Color.SUCCESS,
    onclick: function(button, event) {
        if (button.isActive()){
			sendToPHP = [];
			BX.ajax({
				url:URL,
				method: 'POST',
				data:{sendFromJS: "deleteAll"},
				onsuccess: function (result) {
					console.log('успешно');
					$("#main_button_message").html(result);
				}
			});
		button.setText("Загрузить сотрудников");
		button.setActive(false);
		}
        else{
			Promise.all([
			fetch('https://reqres.in/api/users?page=1'),
			fetch('https://reqres.in/api/users?page=2')
			]).then(allResponses => {
				Promise.all([allResponses[0].json(), allResponses[1].json()])
				.then((body) => {					
					body.map(body => {
					body.data.map(item => {item.page = body.page});
					sendToPHP.push(body.data);
					});
					sendToPHP = [...sendToPHP[0], ...sendToPHP[1]]
					BX.ajax({
						url:URL,
						method: 'POST',
						data:{sendFromJS: sendToPHP},
						onsuccess: function (result) {
							console.log('успешно');
							$("#main_button_message").html(result);
						};
					});
				});
			});
            button.setText("Очистить инфоблок");
            button.setActive();
		}
	}
});
	var container = document.getElementById("main_button");
    button.renderTo(container);
})();

/* End */
;; /* /local/templates/crystal_green/js/script.js?16554030721508*/
