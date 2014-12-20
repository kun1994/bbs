	$(document).ready(function(){
        $('#kaptchaImage').click(function () { $(this).hide().attr('src', 'http://manage.itcast.cn:8080/validatecode/job.jpg?' + Math.floor(Math.random()*100) ).fadeIn(); })
        $('#savebutton').click(function(){
        	var company = $("form[name='job'] input[name='company']").attr("value");
			var tel = $("form[name='job'] input[name='tel']").attr("value");
			var contact = $("form[name='job'] input[name='contact']").attr("value");
			var contactqq = $("form[name='job'] input[name='contactqq']").attr("value");
			var contactmobile = $("form[name='job'] input[name='contactmobile']").attr("value");
			var contactemail = $("form[name='job'] input[name='contactemail']").attr("value");
            var validatecode = $("form[name='job'] input[name='validatecode']").attr("value");
        	var content = $("form[name='job'] textarea[name='content']").attr("value");
			var note = $("form[name='job'] textarea[name='note']").attr("value");
            var site = $("form[name='job'] input[name='site']").attr("value");
            var address = $("form[name='job'] input[name='address']").attr("value");

			if($.trim(company)==""){
               alert("请输入公司名称");
			   return;
			}
			if($.trim(tel)==""){
               alert("请输入公司电话");
			   return;
			}
			if($.trim(contact)==""){
               alert("请输入联系人名称");
			   return;
			}
			if($.trim(contactmobile)==""){
               alert("请输入联系人手机");
			   return;
			}
			if($.trim(contactqq)==""){
               alert("请输入联系人QQ号");
			   return;
			}
			if($.trim(contactemail)==""){
               alert("请输入联系人Email");
			   return;
			}
			if($.trim(content)==""){
               alert("请输入招聘内容");
			   return;
			}
			if($.trim(validatecode)==""){
               alert("请输入验证码");
			   return;
			}
			if($.trim(note)==""){
               alert("请输入公司简介");
			   return;
			}

			$('#savebutton').attr("disabled","true");

			$.getJSON('http://manage.itcast.cn:8080/job/save.do?jsoncallback=?',
					{"company": company,"tel": tel,"contact":contact,"contactqq":contactqq,"contactmobile":contactmobile,"contactemail":contactemail,"validatecode":validatecode,"content":content,"note":note,"site":site,"address":address}, 
					function(obj){
						$('#dialog').dialog('destroy');
						if(obj.result==-1 || obj.result==0) {
							var msg = "数据输入不完整";
							if(obj.result==-1) msg = "验证码有误";
							$('#dialog').dialog({
								autoOpen: false,
								width: 300,
								title: '保存结果',
								open: function(event, ui) {
									$(this).html(msg);
								}
							});
							$('#dialog').dialog("open");//显示对话框	
							$('#savebutton').removeAttr("disabled");
						}else{
							$('#dialog').dialog({
								autoOpen: false,
								width: 300,
								title: '保存结果',
								open: function(event, ui) { //当对话框打开后,会触发该方法
									$(this).html("保存成功，我们的工作人员稍候将会通过电话与您核对招聘信息，谢谢!");
									$("form[name='job'] textarea[name='content']").attr("value","");
									$("form[name='job'] input[name='validatecode']").attr("value","");
									$('#kaptchaImage').attr('src', 'http://manage.itcast.cn:8080/validatecode/job.jpg?' + Math.floor(Math.random()*100) );
								}
							});//初始化对话框
							$('#dialog').dialog("open");//显示对话框
							$('#savebutton').removeAttr("disabled");
						}
						}
			   );
		});
    });
