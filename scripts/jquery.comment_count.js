$(function(){
    //see if search results wrapper div is on page
    if ($('#cdmResultsBrowseAllItemsView')){
        //define variables
        var links, comments_url, item_id, coll_id;
        //loop through each link in the result set
        $('.listContentTopBottomAlign a').each(function(i){
            //pass off jquery object to variable
            var item = $(this);
            //get item and collection id from link attributes
            item_id = item.attr('item_id');
            coll_id = item.attr('itemcoll');
            //define url for calling out to getitemcomments function
            comments_url = '/utils/getitemcomments/collection' + coll_id + '/id/' + item_id;
            //go get the JSON
            $.getJSON(comments_url, function(data){
                //if item has comments then append to element
                if (data.count > 0){
                    item.parents('.listItem').append('<div class="dpm-comment-count"><i class="icon-2 ui-icon-comment"></i>' + data.count + '</div>');
                }
            });
        });   
    }
})();
