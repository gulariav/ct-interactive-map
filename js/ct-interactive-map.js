jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
    $("#im-inside-btn").click(function(){
	  $(".im-outside").hide();
	  $(".im-inside").show();
	  $( "#im-inside-btn" ).addClass( "active" );
	  $( "#im-outside-btn" ).removeClass( "active" );
	});

    $("#im-outside-btn").click(function(){
	  $(".im-outside").show();
	  $(".im-inside").hide();
	  $( "#im-outside-btn" ).addClass( "active" );
	  $( "#im-inside-btn" ).removeClass( "active" );
	});

} );