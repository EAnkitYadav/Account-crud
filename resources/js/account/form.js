$(document).ready(function(){
    // console.log(
    // 'dddd'
    // );
    $("#first_name").keyup(function(){
    $("#name").val($(this) . val()  + "  " + $('#last_name').val());
     });

    $("#last_name").keyup(function(){
    $("#name"). val($('#first_name') . val()  + "  " + $(this).val());
    });

    $("").on('click',function(){
    $("#name"). val($("#first_name") . val()  + "  " + $("#last_name").val());

    });
});
