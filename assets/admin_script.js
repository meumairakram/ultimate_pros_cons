

jQuery(function($) {
    console.log('hi');
        $('.upct_forms_function').submit(function(e) {
            e.preventDefault();
            var target = $(this).attr('data-target'); 
            
            if(target != undefined) {

                if(target == 'cons-box') {
                    var Cvalue = getTextAreaValue('add_cons');

                    if(Cvalue != '') {
                        var FinalString = '<li>'+Cvalue+'</li>';
                        
                        addToBoxState('#added_cons',FinalString);

                        jQuery('#add_cons').val('');
                    }
                } else if(target == 'pros-box') {
                    var Cvalue = getTextAreaValue('add_pros');

                    if(Cvalue != '') {
                        var FinalString = '<li>'+Cvalue+'</li>';
                        
                        addToBoxState('#added_pros',FinalString);

                        jQuery('#add_pros').val('');
                    }
                }


            }


        });
    }(jQuery));



    function getTextAreaValue(tid) {

        return jQuery('#'+tid).val();

    }


    function addToBoxState(boxName,StrToAdd) {

        jQuery(boxName).append(jQuery(StrToAdd));

        return true;
    }

    // generateShortCode(Pros Box Id, Cons Box Id,)

    function generateShortCode(prosBox,consBox) {

        if(!jQuery(prosBox).children('li').length > 0 && !jQuery(consBox).children('li').length > 0 )  { return false; }

        var allPros = jQuery(prosBox).children('li');
        var allCons = jQuery(consBox).children('li');

        var output = '';

        output += '[upctTable]';
        
        // adding pros
        output += '[upct_pros]';

        for(var i = 0;i < allPros.length;i++) {
                output += '[upct_list_item]';

                output += jQuery(allPros[i]).html();

                output += '[/upct_list_item]';

        }

        output += '[/upct_pros]';


        // adding cons
        output += '[upct_cons]';

        for(var i = 0;i < allCons.length;i++) {
                output += '[upct_list_item]';

                output += jQuery(allCons[i]).html();

                output += '[/upct_list_item]';

        }

        output += '[/upct_cons]';


        output += '[/upctTable]';


        console.log(output);

        jQuery('#shortcode_container').html(output);
    }


