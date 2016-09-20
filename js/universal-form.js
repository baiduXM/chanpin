   var element = $(".fv-as-description");
   var temp_description = element.text().replace(/\n/ig, '</p><p>').replace(/\r/ig, '</p><p>');
   $('.fv-as-description').html('<p>' + temp_description + '</p>');

    
