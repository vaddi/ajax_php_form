$(function() {
    // event for form by id
    $("#formtest").submit(function(e) {

        // prevent Default
        e.preventDefault();

        // get form attribute or set default value if not set
        var actionurl = ( e.currentTarget.action !== undefined || e.currentTarget.action !== "" ) ? e.currentTarget.action : window.location; // default action
				var method = ( e.currentTarget.method !== undefined || e.currentTarget.method !== "" ) ? e.currentTarget.method : 'post'; // default method
				var datatype = ( e.currentTarget.datatype !== undefined || e.currentTarget.datatype !== "" ) ? e.currentTarget.datatype : 'json'; // default data type
				
        // do the request
        $.ajax({
                url: actionurl,
                type: method,
                dataType: datatype,
                data: $("#formtest").serialize(),
                success: function( data ) {
                	// handle the results
									var erg = "Response: <br />";
                  $.each( data, function( key, value ) {
										erg += key + ": " + value + "<br />";
									});
                  $("#result").html( erg )
                  	.fadeIn(300)
                  	.delay(10000)
                  	.fadeOut("slow");
                },
                fail: function( err ) {
                	// View the error dump
                	console.dump( err );
                }
        });

    });

});
