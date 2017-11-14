<?php
class HenryExtension {

	// Register any render callbacks with the parser
    public static function onParserSetup( &$parser ) {

    	// Create a function hook associating the "HenryExtension" magic word with render()
    	$parser->setFunctionHook( 'henry', 'HenryExtension::render' );
    }

    // Render the output of {{#henry:}}.
    public static function render( $parser, $param1 = '', $param2 = '', $param3 = '' ) {
   		
   		// The input parameters are wikitext with templates expanded.
      	// The output should be wikitext too.
   		$output = "param1 is $param1 and param2 is $param2 and param3 is $param3";

   		return $output;
    }

}
