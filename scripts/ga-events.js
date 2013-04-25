(function() {
    "use strict";
    //dynamically add a Google Event tracking event to a CDM download button

    //make sure that Google Analytics is loaded
    if (_gaq) {
        
        var sizes, p, url, item_id, title_div, item_title, dlb;
        
        //define download buttons for loop below
        sizes = ['dopt_small', 'dopt_medium', 'dopt_large', 'dopt_original'];
        
        //get item id from url
        p = /\/id\/([0-9]+)/;
        url = window.location.pathname;
        item_id = p.exec(url)[1];
        
        //or use title div
        title_div = document.getElementById('image_title');
        item_title = title_div.getElementsByTagName('h1')[0].innerHTML;
        item_title = item_title.replace(/ /g, '-');
        
        //test for document button
        if (document.getElementById('download_button')) {
            //loop through the button options
            for (i=0; i < sizes.length; i++) {
                dlb = document.getElementById(sizes[i]);
                //make sure that the button is active by checking its display state
                if (dlb.style.display !== 'none') {
                    //attach the event handler here
                    dlb.onclick = _gaq.push(['_trackEvent', 'Downloads', ' + item_id + ']);
                    }
                }
            }
        }
    }
}());
