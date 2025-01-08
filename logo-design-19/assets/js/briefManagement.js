$(function(){

	$(document).on("submit","#briefForm", function(){
	
		$(this).find('#formResult').removeClass("alert alert-success alert-danger");
        $(this).find('#briefFormBtn').hide();
        $(this).find('#formResult').html('<img src="assets/images/loader.gif" alt="Loading, Please Wait..." />');
		
		let currentForm = $(this);
		let data = currentForm.serializeArray();

		grecaptcha.ready(function() {
            grecaptcha.execute('6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u', {action: 'submit'}).then(function(token) {
                data.push({name: 'token', value: token});
                _ajax.post("service/brief.php", data, function (res) {
                    console.log(res);
                    if (res.status == "true") {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-success').html("Thank you for sharing the brief, redirecting please wait.....");
                        currentForm.find('input:not([type="hidden"]),textarea,select').val('');
                        setTimeout(function() {
                            window.location = 'process.php';
                        },300);
                    } else {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-danger').html(res.message);
                        setTimeout(function(){
                            currentForm.find('#formResult').removeClass("alert alert-success alert-danger").html('');
                            currentForm.find('#briefFormBtn').show();
                        },2500);
                    }
                });
            });
        });
	})
});