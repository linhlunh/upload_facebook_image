    function validation_date() {
        let day = $('#day').val();
        let month = $('#month').val();
        let year = $('#year').val();
        $('.day-value').each(function(key, e){
            $(e).show();
        });        
        switch(month){
            case '2':
            if(check_leap_year(year)){
                if(day > 29){
                    document.getElementById('day').value='29';
                }
                $('#day [value=30]').hide();
                $('#day [value=31]').hide();
            }else{
                if(day > 28){
                    document.getElementById('day').value='28';
                }
                $('#day [value=29]').hide();
                $('#day [value=30]').hide();
                $('#day [value=31]').hide();
            }

                break;
            case '4':
                remove_day_31();
                break;
            case '6':
                remove_day_31();
                break;
            case '9':
                remove_day_31();
                break;
            case '11':
                remove_day_31();
                break;
            default:
                break;

        }
        function remove_day_31(){
            if(day > 30){
                document.getElementById('day').value='30';
            }
             $('#day [value=31]').hide();
        }

        function check_leap_year(year){
            if(year === null | year === ''){
                return false;
            }
            if(year %4 == 0){
                if(year %100 == 0){
                    if(year %400 == 0){
                        return true;
                    }else{
                        return false;
                    }
                }
                return true;
            }else{
                return false
            }
        }
    }

    function validate_form() {
        let first_name = $('#first_name').val();
        let last_name = $('#last_name').val();
        let phone_number = $('#phone_number').val();
        let email = $('#email').val();
        let day = $('#day').val();
        let month = $('#month').val();
        let year = $('#year').val();
        let country = $('#country').val();

        let check = true;

        $('.error-message').remove();

        if(_empty(first_name)){
            $('#first_name').after('<span class="error-message">Vui lòng điền Họ của Quý khách</span>');
            check = false;
        }

        if(_empty(last_name)){
            $('#last_name').after('<span class="error-message">Vui lòng điền Đệm và tên của Quý khách</span>');
            check = false;
        }

        if(_empty(phone_number)){
            $('#phone_code').after('<span class="error-message">Vui lòng điền Số điện thoại của Quý khách</span>');
            check = false;
        }else{
            if (!(/^(9\d{8}|8\d{8}|7\d{8}|3\d{8}|5\d{8})$/.test(phone_number))) {
                    $('#phone_code').after('<span class="error-message">Số điện thoại của Quý khách nhập không đúng</span>');
                    check = false;
                }
        }

        if(_empty(email)){
            $('#email').after('<span class="error-message">Vui lòng điền Email của Quý khách</span>');
            check = false;
        }else{
            if (!(/^[a-zA-Z0-9_\.]{1,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4})$/.test(email))) {
                    $('#email').after('<span class="error-message">Email của Quý khách nhập không đúng</span>');
                    check = false;
                }
        }

        if(_empty(day) || _empty(month) || _empty(year)){
            $('#year').after('<span class="error-message">Vui lòng điền Ngày sinh của Quý khách</span>');
            check = false;
        }else{

        }

        if(_empty(country)){
            $('#country').after('<span class="error-message">Vui lòng điền Quốc tịch của Quý khách</span>');
            check = false;
        }

        return check;

    }
    function _empty(param) {
        return (param === '' || param === null);
    } 