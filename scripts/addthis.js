(function(){

    var outer_div, inner_div, b, s1, s2;
    
    if (document.getElementById('image_title')){
        if (document.getElementById('link_bar_container')){
            //create outerdiv for links
            outer_div = document.createElement('div');
            outer_div.className = 'link_bar_link';
            outer_div.id = 'dpm-addthis';

            //create inner divs for links
            inner_div = document.createElement('div');
            inner_div.className = 'addthis_toolbox addthis_default_style';
            inner_div.innerHTML = '<a class="addthis_button_facebook"></a><a class="addthis_button_twitter"></a><a class="addthis_button_tumblr"><a class="addthis_button_pinterest"></a></a></a><a class="addthis_button_compact"></a>';

            //append inner div to outer div
            outer_div.appendChild(inner_div);

            //append the outer div to the link bar
            document.getElementById('link_bar_container').appendChild(outer_div);
            
            //get the body element of the body
            b = document.getElementsByTagName('body')[0];
            
            //addthis script needs two script elements, created below
            s1 = document.createElement('script');
            s1.type = 'text/javascript';
            s1.innerText = 'var addthis_config = {"data_track_addressbar":true};';

            s2 = document.createElement('script');
            s2.type = 'text/javascript';
            s2.src = '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-504dff595914e5c2';

            //append scripts to page
            b.appendChild(s1);
            b.appendChild(s2);
        }
    }
})();
