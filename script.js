   // wait until the DOM has fully loaded (the HTML elements)
$(document).ready(function(){
    // add an event handler for when the user changes the value in the drop down
    $('#selSat').change(function(){
        // test if the user chose option 1 or 2
        if ($(this).val() == "1" || $(this).val() == "2"){
            // show the hidden div comment area
            $('#divFollowUp').slideDown();
        }
        // for any other option, disappear the extra comment area
        else{
            $('#divFollowUp').slideUp();
        }
    }); // $('#selSat').change(function(){

    // count the characters in the main comments box
    $('#txtComments').on('input', function(){
        // arbitrary max number of characters
        let maxChars = 250;
        // this will give us the number of characters in the textarea
        let currChars = $(this).val().length;

        // update the div with the current number of characters
        $('#divCharCount').text(`${currChars}/${maxChars} Characters`);

        // check if the max character limit has been exceeded
        if (currChars > maxChars){
            // change text color to red
            $('#divCharCount').css('color', 'red');
        }
        else{
            // change text color to gray
            $('#divCharCount').css('color', 'gray');
        }

    }); //$('#txtComments').on('input', function(){

}); //$(document).ready(function(){