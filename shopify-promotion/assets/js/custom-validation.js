// Banner Form
$(document).ready(function() {
  // Add a custom validation method for alphabets-only
  $.validator.addMethod("alphabetsAndSpaces", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
  }, "Please enter only alphabets.");

  $("#popupLead").validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        alphabetsAndSpaces: true
      },
      email: {
        required: true,
        emailFormat: true
      },
      phonenumber: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10
      },
      description: {
        required: false,
        
      }
    },
    messages: {
      name: {
        required: "Please enter name."
      },
      phonenumber: {
        required: "Please enter phone number.",
        number: "Please enter a valid phone number.",
        minlength: "Phone number field accepts a minimum of 10 digits.",
        maxlength: "Phone number must not exceed 10 digits."
      },
      email: {
        required: "Please enter email address.",
        email: "Please enter a valid email address."
      },
      description: {
        required: "Please enter description."
      }
    }
  });
});

// brief form start
$(document).ready(function() {
  // Add a custom validation method for alphabets-only
  $.validator.addMethod("alphabetsAndSpaces", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
  }, "Please enter only alphabets.");

  $(".brief-form").validate({
    rules: {
      business_name: {
        required: true,
        minlength: 2,
        alphabetsAndSpaces: true
      },
      company: {
        required: true,
      },
  
    },
    messages: {
      name: {
        required: "Please enter business name."
      },
      company: {
        required: "Please select company category."
      },
  
    }
  });
});
// brief form end

// Bottom Form
$(document).ready(function() {
  // Add a custom validation method for alphabets-only
  $.validator.addMethod("alphabetsAndSpaces", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
  }, "Please enter only alphabets.");

  $("#bottomForm").validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        alphabetsAndSpaces: true
      },
      email: {
        required: true,
        emailFormat: true
      },
      phone: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10
      },
      message: {
        required: true,
        minlength: 10
      }
    },
    messages: {
      name: {
        required: "Please enter name."
      },
    //   phone: {
    //     required: "Please enter phone number.",
    //     number: "Please enter a valid phone number.",
    //     minlength: "Phone number field accepts a minimum of 10 digits.",
    //     maxlength: "Phone number must not exceed 11 digits."
    //   },
      email: {
        required: "Please enter email address.",
        email: "Please enter a valid email address."
      },
      message: {
        required: "Please enter a message."
      }
    }
  });
});

// Floating Form
$(document).ready(function() {
  // Add a custom validation method for alphabets-only
  $.validator.addMethod("alphabetsAndSpaces", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
  }, "Please enter only alphabets.");

  $("#floatingForm").validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        alphabetsAndSpaces: true
      },
      email: {
        required: true,
        emailFormat: true
      },
      phone: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10
      },
      message: {
        required: true,
        minlength: 10
      }
    },
    messages: {
      name: {
        required: "Please enter name."
      },
      phone: {
        required: "Please enter phone number.",
        number: "Please enter a valid phone number.",
        minlength: "Phone number field accepts a minimum of 10 digits.",
        maxlength: "Phone number must not exceed 10 digits."
      },
      email: {
        required: "Please enter email address.",
        email: "Please enter a valid email address."
      },
      message: {
        required: "Please enter a message."
      }
    }
  });
});

// Popup Form Form


// Email Format
$(document).ready(function () {
  // Custom validation method
  $.validator.addMethod(
    "emailFormat",
    function (value, element) {
      // Regular expression for email validation
      return (
        this.optional(element) ||
        /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/i.test(value)
      );
    },
    "Please enter a valid email address"
  );

  // Form validation initialization
  $("#btnSubmit").validate({
    rules: {
      email: {
        required: true,
        emailFormat: true,
      },
    },
    messages: {
      email: {
        required: "Please enter your email",
        email: "Please enter a valid email address",
      },
    },
  });
});

// Payment form
$(document).ready(function() {
  // Add a custom validation method for alphabets-only
  $.validator.addMethod("alphabetsAndSpaces", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
  }, "Please enter only alphabets.");

  $("#payForm").validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        alphabetsAndSpaces: true
      },
      email: {
        required: true,
        emailFormat: true
      },
      phone: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10
      },
       address: {
        required: true,
        minlength: 10
      },
       city: {
        required: true
      },
      postal: {
        required: true,
        number: true,
        minlength: 4,
        maxlength: 6
      },
      cardname: {
          required: true,
        minlength: 2,
        alphabetsAndSpaces: true
      },
       cardnumber: {
        required: true,
        number: true,
        minlength: 14,
        maxlength: 16
      },
      cvc: {
        required: true,
        number: true,
        minlength: 3,
        maxlength: 4
      },
      message: {
        required: true,
        minlength: 10
      }
    },
    messages: {
      name: {
        required: "Please enter name."
      },
      phone: {
        required: "Please enter phone number.",
        number: "Please enter a valid phone number.",
        minlength: "Phone number field accepts a minimum of 10 digits.",
        maxlength: "Phone number must not exceed 10 digits."
      },
      email: {
        required: "Please enter email address.",
        email: "Please enter a valid email address."
      },
      message: {
        required: "Please enter a message."
      }
    }
  });
});