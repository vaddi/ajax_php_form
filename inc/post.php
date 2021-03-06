<?php

if( isset( $_REQUEST ) ) { $request = $_REQUEST; } else { $request = null; }

$erg = array();

// Parsing request data to erg array
if( $request !== null ) {
	if( is_array( $request ) ) {
		foreach ( $request as $id => $tupil ) {
			if( is_array( $tupil ) ) {
				foreach ( $tupil as $key => $value ) {
					$erg[ $key ] = $value;
				}
			} else if( is_numeric( $tupil ) || is_bool( $tupil ) || is_string( $tupil ) ) {	
				$erg[ $id ] = $tupil;
			} 
		}
	} 
	
}

// set json header
// THIS NEED TO BE VALIDATED IF SET Access-Control-Allow-Origin to * (token, pubkey, etc)
//header( 'Access-Control-Allow-Origin: *' ); // neccessary if called from cross domain
header( 'Cache-Control: no-cache, must-revalidate' );
header( 'Expires: ' . expireDate() );
header( 'Content-type: application/json; charset=UTF-8' );
print_r( json_encode( $erg ) );


// Helper functions

function germanDay( $day = null, $format = null ) {
	// get Weekday from number 
	// 0 = Sunday
	// 1 = Monday
	// 2 = Tuesday
	// 3 = Wednesday
	// 4 = Thursday
	// 5 = Friday
	// 6 = Saturday
	
	if( $day === null ) $day = date( "w" );
	if( $day < 0 || $day > 6 ) return;
	if( $format === null ) $format = 's'; // s = Short, l = Long, m = Middle
	
	switch( $day ) {
		case 'Su' || 'Sun' || '0':
			$short = 'So';
			$midd = 'Son';
			$long = 'Sonntag';
		break;
		case 'Mo' || 'Mon' || '1':
			$short = 'Mo';
			$midd = 'Mon';
			$long = 'Montag';
		break;
		case 'Tu' || 'Tue' || '2':
			$short = 'Di';
			$midd = 'Die';
			$long = 'Dienstag';
		break;
		case 'We' || 'Wed' || '3':
			$short = 'Mi';
			$midd = 'Mit';
			$long = 'Mittwoch';
		break;
		case 'Th' || 'Thu' || '4':
			$short = 'Do';
			$midd = 'Don';
			$long = 'Donnerstag';
		break;
		case 'Fr' || 'Fri' || '5':
			$short = 'Fr';
			$midd = 'Fre';
			$long = 'Freitag';
		break;
		case 'Sa' || 'Sat' || '6':
			$short = 'Sa';
			$midd = 'Sam';
			$long = 'Samstag';
		break;
		default :
			$short = 'So';
			$midd = 'Son';
			$long = 'Sonntag';
		break;		
	}
	if( $format === 's' ) return $short;
	if( $format === 'm' ) return $midd;
	if( $format === 'l' ) return $long;
}

function germanMonth( $month = null, $format = null ) {
	if( $month === null ) $month = date( 'm' );
	if( $format === null ) $format = 'm';
	$month = date( "F", mktime( 0, 0, 0, $month, 10 ) );
	if( $format === 's' ) return substr( $month, 0, 2 );
	if( $format === 'm' ) return substr( $month, 0, 3 );
	if( $format === 'l' ) return $month;
}

function expireDate() {
	return germanDay() . ", " . date( 'd' ) . " " . germanMonth() . " " . date( 'Y' ) . " " . ( ( date( 'H' ) +1 ) < 10 ? '0' . ( date( 'H' ) +1 ) : ( date( 'H' ) +1 ) ) . ":00:00 GMT";
}

?>
