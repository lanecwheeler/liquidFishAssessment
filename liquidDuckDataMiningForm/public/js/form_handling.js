$(function(){

    let $form = $('form')
    $('#contact').on('submit', function(e){
        $('form input, form textarea').addClass('validated')
        e.preventDefault()
        if($('form')[0].checkValidity()){
            $('form').blur()
            $.ajax({
                url: $form.attr('action'),
                method: 'post',
                data: $form.serialize(),
                complete: function(data){
                    console.log(data)
                    if(data.status === 200){
                        $('.thankyou').addClass('shown')
                    } else {
                        let errors = data.responseJSON.errors
                        console.log(errors)
                        for(x in errors){
                            $('#'+x+'label').addClass('haserror').closest('div').addClass('haserror')
                        }
                    }
                }
            })
        }
    })
})