$(function () {
    $(document).on("submit", "#orderForm", function () {

        let currentForm = $(this);
        currentForm.find('#formResult').removeClass("alert alert-success alert-danger").html('');
        currentForm.find('#orderFormBtn').hide();
        currentForm.find('#formResult').html('<img src="assets/images/loader.gif" width="40" alt="Loading, Please Wait..." />');
        let data = currentForm.serializeArray();

        grecaptcha.ready(function() {
            grecaptcha.execute('6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u', {action: 'submit'}).then(function(token) {
                data.push({name: 'token', value: token});
                _ajax.post("service/process.php", data, function (res) {
                    console.log(res);
                    if (res.status == "true") {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-success').html("Processing your payment, please wait.....");
                        currentForm.find('input:not([type="hidden"]),textarea,select').val('');
                        setTimeout(function() {
                            window.location = '/thanks';
                        },800);
                    } else {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-danger').html(res.message);
                        currentForm.find('#orderFormBtn').show();
                    }
                    
                });
                
            });
        });
    });
});