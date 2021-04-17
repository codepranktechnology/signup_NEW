$( document ).ready( function () {
  $( "#notification" ).hide();
  $( "#submitEmail" ).on( 'click', function () {
    var emailName = $( "#emailName" ).val();
    if ( emailName != '' ) {
      var sendInfo = JSON.stringify( { "emailName": emailName } );
      $.ajax( {
        url: "main.php",
        type: "POST",
        data: sendInfo,
        contentType: "application/json; charset=utf-8",
        async: false,
        success: function ( response ) {
          console.log( response );
          $( "#notification" ).removeClass( "d-none" );
          $( "#success" ).removeClass( "d-none" );
          setTimeout( function () {
            $( "#notification" ).addClass( "d-none" );
            $( "#success" ).addClass( "d-none" );
            $( "#emailName" ).val( '' )
          }, 3000 );
        },
        error: function ( request, status, error ) {
          console.log( request + "<=>" + status + "<=>" + error );
        },
        complete: function () {
        }
      } );
    } else {
      $( "#notification" ).removeClass( "d-none" );
      $( "#emailFail" ).removeClass( "d-none" );
      setTimeout( function () {
        $( "#notification" ).addClass( "d-none" );
        $( "#emailFail" ).addClass( "d-none" );
      }, 1000 );
    }
  } );
} );