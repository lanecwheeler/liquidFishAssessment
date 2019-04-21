$(function(){

    let $form = $('form')
    $('#contact').on('submit', function(e){

        e.preventDefault()

        $.ajax({
            url: $form.attr('action'),
            method: 'post',
            data: $form.serialize(),
            success: function(data){alert(data)},
            fail: function(response){alert(response)}
        })
    })
})