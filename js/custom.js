/* Custom Js */

$(document).ready(function() {

	 $('#dob').datepicker({
            uiLibrary: 'bootstrap4'
        });

$("input[name='gender']").click(function(){
   $("input[name='gender']").removeClass('active');   
   $(this).addClass('active');
});

$("input[name='marital']").click(function(){
   $("input[name='marital']").removeClass('active');   
   $(this).addClass('active');
});


    $('.cMate_leadForm')
     // IMPORTANT: on('init.field.fv') must be declared
        // before calling .formValidation(...)
        .on('init.field.fv', function(e, data) {
            // $(e.target)  --> The field element
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element
            var $parent = data.element.parents('.form-group'),
                $icon   = data.element.data('fv.icon'),
                $label  = $parent.find('label');

            // Place the icon right after the label
            $icon.insertAfter($label);
        })
        .formValidation({
        framework: 'bootstrap',
        control: {
            valid: "is-valid",
            invalid: "is-invalid"
        },
        row: {
            invalid: "has-danger"
        },
        button: {
            selector: "#formSubmit",
            disabled: "disabled"
        },
        /*
       err: {
            container: 'tooltip'
        }, */
        icon: {
            valid: 'ion-checkmark-round',
            invalid: 'ion-android-close',
            validating: 'ion-load-a'
        },
        fields: {
            BikeBrand: {
            	
                validators: {
                    notEmpty: {
                        message: 'The Bike Brand is required'
                    },
                   
                  }
            },
           BikeModel: {
           	
                validators: {
                    notEmpty: {
                        message: 'The Bike Model is required'
                    },
                   
                  }
            },
           city: {
           	
                validators: {
                    notEmpty: {
                        message: 'The City is required'
                    },
                   
                  }
            },
           loanDate: {
           	
                validators: {
                    notEmpty: {
                        message: 'The Loan Date is required'
                    },
                   
                  }
            },
          
            name: {
            	
                validators: {
                    notEmpty: {
                        message: 'Your Name is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The Name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The username can only consist of alphabetical'
                    }
                }
            },
            email: {
                validators: {
                	notEmpty: {
                        message: 'Your Email is required'
                    },
                    emailAddress: {
                        message: "The email address is not valid"
                    }
                }
            },
            mobile: {
            	
                validators: {
                    notEmpty: {
                        message: 'Your Mobile Number is required'
                    },
                   
                    regexp: {
                        regexp: /^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/,
                        message: 'Please Enter Correct Mobile Number'
                    }
                }
            },
            
            dob: {
            	
                validators: {
                	 date: {
                        format: 'MM/DD/YYYY',
                        message: 'The value is not a valid date'
                    },

                    notEmpty: {
                        message: 'Date of Birth is required'
                    },
                   
                  }
            },
            
            pincode: {
            	
                validators: {
                	zipCode: {
                            country: 'IN',
                            message: 'The value is not valid %s postal code'
                        },

                    notEmpty: {
                        message: 'Pin Code is required'
                    },
                   
                  }
            },
            
            gender: {
            	
                validators: {
                	
                    notEmpty: {
                        message: 'Gender is required'
                    },
                   
                  }
            },
            
            marital: {
            	
                validators: {
                	
                    notEmpty: {
                        message: 'Marital Status is required'
                    },
                   
                  }
            },
            
            jobs: {
            	
                validators: {
                	
                    notEmpty: {
                        message: 'Nature of Job is required'
                    },
                   
                  }
            },
            
            occupation: {
            	
                validators: {
                	
                    notEmpty: {
                        message: 'Occupation is required'
                    },
                   
                  }
            },
            
            income: {
            	
                validators: {
                	
                    notEmpty: {
                        message: 'Income is required'
                    },
                   
                  }
            },
            
            residence: {
            	
                validators: {
                	
                    notEmpty: {
                        message: 'Residence is required'
                    },
                   
                  }
            },
            
            dependents: {
            	
                validators: {
                	
                    notEmpty: {
                        message: 'Number of Dependents'
                    },
                   
                  }
            },
            
            pannumber: {
            	
                validators: {
                    notEmpty: {
                        message: 'Your Pan Card Number is required'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'Pan Card is Invalid'
                    },
                    regexp: {
                        regexp: /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/,
                        message: 'Pan Card is Invalid'
                    }
                }
            },
            styledCheckbox1: {
            	
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});