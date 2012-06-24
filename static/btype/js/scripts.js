$(document).ready(function() {
    
    var counter = 0;
    var number_correct = 0;
    
    $('#hint').click(function (e) {
        var ans = $('#question').attr('value');
        var letter_list = $('.letter_image');
        var r = null;
        var i = 0;
        while (i < 2) {
            r = Math.floor(Math.random()*3);
            if(($(letter_list[r]).attr('value') != ans) && ($(letter_list[r]).css('visibility') != 'hidden')) {
                $(letter_list[r]).css('visibility', 'hidden');
                i++;
            }
        }
        $(this).fadeOut('100');
    });

    $(".letter_image").click(function (e) { 
        var form = $('#game_display');
        $('.wrong_choice_container').remove();
        form.css("visibility","hidden").before('<img src="/static/btype/img/loading.gif" alt="Loading" id="loading" />');
        // Check answer and update appropriate values.
        var answer = $('#question').attr('value');
        var chosen = $(this).attr('value');
        var correct = false;

        if(chosen == answer) {            
            correct = true;
            number_correct = $('#number_correct').text();
            number_correct++;
            $('#score').removeClass("red-border");
            $('#score').addClass("green-border");
        } else {
             $('#score').addClass("red-border");
        }
        
        $('#number_correct').text(number_correct);

        // Write new counter.
        counter++;
        var score = $('#number_tried').text("of " + counter + " correct.");
        
        // Write last correct typeface. Split out.
        var last_img_src = $('input[value*="' + answer + '"]').attr('src');
        var last_img_value = $('input[value*="' + answer + '"]').attr('value'); 

        if(correct) {
        var last_img = "<div class='last_choice_container'><div class='last_choice_img_cont'><img class='letter_img' src='" + last_img_src + "' height='100px' value='" + last_img_value + "' /></div><div class='last_choice_name'>"+last_img_value+"</div></div>";

            last_img = $(last_img).hide();
            last_img.insertAfter($('#score')).slideDown('100');
            var list_last_img = $("#right_sidebar_container").find(".last_choice_container");
            if(list_last_img.length > 4) {
                $(list_last_img[4]).slideUp('100');
            }
        } else { //write wrong box
            var chosen_img_src = $('input[value*="' + chosen + '"]').attr('src');
            var chosen_img_value = $('input[value*="' + chosen + '"]').attr('value');
            var last_img = "<div class='wrong_choice_container'><div class='wrong_choice_img_cont'>You chose: "+chosen+"<br /><img class='letter_img' src='" + chosen_img_src + "' height='100px' value='" + chosen_img_value + "' /></div><br />";
            last_img+="<div class='wrong_choice_img_cont'>"+answer+" was correct.<br /><img class='letter_img' src='" + last_img_src + "' height='100px' value='" + last_img_value + "' />";
            
            
            last_img = $(last_img).hide();
            last_img.insertBefore('#hack').show();
            last_img.slideDown();
        }

        // Make GET call.
        // This has got to be changed back to live.
       var args = { type:"GET", url:"/typefaces/",  complete:handleResponse };

//        var args = { type:"GET", url:"/",  complete:handleResponse};
        $.ajax(args);
        e.preventDefault();

    });


    //Handle server return.
    var handleResponse = function(res, status) {
        if (status == "success") {
            // Replace source and values of images
            var letter_list = $(".letter_image");
            var i = 0; 
            var img_array = new Array();
            var value_array = new Array();

            // Build array for callback
            $(res.responseText).find(".letter_image").each(function() {
                img_array[i] = $(this).attr('src');
                value_array[i] = $(this).attr('value');
               i++;
            });
            
            new_answer = $(res.responseText).find('#question').attr('value');
            
            // Replace question
            $('h3').text("Choose " + new_answer + ":");
            $('#hint').show();
            
            // And the new answer
            $('#question').attr('value', new_answer);
            loadImages(img_array, function() {
                gameDisplayCallback(img_array, value_array);
            });
            
        } else {

        }
    }

var gameDisplayCallback = function(img_array, value_array) {
        var letter_list = $('.letter_image');
        var i = 0;
        letter_list.each(function() {
            $(letter_list[i]).attr('src', img_array[i]);
            $(letter_list[i]).attr('value', value_array[i]);
            $(letter_list[i]).css('visibility','');
            i++;
        });
        $('#loading').remove();
        $('#game_display').css('visibility','visible');
   } 
});

/*
 * Wait for all images to load
 *
 */
var loadImages = function(imgArr, callback) {
    //Keep track of the images that are loaded
    var imagesLoaded = 0;
    function _loadAllImages(callback){
        //Create an temp image and load the url
        var img = new Image();
        $(img).attr('src',imgArr[imagesLoaded]);
        if (img.complete || img.readyState === 4) {
            // image is cached
            imagesLoaded++;
            //Check if all images are loaded
            if(imagesLoaded == imgArr.length) {
                callback();
            } else {
                //If not all images are loaded call own function again
                _loadAllImages(callback);
            }
        } else {
            $(img).load(function(){
                //Increment the images loaded variable
                imagesLoaded++;
                //Check if all images are loaded
                if(imagesLoaded == imgArr.length) {
                    //If all images loaded do the callback
                    callback();
                } else {
                    //If not all images are loaded call own function again
                    _loadAllImages(callback);
                }
            });
        }
    };      
    _loadAllImages(callback);
}

