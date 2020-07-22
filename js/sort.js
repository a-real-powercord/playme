function reverse_by_urmum(parent){
    for(var i=1; i<parent.childNodes.length; i++){
        parent.insertBefore(parent.childNodes[i], parent.firstChild)
    }
}


function sort_by_urmum(type){
    var ordered_divs = $('.data-parent').sort(function(a, b){
        return String.prototype.localeCompare.call($(a).data(type).toLowerCase(),($(b).data(type).toLowerCase()))

    })
    return ordered_divs
    

}


$(document).on('click', '.heading', function(){
    var data_type = $(this).data('type')
    var sorted_divs = sort_by_urmum(data_type)
    var container = $('#container')
    container.empty().append(sorted_divs)
    if($(this).data("sort") == "desc"){
        $(this).data("sort", "asc")
        reverse_by_urmum(document.getElementById("container"))
    }
    else{
        $(this).data('sort', 'desc')
    }

})

document.getElementById("search-field").addEventListener("input", function(e){
    var bg_count = 0
    var input = $("#search-field").val().toLowerCase().trim()
    $('.data-parent').each(function(){
        if($(this).data("title").toLowerCase().includes(input) || $(this).data("artist").toLowerCase().includes(input) || $(this).data("genre").toLowerCase().includes(input)){
            $(this).show()
            if(bg_count % 2 == 0){
                $(this).css("background-color", "#e4e4e4")
            }
            else{$(this).css("background-color", "#ffffff")}
            bg_count ++
        }
        else{
            $(this).hide()
            
        }
        
    })

})
