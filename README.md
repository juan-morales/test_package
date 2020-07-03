# PrettyPrint function

### `pp()`

## Composer package used to test package creation

This package has a function called `pp()` that basically adds a date-time prefix to the string that we want to print.

## Function declaration

`function pp(string $msg, bool $return = false)`

`string $msg`
- The message we want to print

`bool $return = false`
- When `true` then the function returns the composed message, otherwise just `echo`\`es the message
- False by default

## Examples

`pp("my sample message")`
