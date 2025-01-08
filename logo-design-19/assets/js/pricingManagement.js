$(function(){
    $(document).on("click",".order-package",function(){
        if (typeof $(".order-package").attr("class") !== "undefined") {
            let ele = $(this);
            ele.parent().find('.pre-loader-image').show();
            let data = {
                content: ele.parents('[data-package-box]').find('[data-package-scroll]').html(),
                sku: ele.attr('data-sku'),
                title: ele.attr('data-title'),
                price: ele.attr('data-price'),
                priceText: ele.attr('data-price-text'),
            };

            let now = new Date();
            now.setTime(now.getTime()+(30*24*60*60*1000));
            grecaptcha.ready(function() {
                grecaptcha.execute('6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u', {action: 'submit'}).then(function(token) {
                    data.token = token;
                    _ajax.post("service/order.php", data, function (res) {
                        console.log(data.content);
                        if (res.status == "true") {
                            const now = new Date();
                            const time = now.getTime();
                            const expireTime = time + 1000*36000;
                            now.setTime(expireTime);
                            document.cookie = 'sku = ' + data.sku + ';expires='+now.toUTCString();
                            document.cookie = 'package = ' + data.title + ';expires='+now.toUTCString();
                            document.cookie = 'orderSession = ' + data.orderSession + ';expires='+now.toUTCString();
                            document.cookie = 'price = ' + data.price + ';expires='+now.toUTCString();
                            document.cookie = 'priceText = ' + data.priceText + ';expires='+now.toUTCString();
                            document.cookie = 'html = ' + encodeURIComponent(data.content) + ';expires='+now.toUTCString();
                            window.location = 'order-now.php';
                        } else {
                            console.log(res);
                        }
                        
                    });
                    
                });
            });
        }
    })
})