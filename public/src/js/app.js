import { ENGINE_METHOD_PKEY_ASN1_METHS } from "constants";

$('.post').find('.interaction').find('.edit').on('click',function(event)
{
    event.preventDefault();
      var postBody =event.target.parentNode.parentNode.childNodes[1].textContent;
      $('#post-Body').val(postBody);
    $('#edit-modal').modal();
    
});

$('.like').on('click',function(event)
    {
     event.preventDefault();
     postid = event.target.parentNode.parentNode.dataset['postid'];
     var islike =event.target.previousElementSibling ==null;
       $.ajax ({
         method='POST',
         url:urllike ,
         data: { islike: islike , postid: postid. _token:token}
       })
       .done(function()
      {

      });
 });