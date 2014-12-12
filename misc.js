// TYPEWRITER
(function typeWriter() {
	var str = 
	"<p>Hi<span>.</span> I'm James<span>.</span></p>",
	    i = 0,
	    isTag,
	    text; 

	(function type() {
	    text = str.slice(0, ++i);
	    if (text === str) return;

	    document.getElementById('type').innerHTML = text;

	    var char = text.slice(-1);
	    if( char === '<' ) isTag = true;
	    if( char === '>' ) isTag = false;

	    if (isTag) return type();
	    setTimeout(type, 50);
	}());
})();

// FADE IN
$( document ).ready(function() {
  $( ".about" ).delay(1200).fadeIn( 400 );
  $( ".homeGrid" ).delay(1400).fadeIn( 400 );
});