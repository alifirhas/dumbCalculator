$(document).ready(function () {
    $('#hitung').click(function () {

        var num1 = $('#num1').val();
        var num2 = $('#num2').val();
        var operator = $('#operator').val();

        var formData = new FormData();

        formData.append('num1', num1);
        formData.append('num2', num2);
        formData.append('operator', operator);

        $('#tempatHasil').load("includes/count.inc.php", {
            num1: num1,
            num2: num2,
            operator:operator
        });


    })
});

//checking jquery is loaded if something just not work
// window.onload = function() {
//     if (window.jQuery) {  
//         // jQuery is loaded  
//         alert("Yeah!");
//     } else {
//         // jQuery is not loaded
//         alert("Doesn't Work");
//     }
// }