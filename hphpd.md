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
