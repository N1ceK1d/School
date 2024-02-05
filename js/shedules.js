$(document).ready(() => {
    $('.schedule').hide();

    $('.nav_buttons').on('click', (event) => {
        $('.schedule').hide();
        $(`#schedule_${event.target.id}`).show();
    })

    $(document).ready(function() {
        $(".add-row").click(function() {
            var table = $(this).closest("table");
            var newRow = table.find("tbody tr:last").clone();
            newRow.find("input, select").val("");
            table.find("tbody").append(newRow);
        });
    });

    $(document).on("click", ".delete-button", function() {
        $(this).closest("tr").remove();
    });
})