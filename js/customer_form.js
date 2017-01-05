function counselSubmit() {
	if (!$.trim($('#tblStrName').val()))
	{
		alert('성명은 필수항목입니다.');
		$('#tblStrName').focus();
		return false;
	}
	if (!$.trim($('#tblStrMobile').val()))
	{
		alert('핸드폰 번호는 필수항목입니다.');
		$('#tblStrMobile').focus();
		return false;
	}
	if (!$('#tblIntField1').val())
	{
		alert('상담부위는 필수항목입니다.');
		$('#tblIntField1').focus();
		return false;
	}
	if (!$('#tblIntField2').val())
	{
		alert('상담부위는 필수항목입니다.');
		$('#tblIntField2').focus();
		return false;
	}
}

function kakaoSubmit() {
	if ($('#agree').is(":checked") == false)
	{
		alert('개인정보 수집·이용 동의하셔야 합니다.');
		return false;
	}
	if (!$.trim($('#tblStrName').val()))
	{
		alert('성명은 필수항목입니다.');
		$('#tblStrName').focus();
		return false;
	}
	if (!$.trim($('#tblStrMobile').val()))
	{
		alert('핸드폰 번호는 필수항목입니다.');
		$('#tblStrMobile').focus();
		return false;
	}
}