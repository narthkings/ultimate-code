const inputs = document.querySelectorAll('input');
const patterns = {
    full_name: /^[a-z\d]{5,20}$/i,
    password: /^[\w@\d]{8,20}$/,
    confirm_password: /^[\w@\d]{8,20}$/,
    email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
};

function validate(field, regex) {
    //test if the input value passed the regex pattern\
    if (regex.test(field.value)) {
        field.classList = 'valid';
        //  p.style
    } else {
        field.classList = 'invalid';
    }

}


inputs.forEach(input => {
    input.addEventListener('keyup', e => {
        // console.log(e.target.name);

        validate(e.target, patterns[e.target.name]);
    });
});