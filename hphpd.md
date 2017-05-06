# HPHPD

`hphpd` is the Hack interactive debugger.

## Help

Access the help:

    $ hhvm help

## Start the debugger

Run the REPL:

    $ hhvm -m debug

Debug a local script:

    $ hhvm -m debug script.php

Debug on a remote server:

    $ hhvm -m debug -h remote.com

You can also connect from within the `hphpd` session:

    hphpd> machine connect remote.com

## Breakpoints

Set a breakpoint at line 10:

    hphpd> [b]reak script.php:10

Set a breakpoint at a function:

    hphpd> [b]reak foo()

List all breakpoints:

    hphpd> [b]reak [l]ist

Clear the breakpoint at the listed index:

    hphpd> [b]reak [c]lear index

Clear all breakpoints:

    hphpd> [b]reak [c]lear
