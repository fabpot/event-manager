Syntax:<br \>
string_expression [NOT] LIKE pattern_value [ESCAPE escape_character]
<br \>

<br \>
The string_expression must have a string value. The pattern_value is a string literal or a string-valued
input parameter in which an underscore (_) stands for any single character, a percent (%) character
stands for any sequence of characters (including the empty sequence), and all other characters stand for
themselves. The optional escape_character is a single-character string literal or a character-valued
input parameter (i.e., char or Character) and is used to escape the special meaning of the underscore
and percent characters in pattern_value.
<br \><br \>
Examples:
<br \>
<ul>
<li \>address.phone LIKE �12%3� is true for '123' '12993' and false for '1234'
<li \>asentence.word LIKE �l_se� is true for �lose� and false for 'loose'
<li \>aword.underscored LIKE �\_%� ESCAPE '\' is true for '_foo' and false for 'bar'
<li \>address.phone NOT LIKE �12%3� is false for '123' and '12993' and true for '1234'
</ul>
<br \>
If the value of the string_expression or pattern_value is NULL or unknown, the value of the LIKE
expression is unknown. If the escape_characteris specified and is NULL, the value of the LIKE expression
is unknown.