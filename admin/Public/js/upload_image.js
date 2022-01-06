$('#file').on('change', function(e)
{
  var url = window.URL.createObjectURL(this.files[0])
  $('#img_new').attr('display' , 'inline');
  $('#img_new').attr('src' , url);
})
$("#form_file_upload").submit(function(e){
  e.preventDefault();
  var formObj = $(this);
  var formURL = formObj.attr("action");
  var formData = new FormData(this);
  $.ajax({
    url:formURL,
    type:'POST',
    data:formData,
    contentType:false,
    cache:false,
    progressData:false,
    enctype:"multipart/form-data",
    dataType:'json',
    beforeSend: function(){
      $('.submit').attr("disabled" ,"disabled");
      $('#submit').css("opacity" ,".5");
    },
    success:function(data){
      if(data.success) {
        alert(data.message);
      }else if(data.error){
        alert(data.error);
      }
      $('submit').removeAttr("disabled");
      $('#submit').css("opacity" ,"");
    }
  })
})