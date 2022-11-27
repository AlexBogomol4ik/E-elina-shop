// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable( {
        "language": {
            "info": "Всего страниц _PAGE_ из _PAGES_",
            "infoEmpty": "Информация отсутствует",
            "loadingRecords": "Пожалуйста подождите - загрузка...",
            "lengthMenu": "Показывать _MENU_ записей",
            "search": "Поиск: _INPUT_",
            "zeroRecords": "Совпадений не найдено",
            "infoFiltered": " - всего отсортировано записей _MAX_ ",
            "paginate": {
                "next": "Далее",
                "previous": "Назад",
            }
        }
    } );
});


