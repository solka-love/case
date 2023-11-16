
    $(document).ready(function () {
        // Обработка изменений в выборе задачи
        $('#selectedTask').change(function () {
            var selectedTaskId = $(this).val();

            if (selectedTaskId !== '') {
                // Загрузка подробностей о выбранной задаче
                $.ajax({
                    type: "POST",
                    url: "/plugins/solkalove/maket/components/maket/getTaskDetails.php", // Замените на путь к вашему файлу обработчика
                    data: { taskId: selectedTaskId },
                    dataType: "json",
                    success: function (response) {
                        if (response && response.taskDetails) {
                            var taskDetails = response.taskDetails;
                            // Вставляем обновленные подробности о задаче в блок #taskDetails
                            $("#taskDetails").html(taskDetails);
                        } else {
                            console.error("Неверный формат ответа или отсутствуют данные о задаче.");
                        }
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        console.error("Ошибка загрузки подробностей о задаче:", textStatus, errorThrown);
                        // Если возникла ошибка, выведите ее в блок #taskDetails
                        $("#taskDetails").html("<p>Ошибка загрузки подробностей о задаче. Пожалуйста, повторите попытку позже.</p>");
                    }
                });
            } else {
                // Очистить блок с подробностями, если задача не выбрана
                $("#taskDetails").html("");
            }
        });
    });

