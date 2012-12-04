// Contact form ================================================================= */
switch ( language ) {
	case 'english':
		formParameters = {
			values: {
				fullName : 'Full Name *',
				phone : 'Phone Number',
				email : 'eMail Address',
				subject : 'Subject *',
				message : 'Your Message *'
			},
			alerts: {
				email : 'Please enter a valid email.',
				empty : 'Please fill out the highlighted fields.'
			},
			style: {
				direc : 'ltr',
				txtAlign : 'left'
			}
		}
	break;
	
	case 'farsi':
		formParameters = {
			values: {
				fullName : 'نام کامل *',
				phone : 'شماره تلفن',
				email : 'آدرس ایمیل',
				subject : 'موضوع *',
				message : 'پیام شما *'
			},
			alerts: {
				email : 'لطفا یک ایمیل معتبر وارد نمایید.',
				empty : 'لطفا فیلدهای مشخص شده را پر نمایید.'
			},
			style: {
				direc : 'rtl',
				txtAlign : 'right'
			}
		}
	break;
}

var vals = formParameters.values;
var alerts = formParameters.alerts;
var styles = formParameters.style;

var runEvent = {
	setContent : function( _this ) {
		switch( _this.id ){
			case 'fullname':
				fieldContent = vals.fullName;
			break;
			case 'phone':
				fieldContent = vals.phone;
			break;
			case 'email':
				fieldContent = vals.email;
			break;
			case 'subject':
				fieldContent = vals.subject;
			break;
			case 'message':
				fieldContent = vals.message;
			break;
			default:
				fieldContent = null;
		}
	},
	
	onFocus : function( _this ) {
		runEvent.setContent( _this );
		_this.value == fieldContent ? _this.value = '' : _this.value;
		changeColor( _this );
	},
	
	onBlur : function( _this ) {
		runEvent.setContent( _this );
		_this.value == '' ? _this.value = fieldContent : _this.value;
		backColor( _this );
	},
	
	direction : function( _this, _situation ) {
		if( _situation == 'back' ) {
			_this.style.direction = styles.direc;
			_this.style.textAlign = styles.txtAlign;
		}
		if ( _situation == 'change' ) {
			_this.style.direction = 'ltr';
	 		_this.style.textAlign = 'left';
		}
	}
}



// Contact form check =========================================================== */
function changeColor( _this ) {
	$( _this ).css({
		'color': '#FFF',
		'background-color': '#444',
	});
	if (   _this.id == 'fullname'
		|| _this.id == 'subject'
		|| _this.id == 'message' ) {
			
		document.getElementById('fields_error').innerHTML = '';
	}
}

function backColor( _this ) {
	if (   _this.value == vals.fullName 
		|| _this.value == vals.phone 
		|| _this.value == vals.email 
		|| _this.value == vals.subject 
		|| _this.value == vals.message ) {
		
		$( _this ).css({
			'color': '#CCC'
		});
	
	}
	
}

function backColorOnReset() {
	$( '#fullname, #phone, #email, #subject, #message, #department' ).css({
		'color': '#CCC',
		'background-color': '#444',
		'direction': styles.direc,
		'text-align': styles.txtAlign
	});
	document.getElementById('fields_error').innerHTML = '';
	document.getElementById('email_error').innerHTML = '';
}


// Contact form validation ====================================================== */
function checkFormValidation( _fields ) {
	_fullNameResult = checkEmpty( _fields.fullname, vals.fullName );
	_subjectResult = checkEmpty( _fields.subject, vals.subject );
	_messageResult = checkEmpty( _fields.message, vals.message );
	_emailResult = checkEmailValidation( _fields.email.value, alerts.email );
	
	if (   !_fullNameResult 
		|| !_subjectResult 
		|| !_messageResult ) {
			
		document.getElementById('fields_error').innerHTML = alerts.empty;
		return false;
	}
	
	if ( !_emailResult ) {
		return false;
	}
}

// check fields for empty
function checkEmpty( _value, _comparator ) {
	if ( _value.value == _comparator ) {
		$( '#' + _value.id ).css({
			'background-color': '#d12301',
			'color': '#FFF'
		});
		return false;
	} else {
		$( '#' + _value.id ).css({
			'background-color': '#444'
		});
		return true;
	}
}

// check email validation
function checkEmailValidation( _value, _message ) {
	
	if ( _value == vals.email ) {
		$('#email_error').css({
			'margin': '0'
		});
		document.getElementById('email_error').innerHTML = '';
		return true;
	}
	
	var _mailPattern = /^[A-Za-z0-9_\.]+@[A-Za-z0-9\.\-]+\.[A-Za-z]{2,6}$/;
	
	if ( _mailPattern.test( _value ) ) {
		document.getElementById('email_error').innerHTML = '';
		return true;
	} else {
		$('#email_error').css({
			'margin': '0 10px'
		});
		document.getElementById('email_error').innerHTML = _message;
		return false;
	}
}