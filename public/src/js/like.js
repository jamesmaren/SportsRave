$('.like').on('click',function(event)
    {
        
     event.preventDefault();
     postid = event.target.parentNode.parentNode.dataset['postid'];
     var islike =event.target.previousElementSibling ==null;
       $.ajax ({
         method:'POST',
         url:urllike ,
         data: { islike: islike , postid: postid, _token: token}
       })
       .done(function()
      {

      }); 
 });