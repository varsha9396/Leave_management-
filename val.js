$(function()){
$("form[name='user']").validate({
rules: {
 dob1: "required",
 
 dob2:"required",
                dob2: {
					required:true,
                    greaterthen: "#dob1",
                },
 fname: "required",
  gender: {
            required: true,
          },
	'agree[]':{ required:true, },
'recv[]':{ required:true, },
 
 
},
messages:{
dob1: "*Enter valid date",
dob2: "Enter vaild date",
agree[]:"*mark i agree",
recv[]:"*tick as recieve",

},
  
     
})
})

