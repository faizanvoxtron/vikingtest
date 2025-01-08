function lead(id) {
    let divId = id;
    //loader show
  $('#'+divId).find('input[type="submit"]').hide();
  $('.loader').css('display','block');
  
  let FormData = $("#" + id).serializeArray();
  console.log(FormData);
  grecaptcha.ready(function () {
    grecaptcha
      .execute("6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u", { action: "submit" })
      .then(function (token) {
        FormData.push({ name: "token", value: token });
        // const FormDataPost = $.post("service/lead.php", FormData);

        const FormDataPost = $.post(
          window.location.origin + "/web-offer/service/lead.php",
          FormData
        );
        FormDataPost.done(function (response) {
          console.log(response);
          if (response.status === "false") {
            // loader hide
            $('.loader').css('display','none');
            $('#'+divId).find('input[type="submit"]').show();
            
            $(".modal").modal("hide");
          }
          if (response.status === "true") {
            // loader hide
            $('.loader').css('display','none');
            $('#'+divId).find('input[type="submit"]').show();
            
            $(".modal").modal("hide");
            setTimeout(function () {
              window.location.href = window.location.origin + "/web-offer/query/brief.php?package=" + $("#" + id).find('input[name="package"]').val() +"&id=" +response.data.userid;

              // window.location.href =
              //   "query/brief.php?package=" +
              //   $("#" + id)
              //     .find('input[name="package"]')
              //     .val() +
              //   "&id=" +
              //   response.data.userid;
            }, 300);
          }
        });
        FormDataPost.fail(function (xhr, textStatus, errorThrown) {
          console.log(xhr.responseText);
          // loader hide
          $('.loader').css('display','none');
          $('#'+divId).find('input[type="submit"]').show();
          
          $(".modal").modal("hide");
        });
      });
  });
}

function priceChange(pack, price) {
  $("#popupForm").find('input[name="package"]').val(pack);
  $("#popupForm").find('input[name="price"]').val(price);
  $("#bannerForm").find('input[name="package"]').val(pack);
  $("#bannerForm").find('input[name="price"]').val(price);
  $("#bottomForm").find('input[name="package"]').val(pack);
  $("#bottomForm").find('input[name="price"]').val(price);
}

function emailValid(string) {
  let regex = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
  return regex.test(string);
}

function chat() {
  $zopim.livechat.window.show();
}

// Forms Validation

function SpaceBlockBannerForm() {
  var inputTextBoxBannerForm = document.getElementById(
    "inputTextBoxBannerForm"
  );
  if (
    inputTextBoxBannerForm.selectionStart === 0 &&
    window.event.code === "Space"
  ) {
    window.event.preventDefault();
  }
}

function SpaceBlockFooterForm() {
  var inputTextBoxFooterForm = document.getElementById(
    "inputTextBoxFooterForm"
  );
  if (
    inputTextBoxFooterForm.selectionStart === 0 &&
    window.event.code === "Space"
  ) {
    window.event.preventDefault();
  }
}

function SpaceBlockFloatingForm() {
  var inputTextBoxFloatingForm = document.getElementById(
    "inputTextBoxFloatingForm"
  );
  if (
    inputTextBoxFloatingForm.selectionStart === 0 &&
    window.event.code === "Space"
  ) {
    window.event.preventDefault();
  }
}

function SpaceBlockModalForm() {
  var inputTextBoxModalForm = document.getElementById("inputTextBoxModalForm");
  if (
    inputTextBoxModalForm.selectionStart === 0 &&
    window.event.code === "Space"
  ) {
    window.event.preventDefault();
  }
}

// Forms Validations New
// const alphaOnlyInput = document.getElementById("alpha-only-input"),
//   alphaOnlyPattern = new RegExp("^[a-zA-Z ]+$");

// let previousValue = "";

// alphaOnlyInput.addEventListener("input", (e) => {
//   let currentValue = alphaOnlyInput.value;

//   if (e.inputType.includes("delete") || alphaOnlyPattern.test(currentValue)) {
//     previousValue = currentValue;
//   }

//   alphaOnlyInput.value = previousValue;
// });
