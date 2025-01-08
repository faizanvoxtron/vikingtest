
$(function () {

    $(document).on("submit", "#header-form", function () {
        $(this).find('#formResult').removeClass("alert alert-success alert-danger").html('');
        $(this).find('#signupBtn').hide();
        $(this).find('#formResult').html('<img src="assets/images/loader.gif" width="40" alt="Loading, Please Wait..." />');
        
        
        let currentForm = $(this);

        let html = currentForm.find('.htmlDescription').html();

        let data = currentForm.serializeArray();
        let now = new Date();
        let package_items = currentForm.find('#package_items').val();
        
        console.log(package_items)
        now.setTime(now.getTime()+(30*24*60*60*1000));
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u', {action: 'submit'}).then(function(token) {
                data.push({name: 'token', value: token});
                _ajax.post("service/lead.php", data, function (res) {
                    console.log(res);
                    if (res.status == "true") {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-success').html("Congratulations! You've Signed up, redirecting please wait.....");
                        currentForm.find('input:not([type="hidden"]),textarea,select').val('');
                        document.cookie = 'userid = ' + res.data.userid+ ';expires='+now.toUTCString();
                        document.cookie = 'uuid = ' + res.data.uuid+ ';expires='+now.toUTCString();
                        document.cookie = 'package = ' +currentForm.find('input[name="package"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'sku = ' + currentForm.find('input[name="sku"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'price = ' + currentForm.find('input[name="price"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'priceText = $' + currentForm.find('input[name="price"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'html = ' + encodeURIComponent(package_items) + ';expires='+now.toUTCString();
                        setTimeout(function() {
                            window.location = 'logo-brief.php';
                        },300);
                    } else {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-danger').html(res.message);
                        setTimeout(function(){
                            currentForm.find('#formResult').removeClass("alert alert-success alert-danger").html('');
                            currentForm.find('#signupBtn').show();
                        },2500);
                    }
                    
                });
                
            });
        });
    });


    $(document).on("submit", "#modal-form", function () {
        $(this).find('#formResult').removeClass("alert alert-success alert-danger").html('');
        $(this).find('#signupBtn').hide();
        $(this).find('#formResult').html('<img src="assets/images/loader.gif" width="40" alt="Loading, Please Wait..." />');
        
        let currentForm = $(this);
        
        let html = currentForm.find('.htmlDescription').html();
        let data = currentForm.serializeArray();
        
        let now = new Date();
        now.setTime(now.getTime()+(30*24*60*60*1000));

        grecaptcha.ready(function() {
            grecaptcha.execute('6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u', {action: 'submit'}).then(function(token) {
                data.push({name: 'token', value: token});
                _ajax.post("service/lead.php", data, function (res) {
                    console.log(res);
                    if (res.status == "true") {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-success').html("Congratulations! You've Signed up, redirecting please wait.....");
                        currentForm.find('input:not([type="hidden"]),textarea,select').val('');
                        document.cookie = 'userid = ' + res.data.userid+ ';expires='+now.toUTCString();
                        document.cookie = 'uuid = ' + res.data.uuid+ ';expires='+now.toUTCString();
                        document.cookie = 'package = ' +currentForm.find('input[name="package"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'sku = ' + currentForm.find('input[name="sku"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'price = ' + currentForm.find('input[name="price"]').val()+ ';expires='+now.toUTCString();;
                        document.cookie = 'priceText = $' + currentForm.find('input[name="price"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'html = ' + encodeURIComponent(html) + ';expires='+now.toUTCString();
                        setTimeout(function() {
                            window.location = 'logo-brief.php';
                        },300);
                    } else {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-danger').html(res.message);
                        setTimeout(function(){
                            currentForm.find('#formResult').removeClass("alert alert-success alert-danger").html('');
                            currentForm.find('#signupBtn').show();
                        },2500);
                    }
                    
                });
                
            });
        });
    });

    $(document).on("submit", ".leadForm", function () {
        $(this).find('#formResult').removeClass("alert alert-success alert-danger").html('');
        $(this).find('#signupBtn').hide();
        $(this).find('#formResult').html('<img src="assets/images/loader.gif" width="40" alt="Loading, Please Wait..." />');
        let currentForm = $(this);
        let html = currentForm.find('.htmlDescription').html();
        let data = currentForm.serializeArray();
        
        let now = new Date();
        now.setTime(now.getTime()+(30*24*60*60*1000));
        console.log(data);
        
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u', {action: 'submit'}).then(function(token) {
                data.push({name: 'token', value: token});
                _ajax.post("service/lead.php", data, function (res) {
                    
                    if (res.status == "true") {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-success').html("Congratulations! You've Signed up, redirecting please wait.....");
                        currentForm.find('input:not([type="hidden"]),textarea,select').val('');
                        
                        document.cookie = 'userid = ' + res.data.userid+ ';expires='+now.toUTCString();
                        document.cookie = 'uuid = ' + res.data.uuid+ ';expires='+now.toUTCString();
                        document.cookie = 'package = ' +currentForm.find('input[name="package"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'sku = ' + currentForm.find('input[name="sku"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'price = ' + currentForm.find('input[name="price"]').val()+ ';expires='+now.toUTCString();;
                        document.cookie = 'priceText = $' + currentForm.find('input[name="price"]').val()+ ';expires='+now.toUTCString();
                        document.cookie = 'html = ' + encodeURIComponent(html) + ';expires='+now.toUTCString();
                        
                        
                        console.log(document.cookie);
                        
                        setTimeout(function() {
                            window.location = 'logo-brief.php';
                        },300);

                    } else {
                        currentForm.find('#formResult').parent('li').css('width', '100%');
                        currentForm.find('#formResult').addClass('alert alert-danger').html(res.message);
                        setTimeout(function(){
                            currentForm.find('#formResult').removeClass("alert alert-success alert-danger").html('');
                            currentForm.find('#signupBtn').show();
                        },2500);
                    }
                    
                });
                
            });
        });


    });

});