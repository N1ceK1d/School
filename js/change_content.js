$(document).ready(() => {
    $('.add_teacher_block').hide();
    $('.add_student_block').hide();
    $('.change_schedule_block').hide();

    $('.add_teacher').on('click', () => {
        $('.add_teacher_block').show();
        $('.add_student_block').hide();
        $('.change_schedule_block').hide();
    });

    $('.add_student').on('click', () => {
        $('.add_teacher_block').hide();
        $('.add_student_block').show();
        $('.change_schedule_block').hide();
    });

    $('.change_schedule').on('click', () => {
        $('.add_teacher_block').hide();
        $('.add_student_block').hide();
        $('.change_schedule_block').show();
    });
})