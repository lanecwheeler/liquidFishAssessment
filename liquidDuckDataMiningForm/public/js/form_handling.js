$(function(){

    let $form = $('form')
    $('#contact').on('submit', function(e){
        $('input textarea').addClass('validated')

        e.preventDefault()

        $.ajax({
            url: $form.attr('action'),
            method: 'post',
            data: $form.serialize(),
            complete: function(data){
                console.log(data)
                if(data.status === 200){
                    //show success
                } else {
                    let errors = data.responseJSON.errors
                    console.log(errors)
                    for(x in errors){
                        $('#'+x+'label').addClass('haserror').closest('div').addClass('haserror')
                    }
                }
            }
        })
    })
})