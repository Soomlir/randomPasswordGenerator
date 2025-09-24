$(document).ready(function () {
	const $input = $(".app__input");

	$input.on("input", function () {
		let value = $(this).val();

		value = value.replace(/\D/g, "");

		if (value !== "") {
			value = Math.max(4, Math.min(20, parseInt(value)));
		}

		$(this).val(value);
	});

	$input.on("blur", function () {
		let value = parseInt($(this).val()) || 10;
		value = Math.max(4, Math.min(20, value));
		$(this).val(value);
	});

	$("#generateButton").on("click", function () {
		const upperWords = $('input[name="upperWords"]').is(":checked");
		const lowerWords = $('input[name="lowerWords"]').is(":checked");
		const numbers = $('input[name="numbers"]').is(":checked");
		const specSymbols = $('input[name="specSymbols"]').is(":checked");

		if (!upperWords && !lowerWords && !numbers && !specSymbols) {
			$("#appResult").text("Выберите хотя бы один тип символов!");
			return;
		}

		const formData = {
			action: "generate_password",
			length: $(".app__input").val(),
			upperWords: upperWords,
			lowerWords: lowerWords,
			numbers: numbers,
			specSymbols: specSymbols,
		};

		$.ajax({
			url: "/vendor/form.php",
			method: "POST",
			dataType: "json",
			data: formData,
			success: function (data) {
				$("#appResult").text(data.password);
			},
			error: function (xhr, status, error) {
				console.error("Статус:", status);
				console.error("Текст ошибки:", error);
			},
		});
	});
});
