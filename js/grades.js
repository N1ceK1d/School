$(document).ready(() => {
    $('.grade').mask('0', {'translation': {0: {pattern: /[2-5*]/}}});

    $('.grades-form').on('input', (event) => {
        if(event.target.classList.contains("grade"))
        {
            if($(event.target).val() != "")
            {
                let elem = $(event.target).clone();
                $(event.target).parent().append(elem.val(""));
                console.log($(event.target).attr('class'));
            }
            else 
            {
                $(event.target).parent().find("input:last").remove();
            }
        }
    });
})