function ResponsiveNav() {
    var x = document.getElementById("topNavID");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

$(document.body).on("click", "#signup-avatar", function(event) {
    event.preventDefault()
    // var input = $(this).attr("data-id")
    $("#profile-image-change-button").trigger('click');
})

function readImageURL(input) {
        console.log("Get create image")
        // $('#imagearray-create').html('');
    if (input.files) {
        // imageTabsDiv = document.getElementById('imagearray-create')
            
        console.log("Files", input.files)
        var reader = new FileReader();
        reader.onload = function (e) {
        	console.log(e.target.result)
            document.getElementById("signup-avatar").src =e.target.result
        };
        reader.readAsDataURL(input.files[0]);
    }
}