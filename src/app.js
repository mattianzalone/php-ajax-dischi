let $ = require("jquery");

$(document).ready(function(){
    $.ajax(
        {
            'url':
            'method':
            'success': function(risposta){

            },
            'error': function(){
                alert('Errore');
            }
        }
    );
});
