import {
    Helper
} from "./helper.js";

let Form = {
    selectors: {
        'formSelector' : '#test-form',
        'congratulationsModalSelector' : '#congratulationsModal'
    },
    start: function () {
        $(this.selectors.formSelector).on('click', 'button', this.formSubmit)
        $(this.selectors.formSelector).on('change', 'input[type=radio]', this.otherInput)
        $(this.selectors.formSelector).on('click', 'input[type=checkbox]', this.cursorPosition)
        $(this.selectors.congratulationsModalSelector).on('click', 'button', this.goHome)
    },
    formSubmit: function() {
        let button = $(this),
            buttonContent = button.html()

        $.ajax({
            type: "POST",
            url: "actions/form.php",
            dataType: 'json',
            data: $(`${Form.selectors.formSelector} input[type=radio]:checked, ${Form.selectors.formSelector} textarea, ${Form.selectors.formSelector} input[type=text], ${Form.selectors.formSelector} input[type=email], ${Form.selectors.formSelector} input[type=checkbox]:checked`),
            beforeSend: function () {
                Helper.loadingButton(button)
                Helper.removeValidation(Form.selectors.formSelector)
            },
            success: function (json) {
                Helper.loadingButton(button, buttonContent)
                if (json.error) {
                    $.each(json.error, function (key, value) {
                        $(`${Form.selectors.formSelector} input[name=${key}]`).addClass('error').parent().append(Helper.invalidFeedback(value, true))
                    });

                    $('html, body').animate({
                        scrollTop: $(".invalid-feedback").closest('.test__part').offset().top
                    }, 500);
                }
                if (json.fatal) {
                    button.after(Helper.invalidFeedback(json.fatal))
                }

                if (json.success) {
                    Helper.modalShow('#congratulationsModal')
                }
            }
        })
    },
    otherInput: function() {
        let name = $(this).attr('name')

        if ($(this).val() != `other-${name}`) {
            $(`#${name}-variant`).closest('.test__single-box-variants').css('display', 'none')
        }
        if ($(this).val() == `other-${name}`) {
            $(`#${name}-variant`).closest('.test__single-box-variants').css('display', 'block')
        }
    },
    cursorPosition: function(e) {
        $(this).val(e.pageX + '-' + e.pageY)
    },
    goHome: function () {
        window.location.href = '/'
    }
};

export {
    Form
}