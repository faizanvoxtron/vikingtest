function pay(id){
    $('#'+id).find('.loader').show();
    var data=$('#'+id).serializeArray();
    console.log(data);
    grecaptcha.ready(function() {
        grecaptcha.execute('6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u', {action: 'submit'}).then(function(token) {
            data.push({name: 'token', value: token});
            const FormDataPost = $.post("../service/payment.php",data);
            FormDataPost.done(function(response) {
                console.log(response);
                if(response.status == 'false'){
                    $('#'+id).find('.loader').hide();                    
                    $('#'+id).find('.error-msg .alert').html(response.message);
                    $('#'+id).find('.error-msg').show();

                }
                if(response.status == 'true'){
                    $('#'+id).find('.loader').hide();                    
                    $('#'+id).find('.error-msg .alert').html(response.message);
                    $('#'+id).find('.error-msg .alert').removeClass('alert-danger');
                    $('#'+id).find('.error-msg .alert').addClass('alert-success');
                    $('#'+id).find('.error-msg').show();
                    
                    setTimeout(function(){
                        window.location.href = "../thank-you";
                    },800);
                }
            });
            FormDataPost.fail( function(xhr, textStatus, errorThrown) {
                $('#'+id).find('.loader').hide();                    
                $('#'+id).find('.error-msg .alert').html(textStatus);
                $('#'+id).find('.error-msg').show();
            });
        })

    })

}



function changePackage (el) {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    if (params.package == el.value) {
        return false;
    }
    
    window.location.href = window.location.pathname+"?package="+el.value+"&id="+params.id;
}