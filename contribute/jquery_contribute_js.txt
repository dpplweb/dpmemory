$(function(){
    //set up, read agreement cookie and hide/show form accordingly
    var cookie = readCookie('upload-agreement');
    
    $('#disagreement').hide();
    
    if (cookie){
        $('#terms').hide();
        $('#form').show();
    }
    else{
        $('#form').hide();
    }
    
    $('.close').click(function(){
        $(this).parents('.modal-backdrop').fadeOut();
        return false;
    });
    
    $('.agree').click(function(){
        var agree = $(this).attr('data-agreement');
        switch (agree){
            case 'no':
                $('#disagreement').show(); 
                break;
            case 'yes':
                createCookie('upload-agreement', 'yes', 60);
                $('#terms').hide();
                $('#form').show();
                break;
        }
        return false;
    });
    $('.date-input').change(function(){
        var y = $('#date-year').val();
        var m = $('#date-month').val();
        var d = $('#date-day').val();
        
        y = checkYear(y);
        m = checkMonth(m);
        d = checkDay(d);
        
        $('#date').val((y.length != 0?y:'0000') + '-' + (m.length != 0?formatNumber(m):'00') + '-' + (d.length != 0?formatNumber(d):'00'));
        $('#preview-date').html($('#date').val());
    });
    
    $('.preview').change(function(){
        $('#preview-' + $(this).attr('name')).html($(this).val());
    });
    
    $('#CISOBROWSE').change(function(e){
		e = e.originalEvent;
		e.stopPropagation();
		e.preventDefault();
		
		if (this.files){
		    var files = this.files;
		    var count = files.length;
		
		    if (count > 0){
			    var file = files[0];
			    var reader = new FileReader();
			    reader.onload = function(e){
				    $('#preview-image').attr('src', e.target.result).parent().parent().fadeIn();
			    };
			    reader.readAsDataURL(file);
		    }
	    }
	});
	
	$('#cdmWebAddForm').validate({
	    invalidHandler: function(form, validator) {
		      var errors = validator.numberOfInvalids();
		      if (errors) {
			    var message = errors == 1 ? 'You missed 1 field. It has been highlighted': 'You missed ' + errors + ' fields. They have been highlighted';
			    $('div.errors').html(message);
			    $('div.errors').show();
		      } else {
			    $('div.errors').hide();
		      }
	    },
	    submitHandler: function(form){
	        form.submit();
	    }
    });

    function checkYear(v){
        var p = /\d{4}/;
        if (isNumeric(v) == false){
            return '0000';
        }
        if (p.test(v) == false){
            return '0000';
        }
        else{
            return v;
        }
    }

    function checkMonth(v){
        if (isNumeric(v) == false){
            return findMonth(v);
        }
        else{
            if (isValidValue(v, 12) == false){
                return '00';
            }
            else{
                return v;
            }
        }
    }

    function findMonth(v){
        var months = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];
        v = v.toLowerCase();
        for (i = 0; i < months.length; i++){
            if (v == months[i]){
               //if a match is found then exit from loop
               return (i + 1).toString();
            }
        } 
        return '00';
    }



    function checkDay(v){
        if (isNumeric(v) == false){
            return '00';
        }
        else{
            if (isValidValue(v, 31) == false){
                return '00';
            }
            else{
                return v;
            }
        }
    }


    function isNumeric(v){
        var p = /\d+/;
        return p.test(v);
    }

    function isValidValue(v, l){
        if (parseInt(v) <= l){
            return true;
        }
        else{
            return false;
        }
    };

    function formatNumber(v){
        if (v.length == 1){
            return '0' + v;
        }
        else{
            return v;
        }
    };

    function createCookie(name,value,days) {
        if (days) {
	        var date = new Date();
	        date.setTime(date.getTime()+(days*24*60*60*1000));
	        var expires = "; expires="+date.toGMTString();
        }
        else expires = "";

        document.cookie = name+"="+value+expires+"; path=/";
    };

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' '){ c = c.substring(1,c.length)};
	            if (c.indexOf(nameEQ) == 0){ return c.substring(nameEQ.length,c.length)};
        }

        return null;
    };

});
